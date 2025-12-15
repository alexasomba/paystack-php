# Alexasomba\\Paystack\TransferApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transferBulk()**](TransferApi.md#transferBulk) | **POST** /transfer/bulk | Initiate Bulk Transfer |
| [**transferDisableOtp()**](TransferApi.md#transferDisableOtp) | **POST** /transfer/disable_otp | Disable OTP for Transfers |
| [**transferDisableOtpFinalize()**](TransferApi.md#transferDisableOtpFinalize) | **POST** /transfer/disable_otp_finalize | Finalize Disabling OTP for Transfers |
| [**transferEnableOtp()**](TransferApi.md#transferEnableOtp) | **POST** /transfer/enable_otp | Enable OTP requirement for Transfers |
| [**transferExportTransfer()**](TransferApi.md#transferExportTransfer) | **GET** /transfer/export | Export Transfers |
| [**transferFetch()**](TransferApi.md#transferFetch) | **GET** /transfer/{code} | Fetch Transfer |
| [**transferFinalize()**](TransferApi.md#transferFinalize) | **POST** /transfer/finalize_transfer | Finalize Transfer |
| [**transferInitiate()**](TransferApi.md#transferInitiate) | **POST** /transfer | Initiate Transfer |
| [**transferList()**](TransferApi.md#transferList) | **GET** /transfer | List Transfers |
| [**transferResendOtp()**](TransferApi.md#transferResendOtp) | **POST** /transfer/resend_otp | Resend OTP for Transfer |
| [**transferVerify()**](TransferApi.md#transferVerify) | **GET** /transfer/verify/{reference} | Verify Transfer |


## `transferBulk()`

```php
transferBulk($transfer_bulk): \Alexasomba\\Paystack\Model\TransferBulkResponse
```

Initiate Bulk Transfer

Batch multiple transfers in a single request.  You need to disable the Transfers OTP requirement to use this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_bulk = new \Alexasomba\\Paystack\Model\TransferBulk(); // \Alexasomba\\Paystack\Model\TransferBulk

try {
    $result = $apiInstance->transferBulk($transfer_bulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_bulk** | [**\Alexasomba\\Paystack\Model\TransferBulk**](../Model/TransferBulk.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferBulkResponse**](../Model/TransferBulkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferDisableOtp()`

```php
transferDisableOtp(): \Alexasomba\\Paystack\Model\TransferDisablesOtpResponse
```

Disable OTP for Transfers

This is used in the event that you want to be able to complete transfers programmatically without use of OTPs.  No arguments required. You will get an OTP to complete the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transferDisableOtp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferDisableOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alexasomba\\Paystack\Model\TransferDisablesOtpResponse**](../Model/TransferDisablesOtpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferDisableOtpFinalize()`

```php
transferDisableOtpFinalize($transfer_finalize_disable_otp): \Alexasomba\\Paystack\Model\TransferFinalizeDisablesOtpResponse
```

Finalize Disabling OTP for Transfers

Finalize the request to disable OTP on your transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_finalize_disable_otp = new \Alexasomba\\Paystack\Model\TransferFinalizeDisableOTP(); // \Alexasomba\\Paystack\Model\TransferFinalizeDisableOTP

try {
    $result = $apiInstance->transferDisableOtpFinalize($transfer_finalize_disable_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferDisableOtpFinalize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_finalize_disable_otp** | [**\Alexasomba\\Paystack\Model\TransferFinalizeDisableOTP**](../Model/TransferFinalizeDisableOTP.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferFinalizeDisablesOtpResponse**](../Model/TransferFinalizeDisablesOtpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferEnableOtp()`

```php
transferEnableOtp(): \Alexasomba\\Paystack\Model\TransferEnablesOtpResponse
```

Enable OTP requirement for Transfers

In the event that a customer wants to stop being able to complete transfers programmatically, this endpoint helps turn OTP requirement back on.  No arguments required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transferEnableOtp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferEnableOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alexasomba\\Paystack\Model\TransferEnablesOtpResponse**](../Model/TransferEnablesOtpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferExportTransfer()`

```php
transferExportTransfer($recipient, $status, $from, $to): \Alexasomba\\Paystack\Model\Response
```

Export Transfers

Export a list of transfers carried out on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient = 'recipient_example'; // string | Export transfer by the recipient code
$status = success; // string | Export transfer by status
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->transferExportTransfer($recipient, $status, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferExportTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recipient** | **string**| Export transfer by the recipient code | [optional] |
| **status** | **string**| Export transfer by status | [optional] [default to &#39;pending&#39;] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\Response**](../Model/Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferFetch()`

```php
transferFetch($code): \Alexasomba\\Paystack\Model\TransferFetchResponse
```

Fetch Transfer

Get details of a transfer on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = TRF_1ptvuv321ahaa7q; // string | Transfer code

try {
    $result = $apiInstance->transferFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Transfer code | |

### Return type

[**\Alexasomba\\Paystack\Model\TransferFetchResponse**](../Model/TransferFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferFinalize()`

```php
transferFinalize($transfer_finalize): \Alexasomba\\Paystack\Model\Response
```

Finalize Transfer

Finalize an initiated transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_finalize = new \Alexasomba\\Paystack\Model\TransferFinalize(); // \Alexasomba\\Paystack\Model\TransferFinalize

try {
    $result = $apiInstance->transferFinalize($transfer_finalize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferFinalize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_finalize** | [**\Alexasomba\\Paystack\Model\TransferFinalize**](../Model/TransferFinalize.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\Response**](../Model/Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferInitiate()`

```php
transferInitiate($transfer_initiate): \Alexasomba\\Paystack\Model\TransferCreateResponse
```

Initiate Transfer

Send money to your customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_initiate = new \Alexasomba\\Paystack\Model\TransferInitiate(); // \Alexasomba\\Paystack\Model\TransferInitiate

try {
    $result = $apiInstance->transferInitiate($transfer_initiate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferInitiate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_initiate** | [**\Alexasomba\\Paystack\Model\TransferInitiate**](../Model/TransferInitiate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferCreateResponse**](../Model/TransferCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferList()`

```php
transferList($use_cursor, $next, $previous, $per_page, $page, $from, $to, $recipient, $status): \Alexasomba\\Paystack\Model\TransferListResponse
```

List Transfers

List the transfers made on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = true; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data
$per_page = 56; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date
$recipient = 'recipient_example'; // string | Filter transfer by the recipient code
$status = 'pending'; // string | Filter transfer by status

try {
    $result = $apiInstance->transferList($use_cursor, $next, $previous, $per_page, $page, $from, $to, $recipient, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **use_cursor** | **bool**| A flag to indicate if cursor based pagination should be used | [optional] |
| **next** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data | [optional] |
| **previous** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data | [optional] |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |
| **recipient** | **string**| Filter transfer by the recipient code | [optional] |
| **status** | **string**| Filter transfer by status | [optional] [default to &#39;pending&#39;] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferListResponse**](../Model/TransferListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferResendOtp()`

```php
transferResendOtp($transfer_resend_otp): \Alexasomba\\Paystack\Model\TransferResendsOtpResponse
```

Resend OTP for Transfer

Generates and send a new OTP to customer in the event they are having trouble receiving one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_resend_otp = new \Alexasomba\\Paystack\Model\TransferResendOTP(); // \Alexasomba\\Paystack\Model\TransferResendOTP

try {
    $result = $apiInstance->transferResendOtp($transfer_resend_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferResendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_resend_otp** | [**\Alexasomba\\Paystack\Model\TransferResendOTP**](../Model/TransferResendOTP.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferResendsOtpResponse**](../Model/TransferResendsOtpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferVerify()`

```php
transferVerify($reference): \Alexasomba\\Paystack\Model\TransferVerifyResponse
```

Verify Transfer

Verify the status of a transfer on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = acv_9ee55786-2323-4760-98e2-6380c9cb3f67; // string | Transfer reference

try {
    $result = $apiInstance->transferVerify($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| Transfer reference | |

### Return type

[**\Alexasomba\\Paystack\Model\TransferVerifyResponse**](../Model/TransferVerifyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
