<?php
/** Exercise the generated package's own nullable models, without exchange IO. */

use PHPUnit\Framework\TestCase;

final class RequiredNullableTest extends TestCase
{
    /** Obtain the generated namespace/path instead of assuming a package identity. */
    private function package()
    {
        $composer = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
        foreach ($composer['autoload']['psr-4'] as $namespace => $path) {
            return [$namespace, __DIR__ . '/../' . $path];
        }
        self::fail('Generated package autoload mapping is missing');
    }

    /** Required-nullable fields must distinguish absence from an explicit null. */
    public function testEveryRequiredNullableFieldPreservesPresence()
    {
        [$namespace, $source] = $this->package();
        $serializer = $namespace . 'ObjectSerializer';
        $checked = 0;
        foreach (glob($source . '/Model/*.php') as $file) {
            $class = $namespace . 'Model\\' . basename($file, '.php');
            if (!method_exists($class, 'openAPIRequiredNullable')) {
                continue;
            }
            foreach ($class::openAPIRequiredNullable() as $property => $nullable) {
                $wire = $class::attributeMap()[$property];
                $getter = $class::getters()[$property];
                $setter = $class::setters()[$property];
                $model = new $class([$property => null]);
                $enumValues = $getter . 'AllowableValues';
                if (method_exists($model, $enumValues)
                    && substr($class::openAPITypes()[$property], -2) !== '[]'
                    && !in_array(null, $model->$enumValues(), true)) {
                    // nullable does not add a missing member to an explicit scalar enum.
                    continue;
                }
                self::assertNull($model->$getter(), $class . '.' . $property);
                self::assertTrue($model->isRequiredNullableSet($property));
                foreach ($model->listInvalidProperties() as $error) {
                    // Other required siblings may be absent in this focused fixture.
                    self::assertStringNotContainsString("'" . $property . "'", $error);
                }
                $model->$setter(null);
                $encoded = $serializer::sanitizeForSerialization($model);
                self::assertTrue(property_exists($encoded, $wire));
                self::assertNull($encoded->$wire);

                unset($model[$property]);
                self::assertFalse($model->isRequiredNullableSet($property));
                self::assertFalse(property_exists($serializer::sanitizeForSerialization($model), $wire));
                $errors = implode('\n', $model->listInvalidProperties());
                self::assertStringContainsString("'" . $property . "' must be present", $errors);

                $response = $serializer::deserializeResponse(json_encode([$wire => null]), $class);
                self::assertTrue($response->isRequiredNullableSet($property));
                self::assertNull($response->$getter());
                $missing = $serializer::deserializeResponse('{}', $class);
                self::assertFalse($missing->isRequiredNullableSet($property));
                $checked++;
            }
        }
        if ($checked === 0) {
            self::markTestSkipped('This generated contract has no applicable required-nullable fields');
        }
        self::assertGreaterThan(0, $checked);
    }
}
