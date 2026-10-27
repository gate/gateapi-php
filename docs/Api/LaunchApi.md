# GateApi\LaunchApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLaunchPoolProjects**](LaunchApi.md#listLaunchPoolProjects) | **GET** /launch/project-list | Query LaunchPool project list
[**createLaunchPoolOrder**](LaunchApi.md#createLaunchPoolOrder) | **POST** /launch/create-order | Create LaunchPool staking order
[**redeemLaunchPool**](LaunchApi.md#redeemLaunchPool) | **POST** /launch/redeem | Redeem LaunchPool staked assets
[**listLaunchPoolPledgeRecords**](LaunchApi.md#listLaunchPoolPledgeRecords) | **GET** /launch/user-pledge-records | Query user pledge records
[**listLaunchPoolRewardRecords**](LaunchApi.md#listLaunchPoolRewardRecords) | **GET** /launch/get-user-reward-records | Query user reward records
[**getHodlerAirdropProjectList**](LaunchApi.md#getHodlerAirdropProjectList) | **GET** /launch/hodler-airdrop/project-list | Check the list of HODLer Airdrop activities
[**hodlerAirdropOrder**](LaunchApi.md#hodlerAirdropOrder) | **POST** /launch/hodler-airdrop/order | Participate in the HODLer Airdrop event
[**getHodlerAirdropUserOrderRecords**](LaunchApi.md#getHodlerAirdropUserOrderRecords) | **GET** /launch/hodler-airdrop/user-order-records | Check HODLer Airdrop participation records
[**getHodlerAirdropUserAirdropRecords**](LaunchApi.md#getHodlerAirdropUserAirdropRecords) | **GET** /launch/hodler-airdrop/user-airdrop-records | Query HODLer Airdrop records
[**getCandyDropActivityListV4**](LaunchApi.md#getCandyDropActivityListV4) | **GET** /launch/candydrop/activity-list | Query activity list
[**registerCandyDropV4**](LaunchApi.md#registerCandyDropV4) | **POST** /launch/candydrop/register | Sign up for events
[**getCandyDropActivityRulesV4**](LaunchApi.md#getCandyDropActivityRulesV4) | **GET** /launch/candydrop/activity-rules | Query activity rules
[**getCandyDropTaskProgressV4**](LaunchApi.md#getCandyDropTaskProgressV4) | **GET** /launch/candydrop/task-progress | Query task completion progress
[**getCandyDropParticipationRecordsV4**](LaunchApi.md#getCandyDropParticipationRecordsV4) | **GET** /launch/candydrop/participation-records | Query participation records
[**getCandyDropAirdropRecordsV4**](LaunchApi.md#getCandyDropAirdropRecordsV4) | **GET** /launch/candydrop/airdrop-records | Query airdrop records


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

> \GateApi\Model\RedeemLaunchPoolResponse redeemLaunchPool($redeem_v4)

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

[**\GateApi\Model\RedeemLaunchPoolResponse**](../Model/RedeemLaunchPoolResponse.md)

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


## getHodlerAirdropProjectList

> \GateApi\Model\HodlerAirdropV4ProjectItem[] getHodlerAirdropProjectList($status, $keyword, $join, $page, $size)

Check the list of HODLer Airdrop activities

Get the HODLer Airdrop activity list, which supports filtering by status, currency/project name, and participation status. This interface does not require user login, and logged in users can obtain personal participation information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['status'] = 'status_example'; // string | Activity status filtering, optional values: ACTIVE (in progress + preheating), UNDERWAY (in progress), PREHEAT (preheating), FINISH (ended), return all if not passed
$associate_array['keyword'] = 'keyword_example'; // string | Currency/project name keywords, fuzzy matching
$associate_array['join'] = 0; // int | Participation filter: 0 all (default), 1 only participated
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['size'] = 10; // int | Number of items per page, default 10

try {
    $result = $apiInstance->getHodlerAirdropProjectList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getHodlerAirdropProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Activity status filtering, optional values: ACTIVE (in progress + preheating), UNDERWAY (in progress), PREHEAT (preheating), FINISH (ended), return all if not passed | [optional]
 **keyword** | **string**| Currency/project name keywords, fuzzy matching | [optional]
 **join** | **int**| Participation filter: 0 all (default), 1 only participated | [optional] [default to 0]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **size** | **int**| Number of items per page, default 10 | [optional] [default to 10]

### Return type

[**\GateApi\Model\HodlerAirdropV4ProjectItem[]**](../Model/HodlerAirdropV4ProjectItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## hodlerAirdropOrder

> \GateApi\Model\HodlerAirdropV4OrderResponse hodlerAirdropOrder($hodler_airdrop_v4_order_request)

Participate in the HODLer Airdrop event

To participate in designated HODLer Airdrop activities, you need to hold GT. This interface requires user login authentication and must meet KYC requirements. It does not support sub-accounts and enterprise/institutional users.

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
$hodler_airdrop_v4_order_request = new \GateApi\Model\HodlerAirdropV4OrderRequest(); // \GateApi\Model\HodlerAirdropV4OrderRequest | 

try {
    $result = $apiInstance->hodlerAirdropOrder($hodler_airdrop_v4_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->hodlerAirdropOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hodler_airdrop_v4_order_request** | [**\GateApi\Model\HodlerAirdropV4OrderRequest**](../Model/HodlerAirdropV4OrderRequest.md)|  |

### Return type

[**\GateApi\Model\HodlerAirdropV4OrderResponse**](../Model/HodlerAirdropV4OrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHodlerAirdropUserOrderRecords

> \GateApi\Model\HodlerAirdropV4UserOrderRecord[] getHodlerAirdropUserOrderRecords($keyword, $start_timest, $end_timest, $page, $size)

Check HODLer Airdrop participation records

Query the user's HODLer Airdrop participation record and return the effective holdings and airdrop amount of each activity. This interface requires user login authentication.

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
$associate_array['keyword'] = 'keyword_example'; // string | Currency name keyword filtering
$associate_array['start_timest'] = 56; // int | Start timestamp (seconds)
$associate_array['end_timest'] = 56; // int | end timestamp (seconds)
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['size'] = 10; // int | Number of items per page, default 10

try {
    $result = $apiInstance->getHodlerAirdropUserOrderRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getHodlerAirdropUserOrderRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| Currency name keyword filtering | [optional]
 **start_timest** | **int**| Start timestamp (seconds) | [optional]
 **end_timest** | **int**| end timestamp (seconds) | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **size** | **int**| Number of items per page, default 10 | [optional] [default to 10]

### Return type

[**\GateApi\Model\HodlerAirdropV4UserOrderRecord[]**](../Model/HodlerAirdropV4UserOrderRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHodlerAirdropUserAirdropRecords

> \GateApi\Model\HodlerAirdropV4UserAirdropRecord[] getHodlerAirdropUserAirdropRecords($keyword, $start_timest, $end_timest, $page, $size)

Query HODLer Airdrop records

Query the HODLer Airdrop airdrop distribution record that the user has obtained, including basic airdrops, additional airdrops and automatic redemption status. This interface requires user login authentication.

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
$associate_array['keyword'] = 'keyword_example'; // string | Currency name keyword filtering
$associate_array['start_timest'] = 56; // int | Start timestamp (seconds)
$associate_array['end_timest'] = 56; // int | end timestamp (seconds)
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['size'] = 10; // int | Number of items per page, default 10

try {
    $result = $apiInstance->getHodlerAirdropUserAirdropRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getHodlerAirdropUserAirdropRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| Currency name keyword filtering | [optional]
 **start_timest** | **int**| Start timestamp (seconds) | [optional]
 **end_timest** | **int**| end timestamp (seconds) | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **size** | **int**| Number of items per page, default 10 | [optional] [default to 10]

### Return type

[**\GateApi\Model\HodlerAirdropV4UserAirdropRecord[]**](../Model/HodlerAirdropV4UserAirdropRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCandyDropActivityListV4

> \GateApi\Model\CandyDropV4ActivityCd01[] getCandyDropActivityListV4($status, $rule_name, $register_status, $currency, $limit, $offset)

Query activity list

Supports multi-dimensional filtering of CandyDrop activities, and each query returns the top ten data sorted by the list. No login required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['status'] = 'status_example'; // string | Activity status filtering: ongoing (in progress), upcoming (about to start), ended (ended), if not passed, all will be returned
$associate_array['rule_name'] = 'rule_name_example'; // string | Task type filtering: spot (spot), futures (contract), deposit (recharge), invite (invitation), trading_bot (trading robot), simple_earn (Yu Bibao), first_deposit (first deposit), alpha (Alpha), flash_swap (flash swap), tradfi (TradFi), etf (ETF)
$associate_array['register_status'] = 'register_status_example'; // string | Participation status screening: registered (already participated), unregistered (not participated), if not passed, all will be returned
$associate_array['currency'] = 'currency_example'; // string | Currency name filter
$associate_array['limit'] = 10; // int | Number of items returned, default 10, maximum 30
$associate_array['offset'] = 0; // int | Offset, default 0

try {
    $result = $apiInstance->getCandyDropActivityListV4($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getCandyDropActivityListV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Activity status filtering: ongoing (in progress), upcoming (about to start), ended (ended), if not passed, all will be returned | [optional]
 **rule_name** | **string**| Task type filtering: spot (spot), futures (contract), deposit (recharge), invite (invitation), trading_bot (trading robot), simple_earn (Yu Bibao), first_deposit (first deposit), alpha (Alpha), flash_swap (flash swap), tradfi (TradFi), etf (ETF) | [optional]
 **register_status** | **string**| Participation status screening: registered (already participated), unregistered (not participated), if not passed, all will be returned | [optional]
 **currency** | **string**| Currency name filter | [optional]
 **limit** | **int**| Number of items returned, default 10, maximum 30 | [optional] [default to 10]
 **offset** | **int**| Offset, default 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\CandyDropV4ActivityCd01[]**](../Model/CandyDropV4ActivityCd01.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## registerCandyDropV4

> \GateApi\Model\CandyDropV4RegisterRespCd02 registerCandyDropV4($candy_drop_v4_register_req_cd02)

Sign up for events

Sign up for select CandyDrop events. Login is required and API Key signature authentication is required.

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
$candy_drop_v4_register_req_cd02 = new \GateApi\Model\CandyDropV4RegisterReqCd02(); // \GateApi\Model\CandyDropV4RegisterReqCd02 | 

try {
    $result = $apiInstance->registerCandyDropV4($candy_drop_v4_register_req_cd02);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->registerCandyDropV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **candy_drop_v4_register_req_cd02** | [**\GateApi\Model\CandyDropV4RegisterReqCd02**](../Model/CandyDropV4RegisterReqCd02.md)|  |

### Return type

[**\GateApi\Model\CandyDropV4RegisterRespCd02**](../Model/CandyDropV4RegisterRespCd02.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCandyDropActivityRulesV4

> \GateApi\Model\CandyDropV4ActivityRulesCd03 getCandyDropActivityRulesV4($activity_id, $currency)

Query activity rules

Query the rules of a specific activity, including prize pool and corresponding task data. No login required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['activity_id'] = 56; // int | Activity ID, choose one from currency, at least one of them must be passed
$associate_array['currency'] = 'currency_example'; // string | Project/currency name, choose one from activity_id, at least one of them must be passed

try {
    $result = $apiInstance->getCandyDropActivityRulesV4($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getCandyDropActivityRulesV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| Activity ID, choose one from currency, at least one of them must be passed | [optional]
 **currency** | **string**| Project/currency name, choose one from activity_id, at least one of them must be passed | [optional]

### Return type

[**\GateApi\Model\CandyDropV4ActivityRulesCd03**](../Model/CandyDropV4ActivityRulesCd03.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCandyDropTaskProgressV4

> \GateApi\Model\CandyDropV4TaskProgressCd04 getCandyDropTaskProgressV4($activity_id, $currency)

Query task completion progress

Check the completion progress of tasks that are in progress and have been registered/participated. Login required.

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
$associate_array['activity_id'] = 56; // int | Activity ID, choose one from currency, at least one of them must be passed
$associate_array['currency'] = 'currency_example'; // string | Project/currency name, choose one from activity_id, at least one of them must be passed

try {
    $result = $apiInstance->getCandyDropTaskProgressV4($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getCandyDropTaskProgressV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| Activity ID, choose one from currency, at least one of them must be passed | [optional]
 **currency** | **string**| Project/currency name, choose one from activity_id, at least one of them must be passed | [optional]

### Return type

[**\GateApi\Model\CandyDropV4TaskProgressCd04**](../Model/CandyDropV4TaskProgressCd04.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCandyDropParticipationRecordsV4

> \GateApi\Model\CandyDropV4ParticipationRecordCd05[] getCandyDropParticipationRecordsV4($currency, $status, $start_time, $end_time, $page, $limit)

Query participation records

Query the user's CandyDrop participation details. Login required.

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
$associate_array['currency'] = 'currency_example'; // string | Currency name filter
$associate_array['status'] = 'status_example'; // string | Status filtering: ongoing (in progress), awaiting_draw (to be drawn), won (already won), not_win (not won)
$associate_array['start_time'] = 56; // int | Start time (Unix timestamp seconds)
$associate_array['end_time'] = 56; // int | End time (Unix timestamp seconds)
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['limit'] = 10; // int | Number of items per page, default 10, maximum 30

try {
    $result = $apiInstance->getCandyDropParticipationRecordsV4($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getCandyDropParticipationRecordsV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency name filter | [optional]
 **status** | **string**| Status filtering: ongoing (in progress), awaiting_draw (to be drawn), won (already won), not_win (not won) | [optional]
 **start_time** | **int**| Start time (Unix timestamp seconds) | [optional]
 **end_time** | **int**| End time (Unix timestamp seconds) | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **limit** | **int**| Number of items per page, default 10, maximum 30 | [optional] [default to 10]

### Return type

[**\GateApi\Model\CandyDropV4ParticipationRecordCd05[]**](../Model/CandyDropV4ParticipationRecordCd05.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCandyDropAirdropRecordsV4

> \GateApi\Model\CandyDropV4AirdropRecordCd06[] getCandyDropAirdropRecordsV4($currency, $start_time, $end_time, $page, $limit)

Query airdrop records

Query the user's CandyDrop airdrop details. Login required.

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
$associate_array['currency'] = 'currency_example'; // string | Currency name filter
$associate_array['start_time'] = 56; // int | Start time (Unix timestamp seconds)
$associate_array['end_time'] = 56; // int | End time (Unix timestamp seconds)
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['limit'] = 10; // int | Number of items per page, default 10, maximum 30

try {
    $result = $apiInstance->getCandyDropAirdropRecordsV4($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling LaunchApi->getCandyDropAirdropRecordsV4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency name filter | [optional]
 **start_time** | **int**| Start time (Unix timestamp seconds) | [optional]
 **end_time** | **int**| End time (Unix timestamp seconds) | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **limit** | **int**| Number of items per page, default 10, maximum 30 | [optional] [default to 10]

### Return type

[**\GateApi\Model\CandyDropV4AirdropRecordCd06[]**](../Model/CandyDropV4AirdropRecordCd06.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

