# # P2pTransactionListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_buy** | **int** | Order side from current user&#39;s view. &#x60;1&#x60;: buy; &#x60;0&#x60;: sell. | [optional] 
**timest** | **string** | Creation time of order | [optional] 
**timest_expire** | **string** | Order expiration time | [optional] 
**timestamp** | **int** | Order creation timestamp | [optional] 
**rate** | **string** | Order price in fiat currency. | [optional] 
**amount** | **string** | Order size in cryptocurrency. | [optional] 
**total** | **string** | Total fiat amount of the order. | [optional] 
**txid** | **int** | Order ID | [optional] 
**status** | **string** | Display status: &#x60;unpay&#x60; awaiting payment; &#x60;paid&#x60; buyer paid; &#x60;unconfirmed&#x60; awaiting seller confirmation; &#x60;locked&#x60; locked; &#x60;finished&#x60; completed; &#x60;cancel&#x60; canceled; &#x60;expired&#x60; expired; &#x60;bclosed&#x60; arbitration filled; &#x60;sclosed&#x60; arbitration canceled. | [optional] 
**its_realname** | **string** | Counterparty real name or verified display name. | [optional] 
**its_uid** | **string** | Counterparty crypto UID. | [optional] 
**its_nick** | **string** | Counterparty nickname | [optional] 
**seller_realname** | **string** | Seller real name or verified display name. | [optional] 
**buyer_realname** | **string** | Buyer real name or verified display name. | [optional] 
**cancelable** | **int** | Whether the order can be canceled. &#x60;1&#x60;: yes; &#x60;0&#x60;: no. | [optional] 
**currency_type** | **string** | Cryptocurrency symbol. | [optional] 
**want_type** | **string** | Fiat currency | [optional] 
**hide_payment** | **int** | Whether payment methods are hidden. &#x60;1&#x60;: hidden; &#x60;0&#x60;: visible. | [optional] 
**sel_paytype** | **string** | Selected payment type for this order, e.g. &#x60;bank&#x60;, &#x60;alipay&#x60;, &#x60;wechat&#x60;, &#x60;paypal&#x60;, &#x60;swift&#x60;, &#x60;wu&#x60;. | [optional] 
**pay_others** | [**\GateApi\Model\P2pTransactionListResultPayOthers[]**](P2pTransactionListResultPayOthers.md) | Other payment method details; may appear on historical orders. | [optional] 
**cd_time** | **int** | Countdown seconds for the current order. | [optional] 
**order_type** | **int** | Order type: &#x60;1&#x60; standard; &#x60;2&#x60; partner; &#x60;3&#x60; flash swap; &#x60;4&#x60; Web3. | [optional] 
**order_tag** | **string[]** | Order tags | [optional] 
**convert_info** | [**\GateApi\Model\P2pTransactionConvertInfo**](P2pTransactionConvertInfo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
