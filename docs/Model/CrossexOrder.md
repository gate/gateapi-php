# # CrossexOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID | 
**order_id** | **string** | Order ID | 
**text** | **string** | Client-defined order ID. | 
**state** | **string** | Order status:  NEW: Validated and queued to be sent to the exchange.  OPEN: Resting on the exchange order book.  PARTIALLY_FILLED: Partially filled.  FILLED: Fully filled.  FAIL: CrossEx internal validation failed; see the &#x60;reason&#x60; field for details.  REJECT: Rejected by the exchange; see the &#x60;reason&#x60; field for details. | 
**symbol** | **string** | Unique trading pair identifiers, e.g. &#x60;BINANCE_SPOT_BTC_USDT&#x60;, &#x60;BINANCE_FUTURE_BTC_USDT&#x60;. | 
**side** | **string** | Side (&#x60;BUY&#x60; buy / &#x60;SELL&#x60; sell). | 
**type** | **string** | Order type (&#x60;LIMIT&#x60; limit / &#x60;MARKET&#x60; market). | 
**attribute** | **string** | Order attributes (&#x60;COMMON&#x60; normal / &#x60;LIQ&#x60; liquidation takeover / &#x60;REDUCE&#x60; liquidation reduction / &#x60;ADL&#x60; auto-deleverage / &#x60;SETTLEMENT&#x60; delisting settlement). | 
**exchange_type** | **string** | Venue bucket (&#x60;BINANCE&#x60; / &#x60;OKX&#x60; / &#x60;GATE&#x60; / &#x60;BYBIT&#x60; / &#x60;KRAKEN&#x60; / &#x60;HYPERLIQUID&#x60; / &#x60;DERIBIT&#x60;). | 
**business_type** | **string** | Business type (&#x60;SPOT&#x60; Spot / &#x60;FUTURE&#x60; Futures / &#x60;MARGIN&#x60; Margin). | 
**qty** | **string** | Order quantity in the base currency. | 
**quote_qty** | **string** | Order quantity in the quote currency. | 
**price** | **string** | Order price. | 
**time_in_force** | **string** | Time-in-force policy (default: GTC; allowed values: GTC, IOC, FOK, POC, and RPI) | 
**executed_qty** | **string** | Filled base amount. | 
**executed_amount** | **string** | Filled quote amount. | 
**executed_avg_price** | **string** | Average Filled Price | 
**fee_coin** | **string** | Fee currency | 
**fee** | **string** | Fee amount. | 
**reduce_only** | **string** | Reduce-only order (&#x60;\&quot;true\&quot;&#x60; or &#x60;\&quot;false\&quot;&#x60;). | 
**leverage** | **string** | Order leverage multiplier. | 
**reason** | **string** | Failure reason description. | 
**last_executed_qty** | **string** | Base quantity of the latest fill. | 
**last_executed_price** | **string** | Price of the latest fill. | 
**last_executed_amount** | **string** | Quote amount of the latest fill. | 
**position_side** | **string** | Position side (&#x60;NONE&#x60; flat / &#x60;LONG&#x60; long / &#x60;SHORT&#x60; short). | 
**create_time** | **string** | Created time | 
**update_time** | **string** | Update time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
