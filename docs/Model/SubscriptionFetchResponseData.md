# # SubscriptionFetchResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**domain** | **string** |  |
**status** | **string** |  |
**subscription_code** | **string** |  |
**email_token** | **string** |  |
**amount** | **int** |  |
**cron_expression** | **string** |  |
**next_payment_date** | **string** |  |
**open_invoice** | **object** |  |
**created_at** | **string** |  |
**cancelled_at** | **object** |  |
**integration** | **int** |  |
**plan** | [**\Alexasomba\\Paystack\Model\SubscriptionFetchResponseDataPlan**](SubscriptionFetchResponseDataPlan.md) |  |
**authorization** | [**\Alexasomba\\Paystack\Model\TransactionPartialDebitResponseDataAuthorization**](TransactionPartialDebitResponseDataAuthorization.md) |  |
**customer** | [**\Alexasomba\\Paystack\Model\ChargeCreateResponseDataCustomer**](ChargeCreateResponseDataCustomer.md) |  |
**invoices** | **object[]** |  |
**invoices_history** | **object[]** |  |
**invoice_limit** | **int** |  |
**split_code** | **object** |  |
**most_recent_invoice** | **object** |  |
**payments_count** | **int** |  |
**metadata** | **object** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
