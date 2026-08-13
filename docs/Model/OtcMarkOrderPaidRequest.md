# # OtcMarkOrderPaidRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | 
**client_order_id** | **string** | Client order ID (used by some gateway/Inner Pay paths, optional) | [optional] 
**payment_receipt_file_key** | **string** | User payment receipt: **required**. Stored as a file_key. One file; jpg/jpeg/png/pdf; maximum 10 MB. | 
**payment_receipt** | **string** | Alias compatible with &#x60;payment_receipt_file_key&#x60; (depends on the gateway&#39;s external field name) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
