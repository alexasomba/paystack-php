# Alexasomba\\Paystack\ProductApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productCreate()**](ProductApi.md#productCreate) | **POST** /product | Create Product |
| [**productDelete()**](ProductApi.md#productDelete) | **DELETE** /product/{id} | Delete Product |
| [**productFetch()**](ProductApi.md#productFetch) | **GET** /product/{id} | Fetch Product |
| [**productList()**](ProductApi.md#productList) | **GET** /product | List Products |
| [**productUpdate()**](ProductApi.md#productUpdate) | **PUT** /product/{id} | Update product |


## `productCreate()`

```php
productCreate($product_create): \Alexasomba\\Paystack\Model\ProductCreateResponse
```

Create Product

Create a new product on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_create = new \Alexasomba\\Paystack\Model\ProductCreate(); // \Alexasomba\\Paystack\Model\ProductCreate

try {
    $result = $apiInstance->productCreate($product_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_create** | [**\Alexasomba\\Paystack\Model\ProductCreate**](../Model/ProductCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ProductCreateResponse**](../Model/ProductCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDelete()`

```php
productDelete($id): \Alexasomba\\Paystack\Model\ProductDeleteResponse
```

Delete Product

Delete a previously created product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2196244; // int | The unique identifier of the product

try {
    $result = $apiInstance->productDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the product | |

### Return type

[**\Alexasomba\\Paystack\Model\ProductDeleteResponse**](../Model/ProductDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productFetch()`

```php
productFetch($id): \Alexasomba\\Paystack\Model\ProductFetchResponse
```

Fetch Product

Fetch a previously created product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2196244; // int | The unique identifier of the product

try {
    $result = $apiInstance->productFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the product | |

### Return type

[**\Alexasomba\\Paystack\Model\ProductFetchResponse**](../Model/ProductFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productList()`

```php
productList($per_page, $page, $active, $from, $to): \Alexasomba\\Paystack\Model\ProductListsResponse
```

List Products

List all previously created products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$active = true; // bool | The state of the product
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->productList($per_page, $page, $active, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] |
| **page** | **int**| The section to retrieve | [optional] |
| **active** | **bool**| The state of the product | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ProductListsResponse**](../Model/ProductListsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdate()`

```php
productUpdate($id, $body): \Alexasomba\\Paystack\Model\ProductUpdateResponse
```

Update product

Update a previously created product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2196244; // int | The unique identifier of the product
$body = new \Alexasomba\\Paystack\Model\ProductId(); // \Alexasomba\\Paystack\Model\ProductId

try {
    $result = $apiInstance->productUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the product | |
| **body** | **\Alexasomba\\Paystack\Model\ProductId**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ProductUpdateResponse**](../Model/ProductUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
