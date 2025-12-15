# Alexasomba\\Paystack\DedicatedVirtualAccountApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dedicatedAccountAddSplit()**](DedicatedVirtualAccountApi.md#dedicatedAccountAddSplit) | **POST** /dedicated_account/split | Split Dedicated Account Transaction |
| [**dedicatedAccountAssign()**](DedicatedVirtualAccountApi.md#dedicatedAccountAssign) | **POST** /dedicated_account/assign | Assign Dedicated Account |
| [**dedicatedAccountAvailableProviders()**](DedicatedVirtualAccountApi.md#dedicatedAccountAvailableProviders) | **GET** /dedicated_account/available_providers | Fetch Bank Providers |
| [**dedicatedAccountCreate()**](DedicatedVirtualAccountApi.md#dedicatedAccountCreate) | **POST** /dedicated_account | Create Dedicated Account |
| [**dedicatedAccountDeactivate()**](DedicatedVirtualAccountApi.md#dedicatedAccountDeactivate) | **DELETE** /dedicated_account/{id} | Deactivate Dedicated Account |
| [**dedicatedAccountFetch()**](DedicatedVirtualAccountApi.md#dedicatedAccountFetch) | **GET** /dedicated_account/{id} | Fetch Dedicated Account |
| [**dedicatedAccountList()**](DedicatedVirtualAccountApi.md#dedicatedAccountList) | **GET** /dedicated_account | List Dedicated Accounts |
| [**dedicatedAccountRemoveSplit()**](DedicatedVirtualAccountApi.md#dedicatedAccountRemoveSplit) | **DELETE** /dedicated_account/split | Remove Split from Dedicated Account |
| [**dedicatedAccountRequery()**](DedicatedVirtualAccountApi.md#dedicatedAccountRequery) | **GET** /dedicated_account/requery | Requery Dedicated Account |


## `dedicatedAccountAddSplit()`

```php
dedicatedAccountAddSplit($dedicated_virtual_account_split): \Alexasomba\\Paystack\Model\Response
```

Split Dedicated Account Transaction

Split a dedicated virtual account transaction with one or more accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dedicated_virtual_account_split = new \Alexasomba\\Paystack\Model\DedicatedVirtualAccountSplit(); // \Alexasomba\\Paystack\Model\DedicatedVirtualAccountSplit

try {
    $result = $apiInstance->dedicatedAccountAddSplit($dedicated_virtual_account_split);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountAddSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dedicated_virtual_account_split** | [**\Alexasomba\\Paystack\Model\DedicatedVirtualAccountSplit**](../Model/DedicatedVirtualAccountSplit.md)|  | [optional] |

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

## `dedicatedAccountAssign()`

```php
dedicatedAccountAssign($dedicated_virtual_account_assign): \Alexasomba\\Paystack\Model\Response
```

Assign Dedicated Account

With this endpoint, you can create a customer, validate the customer, and assign a DVA to the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dedicated_virtual_account_assign = new \Alexasomba\\Paystack\Model\DedicatedVirtualAccountAssign(); // \Alexasomba\\Paystack\Model\DedicatedVirtualAccountAssign

try {
    $result = $apiInstance->dedicatedAccountAssign($dedicated_virtual_account_assign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dedicated_virtual_account_assign** | [**\Alexasomba\\Paystack\Model\DedicatedVirtualAccountAssign**](../Model/DedicatedVirtualAccountAssign.md)|  | [optional] |

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

## `dedicatedAccountAvailableProviders()`

```php
dedicatedAccountAvailableProviders(): \Alexasomba\\Paystack\Model\Response
```

Fetch Bank Providers

Get available bank providers for a dedicated virtual account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dedicatedAccountAvailableProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountAvailableProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `dedicatedAccountCreate()`

```php
dedicatedAccountCreate($dedicated_virtual_account_create): \Alexasomba\\Paystack\Model\DedicatedNubanCreateResponse
```

Create Dedicated Account

Create a dedicated virtual account for an existing customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dedicated_virtual_account_create = new \Alexasomba\\Paystack\Model\DedicatedVirtualAccountCreate(); // \Alexasomba\\Paystack\Model\DedicatedVirtualAccountCreate

try {
    $result = $apiInstance->dedicatedAccountCreate($dedicated_virtual_account_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dedicated_virtual_account_create** | [**\Alexasomba\\Paystack\Model\DedicatedVirtualAccountCreate**](../Model/DedicatedVirtualAccountCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\DedicatedNubanCreateResponse**](../Model/DedicatedNubanCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedAccountDeactivate()`

```php
dedicatedAccountDeactivate($id): \Alexasomba\\Paystack\Model\DedicatedAccountId
```

Deactivate Dedicated Account

Deactivate a dedicated virtual account on your integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of dedicated virtual account

try {
    $result = $apiInstance->dedicatedAccountDeactivate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountDeactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of dedicated virtual account | |

### Return type

[**\Alexasomba\\Paystack\Model\DedicatedAccountId**](../Model/DedicatedAccountId.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedAccountFetch()`

```php
dedicatedAccountFetch($id): \Alexasomba\\Paystack\Model\DedicatedAccountId
```

Fetch Dedicated Account

Get details of a dedicated virtual account on your integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of dedicated virtual account

try {
    $result = $apiInstance->dedicatedAccountFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of dedicated virtual account | |

### Return type

[**\Alexasomba\\Paystack\Model\DedicatedAccountId**](../Model/DedicatedAccountId.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedAccountList()`

```php
dedicatedAccountList($active, $customer, $currency, $provider_slug, $bank_id, $per_page, $page): \Alexasomba\\Paystack\Model\DedicatedNubanListResponse
```

List Dedicated Accounts

List dedicated virtual accounts available on your integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = true; // bool | Status of the dedicated virtual account
$customer = 297346561; // int | The customer's ID
$currency = 'currency_example'; // string | The currency of the dedicated virtual account
$provider_slug = titan-paystack; // string | The bank's slug in lowercase, without spaces
$bank_id = 035; // string | The bank's ID
$per_page = 50; // int | The number of records to fetch per request
$page = 1; // int | The offset to retrieve data from

try {
    $result = $apiInstance->dedicatedAccountList($active, $customer, $currency, $provider_slug, $bank_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**| Status of the dedicated virtual account | [optional] |
| **customer** | **int**| The customer&#39;s ID | [optional] |
| **currency** | **string**| The currency of the dedicated virtual account | [optional] |
| **provider_slug** | **string**| The bank&#39;s slug in lowercase, without spaces | [optional] |
| **bank_id** | **string**| The bank&#39;s ID | [optional] |
| **per_page** | **int**| The number of records to fetch per request | [optional] [default to 50] |
| **page** | **int**| The offset to retrieve data from | [optional] [default to 1] |

### Return type

[**\Alexasomba\\Paystack\Model\DedicatedNubanListResponse**](../Model/DedicatedNubanListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dedicatedAccountRemoveSplit()`

```php
dedicatedAccountRemoveSplit($dedicated_virtual_account_remove_split): \Alexasomba\\Paystack\Model\Response
```

Remove Split from Dedicated Account

If you've previously set up split payment for transactions on a dedicated virtual account, you can remove it with this endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dedicated_virtual_account_remove_split = new \Alexasomba\\Paystack\Model\DedicatedVirtualAccountRemoveSplit(); // \Alexasomba\\Paystack\Model\DedicatedVirtualAccountRemoveSplit

try {
    $result = $apiInstance->dedicatedAccountRemoveSplit($dedicated_virtual_account_remove_split);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountRemoveSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dedicated_virtual_account_remove_split** | [**\Alexasomba\\Paystack\Model\DedicatedVirtualAccountRemoveSplit**](../Model/DedicatedVirtualAccountRemoveSplit.md)|  | [optional] |

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

## `dedicatedAccountRequery()`

```php
dedicatedAccountRequery($account_number, $provider_slug, $date): \Alexasomba\\Paystack\Model\Response
```

Requery Dedicated Account

Requery Dedicated Virtual Account for new transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\DedicatedVirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 0033322211; // string | Virtual account number to requery
$provider_slug = titan-paystack; // string | The bank's slug in lowercase, without spaces.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The day the transfer was made

try {
    $result = $apiInstance->dedicatedAccountRequery($account_number, $provider_slug, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DedicatedVirtualAccountApi->dedicatedAccountRequery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_number** | **string**| Virtual account number to requery | [optional] |
| **provider_slug** | **string**| The bank&#39;s slug in lowercase, without spaces. | [optional] |
| **date** | **\DateTime**| The day the transfer was made | [optional] |

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
