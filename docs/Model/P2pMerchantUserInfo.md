# # P2pMerchantUserInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_self** | **bool** | Whether self | [optional] 
**user_timest** | **string** | User registration time (formatted string) | [optional] 
**counterparties_num** | **int** | Number of counterparties | [optional] 
**email_verified** | **string** | Whether email is verified. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**verified** | **string** | Whether KYC is completed. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**has_phone** | **string** | Whether a phone number is bound. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
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
**is_black** | **int** | Whether the user is blocked. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**is_follow** | **int** | Whether you follow this user. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**have_traded** | **int** | Whether you have traded with this user before. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**biz_uid** | **string** | Encrypted UID | [optional] 
**blue_vip** | **int** | Blue V Crown Shield | [optional] 
**work_status** | **int** | Merchant work status | [optional] 
**registration_days** | **int** | Registration days | [optional] 
**first_trade_days** | **int** | Days since first trade | [optional] 
**need_replenish** | **int** | Whether additional margin is required. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**merchant_info** | [**\GateApi\Model\P2pMerchantMarketInfo**](P2pMerchantMarketInfo.md) |  | [optional] 
**online_status** | **int** | Merchant online status: &#x60;1&#x60; online; &#x60;0&#x60; offline. | [optional] 
**work_hours** | [**object**](.md) | Merchant online status details | [optional] 
**transactions_month** | **float** | 30-day transaction volume | [optional] 
**transactions_all** | **float** | Total transaction volume | [optional] 
**trade_versatile** | **bool** | Single user or composite user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
