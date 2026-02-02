# Alexasomba\\Paystack\PlanApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**planCreate()**](PlanApi.md#planCreate) | **POST** /plan | Create Plan |
| [**planFetch()**](PlanApi.md#planFetch) | **GET** /plan/{code} | Fetch Plan |
| [**planList()**](PlanApi.md#planList) | **GET** /plan | List Plans |
| [**planUpdate()**](PlanApi.md#planUpdate) | **PUT** /plan/{code} | Update Plan |


## `planCreate()`

```php
planCreate($plan_create): \Alexasomba\\Paystack\Model\PlanCreateResponse
```

Create Plan

Create a plan for recurring payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_create = new \Alexasomba\\Paystack\Model\PlanCreate(); // \Alexasomba\\Paystack\Model\PlanCreate

try {
    $result = $apiInstance->planCreate($plan_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_create** | [**\Alexasomba\\Paystack\Model\PlanCreate**](../Model/PlanCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PlanCreateResponse**](../Model/PlanCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planFetch()`

```php
planFetch($code): \Alexasomba\\Paystack\Model\PlanFetchResponse
```

Fetch Plan

Get the details of a payment plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = PLN_gx2wn530m0i3w3m; // string | The plan code you want to fetch

try {
    $result = $apiInstance->planFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The plan code you want to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\PlanFetchResponse**](../Model/PlanFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planList()`

```php
planList($per_page, $page, $interval, $amount, $from, $to): \Alexasomba\\Paystack\Model\PlanListResponse
```

List Plans

List all recurring payment plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$interval = 'interval_example'; // string | Specify interval of the plan
$amount = 56; // int | The amount on the plans to retrieve
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->planList($per_page, $page, $interval, $amount, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **interval** | **string**| Specify interval of the plan | [optional] |
| **amount** | **int**| The amount on the plans to retrieve | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PlanListResponse**](../Model/PlanListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planUpdate()`

```php
planUpdate($code, $plan_update): \Alexasomba\\Paystack\Model\PlanUpdateResponse
```

Update Plan

Update a plan details on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = PLN_gx2wn530m0i3w3m; // string | The plan code you want to fetch
$plan_update = new \Alexasomba\\Paystack\Model\PlanUpdate(); // \Alexasomba\\Paystack\Model\PlanUpdate

try {
    $result = $apiInstance->planUpdate($code, $plan_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The plan code you want to fetch | |
| **plan_update** | [**\Alexasomba\\Paystack\Model\PlanUpdate**](../Model/PlanUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PlanUpdateResponse**](../Model/PlanUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
