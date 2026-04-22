# # ApiResponseAssetSwapOrderListV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Business error code, 0 means success | 
**label** | **string** | Error identification code, empty string on success | [optional] 
**message** | **string** | Description information | 
**data** | [**OrderListV1Resp**](OrderListV1Resp.md) | Order list data on success, null on failure | 
**timestamp** | **int** | Server timestamp (milliseconds) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
