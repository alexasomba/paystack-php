# Alexasomba\\Paystack\ApplePayApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applePayListDomain()**](ApplePayApi.md#applePayListDomain) | **GET** /apple-pay/domain | List Domains |
| [**applePayRegisterDomain()**](ApplePayApi.md#applePayRegisterDomain) | **POST** /apple-pay/domain | Register Domain |
| [**applePayUnregisterDomain()**](ApplePayApi.md#applePayUnregisterDomain) | **DELETE** /apple-pay/domain | Unregister Domain |


## `applePayListDomain()`

```php
applePayListDomain($use_cursor, $next, $previous): \Alexasomba\\Paystack\Model\Response
```

List Domains

Lists all registered domains on your integration. Returns an empty array if no domains have been added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ApplePayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = true; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data

try {
    $result = $apiInstance->applePayListDomain($use_cursor, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayApi->applePayListDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **use_cursor** | **bool**| A flag to indicate if cursor based pagination should be used | [optional] |
| **next** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data | [optional] |
| **previous** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data | [optional] |

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

## `applePayRegisterDomain()`

```php
applePayRegisterDomain($apple_pay_param): \Alexasomba\\Paystack\Model\ApplePayCreateOkModel
```

Register Domain

Register a top-level domain or subdomain for your Apple Pay integration.  > This endpoint can only be called with one domain or subdomain at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ApplePayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apple_pay_param = new \Alexasomba\\Paystack\Model\ApplePayParam(); // \Alexasomba\\Paystack\Model\ApplePayParam

try {
    $result = $apiInstance->applePayRegisterDomain($apple_pay_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayApi->applePayRegisterDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apple_pay_param** | [**\Alexasomba\\Paystack\Model\ApplePayParam**](../Model/ApplePayParam.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ApplePayCreateOkModel**](../Model/ApplePayCreateOkModel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applePayUnregisterDomain()`

```php
applePayUnregisterDomain($apple_pay_param): \Alexasomba\\Paystack\Model\Response
```

Unregister Domain

Unregister a top-level domain or subdomain previously used for your Apple Pay integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ApplePayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apple_pay_param = new \Alexasomba\\Paystack\Model\ApplePayParam(); // \Alexasomba\\Paystack\Model\ApplePayParam

try {
    $result = $apiInstance->applePayUnregisterDomain($apple_pay_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayApi->applePayUnregisterDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apple_pay_param** | [**\Alexasomba\\Paystack\Model\ApplePayParam**](../Model/ApplePayParam.md)|  | [optional] |

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
