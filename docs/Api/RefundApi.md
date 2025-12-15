# Alexasomba\\Paystack\RefundApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**refundCreate()**](RefundApi.md#refundCreate) | **POST** /refund | Create Refund |
| [**refundFetch()**](RefundApi.md#refundFetch) | **GET** /refund/{id} | Fetch Refund |
| [**refundList()**](RefundApi.md#refundList) | **GET** /refund | List Refunds |
| [**refundRetry()**](RefundApi.md#refundRetry) | **POST** /refund/retry_with_customer_details/{id} | Retry Refund |


## `refundCreate()`

```php
refundCreate($refund_create): \Alexasomba\\Paystack\Model\RefundCreateResponse
```

Create Refund

Initiate a refund for a previously completed transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_create = new \Alexasomba\\Paystack\Model\RefundCreate(); // \Alexasomba\\Paystack\Model\RefundCreate

try {
    $result = $apiInstance->refundCreate($refund_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_create** | [**\Alexasomba\\Paystack\Model\RefundCreate**](../Model/RefundCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\RefundCreateResponse**](../Model/RefundCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundFetch()`

```php
refundFetch($id): \Alexasomba\\Paystack\Model\RefundFetchResponse
```

Fetch Refund

Get a previously created refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 15581137; // int | The identifier of the refund

try {
    $result = $apiInstance->refundFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The identifier of the refund | |

### Return type

[**\Alexasomba\\Paystack\Model\RefundFetchResponse**](../Model/RefundFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundList()`

```php
refundList($per_page, $page, $from, $to): \Alexasomba\\Paystack\Model\RefundListResponse
```

List Refunds

List previously created refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 10; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->refundList($per_page, $page, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] [default to 50] |
| **page** | **int**| The section to retrieve | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\RefundListResponse**](../Model/RefundListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundRetry()`

```php
refundRetry($id, $body): \Alexasomba\\Paystack\Model\RefundRetryResponse
```

Retry Refund

Retry a refund with a `needs-attention` status by providing the bank account details of a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 15581137; // int | The identifier of the refund
$body = new \Alexasomba\\Paystack\Model\RefundRetryWithCustomerDetailsId(); // \Alexasomba\\Paystack\Model\RefundRetryWithCustomerDetailsId

try {
    $result = $apiInstance->refundRetry($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The identifier of the refund | |
| **body** | **\Alexasomba\\Paystack\Model\RefundRetryWithCustomerDetailsId**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\RefundRetryResponse**](../Model/RefundRetryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
