# # ContractStat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **int** | Stat timestamp | [optional] 
**lsr_taker** | **double** | Long/short taker ratio | [optional] 
**lsr_account** | **double** | Long/short position user ratio | [optional] 
**long_liq_size** | **string** | Long liquidation size (contracts) | [optional] 
**long_liq_amount** | **double** | Long liquidation amount (base currency) | [optional] 
**long_liq_usd** | **double** | Long liquidation volume (quote currency) | [optional] 
**long_liq_usd_new** | **double** | Long liquidations in quote currency; USDT settlement: long_liq_size × multiplier × mark price | [optional] 
**short_liq_size** | **string** | Short liquidation size (contracts) | [optional] 
**short_liq_amount** | **double** | Short liquidation amount (base currency) | [optional] 
**short_liq_usd** | **double** | Short liquidation volume (quote currency) | [optional] 
**short_liq_usd_new** | **double** | Short liquidations in quote currency; USDT settlement: short_liq_size × multiplier × mark price | [optional] 
**open_interest** | **string** | Total open interest size (contracts) | [optional] 
**open_interest_usd** | **double** | Total open interest volume (quote currency) | [optional] 
**top_lsr_account** | **double** | Top trader long/short account ratio | [optional] 
**top_lsr_size** | **string** | Top trader long/short position ratio | [optional] 
**mark_price** | **double** | Mark price | [optional] 
**top_long_size** | **string** | Top long open interest (contracts) | [optional] 
**top_short_size** | **string** | Top short open interest (contracts) | [optional] 
**long_taker_size** | **string** | Long taker trade volume (contracts) | [optional] 
**short_taker_size** | **string** | Short taker trade volume (contracts) | [optional] 
**top_long_account** | **int** | Number of top long accounts (large holders) | [optional] 
**top_short_account** | **int** | Number of top short accounts (large holders) | [optional] 
**long_users** | **string** | Number of users holding long positions | [optional] 
**short_users** | **string** | Number of users holding short positions | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
