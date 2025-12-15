# Alexasomba\\Paystack\PaymentRequestApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentRequestArchive()**](PaymentRequestApi.md#paymentRequestArchive) | **POST** /paymentrequest/archive/{id} | Archive Payment Request |
| [**paymentRequestCreate()**](PaymentRequestApi.md#paymentRequestCreate) | **POST** /paymentrequest | Create Payment Request |
| [**paymentRequestFetch()**](PaymentRequestApi.md#paymentRequestFetch) | **GET** /paymentrequest/{id} | Fetch Payment Request |
| [**paymentRequestFinalize()**](PaymentRequestApi.md#paymentRequestFinalize) | **POST** /paymentrequest/finalize/{id} | Finalize Payment Request |
| [**paymentRequestList()**](PaymentRequestApi.md#paymentRequestList) | **GET** /paymentrequest | List Payment Request |
| [**paymentRequestNotify()**](PaymentRequestApi.md#paymentRequestNotify) | **POST** /paymentrequest/notify/{id} | Send Notification |
| [**paymentRequestTotals()**](PaymentRequestApi.md#paymentRequestTotals) | **GET** /paymentrequest/totals | Payment Request Total |
| [**paymentRequestUpdate()**](PaymentRequestApi.md#paymentRequestUpdate) | **PUT** /paymentrequest/{id} | Update Payment Request |
| [**paymentRequestVerify()**](PaymentRequestApi.md#paymentRequestVerify) | **GET** /paymentrequest/verify/{id} | Verify Payment Request |


## `paymentRequestArchive()`

```php
paymentRequestArchive($id): \Alexasomba\\Paystack\Model\PaymentRequestArchiveResponse
```

Archive Payment Request

Archive a payment request to clean up your records. An archived payment request cannot be verified and will not  be returned when listing all previously created payment requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a previously created payment request

try {
    $result = $apiInstance->paymentRequestArchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a previously created payment request | |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestArchiveResponse**](../Model/PaymentRequestArchiveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestCreate()`

```php
paymentRequestCreate($payment_request_create): \Alexasomba\\Paystack\Model\PaymentRequestCreateResponse
```

Create Payment Request

Create a new payment request by issuing an invoice to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_request_create = new \Alexasomba\\Paystack\Model\PaymentRequestCreate(); // \Alexasomba\\Paystack\Model\PaymentRequestCreate

try {
    $result = $apiInstance->paymentRequestCreate($payment_request_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_create** | [**\Alexasomba\\Paystack\Model\PaymentRequestCreate**](../Model/PaymentRequestCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestCreateResponse**](../Model/PaymentRequestCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestFetch()`

```php
paymentRequestFetch($id): \Alexasomba\\Paystack\Model\PaymentRequestListResponse
```

Fetch Payment Request

Fetch a previously created payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a previously created payment request

try {
    $result = $apiInstance->paymentRequestFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a previously created payment request | |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestListResponse**](../Model/PaymentRequestListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestFinalize()`

```php
paymentRequestFinalize($id): \Alexasomba\\Paystack\Model\PaymentRequestFinalizeResponse
```

Finalize Payment Request

Finalise the creation of a draft payment request for a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a draft payment request

try {
    $result = $apiInstance->paymentRequestFinalize($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestFinalize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a draft payment request | |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestFinalizeResponse**](../Model/PaymentRequestFinalizeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestList()`

```php
paymentRequestList($per_page, $page, $customer, $status, $currency, $from, $to): \Alexasomba\\Paystack\Model\PaymentRequestListResponse
```

List Payment Request

List all previously created payment requests to your customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$customer = 'customer_example'; // string | Customer ID
$status = success; // string | Invoice status to filter
$currency = 'currency_example'; // string | If your integration supports more than one currency, choose the one to filter
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->paymentRequestList($per_page, $page, $customer, $status, $currency, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **customer** | **string**| Customer ID | [optional] |
| **status** | **string**| Invoice status to filter | [optional] |
| **currency** | **string**| If your integration supports more than one currency, choose the one to filter | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestListResponse**](../Model/PaymentRequestListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestNotify()`

```php
paymentRequestNotify($id): \Alexasomba\\Paystack\Model\PaymentRequestSendNotificationResponse
```

Send Notification

Trigger an email reminder to a customer for a previously created payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a previously created payment request

try {
    $result = $apiInstance->paymentRequestNotify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestNotify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a previously created payment request | |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestSendNotificationResponse**](../Model/PaymentRequestSendNotificationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestTotals()`

```php
paymentRequestTotals(): \Alexasomba\\Paystack\Model\PaymentRequestTotalResponse
```

Payment Request Total

Get the metric of all pending and successful payment requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentRequestTotals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestTotalResponse**](../Model/PaymentRequestTotalResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestUpdate()`

```php
paymentRequestUpdate($id, $body): \Alexasomba\\Paystack\Model\PaymentRequestUpdateResponse
```

Update Payment Request

Update a previously created payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a previously created payment request
$body = new \Alexasomba\\Paystack\Model\PaymentrequestId(); // \Alexasomba\\Paystack\Model\PaymentrequestId

try {
    $result = $apiInstance->paymentRequestUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a previously created payment request | |
| **body** | **\Alexasomba\\Paystack\Model\PaymentrequestId**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestUpdateResponse**](../Model/PaymentRequestUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestVerify()`

```php
paymentRequestVerify($id): \Alexasomba\\Paystack\Model\PaymentRequestVerifyResponse
```

Verify Payment Request

Verify the status of a previously created payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 18823736; // int | The unique identifier of a previously created payment request

try {
    $result = $apiInstance->paymentRequestVerify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->paymentRequestVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a previously created payment request | |

### Return type

[**\Alexasomba\\Paystack\Model\PaymentRequestVerifyResponse**](../Model/PaymentRequestVerifyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
