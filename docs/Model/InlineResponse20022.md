# # InlineResponse20022

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order ID | 
**text** | **string** | Client Custom ID | 
**from_account_type** | **string** | Source &#x60;from&#x60; account (CROSSEX_BINANCE, CROSSEX_OKX, CROSSEX_GATE, CROSSEX, SPOT) | 
**to_account_type** | **string** |  | 
**coin** | **string** | Currency | 
**amount** | **string** | Transfer amount, the amount requested for the transfer | 
**actual_receive** | **string** | Actual credited amount (has a value when status &#x3D; SUCCESS; empty for other statuses) | [optional] 
**status** | **string** | Transfer Status - &#x60;FAIL&#x60;: Failed - &#x60;SUCCESS&#x60;: Successful - &#x60;PENDING&#x60;: Transfer in Progress | 
**fail_reason** | **string** | Failure reason (has a value when status &#x3D; FAIL; empty for other statuses) | [optional] 
**create_time** | **int** | Creation time of order | 
**update_time** | **int** | OrderUpdateTime | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
