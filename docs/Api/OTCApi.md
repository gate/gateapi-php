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
[**createOtcUploadPreUpload**](OTCApi.md#createOtcUploadPreUpload) | **POST** /otc/upload/pre_upload | Pre-upload file (temporary bucket)
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

Create a stablecoin order. All request body fields except `promotion_code` are required.

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

List the user's bank cards for selecting a card when placing an order. **Default card**: use the `is_default` field in each list item (`1` indicates the default). The deprecated standalone default-bank-card endpoint is no longer required.

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

> \GateApi\Model\OtcBankCreateResponse createOtcBank($bank_account_name, $bank_name, $bank_country, $bank_address, $iban, $swift, $remittance_line_number, $agent_bank_name, $agent_bank_swift, $documentation_file, $documentation_file_key, $file_type)

Create bank card

Bind a bank card. Under the Global entity, non-same-name accounts may enter manual review (`status` pending) and require supplementary materials later. Corresponds to Inner: `POST /bank/create`. Fields and protocol follow the live form/gateway; `bank_account_name` may be Base64-encoded in some environments—see integration notes.  Account-opening proof supports two methods (choose one):  1. **Pre-upload (recommended)**: call `POST /otc/upload/pre_upload` (`scene=bank`) to obtain a temporary-bucket Policy and upload directly to S3, then pass `documentation_file_key` + `file_type` in this endpoint; 2. **Multipart direct upload**: pass the `documentation_file` file field; the server writes directly to the production bucket.  When using pre-upload, the server validates object existence and that the uid in the `file_key` path matches the caller; after validation, the object is moved to the production bucket and persisted. Cross-user references return `Invalid parameters file_key`; incomplete direct upload returns `Invalid parameters file not uploaded`.

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
$remittance_line_number = 'remittance_line_number_example'; // string | 
$agent_bank_name = 'agent_bank_name_example'; // string | 
$agent_bank_swift = 'agent_bank_swift_example'; // string | 
$documentation_file = 'documentation_file_example'; // string | Multipart direct upload; mutually exclusive with documentation_file_key
$documentation_file_key = 'documentation_file_key_example'; // string | Pre-upload mode; file_key returned by pre_upload (plaintext or base64 accepted)
$file_type = 'file_type_example'; // string | Required when using documentation_file_key; plaintext MIME or its base64

try {
    $result = $apiInstance->createOtcBank($bank_account_name, $bank_name, $bank_country, $bank_address, $iban, $swift, $remittance_line_number, $agent_bank_name, $agent_bank_swift, $documentation_file, $documentation_file_key, $file_type);
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
 **remittance_line_number** | **string**|  | [optional]
 **agent_bank_name** | **string**|  | [optional]
 **agent_bank_swift** | **string**|  | [optional]
 **documentation_file** | **string**| Multipart direct upload; mutually exclusive with documentation_file_key | [optional]
 **documentation_file_key** | **string**| Pre-upload mode; file_key returned by pre_upload (plaintext or base64 accepted) | [optional]
 **file_type** | **string**| Required when using documentation_file_key; plaintext MIME or its base64 | [optional]

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

**①** `bank_id` must be specified. After verifying that the card belongs to the current user and its status allows supplementary documents, the endpoint returns the required items based on the user's **approved advanced verification type** (personal/enterprise); each item's `description` states the submission requirements. Corresponding Inner endpoint: `GET /bank/bank_supplement_checklist`.

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

> \GateApi\Model\OtcActionResponse submitOtcBankPersonalSupplement($bank_id, $id_document_front, $id_document_back, $address_proof, $relationship_proof)

Submit Bank Card Supplement Materials (Personal)

**Personal professional verification (type=1)** users submit non-same-person/supplementary materials. Must match `user_type=personal` from `GET /otc/bank/bank_supplement_checklist?bank_id=`; otherwise rejected.  Two submission methods (can be mixed):  1. **Pre-upload (recommended)**: call `POST /otc/upload/pre_upload` (`scene=bank`) to upload to the temporary bucket, then fill file items by category in the `relationship_proof` JSON; pass **`key` as plaintext** object path (`base64_decode(pre_upload.file_key)`, e.g. `otc_temp/{uid}/bank/xxx.png`), and `file_type` as plaintext MIME; the server base64-encodes before persistence—do not pass base64 `file_key` directly; 2. **Multipart direct upload**: one file field per material item; field names match checklist `code` (`id_document_front`, `id_document_back`, `address_proof`).

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
$relationship_proof = 'relationship_proof_example'; // string | Optional. JSON string of relationship_proof.

try {
    $result = $apiInstance->submitOtcBankPersonalSupplement($bank_id, $id_document_front, $id_document_back, $address_proof, $relationship_proof);
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
 **id_document_front** | **string**| ID document front-side file content (multipart file field, binary/Base64) | [optional]
 **id_document_back** | **string**| ID document back-side file content (multipart file field, binary/Base64) | [optional]
 **address_proof** | **string**| Proof-of-address file content (multipart file field, binary/Base64) | [optional]
 **relationship_proof** | **string**| Optional. JSON string of relationship_proof. | [optional]

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

> \GateApi\Model\OtcActionResponse submitOtcBankEnterpriseSupplement($bank_id, $uid, $certificate, $share_holders, $passport, $share_holding_structure, $funds_statement, $additional, $relationship_proof)

Submit Bank Card Supplement Materials (Enterprise)

**Enterprise professional verification (type=2)** users submit supplementary materials. Must match `user_type=enterprise` from the checklist.  Two submission methods (can be mixed):  1. **Pre-upload (recommended)**: call `POST /otc/upload/pre_upload` (`scene=bank`), fill file items by category in `relationship_proof`; pass **`key` as plaintext** object path (`base64_decode(pre_upload.file_key)`), and `file_type` as plaintext MIME; 2. **Multipart direct upload**: file field names `certificate`, `share_holders`, `passport`, `share_holding_structure`; optional `funds_statement`, `additional`.

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
$uid = 'uid_example'; // string | 
$certificate = 'certificate_example'; // string | Business license / registration certificate file content (multipart file field, binary/Base64)
$share_holders = 'share_holders_example'; // string | Register of shareholders file content (multipart file field, binary/Base64)
$passport = 'passport_example'; // string | Legal representative / shareholder passport file content (multipart file field, binary/Base64)
$share_holding_structure = 'share_holding_structure_example'; // string | Ownership structure chart file content (multipart file field, binary/Base64)
$funds_statement = 'funds_statement_example'; // string | Proof-of-funds file content (multipart file field, binary/Base64, optional)
$additional = 'additional_example'; // string | Other supplementary material file content (multipart file field, binary/Base64, optional)
$relationship_proof = 'relationship_proof_example'; // string | Optional. JSON string of relationship_proof.

try {
    $result = $apiInstance->submitOtcBankEnterpriseSupplement($bank_id, $uid, $certificate, $share_holders, $passport, $share_holding_structure, $funds_statement, $additional, $relationship_proof);
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
 **uid** | **string**|  | [optional]
 **certificate** | **string**| Business license / registration certificate file content (multipart file field, binary/Base64) | [optional]
 **share_holders** | **string**| Register of shareholders file content (multipart file field, binary/Base64) | [optional]
 **passport** | **string**| Legal representative / shareholder passport file content (multipart file field, binary/Base64) | [optional]
 **share_holding_structure** | **string**| Ownership structure chart file content (multipart file field, binary/Base64) | [optional]
 **funds_statement** | **string**| Proof-of-funds file content (multipart file field, binary/Base64, optional) | [optional]
 **additional** | **string**| Other supplementary material file content (multipart file field, binary/Base64, optional) | [optional]
 **relationship_proof** | **string**| Optional. JSON string of relationship_proof. | [optional]

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


## createOtcUploadPreUpload

> \GateApi\Model\OtcUploadPreUploadResponse createOtcUploadPreUpload($otc_upload_pre_upload_request)

Pre-upload file (temporary bucket)

After selecting a file, the client calls this endpoint first to obtain a temporary-bucket POST Policy and `file_key`; then upload directly to S3 using the returned `url` and `fields` (success HTTP 204); finally, in business submit endpoints (e.g. `POST /otc/order/paid`, `POST /otc/bank/create`), pass the **same base64 `file_key` unchanged** (do not decode). The server validates ownership and object existence, then moves to the production bucket and persists. Unsubmitted files remain in the temporary bucket and are reclaimed by lifecycle rules.  Corresponds to Inner: `POST /upload/pre_upload`.  **`content_type` must be sent as base64** (plaintext containing `/` may be blocked by the gateway). Only the following MIME types are supported:  | MIME | base64 | Extension | | --- | --- | --- | | image/png | aW1hZ2UvcG5n | .png | | image/jpeg | aW1hZ2UvanBlZw== | .jpeg | | image/jpg | aW1hZ2UvanBn | .jpg | | application/pdf | YXBwbGljYXRpb24vcGRm | .pdf |  **`scene` mapping to downstream endpoints**:  | scene | Typical use | | --- | --- | | general | Fiat buy payment receipt (`payment_receipt_file_key` in `POST /otc/order/paid`) | | bank | Add card, bank card supplementary materials | | assessment | Professional verification materials | | credit | Credit limit increase materials |  **Credential validity**: response `expires_in` is **5400 seconds (90 minutes)**; `fields.Policy` `expiration` matches it. Complete the S3 direct upload within this window; after expiry, call this endpoint again for a new credential.  **File size**: the S3 POST Policy enforces `content-length-range` **1 byte ~ 10MB** (10485760 bytes). Uploads exceeding the limit are rejected by S3; all `scene` values share this limit.  **Direct S3 upload**: `url` is the upload address; send each key-value pair in `fields` unchanged as form-data; the `file` field must be last. Object path is generated as `otc_temp/{uid}/{scene}/{unique filename}`; uid is taken from the login session.  This endpoint returns `content type is required.` when `content_type` is missing. Ownership and object-existence checks for `file_key` are performed by the subsequent business submission endpoint.

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
$otc_upload_pre_upload_request = new \GateApi\Model\OtcUploadPreUploadRequest(); // \GateApi\Model\OtcUploadPreUploadRequest | 

try {
    $result = $apiInstance->createOtcUploadPreUpload($otc_upload_pre_upload_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OTCApi->createOtcUploadPreUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **otc_upload_pre_upload_request** | [**\GateApi\Model\OtcUploadPreUploadRequest**](../Model/OtcUploadPreUploadRequest.md)|  |

### Return type

[**\GateApi\Model\OtcUploadPreUploadResponse**](../Model/OtcUploadPreUploadResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## markOtcOrderPaid

> \GateApi\Model\OtcActionResponse markOtcOrderPaid($otc_mark_order_paid_request)

Mark fiat order as paid (deposit confirmation)

Mark a fiat buy order as paid (deposit confirmation). **A user payment receipt must be uploaded**: `payment_receipt_file_key` is required; supported formats are jpg / jpeg / png / pdf, with a maximum size of 10 MB per file (validated jointly by the service and gateway). The compatible field name `payment_receipt` depends on the gateway and production contract. The persisted field is `otc_trade_record.payment_receipt_file_key`. The Pay Inner path is `POST .../pay/order_set_paid` (which commonly identifies orders by `client_order_id`); the Inner path corresponding to this OpenAPI operation, `POST /order/paid`, still primarily uses `order_id`. If the gateway standardizes on the merchant order ID, follow the gateway documentation.  **Recommended pre-upload flow**: first call `POST /otc/upload/pre_upload` (`scene=general`) and upload directly to the temporary bucket, then pass the returned **base64 `file_key` unchanged** (do not decode) to this endpoint. The service validates the uid and object existence before moving the object to the production bucket. A cross-user key returns `Invalid parameters file_key`; an object that has not been uploaded returns `Invalid parameters file not uploaded`. The legacy flow using a base64 key for an object uploaded directly to the production bucket remains supported.

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
$associate_array['status'] = 'status_example'; // string | DONE: completed CANCEL: canceled PROCESSING: in progress DISBURSED: disbursed
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
 **status** | **string**| DONE: completed CANCEL: canceled PROCESSING: in progress DISBURSED: disbursed | [optional]
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

