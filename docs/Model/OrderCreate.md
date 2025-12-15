# # OrderCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email of the customer placing the order |
**first_name** | **string** | The customer&#39;s first name |
**last_name** | **string** | The customer&#39;s last name |
**phone** | **string** | The customer&#39;s mobile number |
**currency** | **string** | Currency in which amount is set |
**items** | [**\Alexasomba\\Paystack\Model\OrderItems[]**](OrderItems.md) |  |
**shipping** | [**\Alexasomba\\Paystack\Model\OrderShipping**](OrderShipping.md) |  |
**is_gift** | **bool** | A flag to indicate if the order is for someone else | [optional]
**pay_for_me** | **bool** | A flag to indicate if the someone else should pay for the order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
