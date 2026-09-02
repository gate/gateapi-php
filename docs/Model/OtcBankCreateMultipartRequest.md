# # OtcBankCreateMultipartRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_account_name** | **string** |  | 
**bank_name** | **string** |  | 
**bank_country** | **string** |  | 
**bank_address** | **string** |  | 
**iban** | **string** |  | 
**swift** | **string** |  | 
**remittance_line_number** | **string** |  | [optional] 
**agent_bank_name** | **string** |  | [optional] 
**agent_bank_swift** | **string** |  | [optional] 
**documentation_file** | **string** | Multipart direct upload; mutually exclusive with documentation_file_key | [optional] 
**documentation_file_key** | **string** | Pre-upload mode; file_key returned by pre_upload (plaintext or base64 accepted) | [optional] 
**file_type** | **string** | Required when using documentation_file_key; plaintext MIME or its base64 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
