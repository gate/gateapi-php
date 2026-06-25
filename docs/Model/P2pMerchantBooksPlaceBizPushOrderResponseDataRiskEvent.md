# # P2pMerchantBooksPlaceBizPushOrderResponseDataRiskEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Prompt display type | [optional] 
**title** | **string** | Risk control prompt title | [optional] 
**msg** | **string** | Risk control prompt message generated based on the field that hit risk control | [optional] 
**action** | [**\GateApi\Model\P2pMerchantBooksPlaceBizPushOrderResponseDataRiskEventAction[]**](P2pMerchantBooksPlaceBizPushOrderResponseDataRiskEventAction.md) | Available actions; advertisement content risk control only returns the close action | [optional] 
**content_risk_type** | **string** | Advertisement content field that hit risk control | [optional] 
**trade_tips** | **string** | Prompt message returned when the trade terms hit risk control | [optional] 
**auto_reply** | **string** | Prompt message returned when the auto reply hits risk control | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
