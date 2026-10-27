<?php
/** Shared serializer invariants; no API credentials, sockets, or exchange calls. */

use PHPUnit\Framework\TestCase;

final class SerializerTest extends TestCase
{
    /** Locate the generated package's own namespace without hard-coding GateApi. */
    private function serializer()
    {
        $composer = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
        foreach ($composer['autoload']['psr-4'] as $namespace => $path) {
            $class = $namespace . 'ObjectSerializer';
            if (class_exists($class)) {
                return $class;
            }
        }
        self::fail('Generated serializer autoload mapping is missing');
    }

    public function testGenericJsonValuesRetainTheirShape()
    {
        $serializer = $this->serializer();
        $actual = $serializer::deserialize('{"text":"api","integer":17,"empty":{},"list":[1,2],"nil":null}', 'object');
        self::assertInstanceOf(stdClass::class, $actual);
        self::assertSame('api', $actual->text);
        self::assertSame(17, $actual->integer);
        self::assertInstanceOf(stdClass::class, $actual->empty);
        self::assertSame([1, 2], $actual->list);
        self::assertNull($actual->nil);
        self::assertSame('0.123456789012345678', $serializer::deserialize('0.123456789012345678', 'string'));
    }

    public function testJsonAndNonJsonStringsUseTheirOwnProtocol()
    {
        $serializer = $this->serializer();
        self::assertSame('value', $serializer::deserializeResponse('"value"', 'string', ['Content-Type' => ['application/json']]));
        self::assertSame('"literal"', $serializer::deserializeResponse('"literal"', 'string', ['Content-Type' => ['text/plain']]));
        self::assertNull($serializer::deserializeResponse('', 'object', ['Content-Type' => ['application/json']]));
    }

    public function testMalformedJsonDoesNotBecomeAnEmptyModel()
    {
        $serializer = $this->serializer();
        $this->expectException(JsonException::class);
        $serializer::deserializeResponse('{broken', 'object', ['Content-Type' => ['application/json']]);
    }
}
