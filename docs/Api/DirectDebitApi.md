# Alexasomba\\Paystack\DirectDebitApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directdebitListMandateAuthorizations()**](DirectDebitApi.md#directdebitListMandateAuthorizations) | **GET** /directdebit/mandate-authorizations | List Mandate Authorizations |
| [**directdebitTriggerActivationCharge()**](DirectDebitApi.md#directdebitTriggerActivationCharge) | **PUT** /directdebit/activation-charge | Trigger Activation Charge |


## `directdebitListMandateAuthorizations()`

```php
directdebitListMandateAuthorizations($cursor, $status, $per_page): \Alexasomba\\Paystack\Model\CustomerFetchMandateAuthorizationsResponse
```

List Mandate Authorizations

Get a list of all the direct debit mandates on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DirectDebitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | The cursor value of the next set of authorizations to fetch. You can get this from the meta object of the response
$status = 'status_example'; // string | Filter by the authorization status
$per_page = 56; // int | The number of authorizations to fetch per request

try {
    $result = $apiInstance->directdebitListMandateAuthorizations($cursor, $status, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitApi->directdebitListMandateAuthorizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| The cursor value of the next set of authorizations to fetch. You can get this from the meta object of the response | [optional] |
| **status** | **string**| Filter by the authorization status | [optional] |
| **per_page** | **int**| The number of authorizations to fetch per request | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerFetchMandateAuthorizationsResponse**](../Model/CustomerFetchMandateAuthorizationsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directdebitTriggerActivationCharge()`

```php
directdebitTriggerActivationCharge($direct_debit_activation_charge_request): \Alexasomba\\Paystack\Model\DirectDebitActivationChargeResponse
```

Trigger Activation Charge

Trigger activation charge for specified customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DirectDebitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_debit_activation_charge_request = new \Alexasomba\\Paystack\Model\DirectDebitActivationChargeRequest(); // \Alexasomba\\Paystack\Model\DirectDebitActivationChargeRequest

try {
    $result = $apiInstance->directdebitTriggerActivationCharge($direct_debit_activation_charge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitApi->directdebitTriggerActivationCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direct_debit_activation_charge_request** | [**\Alexasomba\\Paystack\Model\DirectDebitActivationChargeRequest**](../Model/DirectDebitActivationChargeRequest.md)|  | |

### Return type

[**\Alexasomba\\Paystack\Model\DirectDebitActivationChargeResponse**](../Model/DirectDebitActivationChargeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
