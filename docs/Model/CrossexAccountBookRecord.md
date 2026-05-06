# # CrossexAccountBookRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Account Change Record ID | 
**user_id** | **string** | User ID | 
**business_id** | **string** | Business ID | 
**statement_type** | **string** | Bill entry type | &#x60;TRANSACTION&#x60; trade &#x60;TRADING_FEE&#x60; fee &#x60;FUNDING_FEE&#x60; funding &#x60;LIQUIDATION_FEE&#x60; liquidation &#x60;TRANSFER_IN&#x60; deposit &#x60;TRANSFER_OUT&#x60; withdrawal &#x60;BANKRUPT_COMPENSATION&#x60; bankruptcy subsidy &#x60;AUTO_REPAY&#x60; margin auto-repay | 
**exchange_type** | **string** | Exchange | 
**coin** | **string** | Currency | 
**change** | **string** | Change amount (positive indicates transfer in; negative indicates transfer out) | 
**balance** | **string** | Balance after change | 
**create_time** | **string** | Created time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
