# Alexasomba\\Paystack\TransactionApi

All URIs are relative to https://api.paystack.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transactionChargeAuthorization()**](TransactionApi.md#transactionChargeAuthorization) | **POST** /transaction/charge_authorization | Charge Authorization |
| [**transactionCheckAuthorization()**](TransactionApi.md#transactionCheckAuthorization) | **POST** /transaction/check_authorization | Check Authorization |
| [**transactionEvent()**](TransactionApi.md#transactionEvent) | **GET** /transaction/{id}/event | Get Transaction Event |
| [**transactionExport()**](TransactionApi.md#transactionExport) | **GET** /transaction/export | Export Transactions |
| [**transactionFetch()**](TransactionApi.md#transactionFetch) | **GET** /transaction/{id} | Fetch Transaction |
| [**transactionInitialize()**](TransactionApi.md#transactionInitialize) | **POST** /transaction/initialize | Initialize Transaction |
| [**transactionList()**](TransactionApi.md#transactionList) | **GET** /transaction | List Transactions |
| [**transactionPartialDebit()**](TransactionApi.md#transactionPartialDebit) | **POST** /transaction/partial_debit | Partial Debit |
| [**transactionSession()**](TransactionApi.md#transactionSession) | **GET** /transaction/{id}/session | Get Transaction Session |
| [**transactionTimeline()**](TransactionApi.md#transactionTimeline) | **GET** /transaction/timeline/{id} | Fetch Transaction Timeline |
| [**transactionTotals()**](TransactionApi.md#transactionTotals) | **GET** /transaction/totals | Transaction Totals |
| [**transactionVerify()**](TransactionApi.md#transactionVerify) | **GET** /transaction/verify/{reference} | Verify Transaction |


## `transactionChargeAuthorization()`

```php
transactionChargeAuthorization($transaction_charge_authorization): \Alexasomba\\Paystack\Model\ChargeAuthorizationResponse
```

Charge Authorization

Charge all authorizations marked as reusable with this endpoint whenever you need to receive payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_charge_authorization = new \Alexasomba\\Paystack\Model\TransactionChargeAuthorization(); // \Alexasomba\\Paystack\Model\TransactionChargeAuthorization

try {
    $result = $apiInstance->transactionChargeAuthorization($transaction_charge_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionChargeAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_charge_authorization** | [**\Alexasomba\\Paystack\Model\TransactionChargeAuthorization**](../Model/TransactionChargeAuthorization.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\ChargeAuthorizationResponse**](../Model/ChargeAuthorizationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionCheckAuthorization()`

```php
transactionCheckAuthorization($email, $amount, $authorization_code, $currency): \Alexasomba\\Paystack\Model\Response
```

Check Authorization

Check if an authorization code can be used for a charge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Customer's email address
$amount = 56; // int | Amount should be in kobo if currency is NGN, pesewas if currency is GHS, and cents if currency is ZAR
$authorization_code = 'authorization_code_example'; // string | Valid authorization code to charge
$currency = 'currency_example'; // string | The transaction currency

try {
    $result = $apiInstance->transactionCheckAuthorization($email, $amount, $authorization_code, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCheckAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Customer&#39;s email address | |
| **amount** | **int**| Amount should be in kobo if currency is NGN, pesewas if currency is GHS, and cents if currency is ZAR | |
| **authorization_code** | **string**| Valid authorization code to charge | [optional] |
| **currency** | **string**| The transaction currency | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\Response**](../Model/Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionEvent()`

```php
transactionEvent($id): \Alexasomba\\Paystack\Model\Response
```

Get Transaction Event

Fetch the event for a specific transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the transaction

try {
    $result = $apiInstance->transactionEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the transaction | |

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

## `transactionExport()`

```php
transactionExport($from, $to, $status, $customer, $subaccount_code, $settlement): \Alexasomba\\Paystack\Model\TransactionExportResponse
```

Export Transactions

Download transactions that occurred on your integration for a specific timeframe

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2024-06-01T00:00:01Z; // \DateTime | The start date
$to = 2024-06-30T13:36:54Z; // \DateTime | The end date
$status = success; // string | Filter by the status of the transaction
$customer = 123172416; // float | Filter by customer ID
$subaccount_code = ACCT_dskvlw3y3dMukmt; // string | Filter by subaccount code
$settlement = 5687910; // int | Filter by the settlement ID

try {
    $result = $apiInstance->transactionExport($from, $to, $status, $customer, $subaccount_code, $settlement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |
| **status** | **string**| Filter by the status of the transaction | [optional] |
| **customer** | **float**| Filter by customer ID | [optional] |
| **subaccount_code** | **string**| Filter by subaccount code | [optional] |
| **settlement** | **int**| Filter by the settlement ID | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionExportResponse**](../Model/TransactionExportResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionFetch()`

```php
transactionFetch($id): \Alexasomba\\Paystack\Model\TransactionFetchResponse
```

Fetch Transaction

Fetch a transaction to get its details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4099260516; // int | The ID of the transaction to fetch

try {
    $result = $apiInstance->transactionFetch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFetch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the transaction to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionFetchResponse**](../Model/TransactionFetchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionInitialize()`

```php
transactionInitialize($transaction_initialize): \Alexasomba\\Paystack\Model\TransactionInitializeResponse
```

Initialize Transaction

Create a new transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_initialize = new \Alexasomba\\Paystack\Model\TransactionInitialize(); // \Alexasomba\\Paystack\Model\TransactionInitialize

try {
    $result = $apiInstance->transactionInitialize($transaction_initialize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionInitialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_initialize** | [**\Alexasomba\\Paystack\Model\TransactionInitialize**](../Model/TransactionInitialize.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionInitializeResponse**](../Model/TransactionInitializeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionList()`

```php
transactionList($use_cursor, $next, $previous, $per_page, $page, $from, $to, $status, $source, $terminal_id, $virtual_account_number, $customer_code, $amount, $settlement, $channel, $subaccount_code, $split_code): \Alexasomba\\Paystack\Model\TransactionListResponse
```

List Transactions

List transactions that has occurred on your integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = true; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data
$per_page = 56; // int | The number of records to fetch per request
$page = 56; // int | The offset to retrieve data from
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date
$status = 'status_example'; // string | Filter transaction by status
$source = 'source_example'; // string | The origin of the payment
$terminal_id = 'terminal_id_example'; // string | Filter transactions by a terminal ID
$virtual_account_number = 'virtual_account_number_example'; // string | Filter transactions by a virtual account number
$customer_code = 'customer_code_example'; // string | Filter transactions by a customer code
$amount = 56; // int | Filter transactions by a specific amount
$settlement = 56; // int | The settlement ID to filter for settled transactions
$channel = 'channel_example'; // string | The payment method the customer used to complete the transaction
$subaccount_code = 'subaccount_code_example'; // string | Filter transaction by subaccount code
$split_code = 'split_code_example'; // string | Filter transaction by split code

try {
    $result = $apiInstance->transactionList($use_cursor, $next, $previous, $per_page, $page, $from, $to, $status, $source, $terminal_id, $virtual_account_number, $customer_code, $amount, $settlement, $channel, $subaccount_code, $split_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **use_cursor** | **bool**| A flag to indicate if cursor based pagination should be used | [optional] |
| **next** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data | [optional] |
| **previous** | **string**| An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data | [optional] |
| **per_page** | **int**| The number of records to fetch per request | [optional] |
| **page** | **int**| The offset to retrieve data from | [optional] |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |
| **status** | **string**| Filter transaction by status | [optional] |
| **source** | **string**| The origin of the payment | [optional] |
| **terminal_id** | **string**| Filter transactions by a terminal ID | [optional] |
| **virtual_account_number** | **string**| Filter transactions by a virtual account number | [optional] |
| **customer_code** | **string**| Filter transactions by a customer code | [optional] |
| **amount** | **int**| Filter transactions by a specific amount | [optional] |
| **settlement** | **int**| The settlement ID to filter for settled transactions | [optional] |
| **channel** | **string**| The payment method the customer used to complete the transaction | [optional] |
| **subaccount_code** | **string**| Filter transaction by subaccount code | [optional] |
| **split_code** | **string**| Filter transaction by split code | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionPartialDebit()`

```php
transactionPartialDebit($transaction_partial_debit): \Alexasomba\\Paystack\Model\TransactionPartialDebitResponse
```

Partial Debit

Retrieve part of a payment from a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_partial_debit = new \Alexasomba\\Paystack\Model\TransactionPartialDebit(); // \Alexasomba\\Paystack\Model\TransactionPartialDebit

try {
    $result = $apiInstance->transactionPartialDebit($transaction_partial_debit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPartialDebit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_partial_debit** | [**\Alexasomba\\Paystack\Model\TransactionPartialDebit**](../Model/TransactionPartialDebit.md)|  | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionPartialDebitResponse**](../Model/TransactionPartialDebitResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionSession()`

```php
transactionSession($id): \Alexasomba\\Paystack\Model\Response
```

Get Transaction Session

Fetch the session for a specific transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the transaction

try {
    $result = $apiInstance->transactionSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the transaction | |

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

## `transactionTimeline()`

```php
transactionTimeline($id): \Alexasomba\\Paystack\Model\TransactionTimelineResponse
```

Fetch Transaction Timeline

Fetch the steps taken from the initiation to the completion of a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3936799950; // int | The ID of the transaction to fetch

try {
    $result = $apiInstance->transactionTimeline($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the transaction to fetch | |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionTimelineResponse**](../Model/TransactionTimelineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionTotals()`

```php
transactionTotals($from, $to): \Alexasomba\\Paystack\Model\TransactionTotalsResponse
```

Transaction Totals

Get the total amount of all transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2024-06-01T00:00:01Z; // \DateTime | The start date
$to = 2024-06-30T13:36:54Z; // \DateTime | The end date

try {
    $result = $apiInstance->transactionTotals($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start date | [optional] |
| **to** | **\DateTime**| The end date | [optional] |

### Return type

[**\Alexasomba\\Paystack\Model\TransactionTotalsResponse**](../Model/TransactionTotalsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionVerify()`

```php
transactionVerify($reference): \Alexasomba\\Paystack\Model\VerifyResponse
```

Verify Transaction

Verify a previously initiated transaction using it's reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = re4lyvq3s3; // string | The transaction reference to verify

try {
    $result = $apiInstance->transactionVerify($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| The transaction reference to verify | |

### Return type

[**\Alexasomba\\Paystack\Model\VerifyResponse**](../Model/VerifyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
