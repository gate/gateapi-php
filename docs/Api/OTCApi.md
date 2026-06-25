# GateApi\OTCApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOtcQuote**](OTCApi.md#createOtcQuote) | **POST** /otc/quote | Fiat and stablecoin quote
[**createOtcOrder**](OTCApi.md#createOtcOrder) | **POST** /otc/order/create | Create fiat order
[**createStableCoinOrder**](OTCApi.md#createStableCoinOrder) | **POST** /otc/stable_coin/order/create | Create stablecoin order
[**getBankListInnerPath**](OTCApi.md#getBankListInnerPath) | **GET** /otc/bank/list | Get user bank card list
[**createOtcBank**](OTCApi.md#createOtcBank) | **POST** /otc/bank/create | Create bank card
[**deleteOtcBank**](OTCApi.md#deleteOtcBank) | **POST** /otc/bank/delete | Delete bank card
[**setDefaultOtcBank**](OTCApi.md#setDefaultOtcBank) | **POST** /otc/bank/set_default | Set default bank card
[**getOtcBankSupplementChecklist**](OTCApi.md#getOtcBankSupplementChecklist) | **GET** /otc/bank/bank_supplement_checklist | Query the checklist of materials to supplement for a bank card
[**submitOtcBankPersonalSupplement**](OTCApi.md#submitOtcBankPersonalSupplement) | **POST** /otc/bank/personal/bank_supplement | Submit Bank Card Supplement Materials (Personal)
[**submitOtcBankEnterpriseSupplement**](OTCApi.md#submitOtcBankEnterpriseSupplement) | **POST** /otc/bank/enterprise/bank_supplement | Submit Bank Card Supplement Materials (Enterprise)
[**markOtcOrderPaid**](OTCApi.md#markOtcOrderPaid) | **POST** /otc/order/paid | Mark fiat order as paid (deposit confirmation)
[**cancelOtcOrder**](OTCApi.md#cancelOtcOrder) | **POST** /otc/order/cancel | Fiat order cancellation
[**listOtcOrders**](OTCApi.md#listOtcOrders) | **GET** /otc/order/list | Fiat order list
[**listStableCoinOrders**](OTCApi.md#listStableCoinOrders) | **GET** /otc/stable_coin/order/list | Stablecoin order list
[**getOtcOrderDetail**](OTCApi.md#getOtcOrderDetail) | **GET** /otc/order/detail | Fiat order details


## createOtcQuote

> \GateApi\Model\OtcQuoteResponse createOtcQuote($otc_quote_request)

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
$otc_quote_request = new \GateApi\Model\OtcQuoteRequest(); // \GateApi\Model\OtcQuoteRequest | 

try {
    $result = $apiInstance->createOtcQuote($otc_quote_request);
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
 **otc_quote_request** | [**\GateApi\Model\OtcQuoteRequest**](../Model/OtcQuoteRequest.md)|  |

### Return type

[**\GateApi\Model\OtcQuoteResponse**](../Model/OtcQuoteResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOtcOrder

> \GateApi\Model\OtcActionResponse createOtcOrder($otc_order_request)

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
$otc_order_request = new \GateApi\Model\OtcOrderRequest(); // \GateApi\Model\OtcOrderRequest | 

try {
    $result = $apiInstance->createOtcOrder($otc_order_request);
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
 **otc_order_request** | [**\GateApi\Model\OtcOrderRequest**](../Model/OtcOrderRequest.md)|  |

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStableCoinOrder

> \GateApi\Model\OtcStableCoinOrderCreateResponse createStableCoinOrder($otc_stable_coin_order_request)

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
$otc_stable_coin_order_request = new \GateApi\Model\OtcStableCoinOrderRequest(); // \GateApi\Model\OtcStableCoinOrderRequest | 

try {
    $result = $apiInstance->createStableCoinOrder($otc_stable_coin_order_request);
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
 **otc_stable_coin_order_request** | [**\GateApi\Model\OtcStableCoinOrderRequest**](../Model/OtcStableCoinOrderRequest.md)|  |

### Return type

[**\GateApi\Model\OtcStableCoinOrderCreateResponse**](../Model/OtcStableCoinOrderCreateResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankListInnerPath

> \GateApi\Model\OtcBankListResponse getBankListInnerPath()

Get user bank card list

Retrieve the user's bank card list, used to select a bank card when placing an order. **Default card**: refer to the list item field `is_default` (1=default); there is no need to call the deprecated standalone \"default bank card\" endpoint. Corresponding Inner: `GET /bank_list` or `GET /bank/list`.

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
    $result = $apiInstance->getBankListInnerPath();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->getBankListInnerPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\OtcBankListResponse**](../Model/OtcBankListResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOtcBank

> \GateApi\Model\OtcBankCreateResponse createOtcBank($bank_account_name, $bank_name, $bank_country, $bank_address, $iban, $swift, $documentation_file, $remittance_line_number, $agent_bank_name, $agent_bank_swift)

Create bank card

Bind a bank card. Under the Global entity, an account with a non-matching name may enter manual review (`status` pending) and require subsequent supplementary materials. Corresponding Inner: `POST /bank/create`. Fields and protocol are subject to the production form/gateway; in some environments `bank_account_name` is passed Base64-encoded, see the integration notes for details.

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
$bank_account_name = 'bank_account_name_example'; // string | 
$bank_name = 'bank_name_example'; // string | 
$bank_country = 'bank_country_example'; // string | 
$bank_address = 'bank_address_example'; // string | 
$iban = 'iban_example'; // string | 
$swift = 'swift_example'; // string | 
$documentation_file = "/path/to/file.txt"; // \SplFileObject | Account-opening proof file (jpg/jpeg/png/pdf, etc.; single file ≤4MB — subject to production environment).
$remittance_line_number = 'remittance_line_number_example'; // string | 
$agent_bank_name = 'agent_bank_name_example'; // string | 
$agent_bank_swift = 'agent_bank_swift_example'; // string | 

try {
    $result = $apiInstance->createOtcBank($bank_account_name, $bank_name, $bank_country, $bank_address, $iban, $swift, $documentation_file, $remittance_line_number, $agent_bank_name, $agent_bank_swift);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->createOtcBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_name** | **string**|  |
 **bank_name** | **string**|  |
 **bank_country** | **string**|  |
 **bank_address** | **string**|  |
 **iban** | **string**|  |
 **swift** | **string**|  |
 **documentation_file** | **\SplFileObject****\SplFileObject**| Account-opening proof file (jpg/jpeg/png/pdf, etc.; single file ≤4MB — subject to production environment). |
 **remittance_line_number** | **string**|  | [optional]
 **agent_bank_name** | **string**|  | [optional]
 **agent_bank_swift** | **string**|  | [optional]

### Return type

[**\GateApi\Model\OtcBankCreateResponse**](../Model/OtcBankCreateResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOtcBank

> \GateApi\Model\OtcActionResponse deleteOtcBank($otc_bank_id_request)

Delete bank card

Delete the specified bank card. Corresponds to Inner: `POST /bank/delete`.

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
$otc_bank_id_request = new \GateApi\Model\OtcBankIdRequest(); // \GateApi\Model\OtcBankIdRequest | 

try {
    $result = $apiInstance->deleteOtcBank($otc_bank_id_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->deleteOtcBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **otc_bank_id_request** | [**\GateApi\Model\OtcBankIdRequest**](../Model/OtcBankIdRequest.md)|  |

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setDefaultOtcBank

> \GateApi\Model\OtcActionResponse setDefaultOtcBank($otc_bank_id_request)

Set default bank card

Set the specified bank card as default. Corresponds to Inner: `POST /bank/set_default`.

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
$otc_bank_id_request = new \GateApi\Model\OtcBankIdRequest(); // \GateApi\Model\OtcBankIdRequest | 

try {
    $result = $apiInstance->setDefaultOtcBank($otc_bank_id_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->setDefaultOtcBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **otc_bank_id_request** | [**\GateApi\Model\OtcBankIdRequest**](../Model/OtcBankIdRequest.md)|  |

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOtcBankSupplementChecklist

> \GateApi\Model\OtcBankSupplementChecklistResponse getOtcBankSupplementChecklist($bank_id)

Query the checklist of materials to supplement for a bank card

**①** `bank_id` must be specified: after verifying that the card belongs to the current user and its status allows supplementation, returns the items to be supplemented and whether each sub-item is required, based on the user's **passed professional verification type** (personal/enterprise). Corresponding Inner: `GET /bank/bank_supplement_checklist`.

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
$bank_id = 'bank_id_example'; // string | Bank card ID (otc_rds / the id returned by the list endpoint).

try {
    $result = $apiInstance->getOtcBankSupplementChecklist($bank_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->getOtcBankSupplementChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**| Bank card ID (otc_rds / the id returned by the list endpoint). |

### Return type

[**\GateApi\Model\OtcBankSupplementChecklistResponse**](../Model/OtcBankSupplementChecklistResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## submitOtcBankPersonalSupplement

> \GateApi\Model\OtcActionResponse submitOtcBankPersonalSupplement($bank_id, $id_document_front, $id_document_back, $address_proof)

Submit Bank Card Supplement Materials (Personal)

**Personal professional verification (type=1)** users submit non-same-person/supplementary materials. Must match `user_type=personal` returned by `GET /otc/bank/bank_supplement_checklist?bank_id=`, otherwise the request is rejected. **multipart/form-data** is recommended: each material item is a separate file field, with field names matching the checklist `code` (`id_document_front`, `id_document_back`, `address_proof`).

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
$bank_id = 'bank_id_example'; // string | 
$id_document_front = 'id_document_front_example'; // string | ID document front-side file content (multipart file field, binary/Base64)
$id_document_back = 'id_document_back_example'; // string | ID document back-side file content (multipart file field, binary/Base64)
$address_proof = 'address_proof_example'; // string | Proof-of-address file content (multipart file field, binary/Base64)

try {
    $result = $apiInstance->submitOtcBankPersonalSupplement($bank_id, $id_document_front, $id_document_back, $address_proof);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->submitOtcBankPersonalSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**|  |
 **id_document_front** | **string**| ID document front-side file content (multipart file field, binary/Base64) |
 **id_document_back** | **string**| ID document back-side file content (multipart file field, binary/Base64) |
 **address_proof** | **string**| Proof-of-address file content (multipart file field, binary/Base64) |

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## submitOtcBankEnterpriseSupplement

> \GateApi\Model\OtcActionResponse submitOtcBankEnterpriseSupplement($bank_id, $certificate, $share_holders, $passport, $share_holding_structure, $uid, $funds_statement, $additional)

Submit Bank Card Supplement Materials (Enterprise)

**Enterprise professional verification (type=2)** users submit supplementary materials. Must match `user_type=enterprise` returned by the checklist. **multipart** file field names: `certificate`, `share_holders`, `passport`, `share_holding_structure`.

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
$bank_id = 'bank_id_example'; // string | 
$certificate = 'certificate_example'; // string | Business license / registration certificate file content (multipart file field, binary/Base64)
$share_holders = 'share_holders_example'; // string | Register of shareholders file content (multipart file field, binary/Base64)
$passport = 'passport_example'; // string | Legal representative / shareholder passport file content (multipart file field, binary/Base64)
$share_holding_structure = 'share_holding_structure_example'; // string | Ownership structure chart file content (multipart file field, binary/Base64)
$uid = 'uid_example'; // string | 
$funds_statement = 'funds_statement_example'; // string | Proof-of-funds file content (multipart file field, binary/Base64, optional)
$additional = 'additional_example'; // string | Other supplementary material file content (multipart file field, binary/Base64, optional)

try {
    $result = $apiInstance->submitOtcBankEnterpriseSupplement($bank_id, $certificate, $share_holders, $passport, $share_holding_structure, $uid, $funds_statement, $additional);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->submitOtcBankEnterpriseSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**|  |
 **certificate** | **string**| Business license / registration certificate file content (multipart file field, binary/Base64) |
 **share_holders** | **string**| Register of shareholders file content (multipart file field, binary/Base64) |
 **passport** | **string**| Legal representative / shareholder passport file content (multipart file field, binary/Base64) |
 **share_holding_structure** | **string**| Ownership structure chart file content (multipart file field, binary/Base64) |
 **uid** | **string**|  | [optional]
 **funds_statement** | **string**| Proof-of-funds file content (multipart file field, binary/Base64, optional) | [optional]
 **additional** | **string**| Other supplementary material file content (multipart file field, binary/Base64, optional) | [optional]

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## markOtcOrderPaid

> \GateApi\Model\OtcActionResponse markOtcOrderPaid($otc_mark_order_paid_request)

Mark fiat order as paid (deposit confirmation)

Mark a fiat buy order as paid (deposit confirmation). **The user's payment receipt must be uploaded**: `payment_receipt_file_key` is required; file format jpg / jpeg / png / pdf, single file no larger than 4MB (jointly validated by the server and gateway). The compatible field name `payment_receipt` is subject to the gateway/production environment. For the persisted field, see `otc_trade_record.payment_receipt_file_key`. The Pay Inner path is `POST .../pay/order_set_paid` (orders are usually associated via `client_order_id`); this OpenAPI path maps to Inner `POST /order/paid` and still uses `order_id` as the primary key—if the gateway unifies it to the merchant order number, the gateway documentation prevails.

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
$otc_mark_order_paid_request = new \GateApi\Model\OtcMarkOrderPaidRequest(); // \GateApi\Model\OtcMarkOrderPaidRequest | 

try {
    $result = $apiInstance->markOtcOrderPaid($otc_mark_order_paid_request);
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
 **otc_mark_order_paid_request** | [**\GateApi\Model\OtcMarkOrderPaidRequest**](../Model/OtcMarkOrderPaidRequest.md)|  |

### Return type

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOtcOrder

> \GateApi\Model\OtcActionResponse cancelOtcOrder($order_id)

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

[**\GateApi\Model\OtcActionResponse**](../Model/OtcActionResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOtcOrders

> \GateApi\Model\OtcOrderListResponse listOtcOrders($type, $fiat_currency, $crypto_currency, $start_time, $end_time, $status, $pn, $ps)

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
$associate_array['status'] = 'status_example'; // string | DONE: Completed CANCEL: Canceled PROCESSING: In Progress
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
 **status** | **string**| DONE: Completed CANCEL: Canceled PROCESSING: In Progress | [optional]
 **pn** | **string**| Page number | [optional]
 **ps** | **string**| Number of items per page | [optional]

### Return type

[**\GateApi\Model\OtcOrderListResponse**](../Model/OtcOrderListResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listStableCoinOrders

> \GateApi\Model\OtcStableCoinOrderListResponse listStableCoinOrders($page_size, $page_number, $coin_name, $start_time, $end_time, $status)

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

[**\GateApi\Model\OtcStableCoinOrderListResponse**](../Model/OtcStableCoinOrderListResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOtcOrderDetail

> \GateApi\Model\OtcOrderDetailResponse getOtcOrderDetail($order_id)

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

[**\GateApi\Model\OtcOrderDetailResponse**](../Model/OtcOrderDetailResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

