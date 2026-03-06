# # PositionHistoryListDataList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position_id** | **int** | Position ID | 
**symbol** | **string** | Market / Trading symbol | 
**realized_pnl** | **string** | Realized PnL | 
**realized_pnl_rate** | **string** | Realized return rate | [optional] 
**volume** | **string** | Position size / Maximum position size | 
**volume_closed** | **string** | Close volume | 
**price_open** | **string** | Average Opening Price | 
**position_dir** | **string** | Position Direction - Long: Long Position - Short: Short Position | 
**price_tp** | **string** | Take profit price | [optional] 
**price_sl** | **string** | Stop loss price | [optional] 
**counterparty_price** | **string** | Counterparty price | [optional] 
**close_price** | **string** | Close price | 
**time_create** | **string** | Open time (timestamp in seconds) | 
**time_close** | **string** | Close time (timestamp in seconds) | 
**position_status** | **string** | Position Status - 1: Fully Closed - 2: Forced Liquidation | 
**close_detail** | [**\GateApi\Model\PositionHistoryListDataCloseDetail**](PositionHistoryListDataCloseDetail.md) |  | [optional] 
**realized_pnl_detail** | [**\GateApi\Model\PositionHistoryListDataRealizedPnlDetail**](PositionHistoryListDataRealizedPnlDetail.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
