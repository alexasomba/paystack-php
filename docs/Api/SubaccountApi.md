# Alexasomba\\Paystack\SubaccountApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subaccountCreate()**](SubaccountApi.md#subaccountCreate) | **POST** /subaccount | Create Subaccount |
| [**subaccountFetch()**](SubaccountApi.md#subaccountFetch) | **GET** /subaccount/{code} | Fetch Subaccount |
| [**subaccountList()**](SubaccountApi.md#subaccountList) | **GET** /subaccount | List Subaccounts |
| [**subaccountUpdate()**](SubaccountApi.md#subaccountUpdate) | **PUT** /subaccount/{code} | Update Subaccount |


## `subaccountCreate()`

```php
subaccountCreate($subaccount_create): \Alexasomba\\Paystack\Model\SubaccountCreateResponse
```

Create Subaccount

Create a subacount for a partner

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_create = new \Alexasomba\\Paystack\Model\SubaccountCreate(); // \Alexasomba\\Paystack\Model\SubaccountCreate

try {
    $result = $apiInstance->subaccountCreate($subaccount_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subaccount_create** | [**\Alexasomba\\Paystack\Model\SubaccountCreate**](../Model/SubaccountCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SubaccountCreateResponse**](../Model/SubaccountCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountFetch()`

```php
subaccountFetch($code): \Alexasomba\\Paystack\Model\SubaccountFetchResponse
```

Fetch Subaccount

Get details of a subaccount on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = ACCT_6uujpqtzmnufzkw; // string | The subaccount code you want to fetch

try {
    $result = $apiInstance->subaccountFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The subaccount code you want to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\SubaccountFetchResponse**](../Model/SubaccountFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountList()`

```php
subaccountList($per_page, $page, $active): \Alexasomba\\Paystack\Model\SubaccountListResponse
```

List Subaccounts

List subaccounts available on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 50; // int | Number of records to fetch per request
$page = 1; // int | The offset to retrieve data from
$active = True; // bool | Filter by the state of the subaccounts

try {
    $result = $apiInstance->subaccountList($per_page, $page, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per request | [optional] [default to 50] |
| **page** | **int**| The offset to retrieve data from | [optional] [default to 1] |
| **active** | **bool**| Filter by the state of the subaccounts | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SubaccountListResponse**](../Model/SubaccountListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountUpdate()`

```php
subaccountUpdate($code, $subaccount_update): \Alexasomba\\Paystack\Model\SubaccountUpdateResponse
```

Update Subaccount

Update a subaccount details on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = ACCT_6uujpqtzmnufzkw; // string | The subaccount code you want to fetch
$subaccount_update = new \Alexasomba\\Paystack\Model\SubaccountUpdate(); // \Alexasomba\\Paystack\Model\SubaccountUpdate

try {
    $result = $apiInstance->subaccountUpdate($code, $subaccount_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The subaccount code you want to fetch | |
| **subaccount_update** | [**\Alexasomba\\Paystack\Model\SubaccountUpdate**](../Model/SubaccountUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SubaccountUpdateResponse**](../Model/SubaccountUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
