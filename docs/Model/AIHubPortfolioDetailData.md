# # AIHubPortfolioDetailData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**strategy_id** | **string** |  | 
**strategy_type** | [**\GateApi\Model\StrategyType**](StrategyType.md) |  | 
**market** | **string** | Single market, or empty string for a portfolio; use assets/markets for the latter. | 
**status** | **string** |  | 
**base_info** | [**\GateApi\Model\AIHubPortfolioBaseInfo**](AIHubPortfolioBaseInfo.md) |  | 
**metrics** | [**\GateApi\Model\AIHubPortfolioMetrics**](AIHubPortfolioMetrics.md) |  | 
**position** | [**\GateApi\Model\AIHubPortfolioPosition**](AIHubPortfolioPosition.md) |  | [optional] 
**stop_supported** | **bool** |  | 
**assets** | **string[]** |  | [optional] 
**markets** | **string[]** |  | [optional] 
**positions** | [**\GateApi\Model\AIHubPortfolioAssetPosition[]**](AIHubPortfolioAssetPosition.md) |  | [optional] 
**positions_status** | **string** |  | [optional] 
**configuration** | [**object**](.md) | Product-specific saved configuration. spot_martingale exposes AIHubSpotMartingaleConfiguration; absence is unverified. Runtime recovery internals are excluded. | [optional] 
**stop_progress** | [**\GateApi\Model\AIHubStopProgress**](AIHubStopProgress.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
