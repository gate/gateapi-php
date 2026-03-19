# # FixedTermBonusInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Activity ID | [optional] 
**product_id** | **int** | Associated product ID | [optional] 
**asset** | **string** | Product currency | [optional] 
**bonus_asset** | **string** | Reward currency | [optional] 
**kyc_limit** | **string** | KYC level restrictions, comma-separated | [optional] 
**ladder_apr** | [**\GateApi\Model\LadderApr[]**](LadderApr.md) | Tiered annual interest rate | [optional] 
**total_bonus_amount** | **string** | Total reward amount | [optional] 
**user_total_bonus_amount** | **string** | Maximum reward per user | [optional] 
**status** | **int** | Activity status: 1 for unlisted, 2 for listed, 3 for delisted | [optional] 
**start_time** | **string** | Activity start time | [optional] 
**end_time** | **string** | Activity end time | [optional] 
**create_time** | **string** | Created time | [optional] 
**start_at** | **int** | Activity start timestamp (in seconds) | [optional] 
**end_at** | **int** | Activity end timestamp (in seconds) | [optional] 
**total_issued_amount** | **string** | Total rewards distributed | [optional] 
**user_total_issued_amount** | **string** | Total rewards distributed to the user | [optional] 
**bonus_asset_price** | **string** | Reward currency price (denominated in USDT) | [optional] 
**product_asset_price** | **string** | Product currency price (denominated in USDT) | [optional] 
**product_year_rate** | **string** | Product base annual interest rate | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
