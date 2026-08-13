# # OtcOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | BUY for on-ramp, SELL for off-ramp | 
**side** | **string** | The side returned by the quote endpoint (used for order validation). For backward compatibility, &#x60;FIAT&#x60;/&#x60;CRYPTO&#x60; or &#x60;PAY&#x60;/&#x60;GET&#x60; are accepted; new integrations should use the value returned by the quote response. | 
**crypto_currency** | **string** | Cryptocurrency (supported currencies can be queried from the OTC web fiat quote page) | 
**fiat_currency** | **string** | Fiat currency (supported currencies can be queried from the OTC web fiat quote page) | 
**crypto_amount** | **string** | Amount of cryptocurrency | 
**fiat_amount** | **string** | Fiat amount | 
**promotion_code** | **string** | Promotion code | [optional] 
**quote_token** | **string** | Parameter returned by the quote API | 
**bank_id** | **string** | Bank card ID used to place the order. Select one from the list returned by &#x60;GET /otc/bank/list&#x60;; the default card has &#x60;is_default&#x3D;1&#x60;. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
