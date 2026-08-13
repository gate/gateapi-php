# # SymbolDetailItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  | [optional] 
**exchange** | **string** | Exchange, supports us, hk, and kr | [optional] 
**exchange_desc** | **string** |  | [optional] 
**quote_currency** | **string** |  | [optional] 
**quote_currency_precision** | **int** |  | [optional] 
**fx_rate** | **string** | Quote currency to USD exchange rate | [optional] 
**symbol_desc** | **string** |  | [optional] 
**category** | **string** |  | [optional] 
**settlement_currency** | **string** |  | [optional] 
**max_order_volume** | **string** |  | [optional] 
**step_order_volume** | **string** |  | [optional] 
**min_order_volume** | **string** |  | [optional] 
**price_precision** | **int** | Price precision | [optional] 
**volume_precision** | **int** |  | [optional] 
**is_ipo** | **bool** |  | [optional] 
**ipo_price** | **string** |  | [optional] 
**price_protection** | **string** |  | [optional] 
**sell_price_protection** | **string** |  | [optional] 
**buy_price_protection** | **string** |  | [optional] 
**slippage_rate** | **string** |  | [optional] 
**commission_rate** | **string** | Fee Rate | [optional] 
**trade_status** | **string** | Trading status. - pre_market: Pre-market. - open: Regular trading session. - post_market: Post-market. - closed: Market closed. - gt_lp: GT LP session. | [optional] 
**trade_mode** | **int** | Current session trading mode. - 0: Trading disabled. - 1: Buy only. - 2: Sell only. - 4: Buy and sell supported. | [optional] 
**order_fill_timing** | **int** | Order fill timing (1&#x3D;immediate, 2&#x3D;after pre-market opens, 3&#x3D;after regular session opens) | [optional] 
**symbol_descs** | [**\GateApi\Model\SymbolDetailItemSymbolDescs[]**](SymbolDetailItemSymbolDescs.md) |  | [optional] 
**icon_link** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
