# # OtcQuoteResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | BUY (on-ramp) or SELL (off-ramp) | 
**pay_coin** | **string** | Payment currency | 
**get_coin** | **string** | Currency | 
**pay_amount** | **string** | Payment amount | 
**get_amount** | **string** | Redemption Amount | 
**rate** | **string** | Exchange rate | 
**rate_reci** | **string** | Reciprocal of the exchange rate | 
**promotion_code** | **string** | Promotion code | 
**side** | **string** | Quote method | 
**order_type** | **string** | Order type: FIAT (fiat) / STABLE (stablecoin) | 
**quote_token** | **string** | Quote token required when placing an order | 
**validity_period** | **string** | Quote validity period (seconds) | [optional] 
**refresh_limit** | **int** | Quote refresh limit | [optional] 
**refresh_limit_msg** | **string** | Quote refresh limit message | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
