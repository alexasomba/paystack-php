# Alexasomba\\Paystack\BankApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bankList()**](BankApi.md#bankList) | **GET** /bank | List Banks |
| [**bankResolveAccountNumber()**](BankApi.md#bankResolveAccountNumber) | **GET** /bank/resolve | Resolve Account Number |
| [**bankValidateAccountNumber()**](BankApi.md#bankValidateAccountNumber) | **POST** /bank/validate | Validate Bank Account |


## `bankList()`

```php
bankList($country, $currency, $use_cursor, $per_page, $page, $next, $previous, $pay_with_bank_transfer, $pay_with_bank, $enabled_for_verification, $gateway, $type, $include_nip_sort_code): \Alexasomba\\Paystack\Model\MiscellaneousListBanksResponse
```

List Banks

List banks supported on Paystack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = nigeria; // string | The country from which to obtain the list of supported banks
$currency = NGN; // string | The country from which to obtain the list of supported banks
$use_cursor = True; // bool | A flag to indicate if cursor based pagination should be used
$per_page = 56; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data
$pay_with_bank_transfer = True; // bool | A flag to filter for available banks a customer can make a transfer to complete a payment
$pay_with_bank = True; // bool | A flag to filter for banks a customer can pay directly from
$enabled_for_verification = True; // bool | A flag to filter the banks that are supported for account verification in South Africa. You need to combine this with either the `currency` or `country` filter.
$gateway = 'gateway_example'; // string | The type of gateway for a Nigerian bank
$type = 'type_example'; // string | Type of financial channel
$include_nip_sort_code = True; // bool | A flag that returns Nigerian banks with their NIP institution code.  The returned value can be used in identifying institutions on NIP.

try {
    $result = $apiInstance->bankList($country, $currency, $use_cursor, $per_page, $page, $next, $previous, $pay_with_bank_transfer, $pay_with_bank, $enabled_for_verification, $gateway, $type, $include_nip_sort_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->bankList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The country from which to obtain the list of supported banks | [optional] |
| **currency** | **string**| The country from which to obtain the list of supported banks | [optional] |
| **use_cursor** | **bool**| A flag to indicate if cursor based pagination should be used | [optional] |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **next** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data | [optional] |
| **previous** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data | [optional] |
| **pay_with_bank_transfer** | **bool**| A flag to filter for available banks a customer can make a transfer to complete a payment | [optional] |
| **pay_with_bank** | **bool**| A flag to filter for banks a customer can pay directly from | [optional] |
| **enabled_for_verification** | **bool**| A flag to filter the banks that are supported for account verification in South Africa. You need to combine this with either the &#x60;currency&#x60; or &#x60;country&#x60; filter. | [optional] |
| **gateway** | **string**| The type of gateway for a Nigerian bank | [optional] |
| **type** | **string**| Type of financial channel | [optional] |
| **include_nip_sort_code** | **bool**| A flag that returns Nigerian banks with their NIP institution code.  The returned value can be used in identifying institutions on NIP. | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\MiscellaneousListBanksResponse**](../Model/MiscellaneousListBanksResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankResolveAccountNumber()`

```php
bankResolveAccountNumber($account_number, $bank_code): \Alexasomba\\Paystack\Model\VerificationResolveAccountNumberResponse
```

Resolve Account Number

Resolve an account number to confirm the name associated with it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 22728151; // int | The account number of interest
$bank_code = 63; // int | The bank code associated with the account number

try {
    $result = $apiInstance->bankResolveAccountNumber($account_number, $bank_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->bankResolveAccountNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_number** | **int**| The account number of interest | [optional] |
| **bank_code** | **int**| The bank code associated with the account number | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VerificationResolveAccountNumberResponse**](../Model/VerificationResolveAccountNumberResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankValidateAccountNumber()`

```php
bankValidateAccountNumber($bank_validate_request): \Alexasomba\\Paystack\Model\VerificationValidateAccountResponse
```

Validate Bank Account

Confirm the authenticity of a customer's account number before sending money

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_validate_request = new \Alexasomba\\Paystack\Model\BankValidateRequest(); // \Alexasomba\\Paystack\Model\BankValidateRequest

try {
    $result = $apiInstance->bankValidateAccountNumber($bank_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->bankValidateAccountNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_validate_request** | [**\Alexasomba\\Paystack\Model\BankValidateRequest**](../Model/BankValidateRequest.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VerificationValidateAccountResponse**](../Model/VerificationValidateAccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
