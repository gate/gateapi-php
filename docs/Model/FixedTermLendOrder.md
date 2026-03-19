# # FixedTermLendOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Subscription record ID | [optional] 
**business** | **int** | Business type: 1 for regular, 2 for VIP | [optional] 
**order_id** | **int** | Order ID | [optional] 
**user_id** | **int** | User ID | [optional] 
**asset** | **string** | Currency | [optional] 
**product_id** | **int** | Product ID | [optional] 
**lock_up_period** | **int** | Lock-up period (in days) | [optional] 
**principal** | **string** | Subscription principal | [optional] 
**year_rate** | **string** | Annual interest rate | [optional] 
**product_type** | **int** | Product type: 1 for regular, 2 for VIP | [optional] 
**interest** | **string** | Accrued interest | [optional] 
**status** | **int** | Order status: 1 for holding, 2 for redeemed, 3 for matured, 4 for settled | [optional] 
**reinvest_status** | **int** | Auto-renewal status: 0 for disabled, 1 for enabled | [optional] 
**redeem_account_type** | **int** | Redemption payout account type: 1 for spot account | [optional] 
**origin_order** | **string** | Original order ID, linked to previous order IDs in auto-renewal scenarios | [optional] 
**redeem_type** | **int** | Redemption type: 1 for early redemption, 2 for maturity redemption | [optional] 
**redeem_time** | **string** | Redemption time | [optional] 
**finish_time** | **string** | Expiration time | [optional] 
**create_time** | **string** | Created time | [optional] 
**year_rate_perent** | **string** | Annual interest rate percentage display value | [optional] 
**total_year_rate_percent** | **string** | Comprehensive annualized yield percentage (including interest rate boost, rewards, etc.) | [optional] 
**total_interest** | **string** | Total earnings (including interest and bonus rewards) | [optional] 
**product_info** | [**\GateApi\Model\FixedTermProductInfo**](FixedTermProductInfo.md) |  | [optional] 
**bonus_info** | [**\GateApi\Model\FixedTermBonusInfo**](FixedTermBonusInfo.md) |  | [optional] 
**coupon_info** | [**\GateApi\Model\FixedTermCouponInfo**](FixedTermCouponInfo.md) |  | [optional] 
**redeem_at** | **int** | Redemption timestamp (in seconds) | [optional] 
**finish_at** | **int** | Expiration timestamp (in seconds) | [optional] 
**create_at** | **int** | Creation timestamp (in seconds) | [optional] 
**icon** | **string** | Currency icon URL | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
