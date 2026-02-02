# Alexasomba\\Paystack\BulkChargeApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkChargeCharges()**](BulkChargeApi.md#bulkChargeCharges) | **GET** /bulkcharge/{code}/charges | List Charges in a Batch |
| [**bulkChargeFetch()**](BulkChargeApi.md#bulkChargeFetch) | **GET** /bulkcharge/{code} | Fetch Bulk Charge Batch |
| [**bulkChargeInitiate()**](BulkChargeApi.md#bulkChargeInitiate) | **POST** /bulkcharge | Initiate Bulk Charge |
| [**bulkChargeList()**](BulkChargeApi.md#bulkChargeList) | **GET** /bulkcharge | List Bulk Charge Batches |
| [**bulkChargePause()**](BulkChargeApi.md#bulkChargePause) | **GET** /bulkcharge/pause/{code} | Pause Bulk Charge Batch |
| [**bulkChargeResume()**](BulkChargeApi.md#bulkChargeResume) | **GET** /bulkcharge/resume/{code} | Resume Bulk Charge Batch |


## `bulkChargeCharges()`

```php
bulkChargeCharges($code, $per_page, $page, $status): \Alexasomba\\Paystack\Model\BulkChargeFetchBulkBatchChargesResponse
```

List Charges in a Batch

This endpoint retrieves the charges associated with a specified batch code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = BCH_180tl7oq7cayggh; // string | An code for the batch whose charges you want to retrieve
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The offset to retrieve data from
$status = 'status_example'; // string | Filter by the status of the charges

try {
    $result = $apiInstance->bulkChargeCharges($code, $per_page, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargeCharges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| An code for the batch whose charges you want to retrieve | |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **status** | **string**| Filter by the status of the charges | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargeFetchBulkBatchChargesResponse**](../Model/BulkChargeFetchBulkBatchChargesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkChargeFetch()`

```php
bulkChargeFetch($code): \Alexasomba\\Paystack\Model\BulkChargeFetchResponse
```

Fetch Bulk Charge Batch

This endpoint retrieves a specific batch code. It also returns useful information on its progress by  way of the `total_charges` and `pending_charges` attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = BCH_180tl7oq7cayggh; // string | The code for the charge whose batches you want to retrieve

try {
    $result = $apiInstance->bulkChargeFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargeFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code for the charge whose batches you want to retrieve | |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargeFetchResponse**](../Model/BulkChargeFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkChargeInitiate()`

```php
bulkChargeInitiate($bulk_charge_initiate): \Alexasomba\\Paystack\Model\BulkChargeInitiateResponse
```

Initiate Bulk Charge

Charge multiple customers in batches

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_charge_initiate = array(new \Alexasomba\\Paystack\Model\BulkChargeInitiate()); // \Alexasomba\\Paystack\Model\BulkChargeInitiate[]

try {
    $result = $apiInstance->bulkChargeInitiate($bulk_charge_initiate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargeInitiate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_charge_initiate** | [**\Alexasomba\\Paystack\Model\BulkChargeInitiate[]**](../Model/BulkChargeInitiate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargeInitiateResponse**](../Model/BulkChargeInitiateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkChargeList()`

```php
bulkChargeList($per_page, $page, $status): \Alexasomba\\Paystack\Model\BulkChargeListResponse
```

List Bulk Charge Batches

List all bulk charge batches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The offset to retrieve data from
$status = 'status_example'; // string | Filter by the status of the charges

try {
    $result = $apiInstance->bulkChargeList($per_page, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **status** | **string**| Filter by the status of the charges | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargeListResponse**](../Model/BulkChargeListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkChargePause()`

```php
bulkChargePause($code): \Alexasomba\\Paystack\Model\BulkChargePauseResponse
```

Pause Bulk Charge Batch

Pause the processing of a charge batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = BCH_180tl7oq7cayggh; // string | The batch code for the bulk charge you want to pause

try {
    $result = $apiInstance->bulkChargePause($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargePause: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The batch code for the bulk charge you want to pause | |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargePauseResponse**](../Model/BulkChargePauseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkChargeResume()`

```php
bulkChargeResume($code): \Alexasomba\\Paystack\Model\BulkChargeResumeResponse
```

Resume Bulk Charge Batch

Resume the processing of a previously paused charge batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BulkChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = BCH_180tl7oq7cayggh; // string | The batch code for the bulk charge you want to pause

try {
    $result = $apiInstance->bulkChargeResume($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkChargeApi->bulkChargeResume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The batch code for the bulk charge you want to pause | |

### Return type

[**\Alexasomba\\Paystack\Model\BulkChargeResumeResponse**](../Model/BulkChargeResumeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
