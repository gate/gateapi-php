# # P2pCounterpartyUserInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_timest** | **string** | User registration time (formatted string) | [optional] 
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
**is_follow** | **int** | Whether you follow this user. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**have_traded** | **int** | Whether you have traded with this user before. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**biz_uid** | **string** | Encrypted UID | [optional] 
**registration_days** | **int** | Registration days | [optional] 
**first_trade_days** | **int** | Days since first trade | [optional] 
**trade_versatile** | **bool** | Single user or composite user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
