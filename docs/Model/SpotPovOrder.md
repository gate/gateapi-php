# # SpotPovOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order ID | [readonly] 
**currency_pair** | **string** | Currency pair | [readonly] 
**side** | **string** | Buy or sell order | [readonly] 
**amount** | **string** | Trade amount | [readonly] 
**participation_rate** | **int** | Target participation rate as a percentage. Allowed values: 5, 10, 20, and 40 | [readonly] 
**ttl** | **string** | Time to live. Valid values: 1h, 6h, 12h, 1d, 2d, 3d, 4d, 5d, 6d, and 7d | [readonly] 
**limit_price** | **string** | Limit price. If omitted, the market price is used | [optional] [readonly] 
**trigger_price** | **string** | Trigger price. If omitted, the order is triggered immediately | [optional] [readonly] 
**status** | **string** | Order status  - CREATED: Created - CANCELING: Canceling - RUNNING: Running - COMPLETED: Completed - EXPIRED: Expired - TERMINATED: Terminated | [readonly] 
**terminated_as** | **string** | Order termination reason code | [optional] [readonly] 
**start_time_ms** | **int** | Order execution start time in milliseconds | [optional] [readonly] 
**end_time_ms** | **int** | Order execution end time in milliseconds | [optional] [readonly] 
**expire_time_ms** | **int** | Order expiration time in milliseconds | [optional] [readonly] 
**create_time_ms** | **int** | Creation time of order (in milliseconds) | [readonly] 
**update_time_ms** | **int** | Last modification time of order (in milliseconds) | [optional] [readonly] 
**text** | **string** | Order custom information. Users can set custom ID with this field. Custom fields must meet the following conditions:  1. Must start with &#x60;t-&#x60; 2. Excluding &#x60;t-&#x60;, length cannot exceed 28 bytes 3. Can only contain numbers, letters, underscore(_), hyphen(-) or dot(.) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
