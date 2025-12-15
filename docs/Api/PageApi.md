# Alexasomba\\Paystack\PageApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pageAddProducts()**](PageApi.md#pageAddProducts) | **POST** /page/{id}/product | Add Products |
| [**pageCheckSlugAvailability()**](PageApi.md#pageCheckSlugAvailability) | **GET** /page/check_slug_availability/{slug} | Check Slug Availability |
| [**pageCreate()**](PageApi.md#pageCreate) | **POST** /page | Create Page |
| [**pageFetch()**](PageApi.md#pageFetch) | **GET** /page/{id} | Fetch Page |
| [**pageList()**](PageApi.md#pageList) | **GET** /page | List Pages |
| [**pageUpdate()**](PageApi.md#pageUpdate) | **PUT** /page/{id} | Update Page |


## `pageAddProducts()`

```php
pageAddProducts($id, $body): \Alexasomba\\Paystack\Model\PageAddProductsResponse
```

Add Products

Add products to a previously created payment page. You can only add products to pages that was created with a `product` type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \Alexasomba\\Paystack\Model\PageIdProduct(); // \Alexasomba\\Paystack\Model\PageIdProduct

try {
    $result = $apiInstance->pageAddProducts($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageAddProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **\Alexasomba\\Paystack\Model\PageIdProduct**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PageAddProductsResponse**](../Model/PageAddProductsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageCheckSlugAvailability()`

```php
pageCheckSlugAvailability($slug): \Alexasomba\\Paystack\Model\PageCheckSlugAvailabilityResponse
```

Check Slug Availability

Check if a custom slug is available for use when creating a payment page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = risky-burger; // string | The custom slug to check

try {
    $result = $apiInstance->pageCheckSlugAvailability($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageCheckSlugAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| The custom slug to check | |

### Return type

[**\Alexasomba\\Paystack\Model\PageCheckSlugAvailabilityResponse**](../Model/PageCheckSlugAvailabilityResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageCreate()`

```php
pageCreate($page_create): \Alexasomba\\Paystack\Model\PageCreateResponse
```

Create Page

Create a webpage to receive payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_create = new \Alexasomba\\Paystack\Model\PageCreate(); // \Alexasomba\\Paystack\Model\PageCreate

try {
    $result = $apiInstance->pageCreate($page_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_create** | [**\Alexasomba\\Paystack\Model\PageCreate**](../Model/PageCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PageCreateResponse**](../Model/PageCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageFetch()`

```php
pageFetch($id): \Alexasomba\\Paystack\Model\PageFetchResponse
```

Fetch Page

Get a previously created payment page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1891222; // int | The unique identifier of a payment page

try {
    $result = $apiInstance->pageFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a payment page | |

### Return type

[**\Alexasomba\\Paystack\Model\PageFetchResponse**](../Model/PageFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageList()`

```php
pageList($per_page, $page, $from, $to): \Alexasomba\\Paystack\Model\PageListResponse
```

List Pages

List all previously created payment pages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 10; // int | Number of records to fetch per page
$page = 56; // int | The section to retrieve
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $apiInstance->pageList($per_page, $page, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per page | [optional] [default to 50] |
| **page** | **int**| The section to retrieve | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PageListResponse**](../Model/PageListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageUpdate()`

```php
pageUpdate($id, $body): \Alexasomba\\Paystack\Model\PageUpdateResponse
```

Update Page

Update a previously created payment page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1891222; // int | The unique identifier of a payment page
$body = new \Alexasomba\\Paystack\Model\PageId(); // \Alexasomba\\Paystack\Model\PageId

try {
    $result = $apiInstance->pageUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->pageUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of a payment page | |
| **body** | **\Alexasomba\\Paystack\Model\PageId**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\PageUpdateResponse**](../Model/PageUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
