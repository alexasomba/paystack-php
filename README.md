# Paystack

PHP client for the Paystack API, generated from the Paystack OpenAPI spec in this repository.

## Why this SDK

- Generated from the Paystack OpenAPI source of truth in this repo
- Includes opt-in helpers for timeouts, retries, idempotency, and structured API errors
- Keeps generated models and API classes aligned with the SDK generation spec

## Requirements

PHP 8.1 and later.

## Installation

```sh
composer require alexasomba/paystack
```

Or from source:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/alexasomba/paystack-php.git"
    }
  ],
  "require": {
    "alexasomba/paystack": "*"
  }
}
```

Authenticate requests with your Paystack secret key through the generated configuration object:

```php
$config = Configuration::getDefaultConfiguration()
    ->setAccessToken($_ENV['PAYSTACK_SECRET_KEY']);
```

## Quick Start

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Alexasomba\Paystack\Api\TransactionApi;
use Alexasomba\Paystack\Configuration;
use Alexasomba\Paystack\Model\TransactionInitialize;
use GuzzleHttp\Client;

$config = Configuration::getDefaultConfiguration()
    ->setAccessToken($_ENV['PAYSTACK_SECRET_KEY']);

$api = new TransactionApi(new Client(), $config);
$response = $api->transactionInitialize(
    new TransactionInitialize([
        'email' => 'customer@example.com',
        'amount' => 5000,
    ])
);

echo $response->getData()->getAuthorizationUrl() . PHP_EOL;
```

Generated API methods return typed model objects. Catch `ApiException` when you need raw status codes, headers, or response bodies while debugging.

## API Basics

- Base URL: `https://api.paystack.co`
- HTTPS is required for all requests.
- Requests and responses are JSON-based.
- Most successful responses follow the `status`, `message`, `data`, and optional `meta` envelope described in `Paystack-API/0a-Introduction.md`.
- Amounts are usually sent in currency subunits such as kobo, pesewas, or cents. Check the module docs for currency-specific rules.

## Authentication & Environments

- Server-side SDKs should use your secret key (`sk_test_*` or `sk_live_*`).
- Browser SDKs should use only your public key (`pk_test_*` or `pk_live_*`).
- Send server-side API credentials as `Authorization: Bearer YOUR_SECRET_KEY`.
- Test and live modes use different keys and isolated environments.
- Rotate keys if they are exposed, and never commit secret keys to source control.
- If you enable IP whitelisting in Paystack, requests from non-whitelisted IPs will be blocked.

## Reliability

This SDK includes opt-in helpers in `Alexasomba\Paystack\Extras`:

```php
use Alexasomba\Paystack\Extras\HttpClientFactory;
use Alexasomba\Paystack\Extras\Paystack;

$config = Paystack::createConfiguration($_ENV['PAYSTACK_SECRET_KEY']);
$client = HttpClientFactory::create([
    'timeoutSeconds' => 30,
    'idempotency' => ['enabled' => true, 'auto' => true],
]);
```

Use the extras layer when you want one place to set timeout, retry, and idempotency defaults across your application.

## Pagination

- Paystack supports both offset pagination and cursor pagination.
- Offset pagination uses `page` and `perPage`.
- Cursor pagination uses `use_cursor=true` plus `next` or `previous` cursors returned in `meta`.
- Cursor pagination is especially useful for large or frequently changing datasets.
- The exact `meta` shape varies by endpoint and pagination mode.

## Coverage

## Errors

- Paystack uses conventional HTTP status codes such as `200`, `201`, `400`, `401`, `404`, and `5xx`.
- Error responses typically include `status`, `message`, `type`, `code`, and optional diagnostic `meta` information.
- Error types described in `Paystack-API/0d-Errors.md` include `api_error`, `validation_error`, and `processor_error`.
- For charge and verify flows, always inspect the returned response body and status fields, not just the HTTP code.

This SDK is generated from the SDK spec in this monorepo and covers the operations emitted into the generated API classes under `lib/Api`.

## Modules

For this SDK, these schema families are emitted as generated model classes under `lib/Model` and used by the API classes under `lib/Api`.

| Module                                                               | Schema / model family                                    |
| -------------------------------------------------------------------- | -------------------------------------------------------- |
| Transactions                                                         | `Transaction*`                                           |
| Verify Payments (Transaction verification)                           | `VerifyResponse / TransactionFetchResponse`              |
| Charges                                                              | `Charge*`                                                |
| Bulk Charges                                                         | `BulkCharge*`                                            |
| Subaccounts                                                          | `Subaccount*`                                            |
| Transaction Splits                                                   | `Split*`                                                 |
| Terminal                                                             | `Terminal*`                                              |
| Virtual Terminal                                                     | `VirtualTerminal*`                                       |
| Customers                                                            | `Customer*`                                              |
| Direct Debit                                                         | `DirectDebit*`                                           |
| Dedicated Virtual Accounts                                           | `DedicatedNuban* / DedicatedVirtualAccount*`             |
| Apple Pay                                                            | `ApplePay*`                                              |
| Plans                                                                | `Plan*`                                                  |
| Subscriptions                                                        | `Subscription*`                                          |
| Transfer Recipients                                                  | `TransferRecipient*`                                     |
| Transfers                                                            | `Transfer*`                                              |
| Transfers Control (OTP settings; under Transfers)                    | `TransferEnable* / TransferDisable* / TransferFinalize*` |
| Balance                                                              | `Balance*`                                               |
| Payment Requests (Invoices)                                          | `PaymentRequest*`                                        |
| Verification (Resolve Account / Validate Account / Resolve Card BIN) | `Verification*`                                          |
| Products                                                             | `Product*`                                               |
| Storefronts                                                          | `Storefront*`                                            |
| Orders                                                               | `Order*`                                                 |
| Payment Pages                                                        | `Page*`                                                  |
| Settlements                                                          | `Settlement*`                                            |
| Integration                                                          | `Integration*`                                           |
| Control Panel (Payment session timeout; under Integration)           | `ControlPanel*`                                          |
| Refunds                                                              | `Refund*`                                                |
| Disputes                                                             | `Dispute*`                                               |
| Banks                                                                | `Bank*`                                                  |
| Miscellaneous                                                        | `Miscellaneous* / Currency`                              |

