# Alexasomba\\Paystack\SettlementApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**settlementsFetch()**](SettlementApi.md#settlementsFetch) | **GET** /settlement | List Settlements |
| [**settlementsTransaction()**](SettlementApi.md#settlementsTransaction) | **GET** /settlement/{id}/transactions | Fetch Settlement Transactions |


## `settlementsFetch()`

```php
settlementsFetch($per_page, $page): \Alexasomba\\Paystack\Model\Response
```

List Settlements

List settlements made to your settlement accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 50; // int | The number of records to fetch per request
$page = 2; // int | The offset to retrieve data from

try {
    $result = $apiInstance->settlementsFetch($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->settlementsFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |

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

## `settlementsTransaction()`

```php
settlementsTransaction($id): \Alexasomba\\Paystack\Model\Response
```

Fetch Settlement Transactions

Get the transactions that make up a particular settlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8610870; // int | The settlement ID in which you want to fetch its transactions

try {
    $result = $apiInstance->settlementsTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->settlementsTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The settlement ID in which you want to fetch its transactions | |

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
