# # AccountTransferDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tx_id** | **string** | Transfer transaction ID | [readonly] 
**status** | **string** | Transfer status:  - &#x60;pending&#x60;: Processing - &#x60;success&#x60;: Successful - &#x60;fail&#x60;: Failed | [readonly] 
**currency** | **string** | Transfer currency | [readonly] 
**amount** | **string** | Transfer amount | [readonly] 
**from_account** | **string** | Source account type:  - &#x60;spot&#x60;: Spot account - &#x60;margin&#x60;: Margin account - &#x60;futures&#x60;: Perpetual futures account - &#x60;delivery&#x60;: Delivery futures account - &#x60;options&#x60;: Options account - &#x60;unknown&#x60;: Unrecognized account type | [readonly] 
**to_account** | **string** | Destination account type:  - &#x60;spot&#x60;: Spot account - &#x60;margin&#x60;: Margin account - &#x60;futures&#x60;: Perpetual futures account - &#x60;delivery&#x60;: Delivery futures account - &#x60;options&#x60;: Options account - &#x60;unknown&#x60;: Unrecognized account type | [readonly] 
**settle** | **string** | Settlement currency for futures, delivery, and options transfers; otherwise, null | [readonly] 
**currency_pair** | **string** | Currency pair for margin transfers; otherwise, null | [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
