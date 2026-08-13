# # OtcOrderDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | 
**uid** | **string** | User ID | 
**type** | **string** | Order Type | 
**fiat_currency** | **string** | Fiat currency | 
**fiat_amount** | **string** | Fiat amount | 
**crypto_currency** | **string** | Digital currency | 
**crypto_amount** | **string** | Cryptocurrency amount | 
**rate** | **string** | Exchange rate | 
**bank_account_name** | **string** | User payment/receiving name | [optional] 
**bank_name** | **string** | User payment/receiving bank name | [optional] 
**bank_country** | **string** | User payment/receiving bank country | [optional] 
**bank_address** | **string** | User payment/receiving bank address | [optional] 
**bank_account_number_iban** | **string** | User payment/receiving bank account number/IBAN | [optional] 
**swift_code** | **string** | User payment/receiving bank SWIFT code | [optional] 
**intermediate_bank_name** | **string** | User payment/receiving intermediary bank name | [optional] 
**intermediary_bank_swift_code** | **string** | User payment/receiving intermediary bank SWIFT code | [optional] 
**gate_bank_account_name** | **string** | Gate beneficiary name, shown for BUY only | [optional] 
**gate_bank_name** | **string** | Gate beneficiary bank name, shown for BUY only | [optional] 
**gate_bank_country** | **string** | Gate beneficiary bank country, shown for BUY only | [optional] 
**gate_bank_address** | **string** | Gate beneficiary bank address, shown for BUY only | [optional] 
**gate_bank_account_number_iban** | **string** | Gate beneficiary bank account number/IBAN, shown for BUY only | [optional] 
**gate_swift_code** | **string** | Gate beneficiary bank SWIFT code, shown for BUY only | [optional] 
**gate_intermediary_bank_name** | **string** | Gate beneficiary intermediary bank name, shown for BUY only | [optional] 
**gate_intermediary_bank_swift_code** | **string** | Gate beneficiary intermediary bank SWIFT code, shown for BUY only | [optional] 
**gate_transfer_remark** | **string** | Transfer remark (mutually exclusive with &#x60;gate_reference_code&#x60;; empty when a BUY deposit order has a reference code), shown for BUY only | [optional] 
**gate_reference_code** | **string** | Be sure to include the reference code when making the transfer so that your order can be processed promptly. (Mutually exclusive with &#x60;gate_transfer_remark&#x60;.) | [optional] 
**status** | **string** | Status | 
**create_time** | **string** | Created time | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
