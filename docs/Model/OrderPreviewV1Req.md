# # OrderPreviewV1Req

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\GateApi\Model\PreviewFromParam[]**](PreviewFromParam.md) | Sell ​​side; each item is the currency + the swap amount &#x60;amount&#x60; (string decimal). | 
**to** | [**\GateApi\Model\PreviewToParam[]**](PreviewToParam.md) | Target side; each item is currency + **ratio** &#x60;ratio&#x60; (string decimal, such as &#x60;0.5&#x60;). Typical source: &#x60;GET /asset-swap/config&#x60; → &#x60;recommend_v2&#x60; &#x60;schemes[].name&#x60; / &#x60;schemes[].ratio&#x60; of the strategy under a certain group. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
