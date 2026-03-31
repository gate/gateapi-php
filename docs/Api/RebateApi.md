# GateApi\RebateApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agencyTransactionHistory**](RebateApi.md#agencyTransactionHistory) | **GET** /rebate/agency/transaction_history | Broker obtains transaction history of recommended users
[**agencyCommissionsHistory**](RebateApi.md#agencyCommissionsHistory) | **GET** /rebate/agency/commission_history | Broker obtains rebate history of recommended users
[**partnerTransactionHistory**](RebateApi.md#partnerTransactionHistory) | **GET** /rebate/partner/transaction_history | Partner obtains transaction history of recommended users
[**partnerCommissionsHistory**](RebateApi.md#partnerCommissionsHistory) | **GET** /rebate/partner/commission_history | Partner obtains rebate records of recommended users
[**partnerSubList**](RebateApi.md#partnerSubList) | **GET** /rebate/partner/sub_list | Partner subordinate list
[**rebateBrokerCommissionHistory**](RebateApi.md#rebateBrokerCommissionHistory) | **GET** /rebate/broker/commission_history | Broker obtains user&#39;s rebate records
[**rebateBrokerTransactionHistory**](RebateApi.md#rebateBrokerTransactionHistory) | **GET** /rebate/broker/transaction_history | Broker obtains user&#39;s trading history
[**rebateUserInfo**](RebateApi.md#rebateUserInfo) | **GET** /rebate/user/info | User obtains rebate information
[**userSubRelation**](RebateApi.md#userSubRelation) | **GET** /rebate/user/sub_relation | User subordinate relationship
[**getPartnerApplicationRecent**](RebateApi.md#getPartnerApplicationRecent) | **GET** /rebate/partner/applications/recent | Get recent partner application records
[**getPartnerEligibility**](RebateApi.md#getPartnerEligibility) | **GET** /rebate/partner/eligibility | Check partner application eligibility
[**getPartnerAgentDataAggregated**](RebateApi.md#getPartnerAgentDataAggregated) | **GET** /rebate/partner/data/aggregated | Aggregated partner agent statistics


## agencyTransactionHistory

> \GateApi\Model\AgencyTransactionHistory[] agencyTransactionHistory($currency_pair, $user_id, $from, $to, $limit, $offset)

Broker obtains transaction history of recommended users

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify the trading pair. If not specified, returns all trading pairs
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Start time for querying records. If not specified, defaults to 7 days before current time
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->agencyTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->agencyTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify the trading pair. If not specified, returns all trading pairs | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time for querying records. If not specified, defaults to 7 days before current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\AgencyTransactionHistory[]**](../Model/AgencyTransactionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## agencyCommissionsHistory

> \GateApi\Model\AgencyCommissionHistory[] agencyCommissionsHistory($currency, $commission_type, $user_id, $from, $to, $limit, $offset)

Broker obtains rebate history of recommended users

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Specify the currency. If not specified, returns all currencies
$associate_array['commission_type'] = 1; // int | Rebate type: 1 - Direct rebate, 2 - Indirect rebate, 3 - Self rebate
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Start time for querying records. If not specified, defaults to 7 days before current time
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->agencyCommissionsHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->agencyCommissionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Specify the currency. If not specified, returns all currencies | [optional]
 **commission_type** | **int**| Rebate type: 1 - Direct rebate, 2 - Indirect rebate, 3 - Self rebate | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time for querying records. If not specified, defaults to 7 days before current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\AgencyCommissionHistory[]**](../Model/AgencyCommissionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerTransactionHistory

> \GateApi\Model\PartnerTransactionHistory partnerTransactionHistory($currency_pair, $user_id, $from, $to, $limit, $offset)

Partner obtains transaction history of recommended users

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify the trading pair. If not specified, returns all trading pairs
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Start time for querying records. If not specified, defaults to 7 days before current time
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify the trading pair. If not specified, returns all trading pairs | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time for querying records. If not specified, defaults to 7 days before current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerTransactionHistory**](../Model/PartnerTransactionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerCommissionsHistory

> \GateApi\Model\PartnerCommissionHistory partnerCommissionsHistory($currency, $user_id, $from, $to, $limit, $offset)

Partner obtains rebate records of recommended users

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Specify the currency. If not specified, returns all currencies
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Start time for querying records. If not specified, defaults to 7 days before current time
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerCommissionsHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerCommissionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Specify the currency. If not specified, returns all currencies | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time for querying records. If not specified, defaults to 7 days before current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerCommissionHistory**](../Model/PartnerCommissionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerSubList

> \GateApi\Model\PartnerSubList partnerSubList($user_id, $limit, $offset)

Partner subordinate list

Including sub-agents, direct customers, and indirect customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerSubList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerSubList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerSubList**](../Model/PartnerSubList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateBrokerCommissionHistory

> \GateApi\Model\BrokerCommission[] rebateBrokerCommissionHistory($limit, $offset, $user_id, $from, $to)

Broker obtains user's rebate records

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1711929600; // int | Start time of the query record. If not specified, defaults to 30 days before the current time
$associate_array['to'] = 1714521600; // int | End timestamp for the query, defaults to current time if not specified

try {
    $result = $apiInstance->rebateBrokerCommissionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateBrokerCommissionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time of the query record. If not specified, defaults to 30 days before the current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]

### Return type

[**\GateApi\Model\BrokerCommission[]**](../Model/BrokerCommission.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateBrokerTransactionHistory

> \GateApi\Model\BrokerTransactionHistory[] rebateBrokerTransactionHistory($limit, $offset, $user_id, $from, $to)

Broker obtains user's trading history

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1711929600; // int | Start time of the query record. If not specified, defaults to 30 days before the current time
$associate_array['to'] = 1714521600; // int | End timestamp for the query, defaults to current time if not specified

try {
    $result = $apiInstance->rebateBrokerTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateBrokerTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Start time of the query record. If not specified, defaults to 30 days before the current time | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]

### Return type

[**\GateApi\Model\BrokerTransactionHistory[]**](../Model/BrokerTransactionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateUserInfo

> \GateApi\Model\RebateUserInfo[] rebateUserInfo()

User obtains rebate information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rebateUserInfo();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\RebateUserInfo[]**](../Model/RebateUserInfo.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userSubRelation

> \GateApi\Model\UserSubRelation userSubRelation($user_id_list)

User subordinate relationship

Query whether the specified user is within the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_list = '1, 2, 3'; // string | Query user ID list, separated by commas. If more than 100, only 100 will be returned

try {
    $result = $apiInstance->userSubRelation($user_id_list);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->userSubRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id_list** | **string**| Query user ID list, separated by commas. If more than 100, only 100 will be returned |

### Return type

[**\GateApi\Model\UserSubRelation**](../Model/UserSubRelation.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPartnerApplicationRecent

> \GateApi\Model\PartnerApplicationResponse getPartnerApplicationRecent()

Get recent partner application records

获取当前用户最近的合伙人申请记录。  此接口返回用户最近 30 天内的申请记录，包括申请状态、审核信息、申请材料等详细信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPartnerApplicationRecent();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->getPartnerApplicationRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\PartnerApplicationResponse**](../Model/PartnerApplicationResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPartnerEligibility

> \GateApi\Model\EligibilityResponse getPartnerEligibility()

Check partner application eligibility

检查当前用户是否有资格申请成为合伙人。  此接口会检查多个条件： - 账户状态（是否被封禁） - 是否为子账号 - 是否已经是合伙人 - KYC 认证状态 - 是否在其他代理商的邀请链下 - 是否在黑名单中 - 其他业务规则限制

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPartnerEligibility();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->getPartnerEligibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\EligibilityResponse**](../Model/EligibilityResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPartnerAgentDataAggregated

> \GateApi\Model\PartnerDataAggregatedResponse getPartnerAgentDataAggregated($start_date, $end_date, $business_type)

Aggregated partner agent statistics

查询指定时间范围内合伙人代理的数据聚合统计，包括返佣金额、交易量、净手续费、客户数和交易人数。  **注意事项：** - 交易人数 `trading_user_count` 仅在 `business_type=0`（全部）时返回 - 时间参数使用 UTC+8 时区 - 如不传时间参数，默认查询近 7 天数据 - 仅限合伙人代理访问，子账号无权限

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['start_date'] = '2024-01-01 00:00:00'; // string | 查询开始时间，格式：yyyy-mm-dd hh:ii:ss（UTC+8）  不传时默认为近 7 日开始时间
$associate_array['end_date'] = '2024-01-07 23:59:59'; // string | 查询结束时间，格式：yyyy-mm-dd hh:ii:ss（UTC+8）  不传时默认为近 7 日结束时间
$associate_array['business_type'] = 0; // int | Business type filter: - 0: All (default) - 1: Spot - 2: Futures - 3: Alpha - 4: Web3 - 5: Perps (DEX) - 6: Exchange All - 7: Web3 All - 8: TradFi

try {
    $result = $apiInstance->getPartnerAgentDataAggregated($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->getPartnerAgentDataAggregated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| 查询开始时间，格式：yyyy-mm-dd hh:ii:ss（UTC+8）  不传时默认为近 7 日开始时间 | [optional]
 **end_date** | **string**| 查询结束时间，格式：yyyy-mm-dd hh:ii:ss（UTC+8）  不传时默认为近 7 日结束时间 | [optional]
 **business_type** | **int**| Business type filter: - 0: All (default) - 1: Spot - 2: Futures - 3: Alpha - 4: Web3 - 5: Perps (DEX) - 6: Exchange All - 7: Web3 All - 8: TradFi | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerDataAggregatedResponse**](../Model/PartnerDataAggregatedResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

