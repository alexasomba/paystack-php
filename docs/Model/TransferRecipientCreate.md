# # TransferRecipientCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Recipient Type |
**name** | **string** | The recipient&#39;s name according to their account registration. |
**account_number** | **string** | Recipient&#39;s bank account number |
**bank_code** | **string** | Recipient&#39;s bank code. You can get the list of Bank Codes by calling the List Banks endpoint |
**description** | **string** | A description for this recipient | [optional]
**currency** | **string** | Currency for the account receiving the transfer | [optional]
**authorization_code** | **string** | An authorization code from a previous transaction | [optional]
**metadata** | **object** | JSON object of custom data | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
