# GateApi\P2PApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**p2pMerchantAccountGetUserInfo**](P2PApi.md#p2pMerchantAccountGetUserInfo) | **POST** /p2p/merchant/account/get_user_info | Get account information
[**p2pMerchantAccountGetCounterpartyUserInfo**](P2PApi.md#p2pMerchantAccountGetCounterpartyUserInfo) | **POST** /p2p/merchant/account/get_counterparty_user_info | Get counterparty information
[**p2pMerchantAccountGetMyselfPayment**](P2PApi.md#p2pMerchantAccountGetMyselfPayment) | **POST** /p2p/merchant/account/get_myself_payment | Get payment method list
[**p2pMerchantTransactionGetPendingTransactionList**](P2PApi.md#p2pMerchantTransactionGetPendingTransactionList) | **POST** /p2p/merchant/transaction/get_pending_transaction_list | Get pending orders
[**p2pMerchantTransactionGetCompletedTransactionList**](P2PApi.md#p2pMerchantTransactionGetCompletedTransactionList) | **POST** /p2p/merchant/transaction/get_completed_transaction_list | Get all/historical orders
[**p2pMerchantTransactionGetTransactionDetails**](P2PApi.md#p2pMerchantTransactionGetTransactionDetails) | **POST** /p2p/merchant/transaction/get_transaction_details | Query order details
[**p2pMerchantTransactionConfirmPayment**](P2PApi.md#p2pMerchantTransactionConfirmPayment) | **POST** /p2p/merchant/transaction/confirm-payment | Confirm payment
[**p2pMerchantTransactionConfirmReceipt**](P2PApi.md#p2pMerchantTransactionConfirmReceipt) | **POST** /p2p/merchant/transaction/confirm-receipt | Confirm receipt
[**p2pMerchantTransactionCancel**](P2PApi.md#p2pMerchantTransactionCancel) | **POST** /p2p/merchant/transaction/cancel | Cancel order
[**p2pMerchantBooksPlaceBizPushOrder**](P2PApi.md#p2pMerchantBooksPlaceBizPushOrder) | **POST** /p2p/merchant/books/place_biz_push_order | Publish ad order
[**p2pMerchantBooksAdsUpdateStatus**](P2PApi.md#p2pMerchantBooksAdsUpdateStatus) | **POST** /p2p/merchant/books/ads_update_status | Update ad status
[**p2pMerchantBooksAdsDetail**](P2PApi.md#p2pMerchantBooksAdsDetail) | **POST** /p2p/merchant/books/ads_detail | Query ad details
[**p2pMerchantBooksMyAdsList**](P2PApi.md#p2pMerchantBooksMyAdsList) | **POST** /p2p/merchant/books/my_ads_list | Get my ad list
[**p2pMerchantChatGetChatsList**](P2PApi.md#p2pMerchantChatGetChatsList) | **POST** /p2p/merchant/chat/get_chats_list | Get chat history
[**p2pMerchantChatSendChatMessage**](P2PApi.md#p2pMerchantChatSendChatMessage) | **POST** /p2p/merchant/chat/send_chat_message | Send text message
[**p2pMerchantChatUploadChatFile**](P2PApi.md#p2pMerchantChatUploadChatFile) | **POST** /p2p/merchant/chat/upload_chat_file | Upload chat file


## p2pMerchantAccountGetUserInfo

> \GateApi\Model\InlineResponse20014 p2pMerchantAccountGetUserInfo()

Get account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->p2pMerchantAccountGetUserInfo();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantAccountGetUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantAccountGetCounterpartyUserInfo

> \GateApi\Model\InlineResponse20015 p2pMerchantAccountGetCounterpartyUserInfo($biz_uid)

Get counterparty information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$biz_uid = 'biz_uid_example'; // string | Counterparty UID (encrypted)

try {
    $result = $apiInstance->p2pMerchantAccountGetCounterpartyUserInfo($biz_uid);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantAccountGetCounterpartyUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biz_uid** | **string**| Counterparty UID (encrypted) |

### Return type

[**\GateApi\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantAccountGetMyselfPayment

> \GateApi\Model\InlineResponse20016 p2pMerchantAccountGetMyselfPayment($fiat)

Get payment method list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiat = 'fiat_example'; // string | Fiat currency

try {
    $result = $apiInstance->p2pMerchantAccountGetMyselfPayment($fiat);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantAccountGetMyselfPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiat** | **string**| Fiat currency | [optional]

### Return type

[**\GateApi\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionGetPendingTransactionList

> \GateApi\Model\InlineResponse20017 p2pMerchantTransactionGetPendingTransactionList($crypto_currency, $fiat_currency, $order_tab, $select_type, $status, $txid, $start_time, $end_time)

Get pending orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$crypto_currency = 'crypto_currency_example'; // string | Cryptocurrency
$fiat_currency = 'fiat_currency_example'; // string | Fiat currency
$order_tab = 'order_tab_example'; // string | 订单标签页，默认pending（pending：处理中（pending:  AND status in ('OPEN', 'PAID', 'LOCKED', 'TEMP')）；dispute：申诉中（status in ('ACCEPT', 'BCLOSED', 'CANCEL', 'BECANCEL', 'SCLOSED', 'SCANCEL')))
$select_type = 'select_type_example'; // string | Buy/Sell (sell=Sell, buy=Buy, others=All)
$status = 'status_example'; // string | Order Status (dispute: Disputed Order; closed: ACCEPT, BCLOSED; cancel: CANCEL, BECANCEL, SCLOSED, SCANCEL; locked: LOCKED; open: OPEN; paid: PAID; completed: CANCEL, BECANCEL, SCLOSED, SCANCEL, ACCEPT, BCLOSED)
$txid = 56; // int | Order ID
$start_time = 56; // int | Start timestamp, default is 00:00 89 days ago
$end_time = 56; // int | End timestamp, default is 23:59:59 today

try {
    $result = $apiInstance->p2pMerchantTransactionGetPendingTransactionList($crypto_currency, $fiat_currency, $order_tab, $select_type, $status, $txid, $start_time, $end_time);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionGetPendingTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_currency** | **string**| Cryptocurrency |
 **fiat_currency** | **string**| Fiat currency |
 **order_tab** | **string**| 订单标签页，默认pending（pending：处理中（pending:  AND status in (&#39;OPEN&#39;, &#39;PAID&#39;, &#39;LOCKED&#39;, &#39;TEMP&#39;)）；dispute：申诉中（status in (&#39;ACCEPT&#39;, &#39;BCLOSED&#39;, &#39;CANCEL&#39;, &#39;BECANCEL&#39;, &#39;SCLOSED&#39;, &#39;SCANCEL&#39;))) | [optional]
 **select_type** | **string**| Buy/Sell (sell&#x3D;Sell, buy&#x3D;Buy, others&#x3D;All) | [optional]
 **status** | **string**| Order Status (dispute: Disputed Order; closed: ACCEPT, BCLOSED; cancel: CANCEL, BECANCEL, SCLOSED, SCANCEL; locked: LOCKED; open: OPEN; paid: PAID; completed: CANCEL, BECANCEL, SCLOSED, SCANCEL, ACCEPT, BCLOSED) | [optional]
 **txid** | **int**| Order ID | [optional]
 **start_time** | **int**| Start timestamp, default is 00:00 89 days ago | [optional]
 **end_time** | **int**| End timestamp, default is 23:59:59 today | [optional]

### Return type

[**\GateApi\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionGetCompletedTransactionList

> \GateApi\Model\InlineResponse20017 p2pMerchantTransactionGetCompletedTransactionList($crypto_currency, $fiat_currency, $select_type, $status, $txid, $start_time, $end_time, $query_dispute, $page, $per_page)

Get all/historical orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$crypto_currency = 'crypto_currency_example'; // string | Cryptocurrency
$fiat_currency = 'fiat_currency_example'; // string | Fiat currency
$select_type = 'select_type_example'; // string | Buy/Sell (sell=Sell, buy=Buy, others=All)
$status = 'status_example'; // string | Order Status (dispute: Disputed Order; closed: ACCEPT, BCLOSED; cancel: CANCEL, BECANCEL, SCLOSED, SCANCEL; locked: LOCKED; open: OPEN; paid: PAID; completed: CANCEL, BECANCEL, SCLOSED, SCANCEL, ACCEPT, BCLOSED)
$txid = 56; // int | Order ID
$start_time = 56; // int | Start timestamp, default is 00:00 89 days ago
$end_time = 56; // int | End timestamp, default is 23:59:59 today
$query_dispute = 56; // int | 1: Include appeal status, 0: None
$page = 56; // int | page number
$per_page = 56; // int | Number of orders per page

try {
    $result = $apiInstance->p2pMerchantTransactionGetCompletedTransactionList($crypto_currency, $fiat_currency, $select_type, $status, $txid, $start_time, $end_time, $query_dispute, $page, $per_page);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionGetCompletedTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_currency** | **string**| Cryptocurrency |
 **fiat_currency** | **string**| Fiat currency |
 **select_type** | **string**| Buy/Sell (sell&#x3D;Sell, buy&#x3D;Buy, others&#x3D;All) | [optional]
 **status** | **string**| Order Status (dispute: Disputed Order; closed: ACCEPT, BCLOSED; cancel: CANCEL, BECANCEL, SCLOSED, SCANCEL; locked: LOCKED; open: OPEN; paid: PAID; completed: CANCEL, BECANCEL, SCLOSED, SCANCEL, ACCEPT, BCLOSED) | [optional]
 **txid** | **int**| Order ID | [optional]
 **start_time** | **int**| Start timestamp, default is 00:00 89 days ago | [optional]
 **end_time** | **int**| End timestamp, default is 23:59:59 today | [optional]
 **query_dispute** | **int**| 1: Include appeal status, 0: None | [optional]
 **page** | **int**| page number | [optional]
 **per_page** | **int**| Number of orders per page | [optional]

### Return type

[**\GateApi\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionGetTransactionDetails

> \GateApi\Model\InlineResponse20018 p2pMerchantTransactionGetTransactionDetails($txid, $channel)

Query order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 56; // int | Order ID
$channel = 'channel_example'; // string | Empty or web3

try {
    $result = $apiInstance->p2pMerchantTransactionGetTransactionDetails($txid, $channel);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionGetTransactionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **int**| Order ID |
 **channel** | **string**| Empty or web3 | [optional]

### Return type

[**\GateApi\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionConfirmPayment

> \GateApi\Model\InlineResponse2007 p2pMerchantTransactionConfirmPayment($inline_object10)

Confirm payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object10 = new \GateApi\Model\InlineObject10(); // \GateApi\Model\InlineObject10 | 

try {
    $result = $apiInstance->p2pMerchantTransactionConfirmPayment($inline_object10);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionConfirmPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object10** | [**\GateApi\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionConfirmReceipt

> \GateApi\Model\InlineResponse2007 p2pMerchantTransactionConfirmReceipt($inline_object11)

Confirm receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object11 = new \GateApi\Model\InlineObject11(); // \GateApi\Model\InlineObject11 | 

try {
    $result = $apiInstance->p2pMerchantTransactionConfirmReceipt($inline_object11);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionConfirmReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object11** | [**\GateApi\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantTransactionCancel

> \GateApi\Model\InlineResponse2007 p2pMerchantTransactionCancel($inline_object12)

Cancel order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object12 = new \GateApi\Model\InlineObject12(); // \GateApi\Model\InlineObject12 | 

try {
    $result = $apiInstance->p2pMerchantTransactionCancel($inline_object12);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantTransactionCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object12** | [**\GateApi\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

[**\GateApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantBooksPlaceBizPushOrder

> object p2pMerchantBooksPlaceBizPushOrder($currency_type, $exchange_type, $type, $unit_price, $number, $min_amount, $max_amount, $pay_type, $pay_type_json, $rate_fixed, $oid, $tier_limit, $verified_limit, $reg_time_limit, $advertisers_limit, $hide_payment, $expire_min, $trade_tips, $auto_reply, $min_completed_limit, $max_completed_limit, $completed_rate_limit, $user_country_limit, $user_order_limit, $rate_reference_id, $rate_offset, $float_trend)

Publish ad order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_type = 'currency_type_example'; // string | Cryptocurrency
$exchange_type = 'exchange_type_example'; // string | Fiat currency
$type = 'type_example'; // string | Ad type: 0=Sell, 1=Buy, 2=Edit sell, 3=Edit buy
$unit_price = 'unit_price_example'; // string | Unit price
$number = 'number_example'; // string | Size
$min_amount = 'min_amount_example'; // string | Minimum transaction amount per order
$max_amount = 'max_amount_example'; // string | Maximum transaction amount per order
$pay_type = 'pay_type_example'; // string | Payment method
$pay_type_json = 'pay_type_json_example'; // string | Payment method JSON string
$rate_fixed = 'rate_fixed_example'; // string | Price type: 0-Floating price, 1-Fixed price
$oid = 'oid_example'; // string | Ad ID when editing
$tier_limit = 'tier_limit_example'; // string | Order tier limit
$verified_limit = 'verified_limit_example'; // string | Verification level limit
$reg_time_limit = 'reg_time_limit_example'; // string | Registration time limit
$advertisers_limit = 'advertisers_limit_example'; // string | Advertiser restriction
$hide_payment = 'hide_payment_example'; // string | Whether to hide payment method: 1=Yes, 0=No
$expire_min = 'expire_min_example'; // string | Ad expiration time (minutes)
$trade_tips = 'trade_tips_example'; // string | Trading terms
$auto_reply = 'auto_reply_example'; // string | Auto reply
$min_completed_limit = 'min_completed_limit_example'; // string | Minimum limit of completed orders
$max_completed_limit = 'max_completed_limit_example'; // string | Maximum limit of completed orders
$completed_rate_limit = 'completed_rate_limit_example'; // string | 30-day completion rate limit
$user_country_limit = 'user_country_limit_example'; // string | KYC nationality restriction
$user_order_limit = 'user_order_limit_example'; // string | Order count limit
$rate_reference_id = 'rate_reference_id_example'; // string | Reference exchange rate ID
$rate_offset = 'rate_offset_example'; // string | Reference exchange rate offset
$float_trend = 'float_trend_example'; // string | 444

try {
    $result = $apiInstance->p2pMerchantBooksPlaceBizPushOrder($currency_type, $exchange_type, $type, $unit_price, $number, $min_amount, $max_amount, $pay_type, $pay_type_json, $rate_fixed, $oid, $tier_limit, $verified_limit, $reg_time_limit, $advertisers_limit, $hide_payment, $expire_min, $trade_tips, $auto_reply, $min_completed_limit, $max_completed_limit, $completed_rate_limit, $user_country_limit, $user_order_limit, $rate_reference_id, $rate_offset, $float_trend);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantBooksPlaceBizPushOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_type** | **string**| Cryptocurrency |
 **exchange_type** | **string**| Fiat currency |
 **type** | **string**| Ad type: 0&#x3D;Sell, 1&#x3D;Buy, 2&#x3D;Edit sell, 3&#x3D;Edit buy |
 **unit_price** | **string**| Unit price |
 **number** | **string**| Size |
 **min_amount** | **string**| Minimum transaction amount per order |
 **max_amount** | **string**| Maximum transaction amount per order |
 **pay_type** | **string**| Payment method | [optional]
 **pay_type_json** | **string**| Payment method JSON string | [optional]
 **rate_fixed** | **string**| Price type: 0-Floating price, 1-Fixed price | [optional]
 **oid** | **string**| Ad ID when editing | [optional]
 **tier_limit** | **string**| Order tier limit | [optional]
 **verified_limit** | **string**| Verification level limit | [optional]
 **reg_time_limit** | **string**| Registration time limit | [optional]
 **advertisers_limit** | **string**| Advertiser restriction | [optional]
 **hide_payment** | **string**| Whether to hide payment method: 1&#x3D;Yes, 0&#x3D;No | [optional]
 **expire_min** | **string**| Ad expiration time (minutes) | [optional]
 **trade_tips** | **string**| Trading terms | [optional]
 **auto_reply** | **string**| Auto reply | [optional]
 **min_completed_limit** | **string**| Minimum limit of completed orders | [optional]
 **max_completed_limit** | **string**| Maximum limit of completed orders | [optional]
 **completed_rate_limit** | **string**| 30-day completion rate limit | [optional]
 **user_country_limit** | **string**| KYC nationality restriction | [optional]
 **user_order_limit** | **string**| Order count limit | [optional]
 **rate_reference_id** | **string**| Reference exchange rate ID | [optional]
 **rate_offset** | **string**| Reference exchange rate offset | [optional]
 **float_trend** | **string**| 444 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantBooksAdsUpdateStatus

> \GateApi\Model\InlineResponse20019 p2pMerchantBooksAdsUpdateStatus($adv_no, $adv_status, $trade_type)

Update ad status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adv_no = 56; // int | Ad ID
$adv_status = 56; // int | Ad status: 1=Active, 3=Inactive, 4=Closed
$trade_type = 'sell'; // string | Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME <EMAIL@ADDRESS> Language: en Language-Team: en <L@li.org> Plural-Forms: nplurals=2; plural=(n !=1) MIME-Version: 1.0 Content-Type: text/plain; charset=utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0

try {
    $result = $apiInstance->p2pMerchantBooksAdsUpdateStatus($adv_no, $adv_status, $trade_type);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantBooksAdsUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adv_no** | **int**| Ad ID |
 **adv_status** | **int**| Ad status: 1&#x3D;Active, 3&#x3D;Inactive, 4&#x3D;Closed |
 **trade_type** | **string**| Project-Id-Version: GateApiTools 1.0.0 Report-Msgid-Bugs-To: EMAIL@ADDRESS POT-Creation-Date: 2025-11-12 18:14+0800 PO-Revision-Date: 2019-01-02 17:30+0800 Last-Translator: FULL NAME &lt;EMAIL@ADDRESS&gt; Language: en Language-Team: en &lt;L@li.org&gt; Plural-Forms: nplurals&#x3D;2; plural&#x3D;(n !&#x3D;1) MIME-Version: 1.0 Content-Type: text/plain; charset&#x3D;utf-8 Content-Transfer-Encoding: 8bit Generated-By: Babel 2.8.0 | [optional]

### Return type

[**\GateApi\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantBooksAdsDetail

> \GateApi\Model\InlineResponse20020 p2pMerchantBooksAdsDetail($adv_no)

Query ad details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adv_no = 'adv_no_example'; // string | 

try {
    $result = $apiInstance->p2pMerchantBooksAdsDetail($adv_no);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantBooksAdsDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adv_no** | **string**|  |

### Return type

[**\GateApi\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantBooksMyAdsList

> \GateApi\Model\InlineResponse20021 p2pMerchantBooksMyAdsList($asset, $fiat_unit, $trade_type)

Get my ad list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | Cryptocurrency
$fiat_unit = 'fiat_unit_example'; // string | Fiat currency
$trade_type = 'trade_type_example'; // string | Buy/Sell

try {
    $result = $apiInstance->p2pMerchantBooksMyAdsList($asset, $fiat_unit, $trade_type);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantBooksMyAdsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Cryptocurrency | [optional]
 **fiat_unit** | **string**| Fiat currency | [optional]
 **trade_type** | **string**| Buy/Sell | [optional]

### Return type

[**\GateApi\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantChatGetChatsList

> \GateApi\Model\InlineResponse20022 p2pMerchantChatGetChatsList($txid, $lastreceived, $firstreceived)

Get chat history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 56; // int | Order ID
$lastreceived = 56; // int | Pagination timestamp (forward)
$firstreceived = 56; // int | Pagination timestamp (backward)

try {
    $result = $apiInstance->p2pMerchantChatGetChatsList($txid, $lastreceived, $firstreceived);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantChatGetChatsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **int**| Order ID |
 **lastreceived** | **int**| Pagination timestamp (forward) | [optional]
 **firstreceived** | **int**| Pagination timestamp (backward) | [optional]

### Return type

[**\GateApi\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantChatSendChatMessage

> \GateApi\Model\InlineResponse20023 p2pMerchantChatSendChatMessage($txid, $message, $type)

Send text message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 56; // int | Order ID
$message = 'message_example'; // string | Message content
$type = 56; // int | 0=Text, 1=File (video or image), default is 0 if not provided

try {
    $result = $apiInstance->p2pMerchantChatSendChatMessage($txid, $message, $type);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantChatSendChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **int**| Order ID |
 **message** | **string**| Message content |
 **type** | **int**| 0&#x3D;Text, 1&#x3D;File (video or image), default is 0 if not provided | [optional]

### Return type

[**\GateApi\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## p2pMerchantChatUploadChatFile

> \GateApi\Model\InlineResponse20024 p2pMerchantChatUploadChatFile($image_content_type, $base64_img)

Upload chat file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\P2PApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_content_type = 'image_content_type_example'; // string | File type, currently only images and videos are supported
$base64_img = 'base64_img_example'; // string | File content (base64 encoded)

try {
    $result = $apiInstance->p2pMerchantChatUploadChatFile($image_content_type, $base64_img);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling P2PApi->p2pMerchantChatUploadChatFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_content_type** | **string**| File type, currently only images and videos are supported |
 **base64_img** | **string**| File content (base64 encoded) |

### Return type

[**\GateApi\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

