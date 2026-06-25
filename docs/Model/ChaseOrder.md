# # ChaseOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**user** | **string** |  | [optional] 
**contract** | **string** |  | [optional] 
**settle** | **string** |  | [optional] 
**amount** | **string** | Total size in contracts; positive for buy, negative for sell | [optional] 
**price_limit** | **string** |  | [optional] 
**reduce_only** | **bool** |  | [optional] 
**text** | **string** |  | [optional] 
**create_time** | **int** |  | [optional] 
**finish_time** | **int** |  | [optional] 
**original_status** | **int** | Raw status enum | [optional] 
**status** | **string** | Simplified status, e.g. open / finished | [optional] 
**reason** | **string** |  | [optional] 
**fill_amount** | **string** |  | [optional] 
**average_fill_price** | **string** |  | [optional] 
**suborder_id** | **string** |  | [optional] 
**is_dual_mode** | **bool** |  | [optional] 
**side_label** | **string** |  | [optional] 
**position_side_output** | **string** |  | [optional] 
**chase_price** | **string** |  | [optional] 
**interval_sec** | **int** |  | [optional] 
**updated_at** | **int** |  | [optional] 
**suborder_price** | **string** |  | [optional] 
**suborder_ongoing** | **bool** |  | [optional] 
**suborder_finish_as** | **string** |  | [optional] 
**price_type** | **int** | PriceType enum: 1 latest, 2 index, 3 mark | [optional] 
**price_gap_type** | **string** |  | [optional] 
**price_gap_value** | **string** |  | [optional] 
**status_code** | **string** |  | [optional] 
**create_time_precise** | **string** | Creation time (seconds.microseconds) | [optional] 
**finish_time_precise** | **string** |  | [optional] 
**pos_margin_mode** | **string** |  | [optional] 
**position_mode** | **string** |  | [optional] 
**leverage** | **string** |  | [optional] 
**error_label** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
