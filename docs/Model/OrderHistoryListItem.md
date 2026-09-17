# # OrderHistoryListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | [optional] 
**symbol** | **string** | Symbol | [optional] 
**exchange** | **string** | Exchange, supports us, hk, kr, and jp | [optional] 
**quote_currency** | **string** | Quote currency | [optional] 
**fx_rate** | **string** | Quote currency to USD exchange rate | [optional] 
**symbol_desc** | **string** | Symbol description | [optional] 
**price_type** | **string** | Price type (market &#x3D; market order, limit &#x3D; limit order) | [optional] 
**status** | **int** | Order status | [optional] 
**status_desc** | **string** | Order status description | [optional] 
**status_detail** | [**\GateApi\Model\OrderHistoryListItemStatusDetail**](OrderHistoryListItemStatusDetail.md) |  | [optional] 
**finish_as** | **int** | Order completion reason | [optional] 
**side** | **int** | Side (1&#x3D;sell, 2&#x3D;buy) | [optional] 
**time_in_force** | **string** | Time in force. - day: Day order. | [optional] 
**volume** | **string** | Order quantity | [optional] 
**fill_volume** | **string** | Trading size | [optional] 
**price** | **string** | Order price | [optional] 
**avg_fill_price** | **string** | Average fill price | [optional] 
**commission** | **string** | fee | [optional] 
**time_setup** | **int** | Order creation time (Unix timestamp, seconds) | [optional] 
**time_done** | **int** | Order completion time (Unix timestamp in seconds) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