## Module Examples

These are intentionally short examples. Use them as entry points, then expand the generated model objects and API method arguments for your use case.

### Transactions

```php
$response = $transactionApi->transactionInitialize(
    new TransactionInitialize(['email' => 'customer@example.com', 'amount' => 5000])
);
```

### Verify Payments (Transaction verification)

```php
$verified = $transactionApi->transactionVerify('ref_123');
```

### Charges

```php
$chargeApi->chargeCreate(new ChargeCreateRequest(['email' => 'customer@example.com']));
```

### Bulk Charges

```php
$bulkChargeApi->bulkChargeInitiate([
    new BulkChargeInitiate(['authorization' => 'AUTH_xxx', 'amount' => 5000, 'reference' => 'bulk-ref-1']),
]);
```

### Subaccounts

```php
$subaccountApi->subaccountCreate(new SubaccountCreate(['business_name' => 'Acme Stores']));
```

### Transaction Splits

```php
$splitApi->splitCreate(new SplitCreate(['name' => 'Main split', 'type' => 'percentage', 'currency' => 'NGN']));
```

### Terminal

```php
$terminals = $terminalApi->terminalList();
```

### Virtual Terminal

```php
$virtualTerminalApi->virtualTerminalCreate(new VirtualTerminalCreate(['name' => 'Web checkout terminal']));
```

### Customers

```php
$customerApi->customerCreate(new CustomerCreate(['email' => 'customer@example.com']));
```

### Direct Debit

```php
$directDebitApi->directdebitInitialize(new DirectDebitInitializeRequest(['email' => 'customer@example.com']));
```

### Dedicated Virtual Accounts

```php
$dedicatedVirtualAccountApi->dedicatedAccountAssign(new DedicatedVirtualAccountAssign(['customer' => 12345]));
```

### Apple Pay

```php
$applePayApi->applePayRegisterDomain(new ApplePayParam(['domain_name' => 'example.com']));
```

### Plans

```php
$planApi->planCreate(new PlanCreate(['name' => 'Starter', 'amount' => 500000, 'interval' => 'monthly']));
```

### Subscriptions

```php
$subscriptionApi->subscriptionCreate(new SubscriptionCreate(['customer' => 'CUS_xxx', 'plan' => 'PLN_xxx']));
```

### Transfer Recipients

```php
$transferRecipientApi->transferrecipientCreate(new TransferRecipientCreate(['name' => 'Ada Lovelace', 'type' => 'nuban']));
```

### Transfers

```php
$transferApi->transferCreate(new TransferInitiate(['source' => 'balance', 'amount' => 5000, 'recipient' => 'RCP_xxx']));
```

### Transfers Control (OTP settings; under Transfers)

```php
$transferApi->transferEnableOtp();
```

### Balance

```php
$balance = $balanceApi->balanceFetch();
```

### Payment Requests (Invoices)

```php
$paymentRequestApi->paymentRequestCreate(new PaymentRequestCreate(['amount' => 5000, 'description' => 'Consulting invoice']));
```

### Verification (Resolve Account / Validate Account / Resolve Card BIN)

```php
$resolved = $bankApi->bankResolveAccountNumber('0001234567', '057');
```

### Products

```php
$productApi->productCreate(new ProductCreate(['name' => 'T-shirt', 'price' => 5000, 'currency' => 'NGN']));
```

### Storefronts

```php
$storefronts = $storefrontApi->storefrontList();
```

### Orders

```php
$orderApi->orderCreate(new OrderCreate(['customer' => 'CUS_xxx']));
```

### Payment Pages

```php
$pageApi->pageCreate(new PageCreate(['name' => 'Event Ticket', 'amount' => 5000]));
```

### Settlements

```php
$settlements = $settlementApi->settlementList();
```

### Integration

```php
$timeout = $integrationApi->integrationFetchPaymentSessionTimeout();
```

### Control Panel (Payment session timeout; under Integration)

```php
$integrationApi->integrationUpdatePaymentSessionTimeout(20);
```

### Refunds

```php
$refundApi->refundCreate(new RefundCreate(['transaction' => 123456789, 'amount' => 5000]));
```

### Disputes

```php
$disputes = $disputeApi->disputeList();
```

### Banks

```php
$banks = $bankApi->bankList('nigeria');
```

### Miscellaneous

```php
$countries = $miscellaneousApi->miscellaneousListCountries();
```

## Configuration Notes

The generated PHP client still exposes the standard OpenAPI Generator configuration surface. In most integrations, the main requirement is setting the bearer token and optionally swapping in a custom Guzzle client.

## Related SDKs

- Node: [alexasomba/paystack-node](https://github.com/alexasomba/paystack-node)
- Axios: [alexasomba/paystack-axios](https://github.com/alexasomba/paystack-axios)
- Browser: [alexasomba/paystack-browser](https://github.com/alexasomba/paystack-browser)
- Go: [alexasomba/paystack-go](https://github.com/alexasomba/paystack-go)
- Python: [alexasomba/paystack-python](https://github.com/alexasomba/paystack-python)

## Source

- Monorepo source: [alexasomba/paystack-openapi](https://github.com/alexasomba/paystack-openapi)
- Standalone SDK repo: [https://github.com/alexasomba/paystack-php](https://github.com/alexasomba/paystack-php)
