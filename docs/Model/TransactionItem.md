# # TransactionItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset** | **string** | Asset | [optional] 
**symbol** | **string** | Symbol | [optional] 
**symbol_display** | **string** | Symbol display name | [optional] 
**type** | **string** | Transaction type. - deposit: Funds transfer in. - withdraw: Funds transfer out. - fee: Trading fee. - dividend: Dividend payout. - sell: Stock sale credit. - buy: Stock purchase debit. - award: Airdrop reward. - stock_transfer_in: Stock transfer in. - stock_transfer_out: Stock transfer out. | [optional] 
**type_desc** | **string** | Transaction type description | [optional] 
**change** | **string** | Change amount | [optional] 
**balance** | **string** | Balance after change | [optional] 
**ref_id** | **string** | Business idempotent ID | [optional] 
**time** | **int** | Unix timestamp (seconds) | [optional] 
**unit_text** | **string** | Unit display text | [optional] 
**detail** | **map[string,object]** | Business details | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
