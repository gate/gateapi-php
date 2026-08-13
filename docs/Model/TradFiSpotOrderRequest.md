# # TradFiSpotOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**volume** | **string** | Order quantity | 
**symbol** | **string** | Symbol | 
**side** | **int** | Side (1&#x3D;sell, 2&#x3D;buy) | 
**price_type** | **string** | Price type (market &#x3D; market order, limit &#x3D; limit order) | 
**trading_session** | **string** | Trading session. Limit orders support only All, while market orders support only Regular. | 
**time_in_force** | **string** | Time in force. - day: Day order. | 
**price** | **string** | Order price, used for limit orders | [optional] 
**client_order_id** | **string** | Client-defined order ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
