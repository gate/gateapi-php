# GateApi\EarnApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDualInvestmentPlans**](EarnApi.md#listDualInvestmentPlans) | **GET** /earn/dual/investment_plan | Dual Investment product list
[**listDualOrders**](EarnApi.md#listDualOrders) | **GET** /earn/dual/orders | Dual Investment order list
[**placeDualOrder**](EarnApi.md#placeDualOrder) | **POST** /earn/dual/orders | Place Dual Investment order
[**listDualBalance**](EarnApi.md#listDualBalance) | **GET** /earn/dual/balance | Dual-Currency Earning Assets
[**getDualOrderRefundPreview**](EarnApi.md#getDualOrderRefundPreview) | **GET** /earn/dual/order-refund-preview | Dual-currency early redemption preview
[**placeDualOrderRefund**](EarnApi.md#placeDualOrderRefund) | **POST** /earn/dual/order-refund | Dual-currency order early redemption
[**modifyDualOrderReinvest**](EarnApi.md#modifyDualOrderReinvest) | **POST** /earn/dual/modify-order-reinvest | Modify dual-currency order reinvest
[**getDualProjectRecommend**](EarnApi.md#getDualProjectRecommend) | **GET** /earn/dual/project-recommend | Dual-currency recommended projects
[**findCoin**](EarnApi.md#findCoin) | **GET** /earn/staking/coins | Staking coins
[**swapStakingCoin**](EarnApi.md#swapStakingCoin) | **POST** /earn/staking/swap | On-chain token swap for earned coins
[**orderList**](EarnApi.md#orderList) | **GET** /earn/staking/order_list | List of on-chain coin-earning orders
[**awardList**](EarnApi.md#awardList) | **GET** /earn/staking/award_list | On-chain coin-earning dividend records
[**assetList**](EarnApi.md#assetList) | **GET** /earn/staking/assets | On-chain coin-earning assets
[**createAutoInvestPlan**](EarnApi.md#createAutoInvestPlan) | **POST** /earn/autoinvest/plans/create | Create auto invest plan
[**updateAutoInvestPlan**](EarnApi.md#updateAutoInvestPlan) | **POST** /earn/autoinvest/plans/update | UpdateAuto invest plan
[**stopAutoInvestPlan**](EarnApi.md#stopAutoInvestPlan) | **POST** /earn/autoinvest/plans/stop | StopAuto invest plan
[**addPositionAutoInvestPlan**](EarnApi.md#addPositionAutoInvestPlan) | **POST** /earn/autoinvest/plans/add_position | Add position immediately
[**listAutoInvestCoins**](EarnApi.md#listAutoInvestCoins) | **GET** /earn/autoinvest/coins | QueryCurrencies supporting auto invest
[**getAutoInvestMinAmount**](EarnApi.md#getAutoInvestMinAmount) | **POST** /earn/autoinvest/min_invest_amount | Get minimum investment amount
[**listAutoInvestPlanRecords**](EarnApi.md#listAutoInvestPlanRecords) | **GET** /earn/autoinvest/plans/records | List plan execution records
[**listAutoInvestOrders**](EarnApi.md#listAutoInvestOrders) | **GET** /earn/autoinvest/orders | List plan execution recordsDetails（OrderDetails）
[**listAutoInvestConfig**](EarnApi.md#listAutoInvestConfig) | **GET** /earn/autoinvest/config | List investment currency configuration
[**getAutoInvestPlanDetail**](EarnApi.md#getAutoInvestPlanDetail) | **GET** /earn/autoinvest/plans/detail | QueryAuto invest planDetails
[**listAutoInvestPlans**](EarnApi.md#listAutoInvestPlans) | **GET** /earn/autoinvest/plans/list_info | QueryAuto invest planList
[**listEarnFixedTermProducts**](EarnApi.md#listEarnFixedTermProducts) | **GET** /earn/fixed-term/product | Get product list
[**listEarnFixedTermProductsByAsset**](EarnApi.md#listEarnFixedTermProductsByAsset) | **GET** /earn/fixed-term/product/{asset}/list | Get product list by single currency
[**listEarnFixedTermLends**](EarnApi.md#listEarnFixedTermLends) | **GET** /earn/fixed-term/user/lend | Subscription list
[**createEarnFixedTermLend**](EarnApi.md#createEarnFixedTermLend) | **POST** /earn/fixed-term/user/lend | Subscription
[**createEarnFixedTermPreRedeem**](EarnApi.md#createEarnFixedTermPreRedeem) | **POST** /earn/fixed-term/user/pre-redeem | Redeem
[**listEarnFixedTermHistory**](EarnApi.md#listEarnFixedTermHistory) | **GET** /earn/fixed-term/user/history | Subscription history


## listDualInvestmentPlans

> \GateApi\Model\DualGetPlans[] listDualInvestmentPlans($plan_id, $coin, $type, $quote_currency, $sort, $page, $page_size)

Dual Investment product list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['plan_id'] = 1; // int | Financial project ID
$associate_array['coin'] = 'BTC'; // string | Investment Token
$associate_array['type'] = 'call'; // string | Type enum: `put` — buy low; `call` — sell high
$associate_array['quote_currency'] = 'quote_currency_example'; // string | Settlement currency enum: defaults to USDT; GUSD optional
$associate_array['sort'] = 'sort_example'; // string | Sort field enum: `apy` — highest APY first `short-period` — shortest tenor first `multiple` — highest premium first
$associate_array['page'] = 1; // int | page number
$associate_array['page_size'] = 3; // int | Items per page

try {
    $result = $apiInstance->listDualInvestmentPlans($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listDualInvestmentPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Financial project ID | [optional]
 **coin** | **string**| Investment Token | [optional]
 **type** | **string**| Type enum: &#x60;put&#x60; — buy low; &#x60;call&#x60; — sell high | [optional]
 **quote_currency** | **string**| Settlement currency enum: defaults to USDT; GUSD optional | [optional]
 **sort** | **string**| Sort field enum: &#x60;apy&#x60; — highest APY first &#x60;short-period&#x60; — shortest tenor first &#x60;multiple&#x60; — highest premium first | [optional]
 **page** | **int**| page number | [optional]
 **page_size** | **int**| Items per page | [optional]

### Return type

[**\GateApi\Model\DualGetPlans[]**](../Model/DualGetPlans.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDualOrders

> \GateApi\Model\DualGetOrders[] listDualOrders($from, $to, $type, $status, $coin, $page, $limit)

Dual Investment order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['from'] = 1740727000; // int | Start settlement time
$associate_array['to'] = 1740729000; // int | End settlement time
$associate_array['type'] = 'put'; // string | Type enum: `put` — buy low; `call` — sell high
$associate_array['status'] = 'HOLD'; // string | Order status enum: `HOLD` — open position `REPAY` — historical position `PROCESSING` — position active `SETTLEMENT_PROCESSING` — settlement in progress `ALL` — all
$associate_array['coin'] = 'BTC'; // string | Investment Token
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list

try {
    $result = $apiInstance->listDualOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listDualOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Start settlement time | [optional]
 **to** | **int**| End settlement time | [optional]
 **type** | **string**| Type enum: &#x60;put&#x60; — buy low; &#x60;call&#x60; — sell high | [optional]
 **status** | **string**| Order status enum: &#x60;HOLD&#x60; — open position &#x60;REPAY&#x60; — historical position &#x60;PROCESSING&#x60; — position active &#x60;SETTLEMENT_PROCESSING&#x60; — settlement in progress &#x60;ALL&#x60; — all | [optional]
 **coin** | **string**| Investment Token | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]

### Return type

[**\GateApi\Model\DualGetOrders[]**](../Model/DualGetOrders.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## placeDualOrder

> \GateApi\Model\PlaceDualInvestmentOrder placeDualOrder($place_dual_investment_order_params)

Place Dual Investment order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$place_dual_investment_order_params = new \GateApi\Model\PlaceDualInvestmentOrderParams(); // \GateApi\Model\PlaceDualInvestmentOrderParams | 

try {
    $result = $apiInstance->placeDualOrder($place_dual_investment_order_params);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->placeDualOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_dual_investment_order_params** | [**\GateApi\Model\PlaceDualInvestmentOrderParams**](../Model/PlaceDualInvestmentOrderParams.md)|  |

### Return type

[**\GateApi\Model\PlaceDualInvestmentOrder**](../Model/PlaceDualInvestmentOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDualBalance

> \GateApi\Model\DualGetBalance listDualBalance()

Dual-Currency Earning Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDualBalance();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listDualBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\DualGetBalance**](../Model/DualGetBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDualOrderRefundPreview

> \GateApi\Model\DualOrderRefundPreview getDualOrderRefundPreview($order_id)

Dual-currency early redemption preview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '9497'; // string | Order ID

try {
    $result = $apiInstance->getDualOrderRefundPreview($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getDualOrderRefundPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\GateApi\Model\DualOrderRefundPreview**](../Model/DualOrderRefundPreview.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## placeDualOrderRefund

> placeDualOrderRefund($dual_order_refund_params)

Dual-currency order early redemption

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dual_order_refund_params = new \GateApi\Model\DualOrderRefundParams(); // \GateApi\Model\DualOrderRefundParams | 

try {
    $apiInstance->placeDualOrderRefund($dual_order_refund_params);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->placeDualOrderRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dual_order_refund_params** | [**\GateApi\Model\DualOrderRefundParams**](../Model/DualOrderRefundParams.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyDualOrderReinvest

> modifyDualOrderReinvest($dual_modify_order_reinvest_params)

Modify dual-currency order reinvest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dual_modify_order_reinvest_params = new \GateApi\Model\DualModifyOrderReinvestParams(); // \GateApi\Model\DualModifyOrderReinvestParams | 

try {
    $apiInstance->modifyDualOrderReinvest($dual_modify_order_reinvest_params);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->modifyDualOrderReinvest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dual_modify_order_reinvest_params** | [**\GateApi\Model\DualModifyOrderReinvestParams**](../Model/DualModifyOrderReinvestParams.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDualProjectRecommend

> \GateApi\Model\DualProjectRecommend[] getDualProjectRecommend($mode, $coin, $type, $history_pids)

Dual-currency recommended projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['mode'] = 'normal'; // string | Sort mode; default `normal`: `senior` — curated picks (APR/tenor) `apy_up` — APY ascending `ep_down` — target price descending `ep_up` — target price ascending `dt_down` — maturity time descending `dt_up` — maturity time ascending
$associate_array['coin'] = 'ETH'; // string | Investment Token
$associate_array['type'] = 'call'; // string | `call`: sell high; `put`: buy low
$associate_array['history_pids'] = '110656,110652'; // string | Comma-separated project IDs to exclude already recommended items

try {
    $result = $apiInstance->getDualProjectRecommend($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getDualProjectRecommend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **string**| Sort mode; default &#x60;normal&#x60;: &#x60;senior&#x60; — curated picks (APR/tenor) &#x60;apy_up&#x60; — APY ascending &#x60;ep_down&#x60; — target price descending &#x60;ep_up&#x60; — target price ascending &#x60;dt_down&#x60; — maturity time descending &#x60;dt_up&#x60; — maturity time ascending | [optional]
 **coin** | **string**| Investment Token | [optional]
 **type** | **string**| &#x60;call&#x60;: sell high; &#x60;put&#x60;: buy low | [optional]
 **history_pids** | **string**| Comma-separated project IDs to exclude already recommended items | [optional]

### Return type

[**\GateApi\Model\DualProjectRecommend[]**](../Model/DualProjectRecommend.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findCoin

> object[] findCoin($cointype)

Staking coins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['cointype'] = 'cointype_example'; // string | Currency type: swap - voucher; lock - locked position; debt - US Treasury bond.

try {
    $result = $apiInstance->findCoin($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->findCoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cointype** | **string**| Currency type: swap - voucher; lock - locked position; debt - US Treasury bond. | [optional]

### Return type

**object[]**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## swapStakingCoin

> \GateApi\Model\SwapCoinStruct swapStakingCoin($swap_coin)

On-chain token swap for earned coins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$swap_coin = new \GateApi\Model\SwapCoin(); // \GateApi\Model\SwapCoin | 

try {
    $result = $apiInstance->swapStakingCoin($swap_coin);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->swapStakingCoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **swap_coin** | [**\GateApi\Model\SwapCoin**](../Model/SwapCoin.md)|  |

### Return type

[**\GateApi\Model\SwapCoinStruct**](../Model/SwapCoinStruct.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orderList

> \GateApi\Model\OrderListStruct orderList($pid, $coin, $type, $page)

List of on-chain coin-earning orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['pid'] = 7; // int | Product ID
$associate_array['coin'] = 'ETH'; // string | Currency name
$associate_array['type'] = 0; // int | Type 0-staking 1-redemption
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->orderList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->orderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pid** | **int**| Product ID | [optional]
 **coin** | **string**| Currency name | [optional]
 **type** | **int**| Type 0-staking 1-redemption | [optional]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\OrderListStruct**](../Model/OrderListStruct.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## awardList

> \GateApi\Model\AwardListStruct awardList($pid, $coin, $page)

On-chain coin-earning dividend records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['pid'] = 7; // int | Product ID
$associate_array['coin'] = 'ETH'; // string | Currency name
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->awardList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->awardList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pid** | **int**| Product ID | [optional]
 **coin** | **string**| Currency name | [optional]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\AwardListStruct**](../Model/AwardListStruct.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## assetList

> object[] assetList($coin)

On-chain coin-earning assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['coin'] = 'ETH'; // string | Currency name

try {
    $result = $apiInstance->assetList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->assetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Currency name | [optional]

### Return type

**object[]**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAutoInvestPlan

> \GateApi\Model\AutoInvestPlanCreateResp createAutoInvestPlan($auto_invest_plan_create)

Create auto invest plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_invest_plan_create = new \GateApi\Model\AutoInvestPlanCreate(); // \GateApi\Model\AutoInvestPlanCreate | 

try {
    $result = $apiInstance->createAutoInvestPlan($auto_invest_plan_create);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->createAutoInvestPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_invest_plan_create** | [**\GateApi\Model\AutoInvestPlanCreate**](../Model/AutoInvestPlanCreate.md)|  |

### Return type

[**\GateApi\Model\AutoInvestPlanCreateResp**](../Model/AutoInvestPlanCreateResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAutoInvestPlan

> updateAutoInvestPlan($auto_invest_plan_update)

UpdateAuto invest plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_invest_plan_update = new \GateApi\Model\AutoInvestPlanUpdate(); // \GateApi\Model\AutoInvestPlanUpdate | 

try {
    $apiInstance->updateAutoInvestPlan($auto_invest_plan_update);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->updateAutoInvestPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_invest_plan_update** | [**\GateApi\Model\AutoInvestPlanUpdate**](../Model/AutoInvestPlanUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stopAutoInvestPlan

> stopAutoInvestPlan($auto_invest_plan_stop)

StopAuto invest plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_invest_plan_stop = new \GateApi\Model\AutoInvestPlanStop(); // \GateApi\Model\AutoInvestPlanStop | 

try {
    $apiInstance->stopAutoInvestPlan($auto_invest_plan_stop);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->stopAutoInvestPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_invest_plan_stop** | [**\GateApi\Model\AutoInvestPlanStop**](../Model/AutoInvestPlanStop.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addPositionAutoInvestPlan

> addPositionAutoInvestPlan($auto_invest_plan_add_position)

Add position immediately

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_invest_plan_add_position = new \GateApi\Model\AutoInvestPlanAddPosition(); // \GateApi\Model\AutoInvestPlanAddPosition | 

try {
    $apiInstance->addPositionAutoInvestPlan($auto_invest_plan_add_position);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->addPositionAutoInvestPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_invest_plan_add_position** | [**\GateApi\Model\AutoInvestPlanAddPosition**](../Model/AutoInvestPlanAddPosition.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAutoInvestCoins

> \GateApi\Model\AutoInvestCoinsItem[] listAutoInvestCoins($plan_money)

QueryCurrencies supporting auto invest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['plan_money'] = 'USDT'; // string | Pricing currency，Optional: USDT or BTC，Default: USDT

try {
    $result = $apiInstance->listAutoInvestCoins($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listAutoInvestCoins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_money** | **string**| Pricing currency，Optional: USDT or BTC，Default: USDT | [optional]

### Return type

[**\GateApi\Model\AutoInvestCoinsItem[]**](../Model/AutoInvestCoinsItem.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAutoInvestMinAmount

> \GateApi\Model\AutoInvestMinInvestAmountResp getAutoInvestMinAmount($auto_invest_min_invest_amount)

Get minimum investment amount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_invest_min_invest_amount = new \GateApi\Model\AutoInvestMinInvestAmount(); // \GateApi\Model\AutoInvestMinInvestAmount | 

try {
    $result = $apiInstance->getAutoInvestMinAmount($auto_invest_min_invest_amount);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getAutoInvestMinAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_invest_min_invest_amount** | [**\GateApi\Model\AutoInvestMinInvestAmount**](../Model/AutoInvestMinInvestAmount.md)|  |

### Return type

[**\GateApi\Model\AutoInvestMinInvestAmountResp**](../Model/AutoInvestMinInvestAmountResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAutoInvestPlanRecords

> \GateApi\Model\AutoInvestPlanRecordsResp listAutoInvestPlanRecords($plan_id, $page, $page_size)

List plan execution records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['plan_id'] = 141378; // int | Plan ID
$associate_array['page'] = 1; // int | page number
$associate_array['page_size'] = 10; // int | Items per page，Maximum 100

try {
    $result = $apiInstance->listAutoInvestPlanRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listAutoInvestPlanRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Plan ID |
 **page** | **int**| page number | [optional]
 **page_size** | **int**| Items per page，Maximum 100 | [optional]

### Return type

[**\GateApi\Model\AutoInvestPlanRecordsResp**](../Model/AutoInvestPlanRecordsResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAutoInvestOrders

> \GateApi\Model\AutoInvestOrderItem[] listAutoInvestOrders($plan_id, $record_id)

List plan execution recordsDetails（OrderDetails）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 142583; // int | Plan ID
$record_id = 1770805384904919; // int | Record ID

try {
    $result = $apiInstance->listAutoInvestOrders($plan_id, $record_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listAutoInvestOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Plan ID |
 **record_id** | **int**| Record ID |

### Return type

[**\GateApi\Model\AutoInvestOrderItem[]**](../Model/AutoInvestOrderItem.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAutoInvestConfig

> \GateApi\Model\AutoInvestConfigItem[] listAutoInvestConfig()

List investment currency configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAutoInvestConfig();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listAutoInvestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\AutoInvestConfigItem[]**](../Model/AutoInvestConfigItem.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAutoInvestPlanDetail

> \GateApi\Model\AutoInvestPlanDetail getAutoInvestPlanDetail($plan_id)

QueryAuto invest planDetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 142609; // int | Plan ID

try {
    $result = $apiInstance->getAutoInvestPlanDetail($plan_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getAutoInvestPlanDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Plan ID |

### Return type

[**\GateApi\Model\AutoInvestPlanDetail**](../Model/AutoInvestPlanDetail.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAutoInvestPlans

> \GateApi\Model\AutoInvestPlanListInfoResp listAutoInvestPlans($status, $page, $page_size)

QueryAuto invest planList

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['status'] = 'active'; // string | Plan status，History history，Active active
$associate_array['page'] = 56; // int | page number
$associate_array['page_size'] = 56; // int | Items per page，Maximum 100

try {
    $result = $apiInstance->listAutoInvestPlans($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listAutoInvestPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Plan status，History history，Active active |
 **page** | **int**| page number | [optional]
 **page_size** | **int**| Items per page，Maximum 100 | [optional]

### Return type

[**\GateApi\Model\AutoInvestPlanListInfoResp**](../Model/AutoInvestPlanListInfoResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEarnFixedTermProducts

> \GateApi\Model\ListEarnFixedTermProductsResponse listEarnFixedTermProducts($page, $limit, $asset, $type)

Get product list

Query fixed-term earn product list. Supports filtering by currency, product type, status, etc. Returns product interest rate, lock-up period, quota, and reward campaign information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Page size
$associate_array['asset'] = 'USDT'; // string | Currency
$associate_array['type'] = 1; // int | Product type: 1 for regular, 2 for VIP

try {
    $result = $apiInstance->listEarnFixedTermProducts($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listEarnFixedTermProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number |
 **limit** | **int**| Page size |
 **asset** | **string**| Currency | [optional]
 **type** | **int**| Product type: 1 for regular, 2 for VIP | [optional]

### Return type

[**\GateApi\Model\ListEarnFixedTermProductsResponse**](../Model/ListEarnFixedTermProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEarnFixedTermProductsByAsset

> \GateApi\Model\ListEarnFixedTermProductsByAssetResponse listEarnFixedTermProductsByAsset($asset, $type)

Get product list by single currency

Sort by product term in ascending order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['asset'] = 'USDT'; // string | Currency name, e.g., USDT, BTC
$associate_array['type'] = '1'; // string | Product type: \"\" or 1 for regular product list, 2 for VIP product list, 0 for all products

try {
    $result = $apiInstance->listEarnFixedTermProductsByAsset($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listEarnFixedTermProductsByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Currency name, e.g., USDT, BTC |
 **type** | **string**| Product type: \&quot;\&quot; or 1 for regular product list, 2 for VIP product list, 0 for all products | [optional]

### Return type

[**\GateApi\Model\ListEarnFixedTermProductsByAssetResponse**](../Model/ListEarnFixedTermProductsByAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEarnFixedTermLends

> \GateApi\Model\ListEarnFixedTermLendsResponse listEarnFixedTermLends($order_type, $page, $limit, $product_id, $order_id, $asset, $sub_business, $business_filter)

Subscription list

Query the user's fixed-term earn subscription order list. Supports filtering by product, currency, order type, etc. Returns order details, earnings, rewards, and interest rate boost coupon information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['order_type'] = '1'; // string | Order type: 1 for current orders, 2 for historical orders
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10; // int | Page size
$associate_array['product_id'] = 56; // int | Product ID
$associate_array['order_id'] = 56; // int | Order ID
$associate_array['asset'] = 'asset_example'; // string | Currency
$associate_array['sub_business'] = 56; // int | Sub-business
$associate_array['business_filter'] = '[{\"business\":1, \"sub_business\": 0},{\"business\":2, \"sub_business\": 0}]'; // string | Business filter conditions, JSON array format, e.g., [{\"business\":1, \"sub_business\": 0}]. business: 1 for regular, 2 for VIP

try {
    $result = $apiInstance->listEarnFixedTermLends($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listEarnFixedTermLends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**| Order type: 1 for current orders, 2 for historical orders |
 **page** | **int**| Page number |
 **limit** | **int**| Page size |
 **product_id** | **int**| Product ID | [optional]
 **order_id** | **int**| Order ID | [optional]
 **asset** | **string**| Currency | [optional]
 **sub_business** | **int**| Sub-business | [optional]
 **business_filter** | **string**| Business filter conditions, JSON array format, e.g., [{\&quot;business\&quot;:1, \&quot;sub_business\&quot;: 0}]. business: 1 for regular, 2 for VIP | [optional]

### Return type

[**\GateApi\Model\ListEarnFixedTermLendsResponse**](../Model/ListEarnFixedTermLendsResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createEarnFixedTermLend

> \GateApi\Model\CreateEarnFixedTermLendResponse createEarnFixedTermLend($fixed_term_lend_request)

Subscription

Subscribe to a fixed-term earn product by specifying the product ID and subscription amount. Optionally enable auto-renewal and apply an interest rate boost coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fixed_term_lend_request = new \GateApi\Model\FixedTermLendRequest(); // \GateApi\Model\FixedTermLendRequest | 

try {
    $result = $apiInstance->createEarnFixedTermLend($fixed_term_lend_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->createEarnFixedTermLend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_term_lend_request** | [**\GateApi\Model\FixedTermLendRequest**](../Model/FixedTermLendRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CreateEarnFixedTermLendResponse**](../Model/CreateEarnFixedTermLendResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createEarnFixedTermPreRedeem

> \GateApi\Model\CreateEarnFixedTermPreRedeemResponse createEarnFixedTermPreRedeem($earn_fixed_term_pre_redeem_request)

Redeem

Early redemption of a fixed-term earn order, order ID is required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earn_fixed_term_pre_redeem_request = new \GateApi\Model\EarnFixedTermPreRedeemRequest(); // \GateApi\Model\EarnFixedTermPreRedeemRequest | 

try {
    $result = $apiInstance->createEarnFixedTermPreRedeem($earn_fixed_term_pre_redeem_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->createEarnFixedTermPreRedeem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **earn_fixed_term_pre_redeem_request** | [**\GateApi\Model\EarnFixedTermPreRedeemRequest**](../Model/EarnFixedTermPreRedeemRequest.md)|  | [optional]

### Return type

[**\GateApi\Model\CreateEarnFixedTermPreRedeemResponse**](../Model/CreateEarnFixedTermPreRedeemResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEarnFixedTermHistory

> \GateApi\Model\ListEarnFixedTermHistoryResponse listEarnFixedTermHistory($type, $page, $limit, $product_id, $order_id, $asset, $start_at, $end_at, $sub_business, $business_filter)

Subscription history

Query the user's fixed-term earn history records. Supports filtering by type (subscription, redemption, interest, bonus rewards) and time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = '1'; // string | 1 for subscription, 2 for redemption, 3 for interest, 4 for bonus reward
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10; // int | Page size
$associate_array['product_id'] = 56; // int | Product ID
$associate_array['order_id'] = 'order_id_example'; // string | Order ID
$associate_array['asset'] = 'asset_example'; // string | Currency
$associate_array['start_at'] = 56; // int | Start timestamp
$associate_array['end_at'] = 56; // int | End Timestamp
$associate_array['sub_business'] = 56; // int | Sub-business
$associate_array['business_filter'] = '[{\"business\":1, \"sub_business\": 0},{\"business\":2, \"sub_business\": 0}]'; // string | Business filter conditions, JSON array format, e.g., [{\"business\":1, \"sub_business\": 0}]. business: 1 for regular, 2 for VIP

try {
    $result = $apiInstance->listEarnFixedTermHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->listEarnFixedTermHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| 1 for subscription, 2 for redemption, 3 for interest, 4 for bonus reward |
 **page** | **int**| Page number |
 **limit** | **int**| Page size |
 **product_id** | **int**| Product ID | [optional]
 **order_id** | **string**| Order ID | [optional]
 **asset** | **string**| Currency | [optional]
 **start_at** | **int**| Start timestamp | [optional]
 **end_at** | **int**| End Timestamp | [optional]
 **sub_business** | **int**| Sub-business | [optional]
 **business_filter** | **string**| Business filter conditions, JSON array format, e.g., [{\&quot;business\&quot;:1, \&quot;sub_business\&quot;: 0}]. business: 1 for regular, 2 for VIP | [optional]

### Return type

[**\GateApi\Model\ListEarnFixedTermHistoryResponse**](../Model/ListEarnFixedTermHistoryResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

