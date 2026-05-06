# # SpotAccountBook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Balance change record ID | [optional] 
**time** | **int** | The timestamp of the change (in milliseconds) | [optional] 
**currency** | **string** | Currency changed | [optional] 
**change** | **string** | Amount changed. Positive value means transferring in, while negative out | [optional] 
**balance** | **string** | Balance after change | [optional] 
**type** | **string** | Account change type; deprecated (see &#x60;code&#x60; for account change type encoding) | [optional] 
**code** | **string** | Account change code, see [Asset Record Code] (Asset Record Code) | [optional] 
**text** | **string** | Additional information | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
