# # InlineObject1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**side** | **string** | PAY/GET quote direction. PAY means user inputs pay amount, GET means user inputs get amount. If PAY, pay_amount is required. If GET, get_amount is required | 
**pay_coin** | **string** | Currency the user pays. Supported currencies can be found on the OTC web quote page. | 
**get_coin** | **string** | Currency the user receives. Supported currencies can be found on the OTC web quote page. | 
**pay_amount** | **string** | User payment currency amount | [optional] 
**get_amount** | **string** | Amount of currency received by the user | [optional] 
**create_quote_token** | **string** | Create quote token: 0: quote preview only; 1: generate quote token for order placement. | [optional] 
**promotion_code** | **string** | Promotion code (optional) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
