# Alexasomba\\Paystack\OrderApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderCreate()**](OrderApi.md#orderCreate) | **POST** /order | Create Order |
| [**orderFetch()**](OrderApi.md#orderFetch) | **GET** /order/{id} | Fetch Order |
| [**orderList()**](OrderApi.md#orderList) | **GET** /order | List Orders |
| [**orderProduct()**](OrderApi.md#orderProduct) | **GET** /order/product/{id} | Fetch Product Orders |
| [**orderValidate()**](OrderApi.md#orderValidate) | **GET** /order/{code}/validate | Validate Order |


## `orderCreate()`

```php
orderCreate($order_create): \Alexasomba\\Paystack\Model\OrderCreateResponse
```

Create Order

Create an order for selected items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_create = new \Alexasomba\\Paystack\Model\OrderCreate(); // \Alexasomba\\Paystack\Model\OrderCreate

try {
    $result = $apiInstance->orderCreate($order_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_create** | [**\Alexasomba\\Paystack\Model\OrderCreate**](../Model/OrderCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\OrderCreateResponse**](../Model/OrderCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderFetch()`

```php
orderFetch($id): \Alexasomba\\Paystack\Model\OrderFetchResponse
```

Fetch Order

Fetch the details of a previously created order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the order

try {
    $result = $apiInstance->orderFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the order | |

### Return type

[**\Alexasomba\\Paystack\Model\OrderFetchResponse**](../Model/OrderFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderList()`

```php
orderList($per_page, $page, $from, $to): \Alexasomba\\Paystack\Model\OrderListResponse
```

List Orders

List the previously created orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->orderList($per_page, $page, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderProduct()`

```php
orderProduct($id): \Alexasomba\\Paystack\Model\OrderFetchProductResponse
```

Fetch Product Orders

Fetch all orders for a particular product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the order

try {
    $result = $apiInstance->orderProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the order | |

### Return type

[**\Alexasomba\\Paystack\Model\OrderFetchProductResponse**](../Model/OrderFetchProductResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderValidate()`

```php
orderValidate($code): \Alexasomba\\Paystack\Model\OrderValidateResponse
```

Validate Order

Validate a pay for me order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = ORD_6z0lqwpmxrm7dsp; // string | The unique code of a previously created order

try {
    $result = $apiInstance->orderValidate($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The unique code of a previously created order | |

### Return type

[**\Alexasomba\\Paystack\Model\OrderValidateResponse**](../Model/OrderValidateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
