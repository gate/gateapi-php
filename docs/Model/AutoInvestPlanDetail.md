# # AutoInvestPlanDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Plan ID | 
**version** | **int** | PlanVersion | [optional] 
**name** | **string** | Plan name | 
**create_time** | **int** | Creation time (Unix timestamp) | 
**update_time** | **int** | Update time (Unix timestamp) | 
**user_id** | **int** | User ID | 
**money** | **string** | Quote Currency | 
**amount** | **string** | Per PeriodInvestment amount | 
**period_type** | **string** | Cycle type（e.g., monthly） | 
**period_day** | **int** | Cycle day | 
**period_hour** | **int** | CycleHours | 
**portfolio** | [**\GateApi\Model\AutoInvestPortfolioItem[]**](AutoInvestPortfolioItem.md) | InvestmentPortfolio | 
**next_time** | **int** | Next execution time (Unix timestamp) | 
**period** | **int** | Executed periods | 
**fund_source** | **string** | Fund source（spot/earn） | 
**fund_flow** | **string** | Fund flow direction (auto_invest/earn) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
