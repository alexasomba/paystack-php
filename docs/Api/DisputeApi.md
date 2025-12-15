# Alexasomba\\Paystack\DisputeApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disputeDownload()**](DisputeApi.md#disputeDownload) | **GET** /dispute/export | Export Disputes |
| [**disputeEvidence()**](DisputeApi.md#disputeEvidence) | **POST** /dispute/{id}/evidence | Add Evidence |
| [**disputeFetch()**](DisputeApi.md#disputeFetch) | **GET** /dispute/{id} | Fetch Dispute |
| [**disputeList()**](DisputeApi.md#disputeList) | **GET** /dispute | List Disputes |
| [**disputeResolve()**](DisputeApi.md#disputeResolve) | **PUT** /dispute/{id}/resolve | Resolve Dispute |
| [**disputeTransaction()**](DisputeApi.md#disputeTransaction) | **GET** /dispute/transaction/{id} | List Transaction Disputes |
| [**disputeUpdate()**](DisputeApi.md#disputeUpdate) | **PUT** /dispute/{id} | Update Dispute |
| [**disputeUploadUrl()**](DisputeApi.md#disputeUploadUrl) | **GET** /dispute/{id}/upload_url | Fetch Upload URL |


## `disputeDownload()`

```php
disputeDownload($per_page, $page, $status, $from, $to): \Alexasomba\\Paystack\Model\DisputeExportResponse
```

Export Disputes

Export the disputes available on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$status = awaiting-merchant-feedback; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->disputeDownload($per_page, $page, $status, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **status** | **string**|  | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeExportResponse**](../Model/DisputeExportResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeEvidence()`

```php
disputeEvidence($id, $dispute_evidence): \Alexasomba\\Paystack\Model\DisputeAddEvidenceResponse
```

Add Evidence

Provide evidence for a dispute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4734583785; // int | The unique identifier of the dispute
$dispute_evidence = new \Alexasomba\\Paystack\Model\DisputeEvidence(); // \Alexasomba\\Paystack\Model\DisputeEvidence

try {
    $result = $apiInstance->disputeEvidence($id, $dispute_evidence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeEvidence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the dispute | |
| **dispute_evidence** | [**\Alexasomba\\Paystack\Model\DisputeEvidence**](../Model/DisputeEvidence.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeAddEvidenceResponse**](../Model/DisputeAddEvidenceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeFetch()`

```php
disputeFetch($id): \Alexasomba\\Paystack\Model\DisputeFetchResponse
```

Fetch Dispute

Fetch a transaction dispute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1801929; // int | The unique identifier of the dispute

try {
    $result = $apiInstance->disputeFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the dispute | |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeFetchResponse**](../Model/DisputeFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeList()`

```php
disputeList($per_page, $page, $status, $transaction, $from, $to): \Alexasomba\\Paystack\Model\DisputeListResponse
```

List Disputes

List transaction disputes filed by customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$status = awaiting-merchant-feedback; // string | Dispute status
$transaction = 'transaction_example'; // string | Transaction ID
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->disputeList($per_page, $page, $status, $transaction, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **status** | **string**| Dispute status | [optional] |
| **transaction** | **string**| Transaction ID | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeListResponse**](../Model/DisputeListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeResolve()`

```php
disputeResolve($id, $dispute_resolve): \Alexasomba\\Paystack\Model\DisputeResolveResponse
```

Resolve Dispute

Resolve a transaction dispute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4734583785; // int | The unique identifier of the dispute
$dispute_resolve = new \Alexasomba\\Paystack\Model\DisputeResolve(); // \Alexasomba\\Paystack\Model\DisputeResolve

try {
    $result = $apiInstance->disputeResolve($id, $dispute_resolve);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the dispute | |
| **dispute_resolve** | [**\Alexasomba\\Paystack\Model\DisputeResolve**](../Model/DisputeResolve.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeResolveResponse**](../Model/DisputeResolveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeTransaction()`

```php
disputeTransaction($id): \Alexasomba\\Paystack\Model\DisputeListTransactionResponse
```

List Transaction Disputes

List all disputes filed for a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4734583785; // int | The unique identifier of the transaction

try {
    $result = $apiInstance->disputeTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction | |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeListTransactionResponse**](../Model/DisputeListTransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeUpdate()`

```php
disputeUpdate($id, $dispute_update): \Alexasomba\\Paystack\Model\DisputeUpdateResponse
```

Update Dispute

Update a transaction dispute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1801929; // int | The unique identifier of the dispute
$dispute_update = new \Alexasomba\\Paystack\Model\DisputeUpdate(); // \Alexasomba\\Paystack\Model\DisputeUpdate

try {
    $result = $apiInstance->disputeUpdate($id, $dispute_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the dispute | |
| **dispute_update** | [**\Alexasomba\\Paystack\Model\DisputeUpdate**](../Model/DisputeUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeUpdateResponse**](../Model/DisputeUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disputeUploadUrl()`

```php
disputeUploadUrl($id): \Alexasomba\\Paystack\Model\DisputeUploadURLResponse
```

Fetch Upload URL

Get the URL to upload a dispute evidence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4734583785; // int | The unique identifier of the dispute

try {
    $result = $apiInstance->disputeUploadUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->disputeUploadUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the dispute | |

### Return type

[**\Alexasomba\\Paystack\Model\DisputeUploadURLResponse**](../Model/DisputeUploadURLResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
