# # CustomerAuthorizationInitializeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Customer&#39;s email address |
**channel** | **string** | direct_debit is the only supported option for now |
**callback_url** | **string** | Fully qualified url (e.g. https://example.com/) to redirect your customer to | [optional]
**account** | [**\Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeAccount**](CustomerAuthorizationInitializeAccount.md) |  | [optional]
**address** | [**\Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeAddress**](CustomerAuthorizationInitializeAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
