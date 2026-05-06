# # ContractMartingaleCreateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invest_amount** | **string** | Margin allocated; the server converts it to initial contract size using live contract price, contract multiplier, and minimum lot size. | 
**price_deviation** | **string** |  | 
**max_orders** | **int** |  | 
**take_profit_ratio** | **string** |  | 
**direction** | [**\GateApi\Model\ContractMartingaleDirection**](ContractMartingaleDirection.md) |  | 
**leverage** | **string** |  | 
**stop_loss_price** | **string** | Legacy field name. The AIHub &#x60;contract_martingale&#x60; creation path does not map this field today; follow contract martingale rules from the underlying API. MCP tooling must match bot-service behavior. | [optional] 
**profit_sharing_ratio** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
