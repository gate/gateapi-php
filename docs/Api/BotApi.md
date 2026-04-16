# GateApi\BotApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAIHubStrategyRecommend**](BotApi.md#getAIHubStrategyRecommend) | **GET** /bot/strategy/recommend | 获取 AIHub 策略推荐
[**postAIHubSpotGridCreate**](BotApi.md#postAIHubSpotGridCreate) | **POST** /bot/spot-grid/create | 创建现货网格
[**postAIHubMarginGridCreate**](BotApi.md#postAIHubMarginGridCreate) | **POST** /bot/margin-grid/create | 创建杠杆网格
[**postAIHubInfiniteGridCreate**](BotApi.md#postAIHubInfiniteGridCreate) | **POST** /bot/infinite-grid/create | 创建无限网格
[**postAIHubFuturesGridCreate**](BotApi.md#postAIHubFuturesGridCreate) | **POST** /bot/futures-grid/create | 创建合约网格
[**postAIHubSpotMartingaleCreate**](BotApi.md#postAIHubSpotMartingaleCreate) | **POST** /bot/spot-martingale/create | 创建现货马丁
[**postAIHubContractMartingaleCreate**](BotApi.md#postAIHubContractMartingaleCreate) | **POST** /bot/contract-martingale/create | 创建合约马丁
[**getAIHubPortfolioRunning**](BotApi.md#getAIHubPortfolioRunning) | **GET** /bot/portfolio/running | 查询运行中策略列表
[**getAIHubPortfolioDetail**](BotApi.md#getAIHubPortfolioDetail) | **GET** /bot/portfolio/detail | 查询单策略详情
[**postAIHubPortfolioStop**](BotApi.md#postAIHubPortfolioStop) | **POST** /bot/portfolio/stop | 终止单个运行中策略


## getAIHubStrategyRecommend

> \GateApi\Model\AIHubDiscoverSuccessResponse getAIHubStrategyRecommend($market, $strategy_type, $direction, $invest_amount, $scene, $refresh_recommendation_id, $limit, $max_drawdown_lte, $backtest_apr_gte, $x_gate_service_id, $x_gate_app_lang, $x_request_id, $x_trace_id)

获取 AIHub 策略推荐

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
$associate_array['market'] = 'market_example'; // string | 交易对，例如 `BTC_USDT`
$associate_array['strategy_type'] = 'strategy_type_example'; // string | 推荐目标策略类型；`contract_martingale` 不允许
$associate_array['direction'] = 'direction_example'; // string | 行情方向
$associate_array['invest_amount'] = 'invest_amount_example'; // string | 投入金额，字符串透传
$associate_array['scene'] = 'scene_example'; // string | 推荐场景；为空时 bot-service 可按实现逻辑自动推断
$associate_array['refresh_recommendation_id'] = 'refresh_recommendation_id_example'; // string | 推荐刷新上下文。`scene=refresh` 时使用；当 `scene` 为空但该字段存在时，bot-service 也会自动判定为 `refresh`。 正式最小格式为 `strategy_type|market`；若直接透传上一条推荐的 `recommendation_id`，第三段 `backtest_id` 会被忽略。
$associate_array['limit'] = 56; // int | 返回数量；`scene=filter` 时实际结果最多 10 条
$associate_array['max_drawdown_lte'] = 'max_drawdown_lte_example'; // string | 最大回撤上限
$associate_array['backtest_apr_gte'] = 'backtest_apr_gte_example'; // string | 回测年化下限
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **market** | **string**| 交易对，例如 &#x60;BTC_USDT&#x60; | [optional]
 **strategy_type** | **string**| 推荐目标策略类型；&#x60;contract_martingale&#x60; 不允许 | [optional]
 **direction** | **string**| 行情方向 | [optional]
 **invest_amount** | **string**| 投入金额，字符串透传 | [optional]
 **scene** | **string**| 推荐场景；为空时 bot-service 可按实现逻辑自动推断 | [optional]
 **refresh_recommendation_id** | **string**| 推荐刷新上下文。&#x60;scene&#x3D;refresh&#x60; 时使用；当 &#x60;scene&#x60; 为空但该字段存在时，bot-service 也会自动判定为 &#x60;refresh&#x60;。 正式最小格式为 &#x60;strategy_type|market&#x60;；若直接透传上一条推荐的 &#x60;recommendation_id&#x60;，第三段 &#x60;backtest_id&#x60; 会被忽略。 | [optional]
 **limit** | **int**| 返回数量；&#x60;scene&#x3D;filter&#x60; 时实际结果最多 10 条 | [optional]
 **max_drawdown_lte** | **string**| 最大回撤上限 | [optional]
 **backtest_apr_gte** | **string**| 回测年化下限 | [optional]
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建现货网格

根据传入参数创建现货网格策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建杠杆网格

根据传入参数创建杠杆网格策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建无限网格

根据传入参数创建无限网格策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建合约网格

根据传入参数创建合约网格策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建现货马丁

根据传入参数创建现货马丁策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

创建合约马丁

根据传入参数创建合约马丁策略。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

查询运行中策略列表

查询当前用户运行中的 AIHub 策略列表，支持按策略类型、交易对和分页条件过滤。

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
$associate_array['strategy_type'] = 'strategy_type_example'; // string | 按策略类型过滤
$associate_array['market'] = 'market_example'; // string | 按交易对过滤
$associate_array['page'] = 1; // int | 页码，默认 1
$associate_array['page_size'] = 20; // int | 分页大小，默认 20，最大 50
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **strategy_type** | **string**| 按策略类型过滤 | [optional]
 **market** | **string**| 按交易对过滤 | [optional]
 **page** | **int**| 页码，默认 1 | [optional] [default to 1]
 **page_size** | **int**| 分页大小，默认 20，最大 50 | [optional] [default to 20]
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

查询单策略详情

请求中必须同时传 `strategy_id` 与 `strategy_type`，其中 `strategy_type` 用于按策略类型分发到底层详情实现。

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
$associate_array['strategy_id'] = 'strategy_id_example'; // string | 策略 ID
$associate_array['strategy_type'] = 'strategy_type_example'; // string | 策略类型；用于底层详情分发
$associate_array['x_gate_service_id'] = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$associate_array['x_gate_app_lang'] = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$associate_array['x_request_id'] = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$associate_array['x_trace_id'] = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **strategy_id** | **string**| 策略 ID |
 **strategy_type** | **string**| 策略类型；用于底层详情分发 |
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

终止单个运行中策略

单次请求只允许终止一个策略。 风险提示与二次确认由 OpenClaw 上层承担；本接口只负责执行 stop。

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
$x_gate_service_id = 'x_gate_service_id_example'; // string | 调用来源标识；如有需要由 APIv4 注入
$x_gate_app_lang = 'x_gate_app_lang_example'; // string | 语言上下文，例如 `zh-CN` / `en-US`
$x_request_id = 'x_request_id_example'; // string | 请求链路 ID；调用方可透传
$x_trace_id = 'x_trace_id_example'; // string | trace header；可由 APIv4 统一生成

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
 **x_gate_service_id** | **string**| 调用来源标识；如有需要由 APIv4 注入 | [optional]
 **x_gate_app_lang** | **string**| 语言上下文，例如 &#x60;zh-CN&#x60; / &#x60;en-US&#x60; | [optional]
 **x_request_id** | **string**| 请求链路 ID；调用方可透传 | [optional]
 **x_trace_id** | **string**| trace header；可由 APIv4 统一生成 | [optional]

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

