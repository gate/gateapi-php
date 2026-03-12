# # OrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | [optional] 
**tx_hash** | **string** | Transaction Hash | [optional] 
**side** | **string** | Buy or sell orders - buy - sell | [optional] 
**usdt_amount** | **string** | Amount (USDT) | [optional] 
**currency** | **string** | Token | [optional] 
**currency_amount** | **string** | Token amount | [optional] 
**status** | **int** | Order Status - &#x60;0&#x60; : All - &#x60;1&#x60; : Processing - &#x60;2&#x60; : Successful - &#x60;3&#x60; : Failed - &#x60;4&#x60; : Cancelled - &#x60;5&#x60; : Buy order placed but transfer not completed - &#x60;6&#x60; : Order cancelled but transfer not completed | [optional] 
**gas_mode** | **string** | Trading mode affects slippage selection - &#x60;speed&#x60; : Smart mode - &#x60;custom&#x60; : Custom mode, uses &#x60;slippage&#x60; parameter | [optional] 
**chain** | **string** | Blockchain | [optional] 
**gas_fee** | **string** | Gas Fee (USDT-based) | [optional] 
**transaction_fee** | **string** | Trading Fee (USDT-based) | [optional] 
**failed_reason** | **string** | Failure reason (if applicable) | [optional] 
**create_time** | **int** | Creation timestamp | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
