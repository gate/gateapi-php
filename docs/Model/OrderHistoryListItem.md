# # OrderHistoryListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** |  | [optional] 
**symbol** | **string** |  | [optional] 
**exchange** | **string** | Exchange, supports us, hk, and kr | [optional] 
**quote_currency** | **string** |  | [optional] 
**fx_rate** | **string** | Quote currency to USD exchange rate | [optional] 
**symbol_desc** | **string** |  | [optional] 
**price_type** | **string** | Price type (market &#x3D; market order, limit &#x3D; limit order) | [optional] 
**status** | **int** | Order status | [optional] 
**status_desc** | **string** | Order status description | [optional] 
**status_detail** | [**\GateApi\Model\OrderHistoryListItemStatusDetail**](OrderHistoryListItemStatusDetail.md) |  | [optional] 
**finish_as** | **int** | Order completion reason | [optional] 
**side** | **int** | Side (1&#x3D;sell, 2&#x3D;buy) | [optional] 
**time_in_force** | **string** | Time in force. - day: Day order. | [optional] 
**volume** | **string** |  | [optional] 
**fill_volume** | **string** |  | [optional] 
**price** | **string** |  | [optional] 
**avg_fill_price** | **string** |  | [optional] 
**commission** | **string** | fee | [optional] 
**time_setup** | **int** |  | [optional] 
**time_done** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
