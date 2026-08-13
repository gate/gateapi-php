# # P2pAdsListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Serial number | [optional] 
**asset** | **string** | Cryptocurrency | [optional] 
**fiat_unit** | **string** | Fiat currency | [optional] 
**adv_no** | **int** | Ad ID | [optional] 
**price** | **string** | Price | [optional] 
**surplus_amount** | **string** | Remaining tradable crypto quantity | [optional] 
**max_single_trans_amount** | **string** | Maximum crypto size per trade. | [optional] 
**min_single_trans_amount** | **string** | Minimum crypto size per trade. | [optional] 
**fiat_min_amount** | **string** | Minimum fiat amount per order | [optional] 
**fiat_max_amount** | **string** | Maximum fiat amount per order | [optional] 
**limit_basis** | **int** | Trading limit unit. 0: crypto quantity, 1: fiat amount | [optional] 
**limit_basis_text** | **string** | Trading limit unit label. crypto: crypto quantity, fiat: fiat amount | [optional] 
**trade_methods** | [**\GateApi\Model\P2pAdsListTradeMethod[]**](P2pAdsListTradeMethod.md) | Supported payment methods list | [optional] 
**nick_name** | **string** | Advertiser Nickname | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
