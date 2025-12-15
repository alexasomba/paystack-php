# Alexasomba\\Paystack\ChargeApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chargeCheck()**](ChargeApi.md#chargeCheck) | **GET** /charge/{reference} | Check pending charge |
| [**chargeCreate()**](ChargeApi.md#chargeCreate) | **POST** /charge | Create Charge |
| [**chargeSubmitAddress()**](ChargeApi.md#chargeSubmitAddress) | **POST** /charge/submit_address | Submit Address |
| [**chargeSubmitBirthday()**](ChargeApi.md#chargeSubmitBirthday) | **POST** /charge/submit_birthday | Submit Birthday |
| [**chargeSubmitOtp()**](ChargeApi.md#chargeSubmitOtp) | **POST** /charge/submit_otp | Submit OTP |
| [**chargeSubmitPhone()**](ChargeApi.md#chargeSubmitPhone) | **POST** /charge/submit_phone | Submit Phone |
| [**chargeSubmitPin()**](ChargeApi.md#chargeSubmitPin) | **POST** /charge/submit_pin | Submit PIN |


## `chargeCheck()`

```php
chargeCheck($reference): \Alexasomba\\Paystack\Model\ChargeReference
```

Check pending charge

When you get `pending` as a charge status or if there was an exception when calling any of the `/charge` endpoints, wait 10 seconds or more, then make a check to see if its status has changed. Don't call too early as you may get a lot more pending than you should.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 5bwib5v6anhe9xa; // string | The reference of the ongoing transaction

try {
    $result = $apiInstance->chargeCheck($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| The reference of the ongoing transaction | |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeReference**](../Model/ChargeReference.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chargeCreate()`

```php
chargeCreate($charge_create_request): \Alexasomba\\Paystack\Model\ChargeCreateResponse
```

Create Charge

Initiate a payment by integrating the payment channel of your choice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_create_request = new \Alexasomba\\Paystack\Model\ChargeCreateRequest(); // \Alexasomba\\Paystack\Model\ChargeCreateRequest

try {
    $result = $apiInstance->chargeCreate($charge_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_create_request** | [**\Alexasomba\\Paystack\Model\ChargeCreateRequest**](../Model/ChargeCreateRequest.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeCreateResponse**](../Model/ChargeCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chargeSubmitAddress()`

```php
chargeSubmitAddress($charge_submit_address): \Alexasomba\\Paystack\Model\Response
```

Submit Address

Send the details of the customer's address for address verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_submit_address = new \Alexasomba\\Paystack\Model\ChargeSubmitAddress(); // \Alexasomba\\Paystack\Model\ChargeSubmitAddress

try {
    $result = $apiInstance->chargeSubmitAddress($charge_submit_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeSubmitAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_submit_address** | [**\Alexasomba\\Paystack\Model\ChargeSubmitAddress**](../Model/ChargeSubmitAddress.md)|  | [optional] |

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

## `chargeSubmitBirthday()`

```php
chargeSubmitBirthday($charge_submit_birthday): \Alexasomba\\Paystack\Model\ChargeSubmitBirthdayResponse
```

Submit Birthday

Submit the customer's birthday when requested

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_submit_birthday = new \Alexasomba\\Paystack\Model\ChargeSubmitBirthday(); // \Alexasomba\\Paystack\Model\ChargeSubmitBirthday

try {
    $result = $apiInstance->chargeSubmitBirthday($charge_submit_birthday);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeSubmitBirthday: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_submit_birthday** | [**\Alexasomba\\Paystack\Model\ChargeSubmitBirthday**](../Model/ChargeSubmitBirthday.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeSubmitBirthdayResponse**](../Model/ChargeSubmitBirthdayResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chargeSubmitOtp()`

```php
chargeSubmitOtp($charge_submit_otp): \Alexasomba\\Paystack\Model\ChargeSubmitOtpResponse
```

Submit OTP

Submit OTP to complete a charge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_submit_otp = new \Alexasomba\\Paystack\Model\ChargeSubmitOTP(); // \Alexasomba\\Paystack\Model\ChargeSubmitOTP

try {
    $result = $apiInstance->chargeSubmitOtp($charge_submit_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeSubmitOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_submit_otp** | [**\Alexasomba\\Paystack\Model\ChargeSubmitOTP**](../Model/ChargeSubmitOTP.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeSubmitOtpResponse**](../Model/ChargeSubmitOtpResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chargeSubmitPhone()`

```php
chargeSubmitPhone($charge_submit_phone): \Alexasomba\\Paystack\Model\ChargeSubmitPhoneResponse
```

Submit Phone

Submit phone number when requested

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_submit_phone = new \Alexasomba\\Paystack\Model\ChargeSubmitPhone(); // \Alexasomba\\Paystack\Model\ChargeSubmitPhone

try {
    $result = $apiInstance->chargeSubmitPhone($charge_submit_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeSubmitPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_submit_phone** | [**\Alexasomba\\Paystack\Model\ChargeSubmitPhone**](../Model/ChargeSubmitPhone.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeSubmitPhoneResponse**](../Model/ChargeSubmitPhoneResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chargeSubmitPin()`

```php
chargeSubmitPin($charge_submit_pin): \Alexasomba\\Paystack\Model\ChargeSubmitPinResponse
```

Submit PIN

Submit PIN to continue a charge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_submit_pin = new \Alexasomba\\Paystack\Model\ChargeSubmitPin(); // \Alexasomba\\Paystack\Model\ChargeSubmitPin

try {
    $result = $apiInstance->chargeSubmitPin($charge_submit_pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->chargeSubmitPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_submit_pin** | [**\Alexasomba\\Paystack\Model\ChargeSubmitPin**](../Model/ChargeSubmitPin.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeSubmitPinResponse**](../Model/ChargeSubmitPinResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
