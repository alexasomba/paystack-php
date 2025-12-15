# # BulkChargeInitiate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization** | **string** | Customer&#39;s card authorization code |
**amount** | **int** | Amount to charge on the authorization |
**reference** | **string** | A unique identifier containing lowercase letters &#x60;(a-z)&#x60;, digits &#x60;(0-9)&#x60; and these symbols: dash (&#x60;-&#x60;), underscore(&#x60;_&#x60;) | [optional]
**attempt_partial_debit** | **bool** | A flag to indicate if you want us to try recouping lower amounts when the customer has insufficient fund | [optional]
**at_least** | **int** | Minimum amount to charge if the attempt_partial_debit flag is set | [optional]
**metadata** | **object** | JSON object of custom data | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
