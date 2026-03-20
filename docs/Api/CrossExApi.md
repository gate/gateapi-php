# GateApi\CrossExApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCrossexRuleSymbols**](CrossExApi.md#listCrossexRuleSymbols) | **GET** /crossex/rule/symbols | [Public Interface] Query Trading Pair Information
[**listCrossexRuleRiskLimits**](CrossExApi.md#listCrossexRuleRiskLimits) | **GET** /crossex/rule/risk_limits | [Public Interface] Query Risk Limit Information
[**listCrossexTransferCoins**](CrossExApi.md#listCrossexTransferCoins) | **GET** /crossex/transfers/coin | [Public Interface] Query Supported Transfer Currencies
[**listCrossexTransfers**](CrossExApi.md#listCrossexTransfers) | **GET** /crossex/transfers | Query Fund Transfer History
[**createCrossexTransfer**](CrossExApi.md#createCrossexTransfer) | **POST** /crossex/transfers | Fund Transfer
[**createCrossexOrder**](CrossExApi.md#createCrossexOrder) | **POST** /crossex/orders | Create an order
[**getCrossexOrder**](CrossExApi.md#getCrossexOrder) | **GET** /crossex/orders/{order_id} | Query order details
[**updateCrossexOrder**](CrossExApi.md#updateCrossexOrder) | **PUT** /crossex/orders/{order_id} | Modify Order
[**cancelCrossexOrder**](CrossExApi.md#cancelCrossexOrder) | **DELETE** /crossex/orders/{order_id} | Cancel Order
[**createCrossexConvertQuote**](CrossExApi.md#createCrossexConvertQuote) | **POST** /crossex/convert/quote | Flash Swap Inquiry
[**createCrossexConvertOrder**](CrossExApi.md#createCrossexConvertOrder) | **POST** /crossex/convert/orders | Flash Swap Transaction
[**getCrossexAccount**](CrossExApi.md#getCrossexAccount) | **GET** /crossex/accounts | Query Account Assets
[**updateCrossexAccount**](CrossExApi.md#updateCrossexAccount) | **PUT** /crossex/accounts | Modify Account Contract Position Mode and Account Mode
[**getCrossexPositionsLeverage**](CrossExApi.md#getCrossexPositionsLeverage) | **GET** /crossex/positions/leverage | Query Contract Trading Pair Leverage Multiplier
[**updateCrossexPositionsLeverage**](CrossExApi.md#updateCrossexPositionsLeverage) | **POST** /crossex/positions/leverage | Modify Contract Trading Pair Leverage Multiplier
[**getCrossexMarginPositionsLeverage**](CrossExApi.md#getCrossexMarginPositionsLeverage) | **GET** /crossex/margin_positions/leverage | Query Leveraged Trading Pair Leverage Multiplier
[**updateCrossexMarginPositionsLeverage**](CrossExApi.md#updateCrossexMarginPositionsLeverage) | **POST** /crossex/margin_positions/leverage | Modify Leveraged Trading Pair Leverage Multiplier
[**closeCrossexPosition**](CrossExApi.md#closeCrossexPosition) | **POST** /crossex/position | Full Close Position
[**getCrossexInterestRate**](CrossExApi.md#getCrossexInterestRate) | **GET** /crossex/interest_rate | Query margin asset interest rates
[**getCrossexFee**](CrossExApi.md#getCrossexFee) | **GET** /crossex/fee | Query User Fee Rates
[**listCrossexPositions**](CrossExApi.md#listCrossexPositions) | **GET** /crossex/positions | Query Contract Positions
[**listCrossexMarginPositions**](CrossExApi.md#listCrossexMarginPositions) | **GET** /crossex/margin_positions | Query Leveraged Positions
[**listCrossexAdlRank**](CrossExApi.md#listCrossexAdlRank) | **GET** /crossex/adl_rank | Query ADL Position Reduction Ranking
[**listCrossexOpenOrders**](CrossExApi.md#listCrossexOpenOrders) | **GET** /crossex/open_orders | Query All Current Open Orders
[**listCrossexHistoryOrders**](CrossExApi.md#listCrossexHistoryOrders) | **GET** /crossex/history_orders | queryorderhistory
[**listCrossexHistoryPositions**](CrossExApi.md#listCrossexHistoryPositions) | **GET** /crossex/history_positions | Query Contract Position History
[**listCrossexHistoryMarginPositions**](CrossExApi.md#listCrossexHistoryMarginPositions) | **GET** /crossex/history_margin_positions | Query Leveraged Position History
[**listCrossexHistoryMarginInterests**](CrossExApi.md#listCrossexHistoryMarginInterests) | **GET** /crossex/history_margin_interests | Query Leveraged Interest Deduction History
[**listCrossexHistoryTrades**](CrossExApi.md#listCrossexHistoryTrades) | **GET** /crossex/history_trades | queryfilledhistory
[**listCrossexAccountBook**](CrossExApi.md#listCrossexAccountBook) | **GET** /crossex/account_book | Query Account Asset Change History
[**listCrossexCoinDiscountRate**](CrossExApi.md#listCrossexCoinDiscountRate) | **GET** /crossex/coin_discount_rate | Query currency discount rate (discount rate of margin currency in isolated exchange mode)


## listCrossexRuleSymbols

> \GateApi\Model\Symbol[] listCrossexRuleSymbols($symbols)

[Public Interface] Query Trading Pair Information

Query Trading Pair Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['symbols'] = 'symbols_example'; // string | 币对列表，多个以逗号分隔 示例值: BINANCE_FUTURE_ADA_USDT,OKX_FUTURE_ADA_USDT

try {
    $result = $apiInstance->listCrossexRuleSymbols($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexRuleSymbols: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| 币对列表，多个以逗号分隔 示例值: BINANCE_FUTURE_ADA_USDT,OKX_FUTURE_ADA_USDT | [optional]

### Return type

[**\GateApi\Model\Symbol[]**](../Model/Symbol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexRuleRiskLimits

> \GateApi\Model\CrossexRiskLimit[] listCrossexRuleRiskLimits($symbols)

[Public Interface] Query Risk Limit Information

Query risk limit information for futures/margin trading pairs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbols = 'BINANCE_FUTURE_AAVE_USDT'; // string | Trading Pair List, multiple separated by commas Example values: BINANCE_FUTURE_ADA_USDT,GATE_MARGIN_ADA_USDT

try {
    $result = $apiInstance->listCrossexRuleRiskLimits($symbols);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexRuleRiskLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Trading Pair List, multiple separated by commas Example values: BINANCE_FUTURE_ADA_USDT,GATE_MARGIN_ADA_USDT |

### Return type

[**\GateApi\Model\CrossexRiskLimit[]**](../Model/CrossexRiskLimit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexTransferCoins

> \GateApi\Model\CrossexTransferCoin[] listCrossexTransferCoins($coin)

[Public Interface] Query Supported Transfer Currencies

Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['coin'] = 'BTC'; // string | Currency

try {
    $result = $apiInstance->listCrossexTransferCoins($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexTransferCoins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Currency | [optional]

### Return type

[**\GateApi\Model\CrossexTransferCoin[]**](../Model/CrossexTransferCoin.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexTransfers

> \GateApi\Model\CrossexTransferRecord[] listCrossexTransfers($coin, $order_id, $from, $to, $page, $limit)

Query Fund Transfer History

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['coin'] = 'USDT, BTC, ETH'; // string | Query by specified currency name
$associate_array['order_id'] = '38083797492939266'; // string | Supports querying by the order ID returned when creating an order (tx_id), as well as a user-defined custom ID specified at creation (text)
$associate_array['from'] = 1750681141933; // int | Start timestamp for the query
$associate_array['to'] = 1750681141933; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10,20,30; // int | Maximum number returned by list, max 1000

try {
    $result = $apiInstance->listCrossexTransfers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Query by specified currency name | [optional]
 **order_id** | **string**| Supports querying by the order ID returned when creating an order (tx_id), as well as a user-defined custom ID specified at creation (text) | [optional]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number returned by list, max 1000 | [optional]

### Return type

[**\GateApi\Model\CrossexTransferRecord[]**](../Model/CrossexTransferRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCrossexTransfer

> \GateApi\Model\CrossexTransferResponse createCrossexTransfer($crossex_transfer_request)

Fund Transfer

Rate limit: 10 requests per 10 seconds - In cross-exchange mode, when transferring USDT, either `from` or `to` must be `SPOT`, and the other side must be `CROSSEX`.   If `CROSSEX_${exchange_type}` (e.g. `CROSSEX_GATE`) is provided, it will be automatically treated as `CROSSEX`. - In isolated exchange mode, when transferring USDT, either `from` or `to` must be `CROSSEX_${exchange_type}`, and the other side must be `SPOT` or `CROSSEX_${exchange_type}`.   If `CROSSEX` is provided, it will be automatically treated as `CROSSEX_GATE`. - When transferring non-USDT assets to or from CrossEx, neither `from` nor `to` can be `CROSSEX`; `CROSSEX_${exchange_type}` must be explicitly specified. - When transferring non-USDT assets, transfers between `CROSSEX_{exchange_type}` accounts are supported, for example: from = `CROSSEX_BINANCE`, to = `CROSSEX_GATE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_transfer_request = new \GateApi\Model\CrossexTransferRequest(); // \GateApi\Model\CrossexTransferRequest | 

try {
    $result = $apiInstance->createCrossexTransfer($crossex_transfer_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->createCrossexTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_transfer_request** | [**\GateApi\Model\CrossexTransferRequest**](../Model/CrossexTransferRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexTransferResponse**](../Model/CrossexTransferResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCrossexOrder

> \GateApi\Model\CrossexOrderActionResponse createCrossexOrder($crossex_order_request)

Create an order

Rate Limit: 100 requests per 10 seconds, maximum 1,000 open orders per user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_order_request = new \GateApi\Model\CrossexOrderRequest(); // \GateApi\Model\CrossexOrderRequest | 

try {
    $result = $apiInstance->createCrossexOrder($crossex_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->createCrossexOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_order_request** | [**\GateApi\Model\CrossexOrderRequest**](../Model/CrossexOrderRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexOrderActionResponse**](../Model/CrossexOrderActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexOrder

> \GateApi\Model\CrossexOrder getCrossexOrder($order_id)

Query order details

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '2048522992198912'; // string | 1. Supports querying order IDs returned when creating orders 2. Supports custom IDs specified by users when creating orders (i.e., the text field)

try {
    $result = $apiInstance->getCrossexOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| 1. Supports querying order IDs returned when creating orders 2. Supports custom IDs specified by users when creating orders (i.e., the text field) |

### Return type

[**\GateApi\Model\CrossexOrder**](../Model/CrossexOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCrossexOrder

> \GateApi\Model\CrossexOrderActionResponse updateCrossexOrder($order_id, $crossex_order_update_request)

Modify Order

Rate Limit: 100 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Support Order ID or Text for Modify Order
$crossex_order_update_request = new \GateApi\Model\CrossexOrderUpdateRequest(); // \GateApi\Model\CrossexOrderUpdateRequest | 

try {
    $result = $apiInstance->updateCrossexOrder($order_id, $crossex_order_update_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->updateCrossexOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Support Order ID or Text for Modify Order |
 **crossex_order_update_request** | [**\GateApi\Model\CrossexOrderUpdateRequest**](../Model/CrossexOrderUpdateRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexOrderActionResponse**](../Model/CrossexOrderActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelCrossexOrder

> \GateApi\Model\CrossexOrderActionResponse cancelCrossexOrder($order_id)

Cancel Order

Rate Limit: 100 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Support Order ID or Text for Cancel Order

try {
    $result = $apiInstance->cancelCrossexOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->cancelCrossexOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Support Order ID or Text for Cancel Order |

### Return type

[**\GateApi\Model\CrossexOrderActionResponse**](../Model/CrossexOrderActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCrossexConvertQuote

> \GateApi\Model\CrossexConvertQuoteResponse createCrossexConvertQuote($crossex_convert_quote_request)

Flash Swap Inquiry

Rate Limit: 100 requests per day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_convert_quote_request = new \GateApi\Model\CrossexConvertQuoteRequest(); // \GateApi\Model\CrossexConvertQuoteRequest | 

try {
    $result = $apiInstance->createCrossexConvertQuote($crossex_convert_quote_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->createCrossexConvertQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_convert_quote_request** | [**\GateApi\Model\CrossexConvertQuoteRequest**](../Model/CrossexConvertQuoteRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexConvertQuoteResponse**](../Model/CrossexConvertQuoteResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCrossexConvertOrder

> \GateApi\Model\CrossexConvertOrderResponse createCrossexConvertOrder($crossex_convert_order_request)

Flash Swap Transaction

Rate limit: 10 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_convert_order_request = new \GateApi\Model\CrossexConvertOrderRequest(); // \GateApi\Model\CrossexConvertOrderRequest | 

try {
    $result = $apiInstance->createCrossexConvertOrder($crossex_convert_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->createCrossexConvertOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_convert_order_request** | [**\GateApi\Model\CrossexConvertOrderRequest**](../Model/CrossexConvertOrderRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexConvertOrderResponse**](../Model/CrossexConvertOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexAccount

> \GateApi\Model\CrossexAccount getCrossexAccount($exchange_type)

Query Account Assets

Rate Limit: 200 requests per 10 seconds If 100% ≤ initial_margin_rate < 110%, transferring out the margin currency is prohibited. If initial_margin_rate < 100%, the system will automatically cancel orders; only closing positions is allowed, not opening new ones. If maintenance_margin_rate ≤ 100%, the system will force liquidation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['exchange_type'] = 'BINANCE,OKX,GATE,BYBIT'; // string | Exchange. Not required in cross-exchange mode; required in single-exchange mode (BINANCE/OKX/GATE/BYBIT)

try {
    $result = $apiInstance->getCrossexAccount($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange_type** | **string**| Exchange. Not required in cross-exchange mode; required in single-exchange mode (BINANCE/OKX/GATE/BYBIT) | [optional]

### Return type

[**\GateApi\Model\CrossexAccount**](../Model/CrossexAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCrossexAccount

> \GateApi\Model\CrossexAccountUpdateResponse updateCrossexAccount($crossex_account_update_request)

Modify Account Contract Position Mode and Account Mode

Rate Limit: 100 requests per 60 seconds. position_mode+exchange_type modifies contract position mode (exchange_type is required when the user's account mode is split exchange); account_mode modifies the user's account mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_account_update_request = new \GateApi\Model\CrossexAccountUpdateRequest(); // \GateApi\Model\CrossexAccountUpdateRequest | 

try {
    $result = $apiInstance->updateCrossexAccount($crossex_account_update_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->updateCrossexAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_account_update_request** | [**\GateApi\Model\CrossexAccountUpdateRequest**](../Model/CrossexAccountUpdateRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexAccountUpdateResponse**](../Model/CrossexAccountUpdateResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexPositionsLeverage

> map[string,string] getCrossexPositionsLeverage($symbols)

Query Contract Trading Pair Leverage Multiplier

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbols'] = 'BINANCE_FUTURE_BTC_USDT,OKX_FUTURE_BTC_USDT,GATE_FUTURE_BTC_USDT'; // string | Trading Pair List, multiple separated by commas

try {
    $result = $apiInstance->getCrossexPositionsLeverage($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexPositionsLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Trading Pair List, multiple separated by commas | [optional]

### Return type

**map[string,string]**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCrossexPositionsLeverage

> \GateApi\Model\CrossexLeverageResponse updateCrossexPositionsLeverage($crossex_leverage_request)

Modify Contract Trading Pair Leverage Multiplier

Rate Limit: 100 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_leverage_request = new \GateApi\Model\CrossexLeverageRequest(); // \GateApi\Model\CrossexLeverageRequest | 

try {
    $result = $apiInstance->updateCrossexPositionsLeverage($crossex_leverage_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->updateCrossexPositionsLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_leverage_request** | [**\GateApi\Model\CrossexLeverageRequest**](../Model/CrossexLeverageRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexLeverageResponse**](../Model/CrossexLeverageResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexMarginPositionsLeverage

> map[string,string] getCrossexMarginPositionsLeverage($symbols)

Query Leveraged Trading Pair Leverage Multiplier

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbols'] = 'BINANCE_MARGIN_BTC_USDT,OKX_MARGIN_BTC_USDT,GATE_MARGIN_BTC_USDT'; // string | Trading Pair List, multiple separated by commas

try {
    $result = $apiInstance->getCrossexMarginPositionsLeverage($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexMarginPositionsLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbols** | **string**| Trading Pair List, multiple separated by commas | [optional]

### Return type

**map[string,string]**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCrossexMarginPositionsLeverage

> \GateApi\Model\CrossexLeverageResponse updateCrossexMarginPositionsLeverage($crossex_leverage_request)

Modify Leveraged Trading Pair Leverage Multiplier

Rate Limit: 100 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_leverage_request = new \GateApi\Model\CrossexLeverageRequest(); // \GateApi\Model\CrossexLeverageRequest | 

try {
    $result = $apiInstance->updateCrossexMarginPositionsLeverage($crossex_leverage_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->updateCrossexMarginPositionsLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_leverage_request** | [**\GateApi\Model\CrossexLeverageRequest**](../Model/CrossexLeverageRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexLeverageResponse**](../Model/CrossexLeverageResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## closeCrossexPosition

> \GateApi\Model\CrossexOrderActionResponse closeCrossexPosition($crossex_close_position_request)

Full Close Position

Rate Limit: 100 requests per day. Automatic close-out rules. Supports closing FUTURE or MARGIN positions.  Prerequisites before using this interface: - No pending orders for the symbol exist in the current account. - When the system detects the position meets any of the following limits while prerequisites are met: - Less than or equal to the minimum notional amount (minNotional) - Less than or equal to the minimum order quantity (minSize)  After meeting the conditions, the system will automatically generate a close-out order and immediately fully close the position. This interface is used to avoid issues where orders are too small to be placed on the exchange, ensuring small positions can be closed smoothly when reaching the threshold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crossex_close_position_request = new \GateApi\Model\CrossexClosePositionRequest(); // \GateApi\Model\CrossexClosePositionRequest | 

try {
    $result = $apiInstance->closeCrossexPosition($crossex_close_position_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->closeCrossexPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crossex_close_position_request** | [**\GateApi\Model\CrossexClosePositionRequest**](../Model/CrossexClosePositionRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CrossexOrderActionResponse**](../Model/CrossexOrderActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexInterestRate

> \GateApi\Model\CrossexInterestRate[] getCrossexInterestRate($coin, $exchange_type)

Query margin asset interest rates

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['coin'] = 'SOL'; // string | Currency
$associate_array['exchange_type'] = 'BINANCE,OKX,GATE,BYBIT'; // string | Exchange

try {
    $result = $apiInstance->getCrossexInterestRate($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexInterestRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Currency | [optional]
 **exchange_type** | **string**| Exchange | [optional]

### Return type

[**\GateApi\Model\CrossexInterestRate[]**](../Model/CrossexInterestRate.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCrossexFee

> \GateApi\Model\InlineResponse2006[] getCrossexFee()

Query User Fee Rates

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCrossexFee();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->getCrossexFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\InlineResponse2006[]**](../Model/InlineResponse2006.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexPositions

> \GateApi\Model\CrossexPosition[] listCrossexPositions($symbol, $exchange_type)

Query Contract Positions

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'BINANCE_FUTURE_ADA_USDT'; // string | Trading Pair
$associate_array['exchange_type'] = 'BINANCE,OKX,GATE,BYBIT'; // string | Exchange

try {
    $result = $apiInstance->listCrossexPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Trading Pair | [optional]
 **exchange_type** | **string**| Exchange | [optional]

### Return type

[**\GateApi\Model\CrossexPosition[]**](../Model/CrossexPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexMarginPositions

> \GateApi\Model\CrossexMarginPosition[] listCrossexMarginPositions($symbol, $exchange_type)

Query Leveraged Positions

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'BINANCE_MARGIN_ADA_USDT'; // string | Currency pair
$associate_array['exchange_type'] = 'BINANCE'; // string | Exchange

try {
    $result = $apiInstance->listCrossexMarginPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexMarginPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Currency pair | [optional]
 **exchange_type** | **string**| Exchange | [optional]

### Return type

[**\GateApi\Model\CrossexMarginPosition[]**](../Model/CrossexMarginPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexAdlRank

> \GateApi\Model\CrossexAdlRank[] listCrossexAdlRank($symbol)

Query ADL Position Reduction Ranking

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'BINANCE_FUTURE_ADA_USDT'; // string | Trading Pair

try {
    $result = $apiInstance->listCrossexAdlRank($symbol);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexAdlRank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Trading Pair |

### Return type

[**\GateApi\Model\CrossexAdlRank[]**](../Model/CrossexAdlRank.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexOpenOrders

> \GateApi\Model\CrossexOrder[] listCrossexOpenOrders($symbol, $exchange_type, $business_type)

Query All Current Open Orders

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'BINANCE_FUTURE_ADA_USDT'; // string | Trading Pair
$associate_array['exchange_type'] = 'BINANCE'; // string | Exchange
$associate_array['business_type'] = 'FUTURE、MARGIN'; // string | Business Type

try {
    $result = $apiInstance->listCrossexOpenOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexOpenOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Trading Pair | [optional]
 **exchange_type** | **string**| Exchange | [optional]
 **business_type** | **string**| Business Type | [optional]

### Return type

[**\GateApi\Model\CrossexOrder[]**](../Model/CrossexOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexHistoryOrders

> \GateApi\Model\CrossexOrder[] listCrossexHistoryOrders($page, $limit, $symbol, $from, $to)

queryorderhistory

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum number of records returned in a single list
$associate_array['symbol'] = 'symbol_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Start Millisecond Timestamp
$associate_array['to'] = 56; // int | End Millisecond Timestamp

try {
    $result = $apiInstance->listCrossexHistoryOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexHistoryOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional]
 **symbol** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Start Millisecond Timestamp | [optional]
 **to** | **int**| End Millisecond Timestamp | [optional]

### Return type

[**\GateApi\Model\CrossexOrder[]**](../Model/CrossexOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexHistoryPositions

> \GateApi\Model\CrossexHistoricalPosition[] listCrossexHistoryPositions($page, $limit, $symbol, $from, $to)

Query Contract Position History

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum number returned by list, max 1000
$associate_array['symbol'] = 'symbol_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Start Millisecond Timestamp
$associate_array['to'] = 56; // int | End Millisecond Timestamp

try {
    $result = $apiInstance->listCrossexHistoryPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexHistoryPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number returned by list, max 1000 | [optional]
 **symbol** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Start Millisecond Timestamp | [optional]
 **to** | **int**| End Millisecond Timestamp | [optional]

### Return type

[**\GateApi\Model\CrossexHistoricalPosition[]**](../Model/CrossexHistoricalPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexHistoryMarginPositions

> \GateApi\Model\CrossexHistoricalMarginPosition[] listCrossexHistoryMarginPositions($page, $limit, $symbol, $from, $to)

Query Leveraged Position History

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum number returned by list, max 1000
$associate_array['symbol'] = 'symbol_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Start Millisecond Timestamp
$associate_array['to'] = 56; // int | End Millisecond Timestamp

try {
    $result = $apiInstance->listCrossexHistoryMarginPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexHistoryMarginPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number returned by list, max 1000 | [optional]
 **symbol** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Start Millisecond Timestamp | [optional]
 **to** | **int**| End Millisecond Timestamp | [optional]

### Return type

[**\GateApi\Model\CrossexHistoricalMarginPosition[]**](../Model/CrossexHistoricalMarginPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexHistoryMarginInterests

> \GateApi\Model\CrossexMarginInterestRecord[] listCrossexHistoryMarginInterests($symbol, $from, $to, $page, $limit, $exchange_type)

Query Leveraged Interest Deduction History

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['symbol'] = 'symbol_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['to'] = 56; // int | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['page'] = 56; // int | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['limit'] = 56; // int | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['exchange_type'] = 'exchange_type_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0

try {
    $result = $apiInstance->listCrossexHistoryMarginInterests($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexHistoryMarginInterests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **to** | **int**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **page** | **int**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **limit** | **int**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **exchange_type** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]

### Return type

[**\GateApi\Model\CrossexMarginInterestRecord[]**](../Model/CrossexMarginInterestRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexHistoryTrades

> \GateApi\Model\CrossexTrade[] listCrossexHistoryTrades($page, $limit, $symbol, $from, $to)

queryfilledhistory

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum number returned by list, max 1000
$associate_array['symbol'] = 'symbol_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Start Millisecond Timestamp
$associate_array['to'] = 56; // int | End Millisecond Timestamp

try {
    $result = $apiInstance->listCrossexHistoryTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexHistoryTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number returned by list, max 1000 | [optional]
 **symbol** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Start Millisecond Timestamp | [optional]
 **to** | **int**| End Millisecond Timestamp | [optional]

### Return type

[**\GateApi\Model\CrossexTrade[]**](../Model/CrossexTrade.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexAccountBook

> \GateApi\Model\CrossexAccountBookRecord[] listCrossexAccountBook($page, $limit, $coin, $from, $to)

Query Account Asset Change History

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum number returned by list, max 1000
$associate_array['coin'] = 'coin_example'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['from'] = 56; // int | Start Millisecond Timestamp
$associate_array['to'] = 56; // int | End Millisecond Timestamp

try {
    $result = $apiInstance->listCrossexAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum number returned by list, max 1000 | [optional]
 **coin** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **from** | **int**| Start Millisecond Timestamp | [optional]
 **to** | **int**| End Millisecond Timestamp | [optional]

### Return type

[**\GateApi\Model\CrossexAccountBookRecord[]**](../Model/CrossexAccountBookRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCrossexCoinDiscountRate

> \GateApi\Model\CrossexCoinDiscountRate[] listCrossexCoinDiscountRate($coin, $exchange_type)

Query currency discount rate (discount rate of margin currency in isolated exchange mode)

Rate Limit: 200 requests per 10 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CrossExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['coin'] = 'SOL'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0
$associate_array['exchange_type'] = 'OKX'; // string | OKX/GATE/BINANCE/BYBIT

try {
    $result = $apiInstance->listCrossexCoinDiscountRate($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CrossExApi->listCrossexCoinDiscountRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]
 **exchange_type** | **string**| OKX/GATE/BINANCE/BYBIT | [optional]

### Return type

[**\GateApi\Model\CrossexCoinDiscountRate[]**](../Model/CrossexCoinDiscountRate.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

