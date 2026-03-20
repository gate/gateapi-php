# GateApi\DefaultApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyActivityEntry**](DefaultApi.md#getMyActivityEntry) | **GET** /rewards/activity/my-activity-entry | My activity entry
[**listActivities**](DefaultApi.md#listActivities) | **GET** /rewards/activity/activity-list | Recommended activity list
[**listActivityTypes**](DefaultApi.md#listActivityTypes) | **GET** /rewards/activity/activity-type | Activity type list


## getMyActivityEntry

> \GateApi\Model\InlineResponse20012 getMyActivityEntry()

My activity entry

Query user's Activity Center entry information, including activity icon and redirect link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyActivityEntry();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyActivityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listActivities

> \GateApi\Model\InlineResponse20013 listActivities($recommend_type, $type_ids, $keywords, $page, $page_size, $sort_by)

Recommended activity list

Query recommended activity list from Activity Center, supports pagination and sorting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['recommend_type'] = 'recommend_type_example'; // string | Recommendation type: hot for popular activities, type for filtering by activity type (type_ids), scenario for matching by activity name
$associate_array['type_ids'] = 'type_ids_example'; // string | Activity type ID, multiple IDs separated by commas (supports filtering by activity type through this field)
$associate_array['keywords'] = 'keywords_example'; // string | Activity name. When scenario type is used, keyword matching is applied
$associate_array['page'] = 1; // int | Page number, starting from 1
$associate_array['page_size'] = 10; // int | Items per page
$associate_array['sort_by'] = 'sort_by_example'; // string | Sort order, e.g., hot for sorting by popularity

try {
    $result = $apiInstance->listActivities($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommend_type** | **string**| Recommendation type: hot for popular activities, type for filtering by activity type (type_ids), scenario for matching by activity name | [optional]
 **type_ids** | **string**| Activity type ID, multiple IDs separated by commas (supports filtering by activity type through this field) | [optional]
 **keywords** | **string**| Activity name. When scenario type is used, keyword matching is applied | [optional]
 **page** | **int**| Page number, starting from 1 | [optional] [default to 1]
 **page_size** | **int**| Items per page | [optional] [default to 10]
 **sort_by** | **string**| Sort order, e.g., hot for sorting by popularity | [optional]

### Return type

[**\GateApi\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listActivityTypes

> \GateApi\Model\InlineResponse20014 listActivityTypes()

Activity type list

Query all activity types supported by Activity Center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listActivityTypes();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActivityTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

