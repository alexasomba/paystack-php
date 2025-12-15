# Alexasomba\\Paystack\TransferRecipientApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transferrecipientBulk()**](TransferRecipientApi.md#transferrecipientBulk) | **POST** /transferrecipient/bulk | Bulk Create Transfer Recipient |
| [**transferrecipientCreate()**](TransferRecipientApi.md#transferrecipientCreate) | **POST** /transferrecipient | Create Transfer Recipient |
| [**transferrecipientDelete()**](TransferRecipientApi.md#transferrecipientDelete) | **DELETE** /transferrecipient/{code} | Delete Transfer Recipient |
| [**transferrecipientFetch()**](TransferRecipientApi.md#transferrecipientFetch) | **GET** /transferrecipient/{code} | Fetch Transfer recipient |
| [**transferrecipientList()**](TransferRecipientApi.md#transferrecipientList) | **GET** /transferrecipient | List Transfer Recipients |
| [**transferrecipientUpdate()**](TransferRecipientApi.md#transferrecipientUpdate) | **PUT** /transferrecipient/{code} | Update Transfer Recipient |


## `transferrecipientBulk()`

```php
transferrecipientBulk($transfer_recipient_bulk): \Alexasomba\\Paystack\Model\TransferRecipientBulkCreateResponse
```

Bulk Create Transfer Recipient

Create multiple transfer recipients in batches. A duplicate account number will lead to the retrieval of the existing record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_recipient_bulk = new \Alexasomba\\Paystack\Model\TransferRecipientBulk(); // \Alexasomba\\Paystack\Model\TransferRecipientBulk

try {
    $result = $apiInstance->transferrecipientBulk($transfer_recipient_bulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_recipient_bulk** | [**\Alexasomba\\Paystack\Model\TransferRecipientBulk**](../Model/TransferRecipientBulk.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientBulkCreateResponse**](../Model/TransferRecipientBulkCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferrecipientCreate()`

```php
transferrecipientCreate($transfer_recipient_create): \Alexasomba\\Paystack\Model\TransferRecipientCreateResponse
```

Create Transfer Recipient

Creates a new recipient. A duplicate account number will lead to the retrieval of the existing record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_recipient_create = new \Alexasomba\\Paystack\Model\TransferRecipientCreate(); // \Alexasomba\\Paystack\Model\TransferRecipientCreate

try {
    $result = $apiInstance->transferrecipientCreate($transfer_recipient_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_recipient_create** | [**\Alexasomba\\Paystack\Model\TransferRecipientCreate**](../Model/TransferRecipientCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientCreateResponse**](../Model/TransferRecipientCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferrecipientDelete()`

```php
transferrecipientDelete($code): \Alexasomba\\Paystack\Model\TransferRecipientDeleteResponse
```

Delete Transfer Recipient

Delete a transfer recipient (sets the transfer recipient to inactive)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = RCP_5ap8rcimmcj8lbi; // string | Transfer recipient code

try {
    $result = $apiInstance->transferrecipientDelete($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Transfer recipient code | |

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientDeleteResponse**](../Model/TransferRecipientDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferrecipientFetch()`

```php
transferrecipientFetch($code): \Alexasomba\\Paystack\Model\TransferRecipientFetchResponse
```

Fetch Transfer recipient

Fetch the details of a transfer recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = RCP_5ap8rcimmcj8lbi; // string | Transfer recipient code

try {
    $result = $apiInstance->transferrecipientFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Transfer recipient code | |

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientFetchResponse**](../Model/TransferRecipientFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferrecipientList()`

```php
transferrecipientList($use_cursor, $next, $previous, $per_page, $page): \Alexasomba\\Paystack\Model\TransferRecipientListResponse
```

List Transfer Recipients

List transfer recipients available on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = True; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data
$per_page = 56; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from

try {
    $result = $apiInstance->transferrecipientList($use_cursor, $next, $previous, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientListResponse**](../Model/TransferRecipientListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferrecipientUpdate()`

```php
transferrecipientUpdate($code, $transfer_recipient_update): \Alexasomba\\Paystack\Model\TransferRecipientUpdateResponse
```

Update Transfer Recipient

Update the details of a transfer recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransferRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = RCP_5ap8rcimmcj8lbi; // string | Transfer recipient code
$transfer_recipient_update = new \Alexasomba\\Paystack\Model\TransferRecipientUpdate(); // \Alexasomba\\Paystack\Model\TransferRecipientUpdate

try {
    $result = $apiInstance->transferrecipientUpdate($code, $transfer_recipient_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferRecipientApi->transferrecipientUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Transfer recipient code | |
| **transfer_recipient_update** | [**\Alexasomba\\Paystack\Model\TransferRecipientUpdate**](../Model/TransferRecipientUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransferRecipientUpdateResponse**](../Model/TransferRecipientUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
