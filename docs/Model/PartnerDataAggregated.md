# # PartnerDataAggregated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rebate_amount** | **string** | Rebate amount as a string for precision. Up to 6 decimal places; trailing zeros removed. | 
**trade_volume** | **string** | Trading volume as a string for precision. Up to 6 decimal places; trailing zeros removed. | 
**net_fee** | **string** | Net fee as a string for precision. Up to 6 decimal places; trailing zeros removed. | 
**customer_count** | **int** | Customer count (invited users) | 
**trading_user_count** | **string** | Transaction participant count​ (string format, consistent with online JSON serialization) only returns a specific value when business_type&#x3D;0(all), and returns nullfor other business types. | 
**time_range_desc** | **string** | Time range description | 
**business_type** | **int** | Business Type | 
**business_type_desc** | **string** | Business type description; allowed values: All, Spot, Futures, Alpha, Web3, Perps (DEX), Exchange All, Web3 All, TradFi | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
