# GateApi\BotApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAIHubStrategyRecommend**](BotApi.md#getAIHubStrategyRecommend) | **GET** /bot/strategy/recommend | Get AIHub strategy recommendations
[**postAIHubSpotGridCreate**](BotApi.md#postAIHubSpotGridCreate) | **POST** /bot/spot-grid/create | Create spot grid
[**postAIHubMarginGridCreate**](BotApi.md#postAIHubMarginGridCreate) | **POST** /bot/margin-grid/create | Create a lever grid
[**postAIHubInfiniteGridCreate**](BotApi.md#postAIHubInfiniteGridCreate) | **POST** /bot/infinite-grid/create | Create infinite grid
[**postAIHubFuturesGridCreate**](BotApi.md#postAIHubFuturesGridCreate) | **POST** /bot/futures-grid/create | Create a contract grid
[**postAIHubSpotMartingaleCreate**](BotApi.md#postAIHubSpotMartingaleCreate) | **POST** /bot/spot-martingale/create | Create Spot Martin
[**postAIHubContractMartingaleCreate**](BotApi.md#postAIHubContractMartingaleCreate) | **POST** /bot/contract-martingale/create | Create contract martin
[**getAIHubPortfolioRunning**](BotApi.md#getAIHubPortfolioRunning) | **GET** /bot/portfolio/running | Query the list of running policies
[**getAIHubPortfolioDetail**](BotApi.md#getAIHubPortfolioDetail) | **GET** /bot/portfolio/detail | Query order policy details
[**postAIHubPortfolioStop**](BotApi.md#postAIHubPortfolioStop) | **POST** /bot/portfolio/stop | Terminate a single running policy


## getAIHubStrategyRecommend

> \GateApi\Model\AIHubDiscoverSuccessResponse getAIHubStrategyRecommend($market, $strategy_type, $direction, $invest_amount, $scene, $refresh_recommendation_id, $limit, $max_drawdown_lte, $backtest_apr_gte, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Get AIHub strategy recommendations

discover 域唯一正式接口。  支持场景： - `top1` - `bundle` - `filter` - `refresh`  约束： - 主动推荐池仅包含 `spot_grid`、`futures_grid`、`spot_martingale` - 可返回但不主动推荐 `infinite_grid`、`margin_grid` - 不得返回 `contract_martingale`、`smart-position`、`spot-future-arbitrage` - `scene=filter` 时只允许按 `market`、`backtest_apr_gte`、`max_drawdown_lte` 过滤 - `scene=refresh` 通过 `refresh_recommendation_id` 承接刷新上下文；正式最小格式只要求 `strategy_type|market` - 若上游直接透传上一条推荐的 `recommendation_id`，其中第三段 `backtest_id` 当前会被忽略

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['market'] = 'market_example'; // string | Trading pair, such as `BTC_USDT`
$associate_array['strategy_type'] = 'strategy_type_example'; // string | Recommended target policy type; `contract_martingale` not allowed
$associate_array['direction'] = 'direction_example'; // string | Market direction
$associate_array['invest_amount'] = 'invest_amount_example'; // string | Investment amount, string transparent transmission
$associate_array['scene'] = 'scene_example'; // string | Recommended scenario; when empty, bot-service can automatically infer according to the implementation logic.
$associate_array['refresh_recommendation_id'] = 'refresh_recommendation_id_example'; // string | It is recommended to refresh the context. Used when `scene=refresh` is used; when `scene` is empty but the field exists, bot-service will also automatically determine as `refresh`. The official minimum format is `strategy_type|market`; if the `recommendation_id` of the previous recommendation is directly passed through, the third paragraph `backtest_id` will be ignored.
$associate_array['limit'] = 56; // int | Return quantity; when `scene=filter` is used, the actual results are up to 10
$associate_array['max_drawdown_lte'] = 'max_drawdown_lte_example'; // string | Maximum drawdown limit
$associate_array['backtest_apr_gte'] = 'backtest_apr_gte_example'; // string | Backtest annualized lower limit
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->getAIHubStrategyRecommend($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->getAIHubStrategyRecommend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market** | **string**| Trading pair, such as &#x60;BTC_USDT&#x60; | [optional]
 **strategy_type** | **string**| Recommended target policy type; &#x60;contract_martingale&#x60; not allowed | [optional]
 **direction** | **string**| Market direction | [optional]
 **invest_amount** | **string**| Investment amount, string transparent transmission | [optional]
 **scene** | **string**| Recommended scenario; when empty, bot-service can automatically infer according to the implementation logic. | [optional]
 **refresh_recommendation_id** | **string**| It is recommended to refresh the context. Used when &#x60;scene&#x3D;refresh&#x60; is used; when &#x60;scene&#x60; is empty but the field exists, bot-service will also automatically determine as &#x60;refresh&#x60;. The official minimum format is &#x60;strategy_type|market&#x60;; if the &#x60;recommendation_id&#x60; of the previous recommendation is directly passed through, the third paragraph &#x60;backtest_id&#x60; will be ignored. | [optional]
 **limit** | **int**| Return quantity; when &#x60;scene&#x3D;filter&#x60; is used, the actual results are up to 10 | [optional]
 **max_drawdown_lte** | **string**| Maximum drawdown limit | [optional]
 **backtest_apr_gte** | **string**| Backtest annualized lower limit | [optional]
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubDiscoverSuccessResponse**](../Model/AIHubDiscoverSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubSpotGridCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubSpotGridCreate($spot_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create spot grid

Create a spot grid strategy based on the incoming parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spot_grid_create_request = new \GateApi\Model\SpotGridCreateRequest(); // \GateApi\Model\SpotGridCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubSpotGridCreate($spot_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubSpotGridCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **spot_grid_create_request** | [**\GateApi\Model\SpotGridCreateRequest**](../Model/SpotGridCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubMarginGridCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubMarginGridCreate($margin_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create a lever grid

Create a leverage grid strategy based on the passed parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$margin_grid_create_request = new \GateApi\Model\MarginGridCreateRequest(); // \GateApi\Model\MarginGridCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubMarginGridCreate($margin_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubMarginGridCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **margin_grid_create_request** | [**\GateApi\Model\MarginGridCreateRequest**](../Model/MarginGridCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubInfiniteGridCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubInfiniteGridCreate($infinite_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create infinite grid

Create an infinite grid strategy based on passed parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$infinite_grid_create_request = new \GateApi\Model\InfiniteGridCreateRequest(); // \GateApi\Model\InfiniteGridCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubInfiniteGridCreate($infinite_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubInfiniteGridCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **infinite_grid_create_request** | [**\GateApi\Model\InfiniteGridCreateRequest**](../Model/InfiniteGridCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubFuturesGridCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubFuturesGridCreate($futures_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create a contract grid

Create a contract grid strategy based on the incoming parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$futures_grid_create_request = new \GateApi\Model\FuturesGridCreateRequest(); // \GateApi\Model\FuturesGridCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubFuturesGridCreate($futures_grid_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubFuturesGridCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **futures_grid_create_request** | [**\GateApi\Model\FuturesGridCreateRequest**](../Model/FuturesGridCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubSpotMartingaleCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubSpotMartingaleCreate($spot_martingale_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create Spot Martin

Create a spot Martin strategy based on the passed parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spot_martingale_create_request = new \GateApi\Model\SpotMartingaleCreateRequest(); // \GateApi\Model\SpotMartingaleCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubSpotMartingaleCreate($spot_martingale_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubSpotMartingaleCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **spot_martingale_create_request** | [**\GateApi\Model\SpotMartingaleCreateRequest**](../Model/SpotMartingaleCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubContractMartingaleCreate

> \GateApi\Model\AIHubCreateSuccessResponse postAIHubContractMartingaleCreate($contract_martingale_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Create contract martin

Create a contract Martin strategy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_martingale_create_request = new \GateApi\Model\ContractMartingaleCreateRequest(); // \GateApi\Model\ContractMartingaleCreateRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubContractMartingaleCreate($contract_martingale_create_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubContractMartingaleCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_martingale_create_request** | [**\GateApi\Model\ContractMartingaleCreateRequest**](../Model/ContractMartingaleCreateRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubCreateSuccessResponse**](../Model/AIHubCreateSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAIHubPortfolioRunning

> \GateApi\Model\AIHubPortfolioRunningSuccessResponse getAIHubPortfolioRunning($strategy_type, $market, $page, $page_size, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Query the list of running policies

Query the list of AIHub strategies currently running by the user, and support filtering by strategy type, trading pair and paging conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['strategy_type'] = 'strategy_type_example'; // string | Filter by policy type
$associate_array['market'] = 'market_example'; // string | Filter by trading pair
$associate_array['page'] = 1; // int | Page number, default 1
$associate_array['page_size'] = 20; // int | Paging size, default 20, maximum 50
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->getAIHubPortfolioRunning($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->getAIHubPortfolioRunning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_type** | **string**| Filter by policy type | [optional]
 **market** | **string**| Filter by trading pair | [optional]
 **page** | **int**| Page number, default 1 | [optional] [default to 1]
 **page_size** | **int**| Paging size, default 20, maximum 50 | [optional] [default to 20]
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubPortfolioRunningSuccessResponse**](../Model/AIHubPortfolioRunningSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAIHubPortfolioDetail

> \GateApi\Model\AIHubPortfolioDetailSuccessResponse getAIHubPortfolioDetail($strategy_id, $strategy_type, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Query order policy details

Both `strategy_id` and `strategy_type` must be passed in the request, where `strategy_type` is used to distribute to the underlying detailed implementation by strategy type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['strategy_id'] = 'strategy_id_example'; // string | Policy ID
$associate_array['strategy_type'] = 'strategy_type_example'; // string | Policy type; used for underlying detail distribution
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->getAIHubPortfolioDetail($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->getAIHubPortfolioDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **string**| Policy ID |
 **strategy_type** | **string**| Policy type; used for underlying detail distribution |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubPortfolioDetailSuccessResponse**](../Model/AIHubPortfolioDetailSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAIHubPortfolioStop

> \GateApi\Model\AIHubPortfolioStopSuccessResponse postAIHubPortfolioStop($ai_hub_portfolio_stop_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

Terminate a single running policy

Only one policy is allowed to be terminated per request. Risk warning and secondary confirmation are borne by the upper layer of OpenClaw; this interface is only responsible for executing stop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ai_hub_portfolio_stop_request = new \GateApi\Model\AIHubPortfolioStopRequest(); // \GateApi\Model\AIHubPortfolioStopRequest | 
$x_gate_service_id = 'x_gate_service_id_example'; // string | Call source identifier; injected by APIv4 if necessary
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | Language context, such as `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | Request link ID; caller can transmit transparently
$x_trace_id = 'x_trace_id_example'; // string | trace header; can be generated uniformly by APIv4

try {
    $result = $apiInstance->postAIHubPortfolioStop($ai_hub_portfolio_stop_request, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling BotApi->postAIHubPortfolioStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ai_hub_portfolio_stop_request** | [**\GateApi\Model\AIHubPortfolioStopRequest**](../Model/AIHubPortfolioStopRequest.md)|  |
 **x_gate_service_id** | **string**| Call source identifier; injected by APIv4 if necessary | [optional]
 **x_gate_app_lang** | **string**| Language context, such as &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| Request link ID; caller can transmit transparently | [optional]
 **x_trace_id** | **string**| trace header; can be generated uniformly by APIv4 | [optional]

### Return type

[**\GateApi\Model\AIHubPortfolioStopSuccessResponse**](../Model/AIHubPortfolioStopSuccessResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

