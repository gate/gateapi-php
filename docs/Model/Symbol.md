# # Symbol

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Unique trading pair identifier in the form ExchangeType_BusinessType_Base_Counter. | 
**exchange_type** | **string** | Venue bucket (&#x60;BINANCE&#x60; / &#x60;OKX&#x60; / &#x60;GATE&#x60; / &#x60;BYBIT&#x60; / &#x60;KRAKEN&#x60; / &#x60;HYPERLIQUID&#x60; / &#x60;DERIBIT&#x60;). | 
**business_type** | **string** | Business type (&#x60;SPOT&#x60; Spot / &#x60;FUTURE&#x60; Futures / &#x60;MARGIN&#x60; Margin). | 
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

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
