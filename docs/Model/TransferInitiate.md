# # TransferInitiate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount to transfer in kobo if currency is NGN and pesewas if currency is GHS. |
**recipient** | **string** | The transfer recipient&#39;s code |
**reference** | **string** | To ensure idempotency, you need to provide e a unique identifier for the request.  The identifier should be a lowercase alphanumeric string with only -,_  symbols allowed. |
**reason** | **string** | The reason or narration for the transfer. | [optional]
**source** | **string** | The source of funds to send from | [default to 'balance']
**currency** | **string** | Specify the currency of the transfer. | [optional] [default to 'NGN']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
