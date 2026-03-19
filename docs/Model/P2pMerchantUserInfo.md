# # P2pMerchantUserInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_self** | **bool** | Whether self | [optional] 
**user_timest** | **string** | User registration time (formatted string) | [optional] 
**counterparties_num** | **int** | Number of counterparties | [optional] 
**email_verified** | **string** | Whether email is verified | [optional] 
**verified** | **string** | Whether KYC verification is completed | [optional] 
**has_phone** | **string** | Whether phone is bound | [optional] 
**user_name** | **string** | Username | [optional] 
**user_note** | **string** | User note information | [optional] 
**complete_transactions** | **string** | Total completed orders | [optional] 
**paid_transactions** | **string** | Number of completed buy orders | [optional] 
**accepted_transactions** | **string** | Number of completed sell orders | [optional] 
**transactions_used_time** | **string** | Average time to confirm receipt | [optional] 
**cancelled_used_time_month** | **string** | Cancellation time in last 30 days | [optional] 
**complete_transactions_month** | **string** | Number of completed orders in last 30 days | [optional] 
**complete_rate_month** | **float** | Completion rate in last 30 days | [optional] 
**orders_buy_rate_month** | **float** | Buy order ratio in last 30 days | [optional] 
**is_black** | **int** | Whether blocked | [optional] 
**is_follow** | **int** | Whether following | [optional] 
**have_traded** | **int** | Whether traded with self | [optional] 
**biz_uid** | **string** | Encrypted UID | [optional] 
**blue_vip** | **int** | Blue V Crown Shield | [optional] 
**work_status** | **int** | Merchant work status | [optional] 
**registration_days** | **int** | Registration days | [optional] 
**first_trade_days** | **int** | Days since first trade | [optional] 
**need_replenish** | **int** | Whether margin replenishment is needed | [optional] 
**merchant_info** | [**\GateApi\Model\P2pMerchantMarketInfo**](P2pMerchantMarketInfo.md) |  | [optional] 
**online_status** | **int** | Merchant online status | [optional] 
**work_hours** | [**object**](.md) | Merchant online status details | [optional] 
**transactions_month** | **float** | 30-day transaction volume | [optional] 
**transactions_all** | **float** | Total transaction volume | [optional] 
**trade_versatile** | **bool** | Single user or composite user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
