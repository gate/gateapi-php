# # FixedTermProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product ID | [optional] 
**name** | **string** | Product name | [optional] 
**asset** | **string** | Currency | [optional] 
**lock_up_period** | **int** | Lock-up period (in days) | [optional] 
**min_lend_amount** | **string** | Minimum earn amount | [optional] 
**user_max_lend_amount** | **string** | User maximum earn limit | [optional] 
**total_lend_amount** | **string** | Platform earn limit | [optional] 
**year_rate** | **string** | Annual interest rate | [optional] 
**type** | **int** | Product type: 1 for regular, 2 for VIP | [optional] 
**pre_redeem** | **int** | Whether early redemption is supported: 0 for not supported, 1 for supported | [optional] 
**reinvest** | **int** | Whether auto-renewal is supported: 0 for not supported, 1 for supported | [optional] 
**redeem_account** | **int** | Whether fixed-to-flexible conversion is supported: 0 for not supported, 1 for supported | [optional] 
**min_vip** | **int** | Minimum VIP level requirement, 0-16, 0 means no restriction | [optional] 
**max_vip** | **int** | Maximum VIP level requirement (0-16), 0 means no restriction | [optional] 
**status** | **int** | Product status: 1 for unlisted, 2 for listed, 3 for delisted | [optional] 
**create_time** | **string** | Created time | [optional] 
**user_max_lend_volume** | **string** | User maximum earn amount | [optional] 
**user_total_amount** | **string** | Total amount the user has invested in earn products | [optional] 
**sale_status** | **int** | Sale status: 1 for on sale, 2 for sold out | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
