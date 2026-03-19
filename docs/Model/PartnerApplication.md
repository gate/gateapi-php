# # PartnerApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Application record ID | [optional] 
**uid** | **int** | User ID | [optional] 
**language** | **string** | Language code | [optional] 
**country_id** | **int** | Country ID | [optional] 
**firstname** | **string** | First name | [optional] 
**lastname** | **string** | Last name | [optional] 
**email** | **string** | Email address | [optional] 
**join_uid** | **int** | Joined user ID | [optional] 
**join_country_id** | **int** | Joined country ID | [optional] 
**identity_comment** | **string** | Identity description | [optional] 
**promotion_channels** | **string** | Promotion channels, separated by | | [optional] 
**contact_details** | **string** | Contact details (JSON string) | [optional] 
**know_details** | **string** | Learn more | [optional] 
**question_lang** | **string** | Question language | [optional] 
**create_timest** | [**\DateTime**](\DateTime.md) | Created time | [optional] 
**update_timest** | [**\DateTime**](\DateTime.md) | Update time | [optional] 
**apply_type** | **int** | Application type | [optional] 
**audit_status** | **int** | Review status (0 - pending, 1 - approved, 2 - rejected) | [optional] 
**edit_counts** | **int** | Edit count | [optional] 
**proof_images** | **string** | Proof image path | [optional] 
**proof_videos** | **string** | Proof video path | [optional] 
**proof_url** | **string** | Proof link | [optional] 
**audit_reason** | **int** | Review reason code | [optional] 
**channel_type** | **int** | Channel type | [optional] 
**region** | **string** | Region | [optional] 
**phone** | **string** | Phone number | [optional] 
**telegram** | **string** | Telegram account | [optional] 
**other_contact** | [**\GateApi\Model\OtherContact**](OtherContact.md) |  | [optional] 
**proof_images_url_list** | **string[]** | List of proof image URLs | [optional] 
**proof_videos_url_list** | **string[]** | List of proof video URLs | [optional] 
**apply_msg** | **string** | Application message | [optional] 
**jump_url** | **string** | Redirect URL | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
