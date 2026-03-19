# # CrossexOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** |  | 
**order_id** | **string** | Order ID | 
**text** | **string** | Customer-defined order ID | 
**state** | **string** | Order State:  NEW: The order is legal and waiting to be sent to the exchange  OPEN: The order has been placed on the orderbook of the exchange  PARTIALLY_FILLED: The order has been partially completed  FILLED: The order has been fully executed  FAIL: The order verification in CrossEx did not pass. Please check the order reason  REJECT：The order was rejected by the exchange. Please check the order reason | 
**symbol** | **string** | Trading pair unique identifier ,example: BINANCE_SPOT_BTC_USDT, BINANCE_FUTURE_BTC_USDT | 
**side** | **string** | Side(BUY,SELL) | 
**type** | **string** | Type(LIMIT, MARKET) | 
**attribute** | **string** | COMMON, LIQ, REDUCE, ADL | 
**exchange_type** | **string** | Exchange type(BINANCE,OKX,GATE,BYBIT) | 
**business_type** | **string** | Business type(SPOT,FUTURE,MARGIN) | 
**qty** | **string** | Order base quantity | 
**quote_qty** | **string** | Order quote quantity | 
**price** | **string** | Order price | 
**time_in_force** | **string** | Timeinforce (default GTC, enums:GTC,IOC,FOK,POC) | 
**executed_qty** | **string** | Executed quantity | 
**executed_amount** | **string** | Executed quote quantity | 
**executed_avg_price** | **string** | Average transaction price | 
**fee_coin** | **string** | Transaction fee coin | 
**fee** | **string** | Transaction fee amount | 
**reduce_only** | **string** | Reduce position orders only, \&quot;true\&quot; or \&quot;false\&quot; | 
**leverage** | **string** | Order leverage | 
**reason** | **string** | Fail message | 
**last_executed_qty** | **string** | Last transaction quantity | 
**last_executed_price** | **string** | Last transaction price | 
**last_executed_amount** | **string** | Last transaction amount | 
**position_side** | **string** | Position side(NONE/LONG/SHORT) | 
**create_time** | **string** | Create time | 
**update_time** | **string** | Update time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
