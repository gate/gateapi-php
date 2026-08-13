# # OtcStableCoinOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_coin** | **string** | Currency paid by the user. Supported currencies can be queried from the OTC web stablecoin quote page. | 
**get_coin** | **string** | Currency to be received by the user. Supported currencies can be queried from the OTC web stablecoin quote page. | 
**pay_amount** | **string** | User payment currency amount | 
**get_amount** | **string** | Amount of currency received by the user | 
**side** | **string** | The side returned by the quote endpoint (used for order validation). For backward compatibility, &#x60;PAY&#x60;/&#x60;GET&#x60; are accepted; new integrations should use the value returned by the quote response. | 
**promotion_code** | **string** | Promotion code (optional) | [optional] 
**quote_token** | **string** | Parameter returned by the quote API | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
