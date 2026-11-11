# # OrderDealItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Trade record primary key ID | [optional] 
**deal_id** | **int** | Trade ID | [optional] 
**order_id** | **int** | Order ID | [optional] 
**client_order_id** | **string** | Client-defined order ID | [optional] 
**user_id** | **int** | User ID | [optional] 
**symbol** | **string** | Symbol | [optional] 
**exchange** | **string** | Exchange. - us: US stocks. - hk: Hong Kong stocks. - kr: Korean stocks. - jp: Japanese stocks. | [optional] 
**side** | **int** | Side (1&#x3D;sell, 2&#x3D;buy) | [optional] 
**role** | **string** | Liquidity role. - maker: Maker. - taker: Taker. | [optional] 
**price** | **string** | Trade price in the instrument trading currency | [optional] 
**quantity** | **string** | Trading size | [optional] 
**position_qty** | **string** | Position quantity after the trade | [optional] 
**avg_entry_price** | **string** | Average entry price | [optional] 
**value** | **string** | Trade value in the instrument trading currency | [optional] 
**fx_rate** | **string** | Quote currency to USD exchange rate | [optional] 
**fee** | **string** | Fee in the instrument trading currency | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
