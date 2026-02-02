# Alexasomba\\Paystack\IntegrationApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**integrationFetchPaymentSessionTimeout()**](IntegrationApi.md#integrationFetchPaymentSessionTimeout) | **GET** /integration/payment_session_timeout | Fetch Payment Session Timeout |
| [**integrationUpdatePaymentSessionTimeout()**](IntegrationApi.md#integrationUpdatePaymentSessionTimeout) | **PUT** /integration/payment_session_timeout | Update Payment Session Timeout |


## `integrationFetchPaymentSessionTimeout()`

```php
integrationFetchPaymentSessionTimeout(): \Alexasomba\\Paystack\Model\ControlPanelFetchPaymentSessionTimeoutResponse
```

Fetch Payment Session Timeout

Fetch the session timeout of a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->integrationFetchPaymentSessionTimeout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integrationFetchPaymentSessionTimeout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alexasomba\\Paystack\Model\ControlPanelFetchPaymentSessionTimeoutResponse**](../Model/ControlPanelFetchPaymentSessionTimeoutResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationUpdatePaymentSessionTimeout()`

```php
integrationUpdatePaymentSessionTimeout($payment_session): \Alexasomba\\Paystack\Model\ControlPanelUpdatePaymentSessionTimeoutResponse
```

Update Payment Session Timeout

Update the session timeout of a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_session = new \Alexasomba\\Paystack\Model\PaymentSession(); // \Alexasomba\\Paystack\Model\PaymentSession

try {
    $result = $apiInstance->integrationUpdatePaymentSessionTimeout($payment_session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integrationUpdatePaymentSessionTimeout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_session** | [**\Alexasomba\\Paystack\Model\PaymentSession**](../Model/PaymentSession.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ControlPanelUpdatePaymentSessionTimeoutResponse**](../Model/ControlPanelUpdatePaymentSessionTimeoutResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
