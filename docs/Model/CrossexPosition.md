# # CrossexPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID | [optional] 
**position_id** | **string** | Position ID | [optional] 
**symbol** | **string** | Currency pair | [optional] 
**position_side** | **string** | Position Direction | [optional] 
**initial_margin** | **string** | Initial Margin | [optional] 
**isolated_margin** | **string** | Isolated margin. It is 0 in cross margin mode and applies only to isolated margin positions | [optional] 
**margin_mode** | **string** | Margin mode (CROSS/ISOLATED) | [optional] 
**maintenance_margin** | **string** | Maintenance margin | [optional] 
**position_qty** | **string** | Position Quantity | [optional] 
**position_value** | **string** | Position Value | [optional] 
**upnl** | **string** | Unrealized P&amp;L | [optional] 
**upnl_rate** | **string** | Unrealized P&amp;L Ratio | [optional] 
**entry_price** | **string** | Position Average Entry Price | [optional] 
**liq_price** | **string** | Liquidation price. It is 0 in cross margin mode and applies only to isolated margin positions; 0 in isolated margin mode means the position will not be liquidated | [optional] 
**mark_price** | **string** | Mark price | [optional] 
**leverage** | **string** | Position Leverage | [optional] 
**max_leverage** | **string** | Maximum leverage | [optional] 
**risk_limit** | **string** | Position risk limit | [optional] 
**fee** | **string** | Position Fee | [optional] 
**funding_fee** | **string** | Accumulated position funding fee. A positive value indicates a gain, while a negative value indicates a loss. | [optional] 
**funding_time** | **string** | Position funding fee collection time (0 indicates it has not been collected yet) | [optional] 
**create_time** | **string** | Position Creation Time | [optional] 
**update_time** | **string** | Position Update Time | [optional] 
**closed_pnl** | **string** | Realized PnL | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
