# # AIHubRebalanceCreateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin_money_amount** | **string** |  | 
**begin_money_currency** | **string** |  | 
**asset_info** | [**\GateApi\Model\AIHubRebalanceAsset[]**](AIHubRebalanceAsset.md) |  | 
**period** | **string** | Product interval between 1m and 28d. | [optional] 
**threshold** | **string** | Positive ratio below 1, at most four decimal places. | [optional] 
**close_flag** | **int** |  | [optional] [default to self::CLOSE_FLAG_1]
**is_use_base** | **bool** |  | [optional] 
**stop_profit** | **string** |  | [optional] 
**stop_loss** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
