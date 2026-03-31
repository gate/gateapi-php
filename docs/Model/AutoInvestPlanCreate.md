# # AutoInvestPlanCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_name** | **string** | Plan name。Length: 0-50 characters | [optional] 
**plan_des** | **string** | Plan description | [optional] 
**plan_money** | **string** | Pricing currency，SupportUSDT，BTC | 
**plan_amount** | **string** | Per PeriodAuto InvestAmount，Must &gt; 0，and not exceedThePricing currencyConfigurationSingleMaximumAmount | 
**plan_period_type** | **string** | Enum: daily, weekly, biweekly, monthly, hourly, 4-hourly | 
**plan_period_day** | **int** | Cycle day. For monthly: day of month (1-30); For weekly/biweekly: day of week (1-7, 1&#x3D;Monday); For daily/hourly/4-hourly: ignored | 
**plan_period_hour** | **int** | Execution hourAuto Invest 0-23 | 
**items** | [**\GateApi\Model\AutoInvestPlanCreateItems[]**](AutoInvestPlanCreateItems.md) | Investment portfolio, asset cannot be repeated; Sum of all items&#39; ratios must be 100 | 
**fund_source** | **string** | Fund source: spot or earn, default: spot | [optional] 
**fund_flow** | **string** | Fund flow direction: auto_invest or earn, default: auto_invest | [optional] 
**type** | **int** | 0 Normal creation, 1 QuickInvestment | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
