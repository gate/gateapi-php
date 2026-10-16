# # CrossexOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID | 
**order_id** | **string** | Order ID | 
**text** | **string** | Client-defined order ID. | 
**state** | **string** | Order status: &#x60;NEW&#x60;: validated locally, pending submission to the exchange &#x60;OPEN&#x60;: resting on the exchange order book &#x60;PARTIALLY_FILLED&#x60;: partially filled &#x60;FILLED&#x60;: fully filled &#x60;FAIL&#x60;: CrossEx validation failed; see &#x60;reason&#x60; &#x60;REJECT&#x60;: rejected by the exchange; see &#x60;reason&#x60; &#x60;CANCELLED&#x60;: cancelled | 
**symbol** | **string** | Unique trading pair identifiers, e.g. &#x60;BINANCE_SPOT_BTC_USDT&#x60;, &#x60;BINANCE_FUTURE_BTC_USDT&#x60;. | 
**side** | **string** | Side (&#x60;BUY&#x60; buy / &#x60;SELL&#x60; sell). | 
**type** | **string** | Order type (&#x60;LIMIT&#x60; limit / &#x60;MARKET&#x60; market). | 
**attribute** | **string** | Order attributes (&#x60;COMMON&#x60; normal / &#x60;LIQ&#x60; liquidation takeover / &#x60;REDUCE&#x60; liquidation reduction / &#x60;ADL&#x60; auto-deleverage / &#x60;SETTLEMENT&#x60; delisting settlement). | 
**exchange_type** | **string** | Exchange type (BINANCE / OKX / GATE / BYBIT / KRAKEN / HYPERLIQUID / DERIBIT / LIGHTER). Stocks and ETFs return the listing market (US / HK / KR / JP) | 
**business_type** | **string** | Business type (SPOT: spot / FUTURE: futures / MARGIN: margin / CONVERT: flash swap / STOCK: stocks / ETF: exchange-traded funds) | 
**qty** | **string** | Order quantity in the base currency. | 
**quote_qty** | **string** | Order quantity in the quote currency. | 
**price** | **string** | Order price. Stocks and ETFs use the listing market currency (USD/HKD/KRW/JPY) | 
**time_in_force** | **string** | Time-in-force policy (default: GTC; allowed values: GTC, IOC, FOK, POC, and RPI) | 
**executed_qty** | **string** | Filled base amount. | 
**executed_amount** | **string** | Filled amount in the quote currency. Stocks and ETFs use the listing market currency (USD/HKD/KRW/JPY) | 
**executed_avg_price** | **string** | Average fill price. Stocks and ETFs use the listing market currency (USD/HKD/KRW/JPY) | 
**fee_coin** | **string** | Fee currency | 
**fee** | **string** | Fee amount. | 
**reduce_only** | **string** | Reduce-only order (&#x60;\&quot;true\&quot;&#x60; or &#x60;\&quot;false\&quot;&#x60;). | 
**leverage** | **string** | Order leverage multiplier. | 
**reason** | **string** | Failure reason description. | 
**last_executed_qty** | **string** | Base quantity of the latest fill. | 
**last_executed_price** | **string** | Price of the latest fill. Stocks and ETFs use the listing market currency (USD/HKD/KRW/JPY) | 
**last_executed_amount** | **string** | Amount of the latest fill. Stocks and ETFs use the listing market currency (USD/HKD/KRW/JPY) | 
**position_side** | **string** | Position side (&#x60;NONE&#x60; one-way position / &#x60;LONG&#x60; long / &#x60;SHORT&#x60; short) | 
**create_time** | **string** | Created time | 
**update_time** | **string** | Update time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
