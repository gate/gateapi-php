# # DepositRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Record ID | [optional] [readonly] 
**txid** | **string** | Hash record of the withdrawal | [optional] [readonly] 
**timestamp** | **string** | Operation time | [optional] [readonly] 
**amount** | **string** | Token amount | 
**currency** | **string** | Currency name | 
**address** | **string** | Withdrawal address. Required for withdrawals | [optional] 
**memo** | **string** | Additional remarks with regards to the withdrawal | [optional] 
**status** | **string** | Transaction Status  - BLOCKED: Deposit Blocked - DEP_CREDITED: Deposit Credited, Withdrawal Pending Unlock - DONE: Funds Credited to Spot Account - INVALID: Invalid Transaction - MANUAL: Manual Review Required - PEND: Processing - REVIEW: Under Compliance Review - TRACK: Tracking Block Confirmations, Pending Spot Account Credit | [optional] [readonly] 
**chain** | **string** | Name of the chain used in withdrawals | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
