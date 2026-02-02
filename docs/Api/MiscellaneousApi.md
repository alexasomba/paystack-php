# Alexasomba\\Paystack\MiscellaneousApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**miscellaneousAvs()**](MiscellaneousApi.md#miscellaneousAvs) | **GET** /address_verification/states | List States (AVS) |
| [**miscellaneousListCountries()**](MiscellaneousApi.md#miscellaneousListCountries) | **GET** /country | List Countries |
| [**miscellaneousResolveCardBin()**](MiscellaneousApi.md#miscellaneousResolveCardBin) | **GET** /decision/bin/{bin} | Resolve Card BIN |


## `miscellaneousAvs()`

```php
miscellaneousAvs($country): \Alexasomba\\Paystack\Model\MiscellaneousListStatesResponse
```

List States (AVS)

Get a list of states for a country for address verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = CA; // string | The country code of the states to list. It is gotten after the charge request

try {
    $result = $apiInstance->miscellaneousAvs($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->miscellaneousAvs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The country code of the states to list. It is gotten after the charge request | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\MiscellaneousListStatesResponse**](../Model/MiscellaneousListStatesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscellaneousListCountries()`

```php
miscellaneousListCountries(): \Alexasomba\\Paystack\Model\MiscellaneousListCountriesResponse
```

List Countries

List all supported countries on Paystack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->miscellaneousListCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->miscellaneousListCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alexasomba\\Paystack\Model\MiscellaneousListCountriesResponse**](../Model/MiscellaneousListCountriesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miscellaneousResolveCardBin()`

```php
miscellaneousResolveCardBin($bin): \Alexasomba\\Paystack\Model\VerificationResolveCardBINResponse
```

Resolve Card BIN

Get the details of a card BIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bin = 539983; // int | The card bank identification number

try {
    $result = $apiInstance->miscellaneousResolveCardBin($bin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->miscellaneousResolveCardBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bin** | **int**| The card bank identification number | |

### Return type

[**\Alexasomba\\Paystack\Model\VerificationResolveCardBINResponse**](../Model/VerificationResolveCardBINResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
