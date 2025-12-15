# Alexasomba\\Paystack\CustomerApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerCreate()**](CustomerApi.md#customerCreate) | **POST** /customer | Create Customer |
| [**customerDeactivateAuthorization()**](CustomerApi.md#customerDeactivateAuthorization) | **POST** /customer/authorization/deactivate | Deactivate Authorization |
| [**customerDirectDebitActivationCharge()**](CustomerApi.md#customerDirectDebitActivationCharge) | **PUT** /customer/{id}/directdebit-activation-charge | Direct Debit Activation Charge |
| [**customerFetch()**](CustomerApi.md#customerFetch) | **GET** /customer/{code} | Fetch Customer |
| [**customerFetchMandateAuthorizations()**](CustomerApi.md#customerFetchMandateAuthorizations) | **GET** /customer/{id}/directdebit-mandate-authorizations | Fetch Mandate Authorizations |
| [**customerInitializeAuthorization()**](CustomerApi.md#customerInitializeAuthorization) | **POST** /customer/authorization/initialize | Initialize Authorization |
| [**customerInitializeDirectDebit()**](CustomerApi.md#customerInitializeDirectDebit) | **POST** /customer/{id}/initialize-direct-debit | Initialize Direct Debit |
| [**customerList()**](CustomerApi.md#customerList) | **GET** /customer | List Customers |
| [**customerRiskAction()**](CustomerApi.md#customerRiskAction) | **POST** /customer/set_risk_action | Set Risk Action |
| [**customerUpdate()**](CustomerApi.md#customerUpdate) | **PUT** /customer/{code} | Update Customer |
| [**customerValidate()**](CustomerApi.md#customerValidate) | **POST** /customer/{code}/identification | Validate Customer |
| [**customerVerifyAuthorization()**](CustomerApi.md#customerVerifyAuthorization) | **GET** /customer/authorization/verify/{reference} | Verify Authorization |


## `customerCreate()`

```php
customerCreate($customer_create): \Alexasomba\\Paystack\Model\CustomerCreateResponse
```

Create Customer

Create a customer on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_create = new \Alexasomba\\Paystack\Model\CustomerCreate(); // \Alexasomba\\Paystack\Model\CustomerCreate

try {
    $result = $apiInstance->customerCreate($customer_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_create** | [**\Alexasomba\\Paystack\Model\CustomerCreate**](../Model/CustomerCreate.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerCreateResponse**](../Model/CustomerCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerDeactivateAuthorization()`

```php
customerDeactivateAuthorization($customer_deactivate_authorization): \Alexasomba\\Paystack\Model\CustomerDeactivateAuthorizationResponse
```

Deactivate Authorization

Deactivate an authorization for any payment channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_deactivate_authorization = new \Alexasomba\\Paystack\Model\CustomerDeactivateAuthorization(); // \Alexasomba\\Paystack\Model\CustomerDeactivateAuthorization

try {
    $result = $apiInstance->customerDeactivateAuthorization($customer_deactivate_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDeactivateAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_deactivate_authorization** | [**\Alexasomba\\Paystack\Model\CustomerDeactivateAuthorization**](../Model/CustomerDeactivateAuthorization.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerDeactivateAuthorizationResponse**](../Model/CustomerDeactivateAuthorizationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerDirectDebitActivationCharge()`

```php
customerDirectDebitActivationCharge($id, $body): \Alexasomba\\Paystack\Model\CustomerDirectDebitActivationChargeResponse
```

Direct Debit Activation Charge

Trigger an activation charge on an inactive mandate on behalf of your customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 297346561; // int | The customer ID attached to the authorization
$body = new \Alexasomba\\Paystack\Model\CustomerIdDirectdebitActivationCharge(); // \Alexasomba\\Paystack\Model\CustomerIdDirectdebitActivationCharge

try {
    $result = $apiInstance->customerDirectDebitActivationCharge($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDirectDebitActivationCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The customer ID attached to the authorization | |
| **body** | **\Alexasomba\\Paystack\Model\CustomerIdDirectdebitActivationCharge**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerDirectDebitActivationChargeResponse**](../Model/CustomerDirectDebitActivationChargeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerFetch()`

```php
customerFetch($code): \Alexasomba\\Paystack\Model\CustomerCode
```

Fetch Customer

Get details of a customer on your integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = CUS_c6wqvwmvwopw4ms; // string | The code for the customer gotten from the response of the customer creation

try {
    $result = $apiInstance->customerFetch($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code for the customer gotten from the response of the customer creation | |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerCode**](../Model/CustomerCode.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerFetchMandateAuthorizations()`

```php
customerFetchMandateAuthorizations($id): \Alexasomba\\Paystack\Model\CustomerFetchMandateAuthorizationsResponse
```

Fetch Mandate Authorizations

Get the list of direct debit mandates associated with a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 297346561; // int | The customer ID for the authorizations to fetch

try {
    $result = $apiInstance->customerFetchMandateAuthorizations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFetchMandateAuthorizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The customer ID for the authorizations to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerFetchMandateAuthorizationsResponse**](../Model/CustomerFetchMandateAuthorizationsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerInitializeAuthorization()`

```php
customerInitializeAuthorization($customer_authorization_initialize_request): \Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeResponse
```

Initialize Authorization

Initiate a request to create a reusable authorization code for recurring transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_authorization_initialize_request = new \Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeRequest(); // \Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeRequest

try {
    $result = $apiInstance->customerInitializeAuthorization($customer_authorization_initialize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerInitializeAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_authorization_initialize_request** | [**\Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeRequest**](../Model/CustomerAuthorizationInitializeRequest.md)|  | |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerAuthorizationInitializeResponse**](../Model/CustomerAuthorizationInitializeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerInitializeDirectDebit()`

```php
customerInitializeDirectDebit($id, $body): \Alexasomba\\Paystack\Model\CustomerInitializeDirectDebitResponse
```

Initialize Direct Debit

Initialize the process of linking an account to a customer for Direct Debit transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 297346561; // int | The ID of the customer to initialize the direct debit for
$body = new \Alexasomba\\Paystack\Model\CustomerIdInitializeDirectDebit(); // \Alexasomba\\Paystack\Model\CustomerIdInitializeDirectDebit

try {
    $result = $apiInstance->customerInitializeDirectDebit($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerInitializeDirectDebit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the customer to initialize the direct debit for | |
| **body** | **\Alexasomba\\Paystack\Model\CustomerIdInitializeDirectDebit**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerInitializeDirectDebitResponse**](../Model/CustomerInitializeDirectDebitResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerList()`

```php
customerList($use_cursor, $next, $previous, $from, $to, $per_page, $page): \Alexasomba\\Paystack\Model\CustomerListResponse
```

List Customers

List customers on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = True; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date
$per_page = 'per_page_example'; // string | The number of records to fetch per request
$page = 'page_example'; // string | The offset to retrieve data from

try {
    $result = $apiInstance->customerList($use_cursor, $next, $previous, $from, $to, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **use_cursor** | **bool**| A flag to indicate if cursor based pagination should be used | [optional] |
| **next** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data | [optional] |
| **previous** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |
| **per_page** | **string**| The number of records to fetch per request | [optional] |
| **page** | **string**| The offset to retrieve data from | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerListResponse**](../Model/CustomerListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerRiskAction()`

```php
customerRiskAction($customer_risk_action): \Alexasomba\\Paystack\Model\CustomerWhitelistBlacklistResponse
```

Set Risk Action

Set customer's risk action by whitelisting or blacklisting the customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_risk_action = new \Alexasomba\\Paystack\Model\CustomerRiskAction(); // \Alexasomba\\Paystack\Model\CustomerRiskAction

try {
    $result = $apiInstance->customerRiskAction($customer_risk_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRiskAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_risk_action** | [**\Alexasomba\\Paystack\Model\CustomerRiskAction**](../Model/CustomerRiskAction.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerWhitelistBlacklistResponse**](../Model/CustomerWhitelistBlacklistResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdate()`

```php
customerUpdate($code, $body): \Alexasomba\\Paystack\Model\CustomerCode
```

Update Customer

Update a customer's details on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = CUS_c6wqvwmvwopw4ms; // string | The code for the customer gotten from the response of the customer creation
$body = new \Alexasomba\\Paystack\Model\CustomerCode(); // \Alexasomba\\Paystack\Model\CustomerCode

try {
    $result = $apiInstance->customerUpdate($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code for the customer gotten from the response of the customer creation | |
| **body** | **\Alexasomba\\Paystack\Model\CustomerCode**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerCode**](../Model/CustomerCode.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerValidate()`

```php
customerValidate($code, $body): \Alexasomba\\Paystack\Model\CustomerCodeIdentification
```

Validate Customer

Validate a customer's identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = CUS_c6wqvwmvwopw4ms; // string | The code for the customer gotten from the response of the customer creation
$body = new \Alexasomba\\Paystack\Model\CustomerCodeIdentification(); // \Alexasomba\\Paystack\Model\CustomerCodeIdentification

try {
    $result = $apiInstance->customerValidate($code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code for the customer gotten from the response of the customer creation | |
| **body** | **\Alexasomba\\Paystack\Model\CustomerCodeIdentification**|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerCodeIdentification**](../Model/CustomerCodeIdentification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyAuthorization()`

```php
customerVerifyAuthorization($reference): \Alexasomba\\Paystack\Model\CustomerAuthorizationVerifyResponse
```

Verify Authorization

Check the status of an authorization request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = dfbzfotsrbv4n5s82t4mp5b5mfn51h; // string | The reference returned in the initialization response

try {
    $result = $apiInstance->customerVerifyAuthorization($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| The reference returned in the initialization response | |

### Return type

[**\Alexasomba\\Paystack\Model\CustomerAuthorizationVerifyResponse**](../Model/CustomerAuthorizationVerifyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
