# GateApi\OTCApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOtcQuote**](OTCApi.md#createOtcQuote) | **POST** /otc/quote | Fiat and stablecoin quote
[**createOtcOrder**](OTCApi.md#createOtcOrder) | **POST** /otc/order/create | Create fiat order
[**createStableCoinOrder**](OTCApi.md#createStableCoinOrder) | **POST** /otc/stable_coin/order/create | Create stablecoin order
[**getUserDefaultBank**](OTCApi.md#getUserDefaultBank) | **GET** /otc/get_user_def_bank | Get user&#39;s default bank account information
[**markOtcOrderPaid**](OTCApi.md#markOtcOrderPaid) | **POST** /otc/order/paid | Mark fiat order as paid
[**cancelOtcOrder**](OTCApi.md#cancelOtcOrder) | **POST** /otc/order/cancel | Fiat order cancellation
[**listOtcOrders**](OTCApi.md#listOtcOrders) | **GET** /otc/order/list | Fiat order list
[**listStableCoinOrders**](OTCApi.md#listStableCoinOrders) | **GET** /otc/stable_coin/order/list | Stablecoin order list
[**getOtcOrderDetail**](OTCApi.md#getOtcOrderDetail) | **GET** /otc/order/detail | Fiat order details


## createOtcQuote

> \GateApi\Model\InlineResponse2006 createOtcQuote($inline_object1)

Fiat and stablecoin quote

Create fiat and stablecoin quotes, supporting both PAY and GET directions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object1 = new \GateApi\Model\InlineObject1(); // \GateApi\Model\InlineObject1 | 

try {
    $result = $apiInstance->createOtcQuote($inline_object1);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->createOtcQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\GateApi\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\GateApi\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOtcOrder

> \GateApi\Model\InlineResponse2007 createOtcOrder($inline_object2)

Create fiat order

Create a fiat order, supporting BUY for on-ramp and SELL for off-ramp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object2 = new \GateApi\Model\InlineObject2(); // \GateApi\Model\InlineObject2 | 

try {
    $result = $apiInstance->createOtcOrder($inline_object2);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->createOtcOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object2** | [**\GateApi\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStableCoinOrder

> \GateApi\Model\InlineResponse2008 createStableCoinOrder($inline_object3)

Create stablecoin order

Create stablecoin order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object3 = new \GateApi\Model\InlineObject3(); // \GateApi\Model\InlineObject3 | 

try {
    $result = $apiInstance->createStableCoinOrder($inline_object3);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->createStableCoinOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\GateApi\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\GateApi\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserDefaultBank

> \GateApi\Model\InlineResponse2009 getUserDefaultBank()

Get user's default bank account information

Get user's default bank account information for order placement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserDefaultBank();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->getUserDefaultBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## markOtcOrderPaid

> \GateApi\Model\InlineResponse2007 markOtcOrderPaid($inline_object4)

Mark fiat order as paid

Mark fiat order as paid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \GateApi\Model\InlineObject4(); // \GateApi\Model\InlineObject4 | 

try {
    $result = $apiInstance->markOtcOrderPaid($inline_object4);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->markOtcOrderPaid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\GateApi\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOtcOrder

> \GateApi\Model\InlineResponse2007 cancelOtcOrder($order_id)

Fiat order cancellation

Cancel fiat order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID

try {
    $result = $apiInstance->cancelOtcOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->cancelOtcOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOtcOrders

> \GateApi\Model\InlineResponse20010 listOtcOrders($type, $fiat_currency, $crypto_currency, $start_time, $end_time, $status, $pn, $ps)

Fiat order list

Query the fiat order list with filters such as type, currency, time range, and status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = 'type_example'; // string | BUY for on-ramp, SELL for off-ramp
$associate_array['fiat_currency'] = 'fiat_currency_example'; // string | Fiat currency
$associate_array['crypto_currency'] = 'crypto_currency_example'; // string | Digital currency
$associate_array['start_time'] = 'start_time_example'; // string | starttime   for example : 2025-09-09
$associate_array['end_time'] = 'end_time_example'; // string | endtime  for example :2025-09-09
$associate_array['status'] = 'status_example'; // string | DONE ：完成 CANCEL  ：取消 PROCESSING ：进行中
$associate_array['pn'] = 'pn_example'; // string | Page number
$associate_array['ps'] = 'ps_example'; // string | Number of items per page

try {
    $result = $apiInstance->listOtcOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->listOtcOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| BUY for on-ramp, SELL for off-ramp | [optional]
 **fiat_currency** | **string**| Fiat currency | [optional]
 **crypto_currency** | **string**| Digital currency | [optional]
 **start_time** | **string**| starttime   for example : 2025-09-09 | [optional]
 **end_time** | **string**| endtime  for example :2025-09-09 | [optional]
 **status** | **string**| DONE ：完成 CANCEL  ：取消 PROCESSING ：进行中 | [optional]
 **pn** | **string**| Page number | [optional]
 **ps** | **string**| Number of items per page | [optional]

### Return type

[**\GateApi\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listStableCoinOrders

> \GateApi\Model\InlineResponse20011 listStableCoinOrders($page_size, $page_number, $coin_name, $start_time, $end_time, $status)

Stablecoin order list

Query stablecoin order list with filtering by currency, time range, status, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page_size'] = '10'; // string | Number of records per page
$associate_array['page_number'] = '1'; // string | Page number
$associate_array['coin_name'] = 'USDT'; // string | ordercurrency
$associate_array['start_time'] = 'start_time_example'; // string | Start Time
$associate_array['end_time'] = 'end_time_example'; // string | End time
$associate_array['status'] = 'status_example'; // string | Status: PROCESSING: in progress / DONE：completed / FAILED: failed

try {
    $result = $apiInstance->listStableCoinOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->listStableCoinOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **string**| Number of records per page | [optional]
 **page_number** | **string**| Page number | [optional]
 **coin_name** | **string**| ordercurrency | [optional]
 **start_time** | **string**| Start Time | [optional]
 **end_time** | **string**| End time | [optional]
 **status** | **string**| Status: PROCESSING: in progress / DONE：completed / FAILED: failed | [optional]

### Return type

[**\GateApi\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOtcOrderDetail

> \GateApi\Model\InlineResponse20012 getOtcOrderDetail($order_id)

Fiat order details

Query fiat order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OTCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID

try {
    $result = $apiInstance->getOtcOrderDetail($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->getOtcOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

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

