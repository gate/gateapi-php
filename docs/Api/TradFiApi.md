# GateApi\TradFiApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryMt5AccountInfo**](TradFiApi.md#queryMt5AccountInfo) | **GET** /tradfi/users/mt5-account | Query MT5 account information
[**queryCategories**](TradFiApi.md#queryCategories) | **GET** /tradfi/symbols/categories | Query trading symbol categories
[**querySymbols**](TradFiApi.md#querySymbols) | **GET** /tradfi/symbols | Query trading symbol list
[**querySymbolDetail**](TradFiApi.md#querySymbolDetail) | **GET** /tradfi/symbols/detail | Query trading symbol details
[**querySymbolKline**](TradFiApi.md#querySymbolKline) | **GET** /tradfi/symbols/{symbol}/klines | Query trading symbol klines
[**querySymbolTicker**](TradFiApi.md#querySymbolTicker) | **GET** /tradfi/symbols/{symbol}/tickers | Query trading symbol ticker
[**createTradFiUser**](TradFiApi.md#createTradFiUser) | **POST** /tradfi/users | Create TradFi user
[**queryUserAssets**](TradFiApi.md#queryUserAssets) | **GET** /tradfi/users/assets | Query account assets
[**queryTransaction**](TradFiApi.md#queryTransaction) | **GET** /tradfi/transactions | Query Fund Transfer In/Out Records
[**createTransaction**](TradFiApi.md#createTransaction) | **POST** /tradfi/transactions | Fund Deposit and Withdrawal
[**queryOrderList**](TradFiApi.md#queryOrderList) | **GET** /tradfi/orders | Query active order list
[**createTradFiOrder**](TradFiApi.md#createTradFiOrder) | **POST** /tradfi/orders | Create an order
[**updateOrder**](TradFiApi.md#updateOrder) | **PUT** /tradfi/orders/{order_id} | Modify order
[**deleteOrder**](TradFiApi.md#deleteOrder) | **DELETE** /tradfi/orders/{order_id} | Cancel order
[**queryOrderHistoryList**](TradFiApi.md#queryOrderHistoryList) | **GET** /tradfi/orders/history | Query historical order list
[**queryPositionList**](TradFiApi.md#queryPositionList) | **GET** /tradfi/positions | Query active position list
[**updatePosition**](TradFiApi.md#updatePosition) | **PUT** /tradfi/positions/{position_id} | Modify position
[**closePosition**](TradFiApi.md#closePosition) | **POST** /tradfi/positions/{position_id}/close | Close position
[**queryPositionHistoryList**](TradFiApi.md#queryPositionHistoryList) | **GET** /tradfi/positions/history | Query historical position list


## queryMt5AccountInfo

> \GateApi\Model\Mt5Account queryMt5AccountInfo()

Query MT5 account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->queryMt5AccountInfo();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryMt5AccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Mt5Account**](../Model/Mt5Account.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryCategories

> \GateApi\Model\Categories queryCategories()

Query trading symbol categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->queryCategories();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Categories**](../Model/Categories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## querySymbols

> \GateApi\Model\Symbols querySymbols()

Query trading symbol list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->querySymbols();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->querySymbols: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Symbols**](../Model/Symbols.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## querySymbolDetail

> \GateApi\Model\ContractDetail querySymbolDetail($symbols)

Query trading symbol details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbols = 'EURUSD,XAGUSD'; // string | Trading symbol code list (comma-separated, max 10 symbols)

try {
    $result = $apiInstance->querySymbolDetail($symbols);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->querySymbolDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Trading symbol code list (comma-separated, max 10 symbols) |

### Return type

[**\GateApi\Model\ContractDetail**](../Model/ContractDetail.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## querySymbolKline

> \GateApi\Model\Klines querySymbolKline($symbol, $kline_type, $begin_time, $end_time, $limit)

Query trading symbol klines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['symbol'] = 'EURUSD'; // string | Trading symbol code
$associate_array['kline_type'] = '1m'; // string | Kline type (time period)
$associate_array['begin_time'] = 1769378400; // int | Start time (Unix timestamp in seconds)
$associate_array['end_time'] = 1769464800; // int | End time (Unix timestamp in seconds)
$associate_array['limit'] = 100; // int | Kline limit (max 500, error if exceeded)

try {
    $result = $apiInstance->querySymbolKline($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->querySymbolKline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Trading symbol code |
 **kline_type** | **string**| Kline type (time period) |
 **begin_time** | **int**| Start time (Unix timestamp in seconds) | [optional]
 **end_time** | **int**| End time (Unix timestamp in seconds) | [optional]
 **limit** | **int**| Kline limit (max 500, error if exceeded) | [optional]

### Return type

[**\GateApi\Model\Klines**](../Model/Klines.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## querySymbolTicker

> \GateApi\Model\TradFiTicker querySymbolTicker($symbol)

Query trading symbol ticker

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'EURUSD'; // string | Trading symbol code

try {
    $result = $apiInstance->querySymbolTicker($symbol);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->querySymbolTicker: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Trading symbol code |

### Return type

[**\GateApi\Model\TradFiTicker**](../Model/TradFiTicker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTradFiUser

> \GateApi\Model\CreateUserResp createTradFiUser()

Create TradFi user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTradFiUser();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->createTradFiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\CreateUserResp**](../Model/CreateUserResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryUserAssets

> \GateApi\Model\UserAssetResp queryUserAssets()

Query account assets

Query account assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->queryUserAssets();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryUserAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UserAssetResp**](../Model/UserAssetResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryTransaction

> \GateApi\Model\TransactionList queryTransaction($begin_time, $end_time, $type, $page, $page_size)

Query Fund Transfer In/Out Records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['begin_time'] = 1704067200; // int | Start Time (Second-level Timestamp)
$associate_array['end_time'] = 1706745599; // int | End Time (Second-level Timestamp)
$associate_array['type'] = 'withdraw'; // string | Transaction Type (deposit - transfer in, withdraw - transfer out, dividend - dividend payment, fill_negative - cover negative balance)
$associate_array['page'] = 1; // int | page number
$associate_array['page_size'] = 20; // int | Number per page, default 10, maximum 50

try {
    $result = $apiInstance->queryTransaction($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **int**| Start Time (Second-level Timestamp) | [optional]
 **end_time** | **int**| End Time (Second-level Timestamp) | [optional]
 **type** | **string**| Transaction Type (deposit - transfer in, withdraw - transfer out, dividend - dividend payment, fill_negative - cover negative balance) | [optional]
 **page** | **int**| page number | [optional]
 **page_size** | **int**| Number per page, default 10, maximum 50 | [optional]

### Return type

[**\GateApi\Model\TransactionList**](../Model/TransactionList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTransaction

> \GateApi\Model\CreateTransaction createTransaction($trad_fi_transaction_request)

Fund Deposit and Withdrawal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trad_fi_transaction_request = new \GateApi\Model\TradFiTransactionRequest(); // \GateApi\Model\TradFiTransactionRequest | 

try {
    $result = $apiInstance->createTransaction($trad_fi_transaction_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trad_fi_transaction_request** | [**\GateApi\Model\TradFiTransactionRequest**](../Model/TradFiTransactionRequest.md)|  |

### Return type

[**\GateApi\Model\CreateTransaction**](../Model/CreateTransaction.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryOrderList

> \GateApi\Model\OrderList queryOrderList()

Query active order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->queryOrderList();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\OrderList**](../Model/OrderList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTradFiOrder

> \GateApi\Model\CreateOrder2 createTradFiOrder($trad_fi_order_request)

Create an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trad_fi_order_request = new \GateApi\Model\TradFiOrderRequest(); // \GateApi\Model\TradFiOrderRequest | 

try {
    $result = $apiInstance->createTradFiOrder($trad_fi_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->createTradFiOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trad_fi_order_request** | [**\GateApi\Model\TradFiOrderRequest**](../Model/TradFiOrderRequest.md)|  |

### Return type

[**\GateApi\Model\CreateOrder2**](../Model/CreateOrder2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateOrder

> \GateApi\Model\UpdateOrder updateOrder($order_id, $trad_fi_order_update_request)

Modify order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 1223; // int | Order ID
$trad_fi_order_update_request = new \GateApi\Model\TradFiOrderUpdateRequest(); // \GateApi\Model\TradFiOrderUpdateRequest | 

try {
    $result = $apiInstance->updateOrder($order_id, $trad_fi_order_update_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **trad_fi_order_update_request** | [**\GateApi\Model\TradFiOrderUpdateRequest**](../Model/TradFiOrderUpdateRequest.md)|  |

### Return type

[**\GateApi\Model\UpdateOrder**](../Model/UpdateOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOrder

> object deleteOrder($order_id)

Cancel order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 1223; // int | Order ID

try {
    $result = $apiInstance->deleteOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

**object**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryOrderHistoryList

> \GateApi\Model\OrderHistoryList queryOrderHistoryList($begin_time, $end_time, $symbol, $side)

Query historical order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['begin_time'] = 1769397000; // int | Start time (Unix timestamp in seconds), earliest query is one month ago
$associate_array['end_time'] = 1769398000; // int | End time (Unix timestamp in seconds)
$associate_array['symbol'] = 'USDCAD'; // string | Currency pair
$associate_array['side'] = 2; // int | Order side (1=sell, 2=buy)

try {
    $result = $apiInstance->queryOrderHistoryList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryOrderHistoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **int**| Start time (Unix timestamp in seconds), earliest query is one month ago | [optional]
 **end_time** | **int**| End time (Unix timestamp in seconds) | [optional]
 **symbol** | **string**| Currency pair | [optional]
 **side** | **int**| Order side (1&#x3D;sell, 2&#x3D;buy) | [optional]

### Return type

[**\GateApi\Model\OrderHistoryList**](../Model/OrderHistoryList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryPositionList

> \GateApi\Model\PositionList queryPositionList()

Query active position list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->queryPositionList();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryPositionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\PositionList**](../Model/PositionList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePosition

> \GateApi\Model\UpdatePosition updatePosition($position_id, $trad_fi_position_update_request)

Modify position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_id = 1223; // int | Position ID
$trad_fi_position_update_request = new \GateApi\Model\TradFiPositionUpdateRequest(); // \GateApi\Model\TradFiPositionUpdateRequest | 

try {
    $result = $apiInstance->updatePosition($position_id, $trad_fi_position_update_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->updatePosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **position_id** | **int**| Position ID |
 **trad_fi_position_update_request** | [**\GateApi\Model\TradFiPositionUpdateRequest**](../Model/TradFiPositionUpdateRequest.md)|  |

### Return type

[**\GateApi\Model\UpdatePosition**](../Model/UpdatePosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## closePosition

> \GateApi\Model\DeletePosition closePosition($position_id, $trad_fi_close_position_request)

Close position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_id = 1223; // int | Position ID
$trad_fi_close_position_request = new \GateApi\Model\TradFiClosePositionRequest(); // \GateApi\Model\TradFiClosePositionRequest | 

try {
    $result = $apiInstance->closePosition($position_id, $trad_fi_close_position_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->closePosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **position_id** | **int**| Position ID |
 **trad_fi_close_position_request** | [**\GateApi\Model\TradFiClosePositionRequest**](../Model/TradFiClosePositionRequest.md)|  |

### Return type

[**\GateApi\Model\DeletePosition**](../Model/DeletePosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryPositionHistoryList

> \GateApi\Model\PositionHistoryList queryPositionHistoryList($begin_time, $end_time, $symbol, $position_dir)

Query historical position list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\TradFiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['begin_time'] = 56; // int | Start Time (Unix Timestamp, seconds). The earliest queryable time is one month ago
$associate_array['end_time'] = 56; // int | End time (timestamp in seconds)
$associate_array['symbol'] = 'symbol_example'; // string | Trading symbol (e.g., EURUSD)
$associate_array['position_dir'] = 'position_dir_example'; // string | Position direction (Long=long position, Short=short position)

try {
    $result = $apiInstance->queryPositionHistoryList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TradFiApi->queryPositionHistoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **int**| Start Time (Unix Timestamp, seconds). The earliest queryable time is one month ago | [optional]
 **end_time** | **int**| End time (timestamp in seconds) | [optional]
 **symbol** | **string**| Trading symbol (e.g., EURUSD) | [optional]
 **position_dir** | **string**| Position direction (Long&#x3D;long position, Short&#x3D;short position) | [optional]

### Return type

[**\GateApi\Model\PositionHistoryList**](../Model/PositionHistoryList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

