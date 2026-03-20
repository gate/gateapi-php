# GateApi\LaunchApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLaunchPoolProjects**](LaunchApi.md#listLaunchPoolProjects) | **GET** /launch/project-list | Query LaunchPool project list
[**createLaunchPoolOrder**](LaunchApi.md#createLaunchPoolOrder) | **POST** /launch/create-order | Create LaunchPool staking order
[**redeemLaunchPool**](LaunchApi.md#redeemLaunchPool) | **POST** /launch/redeem | Redeem LaunchPool staked assets
[**listLaunchPoolPledgeRecords**](LaunchApi.md#listLaunchPoolPledgeRecords) | **GET** /launch/user-pledge-records | Query user pledge records
[**listLaunchPoolRewardRecords**](LaunchApi.md#listLaunchPoolRewardRecords) | **GET** /launch/get-user-reward-records | Query user reward records


## listLaunchPoolProjects

> \GateApi\Model\LaunchPoolV4Project[] listLaunchPoolProjects($status, $mortgage_coin, $search_coin, $limit_rule, $sort_type, $page, $page_size)

Query LaunchPool project list

Retrieve the list of available LaunchPool projects, including basic project information and reward pool configuration. This endpoint does not require user authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['status'] = 56; // int | Filter by project status: 0 for all, 1 for ongoing, 2 for warming up, 3 for ended, 4 for ongoing and warming up
$associate_array['mortgage_coin'] = 'mortgage_coin_example'; // string | Exact match by staking currency
$associate_array['search_coin'] = 'search_coin_example'; // string | Fuzzy match by reward currency and name
$associate_array['limit_rule'] = 56; // int | Limit rule: 0 for regular pool, 1 for beginner pool
$associate_array['sort_type'] = 56; // int | Sort type: 1 for max APR descending, 2 for max APR ascending
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['page_size'] = 10; // int | Number of items per page, default 10, maximum 30

try {
    $result = $apiInstance->listLaunchPoolProjects($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->listLaunchPoolProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **int**| Filter by project status: 0 for all, 1 for ongoing, 2 for warming up, 3 for ended, 4 for ongoing and warming up | [optional]
 **mortgage_coin** | **string**| Exact match by staking currency | [optional]
 **search_coin** | **string**| Fuzzy match by reward currency and name | [optional]
 **limit_rule** | **int**| Limit rule: 0 for regular pool, 1 for beginner pool | [optional]
 **sort_type** | **int**| Sort type: 1 for max APR descending, 2 for max APR ascending | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **page_size** | **int**| Number of items per page, default 10, maximum 30 | [optional] [default to 10]

### Return type

[**\GateApi\Model\LaunchPoolV4Project[]**](../Model/LaunchPoolV4Project.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLaunchPoolOrder

> \GateApi\Model\LaunchPoolV4CreateOrderResponse createLaunchPoolOrder($create_order_v4)

Create LaunchPool staking order

Create a new staking order for asset staking mining. This endpoint requires API Key signature authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_v4 = new \GateApi\Model\CreateOrderV4(); // \GateApi\Model\CreateOrderV4 | 

try {
    $result = $apiInstance->createLaunchPoolOrder($create_order_v4);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->createLaunchPoolOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_order_v4** | [**\GateApi\Model\CreateOrderV4**](../Model/CreateOrderV4.md)|  |

### Return type

[**\GateApi\Model\LaunchPoolV4CreateOrderResponse**](../Model/LaunchPoolV4CreateOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## redeemLaunchPool

> \GateApi\Model\InlineResponse20011 redeemLaunchPool($redeem_v4)

Redeem LaunchPool staked assets

Redeem staked assets and end staking mining. This endpoint requires API Key signature authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redeem_v4 = new \GateApi\Model\RedeemV4(); // \GateApi\Model\RedeemV4 | 

try {
    $result = $apiInstance->redeemLaunchPool($redeem_v4);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->redeemLaunchPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redeem_v4** | [**\GateApi\Model\RedeemV4**](../Model/RedeemV4.md)|  |

### Return type

[**\GateApi\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLaunchPoolPledgeRecords

> \GateApi\Model\LaunchPoolV4PledgeRecord[] listLaunchPoolPledgeRecords($page, $page_size, $type, $start_time, $end_time, $coin)

Query user pledge records

Query user's staking and redemption operation records. This endpoint requires user authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['page_size'] = 10; // int | Number of items per page, maximum 30
$associate_array['type'] = 56; // int | Type: 1 for pledge, 2 for redemption
$associate_array['start_time'] = '2026-03-17 00:00:00'; // string | Start time, format: YYYY-MM-DD HH:MM:SS
$associate_array['end_time'] = '2026-03-17 23:59:59'; // string | End time, format: YYYY-MM-DD HH:MM:SS
$associate_array['coin'] = 'coin_example'; // string | Collateral currency

try {
    $result = $apiInstance->listLaunchPoolPledgeRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->listLaunchPoolPledgeRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **page_size** | **int**| Number of items per page, maximum 30 | [optional] [default to 10]
 **type** | **int**| Type: 1 for pledge, 2 for redemption | [optional]
 **start_time** | **string**| Start time, format: YYYY-MM-DD HH:MM:SS | [optional]
 **end_time** | **string**| End time, format: YYYY-MM-DD HH:MM:SS | [optional]
 **coin** | **string**| Collateral currency | [optional]

### Return type

[**\GateApi\Model\LaunchPoolV4PledgeRecord[]**](../Model/LaunchPoolV4PledgeRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLaunchPoolRewardRecords

> \GateApi\Model\LaunchPoolV4RewardRecord[] listLaunchPoolRewardRecords($page, $page_size, $start_time, $end_time, $coin)

Query user reward records

Query the user's staking reward records. This endpoint requires user authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['page_size'] = 10; // int | Number of items per page, maximum 30
$associate_array['start_time'] = 56; // int | Start timestamp
$associate_array['end_time'] = 56; // int | End Timestamp
$associate_array['coin'] = 'coin_example'; // string | Reward currency

try {
    $result = $apiInstance->listLaunchPoolRewardRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->listLaunchPoolRewardRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **page_size** | **int**| Number of items per page, maximum 30 | [optional] [default to 10]
 **start_time** | **int**| Start timestamp | [optional]
 **end_time** | **int**| End Timestamp | [optional]
 **coin** | **string**| Reward currency | [optional]

### Return type

[**\GateApi\Model\LaunchPoolV4RewardRecord[]**](../Model/LaunchPoolV4RewardRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

