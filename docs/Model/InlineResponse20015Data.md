# # InlineResponse20015Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rate** | **string** | Price | 
**type** | **string** | Buy/Sell order | 
**amount** | **string** | Cryptocurrency amount | 
**min_amount** | **string** | Minimum limit | 
**max_amount** | **string** | Maximum limit | 
**total** | **string** | Fiat amount | 
**pay_ali** | **int** | Whether Alipay payment is supported | 
**pay_bank** | **int** | Whether bank payment is supported | 
**pay_paypal** | **int** | Whether PayPal payment is supported | 
**pay_wechat** | **int** | Whether WeChat payment is supported | 
**pay_type_num** | **string** | Payment method ID list | 
**pay_type_json** | **string** | Payment method list | 
**locked_amount** | **string** | Locked amount | 
**orderid** | **int** | Order ID | 
**timestamp** | **int** | Created time | 
**currency_type** | **string** | Cryptocurrency type | 
**want_type** | **string** | Fiat type | 
**hide_rate** | **string** | Hidden price | 
**trade_tips** | **string** | Trading terms | 
**auto_reply** | **string** | Auto reply | 
**new_hand** | **string** | Merchant-friendly order | 
**rate_ref_id** | **int** | Floating price reference ID: 1&#x3D;Platform reference price, 3&#x3D;Spot reference price (≤0 means fixed price, &gt;0 means floating price) | 
**rate_offset** | **float** | Floating ratio (absolute value) | 
**status** | **string** | Status | 
**rate_fixed** | **int** | 0&#x3D;Floating, 1&#x3D;Fixed | 
**float_trend** | **int** | 0&#x3D;Upward float, 1&#x3D;Downward float | 
**expire_min** | **int** | Timeout (minutes) | 
**tier_limit** | **int** | Tier limit | 
**reg_time_limit** | **int** | Registration time limit | 
**advertisers_limit** | **int** | Do not trade with advertisers, advertiser limit: 0&#x3D;No limit, 1&#x3D;Limit | 
**verified_limit** | **int** | kyclimit | 
**min_completed_limit** | **int** | Minimum limit of completed orders | 
**max_completed_limit** | **int** | Maximum limit of completed orders | 
**user_orders_limit** | **int** | Order count limit | 
**completed_rate_limit** | **int** | 30-day completion rate limit | 
**user_country_limit** | **int** | KYC nationality restriction | 
**limit_country_cn** | **string** | Restricted nationality (Chinese) | 
**limit_country_en** | **string** | Restricted nationality (English) | 
**is_hedge** | **int** | Whether auto delegation | 
**hide_payment** | **int** | Whether to hide payment method | 
**fee** | **int** | fee | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
