# # ApiResponseExSkillGetBeginnerTaskListResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Business error code: 0 &#x3D; success, 1007 &#x3D; no task data, 1008 &#x3D; not logged in | 
**label** | **string** | Error identifier code. Empty string on success, machine-readable error label on error | [optional] 
**message** | **string** | Error description | [optional] 
**data** | [**\GateApi\Model\ApiResponseExSkillGetBeginnerTaskListRespData**](ApiResponseExSkillGetBeginnerTaskListRespData.md) |  | [optional] 
**timestamp** | **int** | Server timestamp (milliseconds) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
