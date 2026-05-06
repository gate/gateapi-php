# # AIHubRecommendation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recommendation_id** | **string** |  | 
**market** | **string** |  | 
**strategy_type** | [**\GateApi\Model\StrategyType**](StrategyType.md) |  | 
**strategy_name** | **string** |  | 
**backtest_apr** | **string** |  | [optional] 
**max_drawdown** | **string** |  | [optional] 
**summary** | **string** |  | 
**strategy_params_preview** | **string** | Recommended-parameter preview as JSON text (string-encoded so clients deserialize it consistently). The value is a serialized JSON object whose structure varies by strategy type; callers or upper-layer models must parse it. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
