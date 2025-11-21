# # AccountKeyInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **int** | API Key Status: 1 - Normal, 2 - Locked, 3 - Frozen (can only be modified; default is 1 upon creation) | [optional] 
**mode** | **int** | User Mode: 1 - Classic, 2 - Legacy Unified (can only be specified during creation, non-modifiable afterwards) | [optional] 
**name** | **string[]** | API Key Remark | [optional] 
**currency_pairs** | **string[]** | Trading Pair Whitelist, Maximum 30 Pairs | [optional] 
**user_id** | **int** | User ID | [optional] 
**ip_whitelist** | **string[]** | IP Whitelist | [optional] 
**perms** | [**\GateApi\Model\AccountKeyInfoPerms[]**](AccountKeyInfoPerms.md) |  | [optional] 
**key** | [**\GateApi\Model\AccountDetailKey**](AccountDetailKey.md) |  | [optional] 
**created_at** | **string** | Created time | [optional] [readonly] 
**updated_at** | **string** | Last Update Time | [optional] [readonly] 
**last_access** | **string** | Last Access Time | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
