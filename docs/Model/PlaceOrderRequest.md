# # PlaceOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Trading symbol | 
**side** | **string** | Buy or sell orders - buy - sell | 
**amount** | **string** | Trade Quantity - &#x60;side&#x60; : &#x60;buy&#x60; refers to the quote currency, i.e., &#x60;USDT&#x60; - &#x60;side&#x60; : &#x60;sell&#x60; refers to the base currency | 
**gas_mode** | **string** | Trading mode affects slippage selection - &#x60;speed&#x60; : Smart mode - &#x60;custom&#x60; : Custom mode, uses &#x60;slippage&#x60; parameter | 
**slippage** | **string** | Slippage tolerance (10 means 10% tolerance) | [optional] 
**quote_id** | **string** | Quote ID returned from quotation API | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
