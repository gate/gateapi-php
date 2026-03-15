# GateApi\AlphaApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAlphaAccounts**](AlphaApi.md#listAlphaAccounts) | **GET** /alpha/accounts | Alpha Account API
[**listAlphaAccountBook**](AlphaApi.md#listAlphaAccountBook) | **GET** /alpha/account_book | Alpha Account Transaction History API
[**quoteAlphaOrder**](AlphaApi.md#quoteAlphaOrder) | **POST** /alpha/quote | Alpha Quote API
[**listAlphaOrder**](AlphaApi.md#listAlphaOrder) | **GET** /alpha/orders | Alpha Order List API
[**placeAlphaOrder**](AlphaApi.md#placeAlphaOrder) | **POST** /alpha/orders | Alpha Order API
[**getAlphaOrder**](AlphaApi.md#getAlphaOrder) | **GET** /alpha/order | Alpha Single Order Query API
[**listAlphaCurrencies**](AlphaApi.md#listAlphaCurrencies) | **GET** /alpha/currencies | Query currency information
[**listAlphaTickers**](AlphaApi.md#listAlphaTickers) | **GET** /alpha/tickers | Query currency ticker
[**listAlphaTokens**](AlphaApi.md#listAlphaTokens) | **GET** /alpha/tokens | Query Token Information


## listAlphaAccounts

> \GateApi\Model\AccountsResponse[] listAlphaAccounts()

Alpha Account API

Query position assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAlphaAccounts();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\AccountsResponse[]**](../Model/AccountsResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaAccountBook

> \GateApi\Model\AccountBookResponse[] listAlphaAccountBook($from, $to, $page, $limit)

Alpha Account Transaction History API

Query asset transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['from'] = 56; // int | Start timestamp for the query
$associate_array['to'] = 56; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | Maximum 100 items per page

try {
    $result = $apiInstance->listAlphaAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Start timestamp for the query |
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Maximum 100 items per page | [optional]

### Return type

[**\GateApi\Model\AccountBookResponse[]**](../Model/AccountBookResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## quoteAlphaOrder

> \GateApi\Model\QuoteResponse quoteAlphaOrder($quote_request)

Alpha Quote API

The quote_id returned by the price inquiry interface is valid for one minute; an order must be placed within this minute. If it times out, a new price inquiry is required. Rate-limited at 10 requests per second per user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_request = new \GateApi\Model\QuoteRequest(); // \GateApi\Model\QuoteRequest | 

try {
    $result = $apiInstance->quoteAlphaOrder($quote_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->quoteAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_request** | [**\GateApi\Model\QuoteRequest**](../Model/QuoteRequest.md)|  |

### Return type

[**\GateApi\Model\QuoteResponse**](../Model/QuoteResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaOrder

> \GateApi\Model\OrderResponse[] listAlphaOrder($currency, $side, $status, $from, $to, $limit, $page)

Alpha Order List API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'memeboxsst'; // string | Trading symbol
$associate_array['side'] = 'buy'; // string | Buy or sell orders - buy - sell
$associate_array['status'] = 2; // int | Order Status - `0` : All - `1` : Processing - `2` : Successful - `3` : Failed - `4` : Cancelled - `5` : Buy order placed but transfer not completed - `6` : Order cancelled but transfer not completed
$associate_array['from'] = 1627706330; // int | Start time for order query
$associate_array['to'] = 1635329650; // int | End time for order query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of items returned. Default: 100, minimum: 1, maximum: 100
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaOrder($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Trading symbol | [optional]
 **side** | **string**| Buy or sell orders - buy - sell | [optional]
 **status** | **int**| Order Status - &#x60;0&#x60; : All - &#x60;1&#x60; : Processing - &#x60;2&#x60; : Successful - &#x60;3&#x60; : Failed - &#x60;4&#x60; : Cancelled - &#x60;5&#x60; : Buy order placed but transfer not completed - &#x60;6&#x60; : Order cancelled but transfer not completed | [optional]
 **from** | **int**| Start time for order query | [optional]
 **to** | **int**| End time for order query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of items returned. Default: 100, minimum: 1, maximum: 100 | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\OrderResponse[]**](../Model/OrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## placeAlphaOrder

> \GateApi\Model\PlaceOrderResponse placeAlphaOrder($place_order_request)

Alpha Order API

Order placement interface, rate-limited at 5 requests per second per user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$place_order_request = new \GateApi\Model\PlaceOrderRequest(); // \GateApi\Model\PlaceOrderRequest | 

try {
    $result = $apiInstance->placeAlphaOrder($place_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->placeAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_order_request** | [**\GateApi\Model\PlaceOrderRequest**](../Model/PlaceOrderRequest.md)|  |

### Return type

[**\GateApi\Model\PlaceOrderResponse**](../Model/PlaceOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAlphaOrder

> \GateApi\Model\OrderResponse getAlphaOrder($order_id)

Alpha Single Order Query API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'fdaf12321'; // string | Order ID

try {
    $result = $apiInstance->getAlphaOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->getAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\GateApi\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaCurrencies

> \GateApi\Model\Currency2[] listAlphaCurrencies($currency, $limit, $page)

Query currency information

When currency is provided, query and return specified currency information; when currency is not provided, return paginated currency list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'memeboxtrump'; // string | Query currency information by currency symbol
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaCurrencies($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Query currency information by currency symbol | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\Currency2[]**](../Model/Currency2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaTickers

> \GateApi\Model\AlphaTicker[] listAlphaTickers($currency, $limit, $page)

Query currency ticker

When currency is provided, returns ticker information for the specified currency. When currency is not provided, returns paginated ticker list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'memeboxtrump'; // string | Query by specified currency name
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaTickers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Query by specified currency name | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\AlphaTicker[]**](../Model/AlphaTicker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaTokens

> \GateApi\Model\Tokens[] listAlphaTokens($chain, $launch_platform, $address, $page)

Query Token Information

Supports passing chain, platform, and address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['chain'] = 'solana'; // string | Query Token List by Chain  - solana - eth - bsc - base - world - sui - arbitrum - avalanche - polygon - linea - optimism - zksync - gatelayer
$associate_array['launch_platform'] = 'pump'; // string | Query Token List by Launch Platform  - meteora_dbc - fourmeme - moonshot - pump - raydium_launchlab - letsbonk - gatefun - virtuals
$associate_array['address'] = '0x1234p'; // string | Query Token List by Contract Address
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaTokens($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain** | **string**| Query Token List by Chain  - solana - eth - bsc - base - world - sui - arbitrum - avalanche - polygon - linea - optimism - zksync - gatelayer | [optional]
 **launch_platform** | **string**| Query Token List by Launch Platform  - meteora_dbc - fourmeme - moonshot - pump - raydium_launchlab - letsbonk - gatefun - virtuals | [optional]
 **address** | **string**| Query Token List by Contract Address | [optional]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\Tokens[]**](../Model/Tokens.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

