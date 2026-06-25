# # OtcOrderDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | 
**uid** | **string** | User ID | 
**type** | **string** | Order Type | 
**fiat_currency** | **string** | Fiat type | 
**fiat_amount** | **string** | Fiat amount | 
**crypto_currency** | **string** | Stablecoin | 
**crypto_amount** | **string** | Stablecoin amount | 
**rate** | **string** | Exchange rate | 
**transfer_remark** | **string** | Transfer remark (mutually exclusive with reference_code; empty string when the deposit buy order has a reference code) | 
**reference_code** | **string** | Unique bank transfer reference code for deposit buy orders (SGB deposit scenario; mutually exclusive with transfer_remark) | [optional] 
**status** | **string** | Status | 
**db_status** | **string** |  | 
**create_time** | **string** | Created time | 
**memo** | **string** | Cancellation or rejection reason | 
**side** | **string** | Quote direction | 
**promotion_code** | **string** | Promotion code | 
**trade_no** | **string** | Trade number | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
