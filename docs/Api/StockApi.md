# GateApi\StockApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryStockUserAssets**](StockApi.md#queryStockUserAssets) | **GET** /stock/users/assets | Query user assets
[**queryStockSymbols**](StockApi.md#queryStockSymbols) | **GET** /stock/symbols | Query symbol list
[**queryStockSymbolDetail**](StockApi.md#queryStockSymbolDetail) | **GET** /stock/symbols/detail | Query symbol details
[**queryStockOrderBook**](StockApi.md#queryStockOrderBook) | **GET** /stock/market/{symbol}/orderbook | Query market order book
[**queryStockOrderList**](StockApi.md#queryStockOrderList) | **GET** /stock/orders | Query open order list
[**createStockOrder**](StockApi.md#createStockOrder) | **POST** /stock/orders | Create order
[**deleteAllStockOrders**](StockApi.md#deleteAllStockOrders) | **DELETE** /stock/orders | Cancel all open orders
[**queryStockOrderHistory**](StockApi.md#queryStockOrderHistory) | **GET** /stock/orders/history | Query historical order list
[**updateStockOrder**](StockApi.md#updateStockOrder) | **PUT** /stock/orders/{order_id} | Modify order
[**deleteStockOrder**](StockApi.md#deleteStockOrder) | **DELETE** /stock/orders/{order_id} | Cancel order
[**queryStockPositions**](StockApi.md#queryStockPositions) | **GET** /stock/positions | Query current position list
[**closeStockPosition**](StockApi.md#closeStockPosition) | **POST** /stock/positions/close | Close position
[**queryStockTransactions**](StockApi.md#queryStockTransactions) | **GET** /stock/transactions | Query transaction records
[**createStockTransaction**](StockApi.md#createStockTransaction) | **POST** /stock/transactions | Fund transfer
[**queryStockExchanges**](StockApi.md#queryStockExchanges) | **GET** /stock/exchanges | Query supported exchanges
[**queryStockFeeRate**](StockApi.md#queryStockFeeRate) | **GET** /stock/fee-rate | Query fee rates for Japanese and Korean stocks


## queryStockUserAssets

> \GateApi\Model\UserAssetResp2 queryStockUserAssets($pnl_calc_type, $pnl_calc_price)

Query user assets

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['pnl_calc_type'] = 1; // int | PnL calculation cost type. Defaults to average cost price when omitted (1 = average cost price, 2 = diluted cost price)
$associate_array['pnl_calc_price'] = 1; // int | PnL calculation price type. Defaults to intraday price when omitted (1 = intraday price, 2 = latest extended-hours price)

try {
    $result = $apiInstance->queryStockUserAssets($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockUserAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pnl_calc_type** | **int**| PnL calculation cost type. Defaults to average cost price when omitted (1 &#x3D; average cost price, 2 &#x3D; diluted cost price) | [optional]
 **pnl_calc_price** | **int**| PnL calculation price type. Defaults to intraday price when omitted (1 &#x3D; intraday price, 2 &#x3D; latest extended-hours price) | [optional]

### Return type

[**\GateApi\Model\UserAssetResp2**](../Model/UserAssetResp2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockSymbols

> \GateApi\Model\Symbols2 queryStockSymbols($symbols, $exchange, $with_desc_i18n, $page, $page_size)

Query symbol list

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['symbols'] = 'AAPL,TSLA'; // string | Symbol list, multiple separated by commas
$associate_array['exchange'] = 'us'; // string | Exchange, supports us, hk, and kr
$associate_array['with_desc_i18n'] = true; // bool | Whether to return multilingual symbol description
$associate_array['page'] = 1; // int | Page number, defaults to 1
$associate_array['page_size'] = 100; // int | Page size, defaults to 10, max 500; server caps at 500

try {
    $result = $apiInstance->queryStockSymbols($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockSymbols: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Symbol list, multiple separated by commas | [optional]
 **exchange** | **string**| Exchange, supports us, hk, and kr | [optional]
 **with_desc_i18n** | **bool**| Whether to return multilingual symbol description | [optional]
 **page** | **int**| Page number, defaults to 1 | [optional]
 **page_size** | **int**| Page size, defaults to 10, max 500; server caps at 500 | [optional]

### Return type

[**\GateApi\Model\Symbols2**](../Model/Symbols2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockSymbolDetail

> \GateApi\Model\SymbolDetail queryStockSymbolDetail($symbols, $exchange, $page, $page_size)

Query symbol details

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['symbols'] = 'AAPL,TSLA'; // string | Symbol list, multiple separated by commas
$associate_array['exchange'] = 'us'; // string | Exchange, supports us, hk, and kr
$associate_array['page'] = 1; // int | Page number, defaults to 1
$associate_array['page_size'] = 100; // int | Page size, defaults to 10, max 500; server caps at 500

try {
    $result = $apiInstance->queryStockSymbolDetail($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockSymbolDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Symbol list, multiple separated by commas | [optional]
 **exchange** | **string**| Exchange, supports us, hk, and kr | [optional]
 **page** | **int**| Page number, defaults to 1 | [optional]
 **page_size** | **int**| Page size, defaults to 10, max 500; server caps at 500 | [optional]

### Return type

[**\GateApi\Model\SymbolDetail**](../Model/SymbolDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockOrderBook

> \GateApi\Model\OrderBook2 queryStockOrderBook($symbol)

Query market order book

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'AAPL'; // string | Symbol

try {
    $result = $apiInstance->queryStockOrderBook($symbol);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol |

### Return type

[**\GateApi\Model\OrderBook2**](../Model/OrderBook2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockOrderList

> \GateApi\Model\OrderList2 queryStockOrderList($symbol)

Query open order list

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'AAPL'; // string | Symbol

try {
    $result = $apiInstance->queryStockOrderList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol | [optional]

### Return type

[**\GateApi\Model\OrderList2**](../Model/OrderList2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStockOrder

> \GateApi\Model\CreateOrder2 createStockOrder($trad_fi_spot_order_request)

Create order

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trad_fi_spot_order_request = new \GateApi\Model\TradFiSpotOrderRequest(); // \GateApi\Model\TradFiSpotOrderRequest | 

try {
    $result = $apiInstance->createStockOrder($trad_fi_spot_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->createStockOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trad_fi_spot_order_request** | [**\GateApi\Model\TradFiSpotOrderRequest**](../Model/TradFiSpotOrderRequest.md)|  |

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


## deleteAllStockOrders

> \GateApi\Model\DeleteOrder deleteAllStockOrders()

Cancel all open orders

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteAllStockOrders();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->deleteAllStockOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\DeleteOrder**](../Model/DeleteOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockOrderHistory

> \GateApi\Model\OrderHistoryList2 queryStockOrderHistory($symbol, $order_ids, $begin_time, $end_time, $side, $page, $page_size)

Query historical order list

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'AAPL'; // string | Symbol
$associate_array['order_ids'] = '123456,123457'; // string | Order ID list, multiple separated by commas; max 20, each must be a positive integer
$associate_array['begin_time'] = 1769378400; // int | Start time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be >= begin_time, query range must not exceed 3 months.
$associate_array['end_time'] = 1769464800; // int | End time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be >= begin_time, query range must not exceed 3 months.
$associate_array['side'] = 2; // int | Side (1=sell, 2=buy)
$associate_array['page'] = 1; // int | Page number, defaults to 1
$associate_array['page_size'] = 100; // int | Page size, defaults to 10, max 500; server caps at 500

try {
    $result = $apiInstance->queryStockOrderHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Symbol | [optional]
 **order_ids** | **string**| Order ID list, multiple separated by commas; max 20, each must be a positive integer | [optional]
 **begin_time** | **int**| Start time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be &gt;&#x3D; begin_time, query range must not exceed 3 months. | [optional]
 **end_time** | **int**| End time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be &gt;&#x3D; begin_time, query range must not exceed 3 months. | [optional]
 **side** | **int**| Side (1&#x3D;sell, 2&#x3D;buy) | [optional]
 **page** | **int**| Page number, defaults to 1 | [optional]
 **page_size** | **int**| Page size, defaults to 10, max 500; server caps at 500 | [optional]

### Return type

[**\GateApi\Model\OrderHistoryList2**](../Model/OrderHistoryList2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateStockOrder

> \GateApi\Model\UpdateOrder2 updateStockOrder($order_id, $trad_fi_spot_order_update_request)

Modify order

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 123456; // int | Order ID
$trad_fi_spot_order_update_request = new \GateApi\Model\TradFiSpotOrderUpdateRequest(); // \GateApi\Model\TradFiSpotOrderUpdateRequest | 

try {
    $result = $apiInstance->updateStockOrder($order_id, $trad_fi_spot_order_update_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->updateStockOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |
 **trad_fi_spot_order_update_request** | [**\GateApi\Model\TradFiSpotOrderUpdateRequest**](../Model/TradFiSpotOrderUpdateRequest.md)|  |

### Return type

[**\GateApi\Model\UpdateOrder2**](../Model/UpdateOrder2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteStockOrder

> \GateApi\Model\DeleteOrder deleteStockOrder($order_id)

Cancel order

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 123456; // int | Order ID

try {
    $result = $apiInstance->deleteStockOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->deleteStockOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID |

### Return type

[**\GateApi\Model\DeleteOrder**](../Model/DeleteOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockPositions

> \GateApi\Model\PositionList2 queryStockPositions($pnl_calc_type, $pnl_calc_price, $symbol, $exchange)

Query current position list

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['pnl_calc_type'] = 1; // int | PnL calculation cost type. Defaults to average cost price when omitted (1 = average cost price, 2 = diluted cost price)
$associate_array['pnl_calc_price'] = 1; // int | PnL calculation price type. Defaults to intraday price when omitted (1 = intraday price, 2 = latest extended-hours price)
$associate_array['symbol'] = 'AAPL'; // string | Symbol
$associate_array['exchange'] = 'us'; // string | Exchange, supports us, hk, and kr

try {
    $result = $apiInstance->queryStockPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pnl_calc_type** | **int**| PnL calculation cost type. Defaults to average cost price when omitted (1 &#x3D; average cost price, 2 &#x3D; diluted cost price) | [optional]
 **pnl_calc_price** | **int**| PnL calculation price type. Defaults to intraday price when omitted (1 &#x3D; intraday price, 2 &#x3D; latest extended-hours price) | [optional]
 **symbol** | **string**| Symbol | [optional]
 **exchange** | **string**| Exchange, supports us, hk, and kr | [optional]

### Return type

[**\GateApi\Model\PositionList2**](../Model/PositionList2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## closeStockPosition

> \GateApi\Model\ClosePosition closeStockPosition($trad_fi_spot_close_position_request)

Close position

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trad_fi_spot_close_position_request = new \GateApi\Model\TradFiSpotClosePositionRequest(); // \GateApi\Model\TradFiSpotClosePositionRequest | 

try {
    $result = $apiInstance->closeStockPosition($trad_fi_spot_close_position_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->closeStockPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trad_fi_spot_close_position_request** | [**\GateApi\Model\TradFiSpotClosePositionRequest**](../Model/TradFiSpotClosePositionRequest.md)|  |

### Return type

[**\GateApi\Model\ClosePosition**](../Model/ClosePosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockTransactions

> \GateApi\Model\TransactionList2 queryStockTransactions($begin_time, $end_time, $ref_id, $type, $page, $page_size)

Query transaction records

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['begin_time'] = 1769378400; // int | Start time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be >= begin_time, query range must not exceed 3 months.
$associate_array['end_time'] = 1769464800; // int | End time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be >= begin_time, query range must not exceed 3 months.
$associate_array['ref_id'] = 'transfer-202607070001'; // string | Business idempotent ID. When ref_id is provided, the server queries by ref_id, ignoring other parameters such as begin_time, end_time, type, page, page_size
$associate_array['type'] = 'deposit'; // string | Transaction type
$associate_array['page'] = 1; // int | Page number, defaults to 1
$associate_array['page_size'] = 100; // int | Page size, defaults to 10, max 500; server caps at 500

try {
    $result = $apiInstance->queryStockTransactions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **int**| Start time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be &gt;&#x3D; begin_time, query range must not exceed 3 months. | [optional]
 **end_time** | **int**| End time (Unix timestamp, seconds). When both begin_time and end_time are provided, end_time must be &gt;&#x3D; begin_time, query range must not exceed 3 months. | [optional]
 **ref_id** | **string**| Business idempotent ID. When ref_id is provided, the server queries by ref_id, ignoring other parameters such as begin_time, end_time, type, page, page_size | [optional]
 **type** | **string**| Transaction type | [optional]
 **page** | **int**| Page number, defaults to 1 | [optional]
 **page_size** | **int**| Page size, defaults to 10, max 500; server caps at 500 | [optional]

### Return type

[**\GateApi\Model\TransactionList2**](../Model/TransactionList2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStockTransaction

> \GateApi\Model\CreateTransaction2 createStockTransaction($trad_fi_spot_transaction_request)

Fund transfer

Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trad_fi_spot_transaction_request = new \GateApi\Model\TradFiSpotTransactionRequest(); // \GateApi\Model\TradFiSpotTransactionRequest | 

try {
    $result = $apiInstance->createStockTransaction($trad_fi_spot_transaction_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->createStockTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trad_fi_spot_transaction_request** | [**\GateApi\Model\TradFiSpotTransactionRequest**](../Model/TradFiSpotTransactionRequest.md)|  |

### Return type

[**\GateApi\Model\CreateTransaction2**](../Model/CreateTransaction2.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockExchanges

> \GateApi\Model\Exchanges queryStockExchanges()

Query supported exchanges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->queryStockExchanges();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockExchanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Exchanges**](../Model/Exchanges.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryStockFeeRate

> \GateApi\Model\FeeRate queryStockFeeRate()

Query fee rates for Japanese and Korean stocks

Query fee rates for Japanese and Korean stocks. Rate limit: 5 qps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->queryStockFeeRate();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling StockApi->queryStockFeeRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\FeeRate**](../Model/FeeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

