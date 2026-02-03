# # InlineResponse20044

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Account Change Record ID | 
**user_id** | **string** | User ID | 
**business_id** | **string** | Business ID | 
**type** | **string** | 变更类型| &#x60;TRANSACTION&#x60; 成交 &#x60;TRADING_FEE&#x60; 手续费 &#x60;FUNDING_FEE&#x60; 合约资金费 &#x60;LIQUIDATION_FEE&#x60; 强平费 &#x60;TRANSFER_IN&#x60; 资金转入 &#x60;TRANSFER_OUT&#x60; 资金转出 &#x60;BANKRUPT_COMPENSATION&#x60; 穿仓补贴 &#x60;AUTO_REPAY&#x60; 杠杆仓位自动还负债 | 
**exchange_type** | **string** | Exchange | 
**coin** | **string** | Currency | 
**change** | **string** | Change amount (positive indicates transfer in; negative indicates transfer out) | 
**balance** | **string** | Balance after change | 
**create_time** | **string** | Created time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
