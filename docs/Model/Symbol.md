# # Symbol

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Unique trading pair identifier in the format ExchangeType_BusinessType_Base_Counter. Stocks and ETFs use the market as ExchangeType (US/HK/KR/JP) and STOCK or ETF as the business type, for example US_STOCK_AAPL_USDT, HK_STOCK_00700_USDT, or US_ETF_SPY_USDT. | 
**exchange_type** | **string** | Exchange type (BINANCE / OKX / GATE / BYBIT / KRAKEN / HYPERLIQUID / DERIBIT / LIGHTER). Stocks and ETFs return the listing market (US / HK / KR / JP) | 
**business_type** | **string** | Business type (SPOT: spot / FUTURE: futures / MARGIN: margin / STOCK: stocks / ETF: exchange-traded funds) | 
**state** | **string** | Status (&#x60;live&#x60; running / &#x60;suspend&#x60; paused). | 
**min_size** | **string** | Minimum order quantity | 
**min_notional** | **string** | Minimum Order Value | 
**lot_size** | **string** | Quantity Step | 
**tick_size** | **string** | Price Step | 
**max_num_orders** | **string** | maximumopen orderamount | 
**max_market_size** | **string** | Maximum Market Order Quantity | 
**max_limit_size** | **string** | Maximum order quantity for limit orders. | 
**contract_size** | **string** | Contract multiplier (deprecated; quantity is used uniformly) | 
**liquidation_fee** | **string** | Liquidation Fee Rate | 
**delist_time** | **string** | Millisecond timestamp; &#x60;0&#x60; means not delisted. | 
**support_rpi** | **string** | Whether RPI order placement is supported (true if supported; false otherwise) | [optional] 
**support_cross** | **string** | Whether cross-margin order placement is supported (true if supported; false otherwise) | [optional] 
**tag** | **string** | Tag information. Hyperliquid returns DEX information, stocks and ETFs return the security description, and other businesses return an empty string | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
