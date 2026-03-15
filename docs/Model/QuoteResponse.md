# # QuoteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quote_id** | **string** | Quote ID for order placement, valid for 1 minute | [optional] 
**min_amount** | **string** | Minimum order size | [optional] 
**max_amount** | **string** | Maximum order size | [optional] 
**price** | **string** | Token Price (USDT-based) | [optional] 
**slippage** | **string** | Slippage | [optional] 
**estimate_gas_fee_amount_usdt** | **string** | Estimated Gas Fee (USDT-based) | [optional] 
**order_fee** | **string** | Trading fee | [optional] 
**target_token_min_amount** | **string** | Minimum received amount | [optional] 
**target_token_max_amount** | **string** | Maximum received amount | [optional] 
**error_type** | **int** | Failure Type - &#x60;0&#x60; : Success - &#x60;1&#x60; : Exceeds maximum value - &#x60;2&#x60; : Below minimum value | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
