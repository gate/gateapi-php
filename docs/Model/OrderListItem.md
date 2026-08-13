# # OrderListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | [optional] 
**symbol** | **string** | Symbol | [optional] 
**exchange** | **string** | Exchange, supports us, hk, and kr | [optional] 
**quote_currency** | **string** | Quote currency | [optional] 
**fx_rate** | **string** | Quote currency to USD exchange rate | [optional] 
**symbol_desc** | **string** | Symbol description | [optional] 
**trade_status** | **string** | Trading status. - pre_market: Pre-market. - open: Regular trading session. - post_market: Post-market. - closed: Market closed. - gt_lp: GT LP session. | [optional] 
**trade_mode** | **int** | Current session trading mode. - 0: Trading disabled. - 1: Buy only. - 2: Sell only. - 4: Buy and sell supported. | [optional] 
**price_type** | **string** | Price type (market &#x3D; market order, limit &#x3D; limit order) | [optional] 
**side** | **int** | Side (1&#x3D;sell, 2&#x3D;buy) | [optional] 
**status** | **int** | Order status | [optional] 
**volume** | **string** | Order quantity | [optional] 
**fill_volume** | **string** | Trading size | [optional] 
**price** | **string** | Order price | [optional] 
**time_setup** | **int** | Order creation time (Unix timestamp, seconds) | [optional] 
**time_update** | **int** | Order update time (Unix timestamp, seconds) | [optional] 
**max_order_volume** | **string** | Maximum order quantity | [optional] 
**step_order_volume** | **string** | Order step size | [optional] 
**min_order_volume** | **string** | Minimum order quantity | [optional] 
**price_precision** | **int** | Price precision | [optional] 
**price_protection** | **string** | Price protection range | [optional] 
**sell_price_protection** | **string** | Sell price protection rate | [optional] 
**buy_price_protection** | **string** | Buy price protection rate | [optional] 
**commission_rate** | **string** | Fee Rate | [optional] 
**slippage_rate** | **string** | Slippage | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
