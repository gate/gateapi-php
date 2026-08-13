# GateApi\CFDApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryMt5AccountInfo**](CFDApi.md#queryMt5AccountInfo) | **GET** /tradfi/users/mt5-account | Query MT5 account information
[**queryCategories**](CFDApi.md#queryCategories) | **GET** /tradfi/symbols/categories | Query trading symbol categories
[**querySymbolCommissions**](CFDApi.md#querySymbolCommissions) | **GET** /tradfi/symbols/commissions | Query symbol commission rates
[**querySymbols**](CFDApi.md#querySymbols) | **GET** /tradfi/symbols | Query trading symbol list
[**querySymbolDetail**](CFDApi.md#querySymbolDetail) | **GET** /tradfi/symbols/detail | Query trading symbol details
[**querySymbolKline**](CFDApi.md#querySymbolKline) | **GET** /tradfi/symbols/{symbol}/klines | Query trading symbol klines
[**querySymbolTicker**](CFDApi.md#querySymbolTicker) | **GET** /tradfi/symbols/{symbol}/tickers | Query trading symbol ticker
[**createTradFiUser**](CFDApi.md#createTradFiUser) | **POST** /tradfi/users | Create CFD user
[**queryUserAssets**](CFDApi.md#queryUserAssets) | **GET** /tradfi/users/assets | Query account assets
[**queryTransaction**](CFDApi.md#queryTransaction) | **GET** /tradfi/transactions | Query Fund Transfer In/Out Records
[**createTransaction**](CFDApi.md#createTransaction) | **POST** /tradfi/transactions | Fund transfer
[**queryOrderList**](CFDApi.md#queryOrderList) | **GET** /tradfi/orders | Query active order list
[**createTradFiOrder**](CFDApi.md#createTradFiOrder) | **POST** /tradfi/orders | Create order
[**updateOrder**](CFDApi.md#updateOrder) | **PUT** /tradfi/orders/{order_id} | Modify order
[**deleteOrder**](CFDApi.md#deleteOrder) | **DELETE** /tradfi/orders/{order_id} | Cancel order
[**queryOrderHistoryList**](CFDApi.md#queryOrderHistoryList) | **GET** /tradfi/orders/history | Query historical order list
[**queryOrderLog**](CFDApi.md#queryOrderLog) | **GET** /tradfi/orders/log/{log_id} | Get order details by log ID
[**queryPositionList**](CFDApi.md#queryPositionList) | **GET** /tradfi/positions | Query active position list
[**updatePosition**](CFDApi.md#updatePosition) | **PUT** /tradfi/positions/{position_id} | Modify position
[**closePosition**](CFDApi.md#closePosition) | **POST** /tradfi/positions/{position_id}/close | Close position
[**queryPositionHistoryList**](CFDApi.md#queryPositionHistoryList) | **GET** /tradfi/positions/history | Query historical position list


## queryMt5AccountInfo

> \GateApi\Model\Mt5Account queryMt5AccountInfo()

Query MT5 account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryMt5AccountInfo: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryCategories: ', $e->getMessage(), PHP_EOL;
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


## querySymbolCommissions

> \GateApi\Model\SymbolCommissions querySymbolCommissions($symbols, $category_code)

Query symbol commission rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\CFDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['symbols'] = 'AUDUSD,XAUUSD'; // string | List of symbol codes (multiple codes separated by commas). At least one of symbol and category_code is required
$associate_array['category_code'] = 'forex-外汇,metal-金属,index-指数,commodity-大宗商品,stock-股票'; // string | List of category codes (multiple codes separated by commas). When provided together with symbols, filters symbols by category. At least one of symbol and category_code is required

try {
    $result = $apiInstance->querySymbolCommissions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CFDApi->querySymbolCommissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| List of symbol codes (multiple codes separated by commas). At least one of symbol and category_code is required | [optional]
 **category_code** | **string**| List of category codes (multiple codes separated by commas). When provided together with symbols, filters symbols by category. At least one of symbol and category_code is required | [optional]

### Return type

[**\GateApi\Model\SymbolCommissions**](../Model/SymbolCommissions.md)

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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->querySymbols: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbols = 'EURUSD,XAGUSD'; // string | Trading symbol code list (comma-separated, max 10 symbols)

try {
    $result = $apiInstance->querySymbolDetail($symbols);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CFDApi->querySymbolDetail: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->querySymbolKline: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->querySymbolTicker: ', $e->getMessage(), PHP_EOL;
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

Create CFD user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->createTradFiUser: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryUserAssets: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryTransaction: ', $e->getMessage(), PHP_EOL;
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

Fund transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->createTransaction: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryOrderList: ', $e->getMessage(), PHP_EOL;
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

Create order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->createTradFiOrder: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->updateOrder: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['begin_time'] = 1769397000; // int | Start time (Unix timestamp in seconds), earliest query is one month ago
$associate_array['end_time'] = 1769398000; // int | End time (Unix timestamp in seconds)
$associate_array['symbol'] = 'USDCAD'; // string | Currency pair
$associate_array['side'] = 2; // int | Side (1=sell, 2=buy)

try {
    $result = $apiInstance->queryOrderHistoryList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CFDApi->queryOrderHistoryList: ', $e->getMessage(), PHP_EOL;
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
 **side** | **int**| Side (1&#x3D;sell, 2&#x3D;buy) | [optional]

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


## queryOrderLog

> \GateApi\Model\OrderLog queryOrderLog($log_id)

Get order details by log ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = 1223; // int | log_id returned from the order placement API

try {
    $result = $apiInstance->queryOrderLog($log_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CFDApi->queryOrderLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **int**| log_id returned from the order placement API |

### Return type

[**\GateApi\Model\OrderLog**](../Model/OrderLog.md)

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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->queryPositionList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->updatePosition: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new GateApi\Api\CFDApi(
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
    echo 'Exception when calling CFDApi->closePosition: ', $e->getMessage(), PHP_EOL;
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

> \GateApi\Model\PositionHistoryList queryPositionHistoryList($page, $page_size, $begin_time, $end_time, $symbol, $position_dir)

Query historical position list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CFDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number; defaults to 1 if omitted.
$associate_array['page_size'] = 10; // int | Page size; defaults to 10 if omitted. Maximum 100.
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
    echo 'Exception when calling CFDApi->queryPositionHistoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number; defaults to 1 if omitted. | [optional]
 **page_size** | **int**| Page size; defaults to 10 if omitted. Maximum 100. | [optional]
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

