# Alexasomba\\Paystack\SplitApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**splitAddSubaccount()**](SplitApi.md#splitAddSubaccount) | **POST** /split/{id}/subaccount/add | Add Subaccount to Split |
| [**splitCreate()**](SplitApi.md#splitCreate) | **POST** /split | Create Split |
| [**splitFetch()**](SplitApi.md#splitFetch) | **GET** /split/{id} | Fetch Split |
| [**splitList()**](SplitApi.md#splitList) | **GET** /split | List Splits |
| [**splitRemoveSubaccount()**](SplitApi.md#splitRemoveSubaccount) | **POST** /split/{id}/subaccount/remove | Remove Subaccount from split |
| [**splitUpdate()**](SplitApi.md#splitUpdate) | **PUT** /split/{id} | Update Split |


## `splitAddSubaccount()`

```php
splitAddSubaccount($id, $split_subaccounts): \Alexasomba\\Paystack\Model\SplitAddUpdateSubaccountResponse
```

Add Subaccount to Split

Add a subaccount to a split configuration, or update the share of an existing subaccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4896895; // int | The ID of the split configuration to fetch
$split_subaccounts = new \Alexasomba\\Paystack\Model\SplitSubaccounts(); // \Alexasomba\\Paystack\Model\SplitSubaccounts

try {
    $result = $apiInstance->splitAddSubaccount($id, $split_subaccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitAddSubaccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the split configuration to fetch | |
| **split_subaccounts** | [**\Alexasomba\\Paystack\Model\SplitSubaccounts**](../Model/SplitSubaccounts.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SplitAddUpdateSubaccountResponse**](../Model/SplitAddUpdateSubaccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitCreate()`

```php
splitCreate($split_create): \Alexasomba\\Paystack\Model\SplitCreateResponse
```

Create Split

Create a split configuration for transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$split_create = new \Alexasomba\\Paystack\Model\SplitCreate(); // \Alexasomba\\Paystack\Model\SplitCreate

try {
    $result = $apiInstance->splitCreate($split_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **split_create** | [**\Alexasomba\\Paystack\Model\SplitCreate**](../Model/SplitCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SplitCreateResponse**](../Model/SplitCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitFetch()`

```php
splitFetch($id): \Alexasomba\\Paystack\Model\SplitFetchResponse
```

Fetch Split

Get details of a split configuration for a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4896895; // int | The ID of the split configuration to fetch

try {
    $result = $apiInstance->splitFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the split configuration to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\SplitFetchResponse**](../Model/SplitFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitList()`

```php
splitList($subaccount_code, $name, $active, $per_page, $page, $from, $to): \Alexasomba\\Paystack\Model\SplitListResponse
```

List Splits

List the transaction splits available on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_code = ACCT_dskvlw3y3dMukmt; // string | Filter by subaccount code
$name = 'name_example'; // string | The name of the split
$active = True; // bool | The status of the split
$per_page = 56; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->splitList($subaccount_code, $name, $active, $per_page, $page, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subaccount_code** | **string**| Filter by subaccount code | [optional] |
| **name** | **string**| The name of the split | [optional] |
| **active** | **bool**| The status of the split | [optional] |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SplitListResponse**](../Model/SplitListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitRemoveSubaccount()`

```php
splitRemoveSubaccount($id, $split_subaccounts): \Alexasomba\\Paystack\Model\SplitRemoveSubaccountResponse
```

Remove Subaccount from split

Remove a subaccount from a split configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4896895; // int | The ID of the split configuration to fetch
$split_subaccounts = new \Alexasomba\\Paystack\Model\SplitSubaccounts(); // \Alexasomba\\Paystack\Model\SplitSubaccounts

try {
    $result = $apiInstance->splitRemoveSubaccount($id, $split_subaccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitRemoveSubaccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the split configuration to fetch | |
| **split_subaccounts** | [**\Alexasomba\\Paystack\Model\SplitSubaccounts**](../Model/SplitSubaccounts.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SplitRemoveSubaccountResponse**](../Model/SplitRemoveSubaccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitUpdate()`

```php
splitUpdate($id, $split_update): \Alexasomba\\Paystack\Model\SplitUpdateResponse
```

Update Split

Update a split configuration for transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$split_update = new \Alexasomba\\Paystack\Model\SplitUpdate(); // \Alexasomba\\Paystack\Model\SplitUpdate

try {
    $result = $apiInstance->splitUpdate($id, $split_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->splitUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **split_update** | [**\Alexasomba\\Paystack\Model\SplitUpdate**](../Model/SplitUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\SplitUpdateResponse**](../Model/SplitUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
