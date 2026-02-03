# # PositionTimerange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | Futures contract | [optional] [readonly] 
**size** | **string** | Position size | [optional] [readonly] 
**leverage** | **string** | Position leverage. 0 means cross margin; positive number means isolated margin | [optional] 
**risk_limit** | **string** | Position risk limit | [optional] 
**leverage_max** | **string** | the maximum permissible leverage given to the current positon value: the higher positon value, the lower maximum permissible leverage | [optional] [readonly] 
**maintenance_rate** | **string** | The maintenance margin rate of the first tier of risk limit sheet | [optional] [readonly] 
**margin** | **string** | Position margin | [optional] 
**liq_price** | **string** | Liquidation price | [optional] [readonly] 
**realised_pnl** | **string** | Realized PnL | [optional] [readonly] 
**history_pnl** | **string** | Total realized PnL from closed positions | [optional] [readonly] 
**last_close_pnl** | **string** | PNL of last position close | [optional] [readonly] 
**realised_point** | **string** | Realized POINT PNL | [optional] [readonly] 
**history_point** | **string** | History realized POINT PNL | [optional] [readonly] 
**mode** | **string** | Position mode, including: - &#x60;single&#x60;: One-way Mode - &#x60;dual_long&#x60;: Long position in Hedge Mode - &#x60;dual_short&#x60;: Short position in Hedge Mode | [optional] 
**cross_leverage_limit** | **string** | Cross margin leverage (valid only when &#x60;leverage&#x60; is 0) | [optional] 
**entry_price** | **string** | Entry price | [optional] [readonly] 
**time** | **int** | Timestamp | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
