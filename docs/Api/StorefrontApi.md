# Alexasomba\\Paystack\StorefrontApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storefrontAddProducts()**](StorefrontApi.md#storefrontAddProducts) | **POST** /storefront/{id}/product | Add Products to Storefront |
| [**storefrontCreate()**](StorefrontApi.md#storefrontCreate) | **POST** /storefront | Create Storefront |
| [**storefrontDelete()**](StorefrontApi.md#storefrontDelete) | **DELETE** /storefront/{id} | Delete Storefront |
| [**storefrontDuplicate()**](StorefrontApi.md#storefrontDuplicate) | **POST** /storefront/{id}/duplicate | Duplicate Storefront |
| [**storefrontFetch()**](StorefrontApi.md#storefrontFetch) | **GET** /storefront/{id} | Fetch Storefront |
| [**storefrontFetchOrders()**](StorefrontApi.md#storefrontFetchOrders) | **GET** /storefront/{id}/order | Fetch Storefront Orders |
| [**storefrontList()**](StorefrontApi.md#storefrontList) | **GET** /storefront | List Storefronts |
| [**storefrontListProducts()**](StorefrontApi.md#storefrontListProducts) | **GET** /storefront/{id}/product | List Storefront Products |
| [**storefrontPublish()**](StorefrontApi.md#storefrontPublish) | **POST** /storefront/{id}/publish | Publish Storefront |
| [**storefrontUpdate()**](StorefrontApi.md#storefrontUpdate) | **PUT** /storefront/{id} | Update Storefront |
| [**storefrontVerifySlug()**](StorefrontApi.md#storefrontVerifySlug) | **GET** /storefront/verify/{slug} | Verify Storefront Slug |


## `storefrontAddProducts()`

```php
storefrontAddProducts($id, $storefront_add_products): \Alexasomba\\Paystack\Model\Response
```

Add Products to Storefront

Add previously created products to a Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront
$storefront_add_products = new \Alexasomba\\Paystack\Model\StorefrontAddProducts(); // \Alexasomba\\Paystack\Model\StorefrontAddProducts

try {
    $result = $apiInstance->storefrontAddProducts($id, $storefront_add_products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontAddProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |
| **storefront_add_products** | [**\Alexasomba\\Paystack\Model\StorefrontAddProducts**](../Model/StorefrontAddProducts.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\Response**](../Model/Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontCreate()`

```php
storefrontCreate($storefront_create): \Alexasomba\\Paystack\Model\StorefrontCreateResponse
```

Create Storefront

Create a digital shop to manage and display your products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_create = new \Alexasomba\\Paystack\Model\StorefrontCreate(); // \Alexasomba\\Paystack\Model\StorefrontCreate

try {
    $result = $apiInstance->storefrontCreate($storefront_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_create** | [**\Alexasomba\\Paystack\Model\StorefrontCreate**](../Model/StorefrontCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\StorefrontCreateResponse**](../Model/StorefrontCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontDelete()`

```php
storefrontDelete($id): \Alexasomba\\Paystack\Model\StorefrontDeleteResponse
```

Delete Storefront

Delete a previously created Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

### Return type

[**\Alexasomba\\Paystack\Model\StorefrontDeleteResponse**](../Model/StorefrontDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontDuplicate()`

```php
storefrontDuplicate($id): \Alexasomba\\Paystack\Model\Response
```

Duplicate Storefront

Duplicate a previously created Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

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

## `storefrontFetch()`

```php
storefrontFetch($id): \Alexasomba\\Paystack\Model\StorefrontFetchResponse
```

Fetch Storefront

Get the details of a previously created Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

### Return type

[**\Alexasomba\\Paystack\Model\StorefrontFetchResponse**](../Model/StorefrontFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontFetchOrders()`

```php
storefrontFetchOrders($id): \Alexasomba\\Paystack\Model\Response
```

Fetch Storefront Orders

Fetch all orders in your Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontFetchOrders($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontFetchOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

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

## `storefrontList()`

```php
storefrontList($per_page, $page, $status): \Alexasomba\\Paystack\Model\StorefrontListResponse
```

List Storefronts

List the storefronts you previously created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 50; // int | Number of records to fetch per request
$page = 1; // int | The offset to retrieve data from
$status = active; // string

try {
    $result = $apiInstance->storefrontList($per_page, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| Number of records to fetch per request | [optional] [default to 50] |
| **page** | **int**| The offset to retrieve data from | [optional] [default to 1] |
| **status** | **string**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\StorefrontListResponse**](../Model/StorefrontListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontListProducts()`

```php
storefrontListProducts($id): \Alexasomba\\Paystack\Model\Response
```

List Storefront Products

List the products in a Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontListProducts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontListProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

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

## `storefrontPublish()`

```php
storefrontPublish($id): \Alexasomba\\Paystack\Model\Response
```

Publish Storefront

Make your Storefront publicly available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront

try {
    $result = $apiInstance->storefrontPublish($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |

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

## `storefrontUpdate()`

```php
storefrontUpdate($id, $storefront_update): \Alexasomba\\Paystack\Model\StorefrontUpdateResponse
```

Update Storefront

Update the details of a previously created Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1559046; // int | The unique identifier of the Storefront
$storefront_update = new \Alexasomba\\Paystack\Model\StorefrontUpdate(); // \Alexasomba\\Paystack\Model\StorefrontUpdate

try {
    $result = $apiInstance->storefrontUpdate($id, $storefront_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Storefront | |
| **storefront_update** | [**\Alexasomba\\Paystack\Model\StorefrontUpdate**](../Model/StorefrontUpdate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\StorefrontUpdateResponse**](../Model/StorefrontUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontVerifySlug()`

```php
storefrontVerifySlug($slug): \Alexasomba\\Paystack\Model\Response
```

Verify Storefront Slug

Verify the availability of a slug before using it for your Storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\StorefrontApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = struct_and_faces; // string | The custom slug to check

try {
    $result = $apiInstance->storefrontVerifySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->storefrontVerifySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| The custom slug to check | |

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
