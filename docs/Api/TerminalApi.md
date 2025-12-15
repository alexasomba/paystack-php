# Alexasomba\\Paystack\TerminalApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**terminalCommission()**](TerminalApi.md#terminalCommission) | **POST** /terminal/commission_device | Commission Terminal |
| [**terminalDecommission()**](TerminalApi.md#terminalDecommission) | **POST** /terminal/decommission_device | Decommission Terminal |
| [**terminalFetch()**](TerminalApi.md#terminalFetch) | **GET** /terminal/{terminal_id} | Fetch Terminal |
| [**terminalFetchEventStatus()**](TerminalApi.md#terminalFetchEventStatus) | **GET** /terminal/{terminal_id}/event/{event_id} | Fetch Event Status |
| [**terminalFetchTerminalStatus()**](TerminalApi.md#terminalFetchTerminalStatus) | **GET** /terminal/{terminal_id}/presence | Fetch Terminal Status |
| [**terminalList()**](TerminalApi.md#terminalList) | **GET** /terminal | List Terminals |
| [**terminalSendEvent()**](TerminalApi.md#terminalSendEvent) | **POST** /terminal/{id}/event | Send Event |
| [**terminalUpdate()**](TerminalApi.md#terminalUpdate) | **PUT** /terminal/{terminal_id} | Update Terminal |


## `terminalCommission()`

```php
terminalCommission($terminal_activation_toggle): \Alexasomba\\Paystack\Model\TerminalCommissionDeviceResponse
```

Commission Terminal

Activate your debug device by linking it to your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_activation_toggle = new \Alexasomba\\Paystack\Model\TerminalActivationToggle(); // \Alexasomba\\Paystack\Model\TerminalActivationToggle

try {
    $result = $apiInstance->terminalCommission($terminal_activation_toggle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalCommission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_activation_toggle** | [**\Alexasomba\\Paystack\Model\TerminalActivationToggle**](../Model/TerminalActivationToggle.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalCommissionDeviceResponse**](../Model/TerminalCommissionDeviceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminalDecommission()`

```php
terminalDecommission($terminal_activation_toggle): \Alexasomba\\Paystack\Model\TerminalDecommissionDeviceResponse
```

Decommission Terminal

Unlink your debug device from your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_activation_toggle = new \Alexasomba\\Paystack\Model\TerminalActivationToggle(); // \Alexasomba\\Paystack\Model\TerminalActivationToggle

try {
    $result = $apiInstance->terminalDecommission($terminal_activation_toggle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalDecommission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_activation_toggle** | [**\Alexasomba\\Paystack\Model\TerminalActivationToggle**](../Model/TerminalActivationToggle.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalDecommissionDeviceResponse**](../Model/TerminalDecommissionDeviceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminalFetch()`

```php
terminalFetch($terminal_id): \Alexasomba\\Paystack\Model\TerminalGetResponse
```

Fetch Terminal

Get the details of a Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_id = Z0R4orOU; // string | The ID of the Terminal the event should be sent to.

try {
    $result = $apiInstance->terminalFetch($terminal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_id** | **string**| The ID of the Terminal the event should be sent to. | |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalGetResponse**](../Model/TerminalGetResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminalFetchEventStatus()`

```php
terminalFetchEventStatus($terminal_id, $event_id): \Alexasomba\\Paystack\Model\Response
```

Fetch Event Status

Check the status of an event sent to the Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_id = Z0R4orOU; // string | The ID of the Terminal the event should be sent to.
$event_id = 616d721e8c5cd40a0cdd54a6; // string | The ID of the event that was sent to the Terminal

try {
    $result = $apiInstance->terminalFetchEventStatus($terminal_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalFetchEventStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_id** | **string**| The ID of the Terminal the event should be sent to. | |
| **event_id** | **string**| The ID of the event that was sent to the Terminal | |

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

## `terminalFetchTerminalStatus()`

```php
terminalFetchTerminalStatus($terminal_id): \Alexasomba\\Paystack\Model\TerminalGetStatusResponse
```

Fetch Terminal Status

Check the availiability of a Terminal before sending an event to it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_id = Z0R4orOU; // string | The ID of the Terminal the event should be sent to.

try {
    $result = $apiInstance->terminalFetchTerminalStatus($terminal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalFetchTerminalStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_id** | **string**| The ID of the Terminal the event should be sent to. | |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalGetStatusResponse**](../Model/TerminalGetStatusResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminalList()`

```php
terminalList($next, $previous, $per_page): \Alexasomba\\Paystack\Model\TerminalListsResponse
```

List Terminals

List the Terminals available on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next = 'next_example'; // string | A cursor that indicates your place in the list. It can be used to fetch the next page of the list
$previous = 'previous_example'; // string | A cursor that indicates your place in the list. It should be used to fetch the previous page of the list after an intial next request
$per_page = 50; // int | Specify how many records you want to retrieve per page

try {
    $result = $apiInstance->terminalList($next, $previous, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **next** | **string**| A cursor that indicates your place in the list. It can be used to fetch the next page of the list | [optional] |
| **previous** | **string**| A cursor that indicates your place in the list. It should be used to fetch the previous page of the list after an intial next request | [optional] |
| **per_page** | **int**| Specify how many records you want to retrieve per page | [optional] [default to 50] |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalListsResponse**](../Model/TerminalListsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminalSendEvent()`

```php
terminalSendEvent($id, $body): \Alexasomba\\Paystack\Model\Response
```

Send Event

Send an event from your application to the Paystack Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = Z0R4orOU; // string | The ID of the Terminal the event should be sent to.
$body = new \Alexasomba\\Paystack\Model\TerminalIdEvent(); // \Alexasomba\\Paystack\Model\TerminalIdEvent

try {
    $result = $apiInstance->terminalSendEvent($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalSendEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the Terminal the event should be sent to. | |
| **body** | **\Alexasomba\\Paystack\Model\TerminalIdEvent**|  | [optional] |

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

## `terminalUpdate()`

```php
terminalUpdate($terminal_id, $body): \Alexasomba\\Paystack\Model\TerminalUpdateResponse
```

Update Terminal

Update the details of a Terminal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminal_id = Z0R4orOU; // string | The ID of the Terminal the event should be sent to.
$body = new \Alexasomba\\Paystack\Model\TerminalTerminalId(); // \Alexasomba\\Paystack\Model\TerminalTerminalId

try {
    $result = $apiInstance->terminalUpdate($terminal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->terminalUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terminal_id** | **string**| The ID of the Terminal the event should be sent to. | |
| **body** | **\Alexasomba\\Paystack\Model\TerminalTerminalId**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TerminalUpdateResponse**](../Model/TerminalUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
