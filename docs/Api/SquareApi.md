# GateApi\SquareApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSquareAiSearch**](SquareApi.md#listSquareAiSearch) | **GET** /social/message/search | AI MCP Dynamic Search
[**listLiveReplay**](SquareApi.md#listLiveReplay) | **GET** /social/live/tag_coin_live_replay | Gate AI Assistant live stream data retrieval


## listSquareAiSearch

> \GateApi\Model\InlineResponse2009 listSquareAiSearch($keyword, $currency, $time_range, $sort, $limit, $page)

AI MCP Dynamic Search

Dynamic search endpoint for AI MCP platform. All parameters are passed via query string. Returns simplified fields. Designed for LLM function calling / MCP tool scenarios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SquareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['keyword'] = 'keyword_example'; // string | Search keyword (currency name or content keyword, e.g., BTC, ETH)
$associate_array['currency'] = 'currency_example'; // string | Filter by currency (exact currency code, e.g., BTC, ETH, SOL)
$associate_array['time_range'] = 0; // int | Time range: 0 = unlimited (default), 1 = last day, 2 = last week, 3 = last month
$associate_array['sort'] = 0; // int | Sort order: 0 = most popular (default), 1 = latest
$associate_array['limit'] = 10; // int | Return count, 1-50, default 10
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listSquareAiSearch($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SquareApi->listSquareAiSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| Search keyword (currency name or content keyword, e.g., BTC, ETH) | [optional]
 **currency** | **string**| Filter by currency (exact currency code, e.g., BTC, ETH, SOL) | [optional]
 **time_range** | **int**| Time range: 0 &#x3D; unlimited (default), 1 &#x3D; last day, 2 &#x3D; last week, 3 &#x3D; last month | [optional] [default to 0]
 **sort** | **int**| Sort order: 0 &#x3D; most popular (default), 1 &#x3D; latest | [optional] [default to 0]
 **limit** | **int**| Return count, 1-50, default 10 | [optional] [default to 10]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLiveReplay

> \GateApi\Model\InlineResponse20010 listLiveReplay($tag, $coin, $sort, $limit)

Gate AI Assistant live stream data retrieval

AI assistant live stream/replay search endpoint. Filters live rooms or replay videos by business tags and currency. Each record in the returned list is distinguished by content_type: streaming = live broadcast (live field has value), video = replay video (video field has value). The number of results is controlled by the limit parameter (max 10), no additional pagination needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SquareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['tag'] = 'tag_example'; // string | Business type filter. Available values: Market Analysis, Hot Topics, Blockchain, Others
$associate_array['coin'] = 'coin_example'; // string | Filter by currency name (e.g., BTC, ETH)
$associate_array['sort'] = 'hot'; // string | Sort order: hot = most popular (default), new = latest
$associate_array['limit'] = 3; // int | Return count, 1-10, default 3

try {
    $result = $apiInstance->listLiveReplay($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SquareApi->listLiveReplay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **string**| Business type filter. Available values: Market Analysis, Hot Topics, Blockchain, Others | [optional]
 **coin** | **string**| Filter by currency name (e.g., BTC, ETH) | [optional]
 **sort** | **string**| Sort order: hot &#x3D; most popular (default), new &#x3D; latest | [optional] [default to &#39;hot&#39;]
 **limit** | **int**| Return count, 1-10, default 3 | [optional] [default to 3]

### Return type

[**\GateApi\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

