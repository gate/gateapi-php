# # FuturesAutoDeleverage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **int** | Automatic deleveraging time | [optional] [readonly] 
**user** | **int** | User ID | [optional] [readonly] 
**order_id** | **int** | Order ID. Order IDs before 2023-02-20 are null | [optional] [readonly] 
**contract** | **string** | Futures contract | [optional] [readonly] 
**leverage** | **string** | leverage for isolated margin. 0 means cross margin. For leverage of cross margin, please refer to &#x60;cross_leverage_limit&#x60;. | [optional] [readonly] 
**cross_leverage_limit** | **string** | leverage for cross margin | [optional] [readonly] 
**entry_price** | **string** | Average entry price | [optional] [readonly] 
**fill_price** | **string** | Average fill price | [optional] [readonly] 
**trade_size** | **string** | Trading size | [optional] [readonly] 
**position_size** | **string** | Positions after auto-deleveraging | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
