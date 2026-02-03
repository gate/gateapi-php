# # DeliveryAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **string** | Balance, only applicable to classic contract account.The balance is the sum of all historical fund flows, including historical transfers in and out, closing settlements, and transaction fee expenses, but does not include upl of positions.total &#x3D; SUM(history_dnw, history_pnl, history_fee, history_refr, history_fund) | [optional] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] 
**position_margin** | **string** | Deprecated | [optional] 
**order_margin** | **string** | initial margin of all open orders | [optional] 
**available** | **string** | Available amount for transfer or trading, which includes credit limits under the unified account (includes experience funds; experience funds cannot be transferred, so when transferring, the transfer amount must deduct experience funds) | [optional] 
**point** | **string** | Point card amount | [optional] 
**currency** | **string** | Settlement currency | [optional] 
**in_dual_mode** | **bool** | Whether Hedge Mode is enabled | [optional] 
**enable_credit** | **bool** | Whether portfolio margin account mode is enabled | [optional] 
**position_initial_margin** | **string** | Initial margin occupied by positions, applicable to unified account mode | [optional] 
**maintenance_margin** | **string** | Maintenance margin occupied by positions, applicable to new classic account margin mode and unified account mode | [optional] 
**bonus** | **string** | Bonus | [optional] 
**enable_evolved_classic** | **bool** | Deprecated | [optional] 
**cross_order_margin** | **string** | Cross margin order margin, applicable to new classic account margin mode | [optional] 
**cross_initial_margin** | **string** | Cross margin initial margin, applicable to new classic account margin mode | [optional] 
**cross_maintenance_margin** | **string** | Cross margin maintenance margin, applicable to new classic account margin mode | [optional] 
**cross_unrealised_pnl** | **string** | Cross margin unrealized P&amp;L, applicable to new classic account margin mode | [optional] 
**cross_available** | **string** | Cross margin available balance, applicable to new classic account margin mode | [optional] 
**cross_margin_balance** | **string** | Cross margin balance, applicable to new classic account margin mode | [optional] 
**cross_mmr** | **string** | Cross margin maintenance margin rate, applicable to new classic account margin mode | [optional] 
**cross_imr** | **string** | Cross margin initial margin rate, applicable to new classic account margin mode | [optional] 
**isolated_position_margin** | **string** | Isolated position margin, applicable to new classic account margin mode | [optional] 
**enable_new_dual_mode** | **bool** | Deprecated | [optional] 
**margin_mode** | **int** | Margin mode of the account 0: classic future account or Classic Spot Margin Mode of unified account; 1:  Multi-Currency Margin Mode; 2:  Portoforlio Margin Mode; 3:  Single-Currency Margin Mode | [optional] 
**enable_tiered_mm** | **bool** | Whether to enable tiered maintenance margin calculation | [optional] 
**history** | [**\GateApi\Model\DeliveryAccountHistory**](DeliveryAccountHistory.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
