# # OtcUploadPreUploadPolicyFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Plaintext temporary object path, identical to base64_decode(file_key) | 
**content_type** | **string** | Must match the decoded content_type from the pre-upload request | 
**x_amz_credential** | **string** | AWS temporary credential and scope; submit them unchanged during direct upload | 
**x_amz_algorithm** | **string** | AWS signing algorithm; submit it unchanged during direct upload | 
**x_amz_date** | **string** | AWS signing timestamp; submit it unchanged during direct upload | 
**policy** | **string** | Base64-encoded S3 POST Policy; submit it unchanged during direct upload | 
**x_amz_signature** | **string** | S3 POST Policy signature; submit it unchanged during direct upload | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
