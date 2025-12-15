# Alexasomba\\Paystack\VirtualTerminalApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**virtualTerminalAddSplitCode()**](VirtualTerminalApi.md#virtualTerminalAddSplitCode) | **PUT** /virtual_terminal/{code}/split_code | Add Split Code to Virtual Terminal |
| [**virtualTerminalCreate()**](VirtualTerminalApi.md#virtualTerminalCreate) | **POST** /virtual_terminal | Create Virtual Terminal |
| [**virtualTerminalDeactivate()**](VirtualTerminalApi.md#virtualTerminalDeactivate) | **PUT** /virtual_terminal/{code}/deactivate | Deactivate Virtual Terminal |
| [**virtualTerminalDeleteSplitCode()**](VirtualTerminalApi.md#virtualTerminalDeleteSplitCode) | **DELETE** /virtual_terminal/{code}/split_code | Remove Split Code from Virtual Terminal |
| [**virtualTerminalDestinationAssign()**](VirtualTerminalApi.md#virtualTerminalDestinationAssign) | **POST** /virtual_terminal/{code}/destination/assign | Assign Destination to Virtual Terminal |
| [**virtualTerminalDestinationUnassign()**](VirtualTerminalApi.md#virtualTerminalDestinationUnassign) | **POST** /virtual_terminal/{code}/destination/unassign | Unassign Destination from Virtual Terminal |
| [**virtualTerminalFetch()**](VirtualTerminalApi.md#virtualTerminalFetch) | **GET** /virtual_terminal/{code} | Fetch Virtual Terminal |
| [**virtualTerminalList()**](VirtualTerminalApi.md#virtualTerminalList) | **GET** /virtual_terminal | List Virtual Terminals |
| [**virtualTerminalUpdate()**](VirtualTerminalApi.md#virtualTerminalUpdate) | **PUT** /virtual_terminal/{code} | Update Virtual Terminal |


## `virtualTerminalAddSplitCode()`

```php
virtualTerminalAddSplitCode($code, $body): \Alexasomba\\Paystack\Model\VirtualTerminalAddSplitCodeResponse
```

Add Split Code to Virtual Terminal

Add Split Code to Virtual Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal
$body = new \Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode(); // \Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode

try {
    $result = $apiInstance->virtualTerminalAddSplitCode($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalAddSplitCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |
| **body** | **\Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalAddSplitCodeResponse**](../Model/VirtualTerminalAddSplitCodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalCreate()`

```php
virtualTerminalCreate($virtual_terminal_create): \Alexasomba\\Paystack\Model\VirtualTerminalCreateResponse
```

Create Virtual Terminal

Create a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_terminal_create = new \Alexasomba\\Paystack\Model\VirtualTerminalCreate(); // \Alexasomba\\Paystack\Model\VirtualTerminalCreate

try {
    $result = $apiInstance->virtualTerminalCreate($virtual_terminal_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtual_terminal_create** | [**\Alexasomba\\Paystack\Model\VirtualTerminalCreate**](../Model/VirtualTerminalCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalCreateResponse**](../Model/VirtualTerminalCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalDeactivate()`

```php
virtualTerminalDeactivate($code): \Alexasomba\\Paystack\Model\VirtualTerminalDeactivateResponse
```

Deactivate Virtual Terminal

Deactivate a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal

try {
    $result = $apiInstance->virtualTerminalDeactivate($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalDeactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalDeactivateResponse**](../Model/VirtualTerminalDeactivateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalDeleteSplitCode()`

```php
virtualTerminalDeleteSplitCode($code, $body): \Alexasomba\\Paystack\Model\VirtualTerminalDeleteSplitCodeResponse
```

Remove Split Code from Virtual Terminal

Remove Split Code from Virtual Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal
$body = new \Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode(); // \Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode

try {
    $result = $apiInstance->virtualTerminalDeleteSplitCode($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalDeleteSplitCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |
| **body** | **\Alexasomba\\Paystack\Model\VirtualTerminalCodeSplitCode**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalDeleteSplitCodeResponse**](../Model/VirtualTerminalDeleteSplitCodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalDestinationAssign()`

```php
virtualTerminalDestinationAssign($code, $body): \Alexasomba\\Paystack\Model\VirtualTerminalDestinationAssignResponse
```

Assign Destination to Virtual Terminal

Add a destination (WhatsApp number) to a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal
$body = new \Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationAssign(); // \Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationAssign

try {
    $result = $apiInstance->virtualTerminalDestinationAssign($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalDestinationAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |
| **body** | **\Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationAssign**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalDestinationAssignResponse**](../Model/VirtualTerminalDestinationAssignResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalDestinationUnassign()`

```php
virtualTerminalDestinationUnassign($code, $body): \Alexasomba\\Paystack\Model\VirtualTerminalDestinationUnassignResponse
```

Unassign Destination from Virtual Terminal

Unassign a destination (WhatsApp Number) from a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal
$body = new \Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationUnassign(); // \Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationUnassign

try {
    $result = $apiInstance->virtualTerminalDestinationUnassign($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalDestinationUnassign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |
| **body** | **\Alexasomba\\Paystack\Model\VirtualTerminalCodeDestinationUnassign**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalDestinationUnassignResponse**](../Model/VirtualTerminalDestinationUnassignResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalFetch()`

```php
virtualTerminalFetch($code): \Alexasomba\\Paystack\Model\VirtualTerminalFetchResponse
```

Fetch Virtual Terminal

Fetch a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal

try {
    $result = $apiInstance->virtualTerminalFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalFetchResponse**](../Model/VirtualTerminalFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalList()`

```php
virtualTerminalList($per_page, $page): \Alexasomba\\Paystack\Model\VirtualTerminalListResponse
```

List Virtual Terminals

List Virtual Terminals on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 75; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from

try {
    $result = $apiInstance->virtualTerminalList($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalListResponse**](../Model/VirtualTerminalListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualTerminalUpdate()`

```php
virtualTerminalUpdate($code, $body): \Alexasomba\\Paystack\Model\VirtualTerminalUpdateResponse
```

Update Virtual Terminal

Update a Virtual Terminal on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = VT_MCK5292Z; // string | Code of the Virtual Terminal
$body = new \Alexasomba\\Paystack\Model\VirtualTerminalCode(); // \Alexasomba\\Paystack\Model\VirtualTerminalCode

try {
    $result = $apiInstance->virtualTerminalUpdate($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->virtualTerminalUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the Virtual Terminal | |
| **body** | **\Alexasomba\\Paystack\Model\VirtualTerminalCode**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\VirtualTerminalUpdateResponse**](../Model/VirtualTerminalUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
