# GateApi\LaunchApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLaunchPoolProjects**](LaunchApi.md#listLaunchPoolProjects) | **GET** /launch/project-list | Query LaunchPool project list
[**createLaunchPoolOrder**](LaunchApi.md#createLaunchPoolOrder) | **POST** /launch/create-order | Create LaunchPool staking order
[**redeemLaunchPool**](LaunchApi.md#redeemLaunchPool) | **POST** /launch/redeem | Redeem LaunchPool staked assets
[**listLaunchPoolPledgeRecords**](LaunchApi.md#listLaunchPoolPledgeRecords) | **GET** /launch/user-pledge-records | Query user pledge records
[**listLaunchPoolRewardRecords**](LaunchApi.md#listLaunchPoolRewardRecords) | **GET** /launch/get-user-reward-records | Query user reward records
[**getHodlerAirdropProjectList**](LaunchApi.md#getHodlerAirdropProjectList) | **GET** /launch/hodler-airdrop/project-list | 查询HODLer Airdrop活动列表
[**hodlerAirdropOrder**](LaunchApi.md#hodlerAirdropOrder) | **POST** /launch/hodler-airdrop/order | 参与HODLer Airdrop活动
[**getHodlerAirdropUserOrderRecords**](LaunchApi.md#getHodlerAirdropUserOrderRecords) | **GET** /launch/hodler-airdrop/user-order-records | 查询HODLer Airdrop参与记录
[**getHodlerAirdropUserAirdropRecords**](LaunchApi.md#getHodlerAirdropUserAirdropRecords) | **GET** /launch/hodler-airdrop/user-airdrop-records | 查询HODLer Airdrop空投记录
[**getCandyDropActivityListV4**](LaunchApi.md#getCandyDropActivityListV4) | **GET** /launch/candydrop/activity-list | 查询活动列表
[**registerCandyDropV4**](LaunchApi.md#registerCandyDropV4) | **POST** /launch/candydrop/register | 报名参与活动
[**getCandyDropActivityRulesV4**](LaunchApi.md#getCandyDropActivityRulesV4) | **GET** /launch/candydrop/activity-rules | 查询活动规则
[**getCandyDropTaskProgressV4**](LaunchApi.md#getCandyDropTaskProgressV4) | **GET** /launch/candydrop/task-progress | 查询任务完成进度
[**getCandyDropParticipationRecordsV4**](LaunchApi.md#getCandyDropParticipationRecordsV4) | **GET** /launch/candydrop/participation-records | 查询参与记录
[**getCandyDropAirdropRecordsV4**](LaunchApi.md#getCandyDropAirdropRecordsV4) | **GET** /launch/candydrop/airdrop-records | 查询空投记录


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

查询HODLer Airdrop活动列表

获取HODLer Airdrop活动列表，支持按状态、币种/项目名称、参与情况筛选。此接口无需用户登录，登录用户可获取个人参与信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['status'] = 'status_example'; // string | 活动状态筛选，可选值：ACTIVE（进行中+预热中）、UNDERWAY（进行中）、PREHEAT（预热中）、FINISH（已结束），不传返回全部
$associate_array['keyword'] = 'keyword_example'; // string | 币种/项目名称关键词，模糊匹配
$associate_array['join'] = 0; // int | 参与情况筛选：0全部（默认），1仅已参与
$associate_array['page'] = 1; // int | 页码，默认1
$associate_array['size'] = 10; // int | 每页条数，默认10

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
 **status** | **string**| 活动状态筛选，可选值：ACTIVE（进行中+预热中）、UNDERWAY（进行中）、PREHEAT（预热中）、FINISH（已结束），不传返回全部 | [optional]
 **keyword** | **string**| 币种/项目名称关键词，模糊匹配 | [optional]
 **join** | **int**| 参与情况筛选：0全部（默认），1仅已参与 | [optional] [default to 0]
 **page** | **int**| 页码，默认1 | [optional] [default to 1]
 **size** | **int**| 每页条数，默认10 | [optional] [default to 10]

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

参与HODLer Airdrop活动

参与指定的HODLer Airdrop活动，需持有GT。此接口需要用户登录认证，且须满足KYC要求，不支持子账户、企业/机构用户。

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

查询HODLer Airdrop参与记录

查询用户的HODLer Airdrop参与记录，返回每个活动的有效持仓和空投金额。此接口需要用户登录认证。

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
$associate_array['keyword'] = 'keyword_example'; // string | 币种名称关键词筛选
$associate_array['start_timest'] = 56; // int | 开始时间戳（秒）
$associate_array['end_timest'] = 56; // int | 结束时间戳（秒）
$associate_array['page'] = 1; // int | 页码，默认1
$associate_array['size'] = 10; // int | 每页条数，默认10

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
 **keyword** | **string**| 币种名称关键词筛选 | [optional]
 **start_timest** | **int**| 开始时间戳（秒） | [optional]
 **end_timest** | **int**| 结束时间戳（秒） | [optional]
 **page** | **int**| 页码，默认1 | [optional] [default to 1]
 **size** | **int**| 每页条数，默认10 | [optional] [default to 10]

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

查询HODLer Airdrop空投记录

查询用户已获得的HODLer Airdrop空投发放记录，包含基础空投、额外空投和自动兑换状态。此接口需要用户登录认证。

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
$associate_array['keyword'] = 'keyword_example'; // string | 币种名称关键词筛选
$associate_array['start_timest'] = 56; // int | 开始时间戳（秒）
$associate_array['end_timest'] = 56; // int | 结束时间戳（秒）
$associate_array['page'] = 1; // int | 页码，默认1
$associate_array['size'] = 10; // int | 每页条数，默认10

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
 **keyword** | **string**| 币种名称关键词筛选 | [optional]
 **start_timest** | **int**| 开始时间戳（秒） | [optional]
 **end_timest** | **int**| 结束时间戳（秒） | [optional]
 **page** | **int**| 页码，默认1 | [optional] [default to 1]
 **size** | **int**| 每页条数，默认10 | [optional] [default to 10]

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

查询活动列表

支持多维度筛选 CandyDrop 活动，每次查询返回列表排序的前十条数据。不需要登录。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['status'] = 'status_example'; // string | 活动状态筛选：ongoing(进行中)、upcoming(即将开始)、ended(已结束)，不传则返回全部
$associate_array['rule_name'] = 'rule_name_example'; // string | 任务类型筛选：spot(现货)、futures(合约)、deposit(充值)、invite(邀请)、trading_bot(交易机器人)、simple_earn(余币宝)、first_deposit(首笔入金)、alpha(Alpha)、flash_swap(闪兑)、tradfi(TradFi)、etf(ETF)
$associate_array['register_status'] = 'register_status_example'; // string | 参与情况筛选：registered(已参与)、unregistered(未参与)，不传则返回全部
$associate_array['currency'] = 'currency_example'; // string | 币种名称筛选
$associate_array['limit'] = 10; // int | 返回条数，默认10，最大30
$associate_array['offset'] = 0; // int | 偏移量，默认0

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
 **status** | **string**| 活动状态筛选：ongoing(进行中)、upcoming(即将开始)、ended(已结束)，不传则返回全部 | [optional]
 **rule_name** | **string**| 任务类型筛选：spot(现货)、futures(合约)、deposit(充值)、invite(邀请)、trading_bot(交易机器人)、simple_earn(余币宝)、first_deposit(首笔入金)、alpha(Alpha)、flash_swap(闪兑)、tradfi(TradFi)、etf(ETF) | [optional]
 **register_status** | **string**| 参与情况筛选：registered(已参与)、unregistered(未参与)，不传则返回全部 | [optional]
 **currency** | **string**| 币种名称筛选 | [optional]
 **limit** | **int**| 返回条数，默认10，最大30 | [optional] [default to 10]
 **offset** | **int**| 偏移量，默认0 | [optional] [default to 0]

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

报名参与活动

报名参与特定 CandyDrop 活动。需要登录，需要 API Key 签名认证。

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

查询活动规则

查询特定活动的规则，包括奖池及对应任务数据。不需要登录。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\LaunchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['activity_id'] = 56; // int | 活动ID，与 currency 二选一，至少须传其一
$associate_array['currency'] = 'currency_example'; // string | 项目/币种名称，与 activity_id 二选一，至少须传其一

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
 **activity_id** | **int**| 活动ID，与 currency 二选一，至少须传其一 | [optional]
 **currency** | **string**| 项目/币种名称，与 activity_id 二选一，至少须传其一 | [optional]

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

查询任务完成进度

查询进行中且已报名/参与的任务完成进度。需要登录。

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
$associate_array['activity_id'] = 56; // int | 活动ID，与 currency 二选一，至少须传其一
$associate_array['currency'] = 'currency_example'; // string | 项目/币种名称，与 activity_id 二选一，至少须传其一

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
 **activity_id** | **int**| 活动ID，与 currency 二选一，至少须传其一 | [optional]
 **currency** | **string**| 项目/币种名称，与 activity_id 二选一，至少须传其一 | [optional]

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

查询参与记录

查询用户的 CandyDrop 参与详情。需要登录。

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
$associate_array['currency'] = 'currency_example'; // string | 币种名称筛选
$associate_array['status'] = 'status_example'; // string | 状态筛选：ongoing(进行中)、awaiting_draw(待开奖)、won(已中奖)、not_win(未中奖)
$associate_array['start_time'] = 56; // int | 开始时间（Unix 时间戳秒）
$associate_array['end_time'] = 56; // int | 结束时间（Unix 时间戳秒）
$associate_array['page'] = 1; // int | 页码，默认1
$associate_array['limit'] = 10; // int | 每页条数，默认10，最大30

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
 **currency** | **string**| 币种名称筛选 | [optional]
 **status** | **string**| 状态筛选：ongoing(进行中)、awaiting_draw(待开奖)、won(已中奖)、not_win(未中奖) | [optional]
 **start_time** | **int**| 开始时间（Unix 时间戳秒） | [optional]
 **end_time** | **int**| 结束时间（Unix 时间戳秒） | [optional]
 **page** | **int**| 页码，默认1 | [optional] [default to 1]
 **limit** | **int**| 每页条数，默认10，最大30 | [optional] [default to 10]

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

查询空投记录

查询用户的 CandyDrop 空投详情。需要登录。

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
$associate_array['currency'] = 'currency_example'; // string | 币种名称筛选
$associate_array['start_time'] = 56; // int | 开始时间（Unix 时间戳秒）
$associate_array['end_time'] = 56; // int | 结束时间（Unix 时间戳秒）
$associate_array['page'] = 1; // int | 页码，默认1
$associate_array['limit'] = 10; // int | 每页条数，默认10，最大30

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
 **currency** | **string**| 币种名称筛选 | [optional]
 **start_time** | **int**| 开始时间（Unix 时间戳秒） | [optional]
 **end_time** | **int**| 结束时间（Unix 时间戳秒） | [optional]
 **page** | **int**| 页码，默认1 | [optional] [default to 1]
 **limit** | **int**| 每页条数，默认10，最大30 | [optional] [default to 10]

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

