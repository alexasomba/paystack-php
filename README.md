# Paystack

The OpenAPI specification of the Paystack API that merchants and developers can harness to build financial solutions in Africa.

For more information, please visit [https://paystack.com/docs](https://paystack.com/docs).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Paystack/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Alexasomba\\Paystack\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alexasomba\\Paystack\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->balanceFetch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->balanceFetch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.paystack.co*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BalanceApi* | [**balanceFetch**](docs/Api/BalanceApi.md#balancefetch) | **GET** /balance | Fetch Balance
*BalanceApi* | [**balanceLedger**](docs/Api/BalanceApi.md#balanceledger) | **GET** /balance/ledger | Balance Ledger
*BulkChargeApi* | [**bulkChargeCharges**](docs/Api/BulkChargeApi.md#bulkchargecharges) | **GET** /bulkcharge/{code}/charges | Fetch Charges in a Batch
*BulkChargeApi* | [**bulkChargeFetch**](docs/Api/BulkChargeApi.md#bulkchargefetch) | **GET** /bulkcharge/{code} | Fetch Bulk Charge Batch
*BulkChargeApi* | [**bulkChargeInitiate**](docs/Api/BulkChargeApi.md#bulkchargeinitiate) | **POST** /bulkcharge | Initiate Bulk Charge
*BulkChargeApi* | [**bulkChargeList**](docs/Api/BulkChargeApi.md#bulkchargelist) | **GET** /bulkcharge | List Bulk Charge Batches
*BulkChargeApi* | [**bulkChargePause**](docs/Api/BulkChargeApi.md#bulkchargepause) | **GET** /bulkcharge/pause/{code} | Pause Bulk Charge Batch
*BulkChargeApi* | [**bulkChargeResume**](docs/Api/BulkChargeApi.md#bulkchargeresume) | **GET** /bulkcharge/resume/{code} | Resume Bulk Charge Batch
*ChargeApi* | [**chargeCheck**](docs/Api/ChargeApi.md#chargecheck) | **GET** /charge/{reference} | Check pending charge
*ChargeApi* | [**chargeCreate**](docs/Api/ChargeApi.md#chargecreate) | **POST** /charge | Create Charge
*ChargeApi* | [**chargeSubmitAddress**](docs/Api/ChargeApi.md#chargesubmitaddress) | **POST** /charge/submit_address | Submit Address
*ChargeApi* | [**chargeSubmitBirthday**](docs/Api/ChargeApi.md#chargesubmitbirthday) | **POST** /charge/submit_birthday | Submit Birthday
*ChargeApi* | [**chargeSubmitOtp**](docs/Api/ChargeApi.md#chargesubmitotp) | **POST** /charge/submit_otp | Submit OTP
*ChargeApi* | [**chargeSubmitPhone**](docs/Api/ChargeApi.md#chargesubmitphone) | **POST** /charge/submit_phone | Submit Phone
*ChargeApi* | [**chargeSubmitPin**](docs/Api/ChargeApi.md#chargesubmitpin) | **POST** /charge/submit_pin | Submit PIN
*CustomerApi* | [**customerCreate**](docs/Api/CustomerApi.md#customercreate) | **POST** /customer | Create Customer
*CustomerApi* | [**customerDeactivateAuthorization**](docs/Api/CustomerApi.md#customerdeactivateauthorization) | **POST** /customer/deactivate_authorization | Deactivate Authorization
*CustomerApi* | [**customerFetch**](docs/Api/CustomerApi.md#customerfetch) | **GET** /customer/{code} | Fetch Customer
*CustomerApi* | [**customerList**](docs/Api/CustomerApi.md#customerlist) | **GET** /customer | List Customers
*CustomerApi* | [**customerRiskAction**](docs/Api/CustomerApi.md#customerriskaction) | **POST** /customer/set_risk_action | White/blacklist Customer
*CustomerApi* | [**customerUpdate**](docs/Api/CustomerApi.md#customerupdate) | **PUT** /customer/{code} | Update Customer
*CustomerApi* | [**customerValidate**](docs/Api/CustomerApi.md#customervalidate) | **POST** /customer/{code}/identification | Validate Customer
*DedicatedVirtualAccountApi* | [**dedicatedAccountAddSplit**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountaddsplit) | **POST** /dedicated_account/split | Split Dedicated Account Transaction
*DedicatedVirtualAccountApi* | [**dedicatedAccountAvailableProviders**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountavailableproviders) | **GET** /dedicated_account/available_providers | Fetch Bank Providers
*DedicatedVirtualAccountApi* | [**dedicatedAccountCreate**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountcreate) | **POST** /dedicated_account | Create Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountDeactivate**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountdeactivate) | **DELETE** /dedicated_account/{account_id} | Deactivate Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountFetch**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountfetch) | **GET** /dedicated_account/{account_id} | Fetch Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountList**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountlist) | **GET** /dedicated_account | List Dedicated Accounts
*DedicatedVirtualAccountApi* | [**dedicatedAccountRemoveSplit**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountremovesplit) | **DELETE** /dedicated_account/split | Remove Split from Dedicated Account
*DisputeApi* | [**disputeDownload**](docs/Api/DisputeApi.md#disputedownload) | **GET** /dispute/export | Export Disputes
*DisputeApi* | [**disputeEvidence**](docs/Api/DisputeApi.md#disputeevidence) | **POST** /dispute/{id}/evidence | Add Evidence
*DisputeApi* | [**disputeFetch**](docs/Api/DisputeApi.md#disputefetch) | **GET** /dispute/{id} | Fetch Dispute
*DisputeApi* | [**disputeList**](docs/Api/DisputeApi.md#disputelist) | **GET** /dispute | List Disputes
*DisputeApi* | [**disputeResolve**](docs/Api/DisputeApi.md#disputeresolve) | **PUT** /dispute/{id}/resolve | Resolve a Dispute
*DisputeApi* | [**disputeTransaction**](docs/Api/DisputeApi.md#disputetransaction) | **GET** /dispute/transaction/{id} | List Transaction Disputes
*DisputeApi* | [**disputeUpdate**](docs/Api/DisputeApi.md#disputeupdate) | **PUT** /dispute/{id} | Update Dispute
*DisputeApi* | [**disputeUploadUrl**](docs/Api/DisputeApi.md#disputeuploadurl) | **GET** /dispute/{id}/upload_url | Get Upload URL
*IntegrationApi* | [**integrationFetchPaymentSessionTimeout**](docs/Api/IntegrationApi.md#integrationfetchpaymentsessiontimeout) | **GET** /integration/payment_session_timeout | Fetch Payment Session Timeout
*IntegrationApi* | [**integrationUpdatePaymentSessionTimeout**](docs/Api/IntegrationApi.md#integrationupdatepaymentsessiontimeout) | **PUT** /integration/payment_session_timeout | Update Payment Session Timeout
*PageApi* | [**pageAddProducts**](docs/Api/PageApi.md#pageaddproducts) | **POST** /page/{id}/product | Add Products
*PageApi* | [**pageCheckSlugAvailability**](docs/Api/PageApi.md#pagecheckslugavailability) | **GET** /page/check_slug_availability/{slug} | Check Slug Availability
*PageApi* | [**pageCreate**](docs/Api/PageApi.md#pagecreate) | **POST** /page | Create Page
*PageApi* | [**pageFetch**](docs/Api/PageApi.md#pagefetch) | **GET** /page/{id} | Fetch Page
*PageApi* | [**pageList**](docs/Api/PageApi.md#pagelist) | **GET** /page | List Pages
*PageApi* | [**pageUpdate**](docs/Api/PageApi.md#pageupdate) | **PUT** /page/{id} | Update Page
*PaymentRequestApi* | [**paymentRequestArchive**](docs/Api/PaymentRequestApi.md#paymentrequestarchive) | **POST** /paymentrequest/archive/{id} | Archive Payment Request
*PaymentRequestApi* | [**paymentRequestCreate**](docs/Api/PaymentRequestApi.md#paymentrequestcreate) | **POST** /paymentrequest | Create Payment Request
*PaymentRequestApi* | [**paymentRequestFetch**](docs/Api/PaymentRequestApi.md#paymentrequestfetch) | **GET** /paymentrequest/{id} | Fetch Payment Request
*PaymentRequestApi* | [**paymentRequestFinalize**](docs/Api/PaymentRequestApi.md#paymentrequestfinalize) | **POST** /paymentrequest/finalize/{id} | Finalize Payment Request
*PaymentRequestApi* | [**paymentRequestList**](docs/Api/PaymentRequestApi.md#paymentrequestlist) | **GET** /paymentrequest | List Payment Request
*PaymentRequestApi* | [**paymentRequestNotify**](docs/Api/PaymentRequestApi.md#paymentrequestnotify) | **POST** /paymentrequest/notify/{id} | Send Notification
*PaymentRequestApi* | [**paymentRequestTotals**](docs/Api/PaymentRequestApi.md#paymentrequesttotals) | **GET** /paymentrequest/totals | Payment Request Total
*PaymentRequestApi* | [**paymentRequestUpdate**](docs/Api/PaymentRequestApi.md#paymentrequestupdate) | **PUT** /paymentrequest/{id} | Update Payment Request
*PaymentRequestApi* | [**paymentRequestVerify**](docs/Api/PaymentRequestApi.md#paymentrequestverify) | **GET** /paymentrequest/verify/{id} | Verify Payment Request
*PlanApi* | [**planCreate**](docs/Api/PlanApi.md#plancreate) | **POST** /plan | Create Plan
*PlanApi* | [**planFetch**](docs/Api/PlanApi.md#planfetch) | **GET** /plan/{code} | Fetch Plan
*PlanApi* | [**planList**](docs/Api/PlanApi.md#planlist) | **GET** /plan | List Plans
*PlanApi* | [**planUpdate**](docs/Api/PlanApi.md#planupdate) | **PUT** /plan/{code} | Update Plan
*ProductApi* | [**productCreate**](docs/Api/ProductApi.md#productcreate) | **POST** /product | Create Product
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **DELETE** /product/{id} | Delete Product
*ProductApi* | [**productFetch**](docs/Api/ProductApi.md#productfetch) | **GET** /product/{id} | Fetch Product
*ProductApi* | [**productList**](docs/Api/ProductApi.md#productlist) | **GET** /product | List Products
*ProductApi* | [**productUpdate**](docs/Api/ProductApi.md#productupdate) | **PUT** /product/{id} | Update product
*RefundApi* | [**refundCreate**](docs/Api/RefundApi.md#refundcreate) | **POST** /refund | Create Refund
*RefundApi* | [**refundFetch**](docs/Api/RefundApi.md#refundfetch) | **GET** /refund/{id} | Fetch Refund
*RefundApi* | [**refundList**](docs/Api/RefundApi.md#refundlist) | **GET** /refund | List Refunds
*SettlementApi* | [**settlementsFetch**](docs/Api/SettlementApi.md#settlementsfetch) | **GET** /settlement | Fetch Settlements
*SettlementApi* | [**settlementsTransaction**](docs/Api/SettlementApi.md#settlementstransaction) | **GET** /settlement/{id}/transaction | Settlement Transactions
*SplitApi* | [**splitAddSubaccount**](docs/Api/SplitApi.md#splitaddsubaccount) | **POST** /split/{id}/subaccount/add | Add Subaccount to Split
*SplitApi* | [**splitCreate**](docs/Api/SplitApi.md#splitcreate) | **POST** /split | Create Split
*SplitApi* | [**splitFetch**](docs/Api/SplitApi.md#splitfetch) | **GET** /split/{id} | Fetch Split
*SplitApi* | [**splitList**](docs/Api/SplitApi.md#splitlist) | **GET** /split | List/Search Splits
*SplitApi* | [**splitRemoveSubaccount**](docs/Api/SplitApi.md#splitremovesubaccount) | **POST** /split/{id}/subaccount/remove | Remove Subaccount from split
*SplitApi* | [**splitUpdate**](docs/Api/SplitApi.md#splitupdate) | **PUT** /split/{id} | Update Split
*SubaccountApi* | [**subaccountCreate**](docs/Api/SubaccountApi.md#subaccountcreate) | **POST** /subaccount | Create Subaccount
*SubaccountApi* | [**subaccountFetch**](docs/Api/SubaccountApi.md#subaccountfetch) | **GET** /subaccount/{code} | Fetch Subaccount
*SubaccountApi* | [**subaccountList**](docs/Api/SubaccountApi.md#subaccountlist) | **GET** /subaccount | List Subaccounts
*SubaccountApi* | [**subaccountUpdate**](docs/Api/SubaccountApi.md#subaccountupdate) | **PUT** /subaccount/{code} | Update Subaccount
*SubscriptionApi* | [**subscriptionCreate**](docs/Api/SubscriptionApi.md#subscriptioncreate) | **POST** /subscription | Create Subscription
*SubscriptionApi* | [**subscriptionDisable**](docs/Api/SubscriptionApi.md#subscriptiondisable) | **POST** /subscription/disable | Disable Subscription
*SubscriptionApi* | [**subscriptionEnable**](docs/Api/SubscriptionApi.md#subscriptionenable) | **POST** /subscription/enable | Enable Subscription
*SubscriptionApi* | [**subscriptionFetch**](docs/Api/SubscriptionApi.md#subscriptionfetch) | **GET** /subscription/{code} | Fetch Subscription
*SubscriptionApi* | [**subscriptionList**](docs/Api/SubscriptionApi.md#subscriptionlist) | **GET** /subscription | List Subscriptions
*SubscriptionApi* | [**subscriptionManageEmail**](docs/Api/SubscriptionApi.md#subscriptionmanageemail) | **POST** /subscription/{code}/manage/email | Send Update Subscription Link
*SubscriptionApi* | [**subscriptionManageLink**](docs/Api/SubscriptionApi.md#subscriptionmanagelink) | **GET** /subscription/{code}/manage/link | Generate Update Subscription Link
*TransactionApi* | [**transactionChargeAuthorization**](docs/Api/TransactionApi.md#transactionchargeauthorization) | **POST** /transaction/charge_authorization | Charge Authorization
*TransactionApi* | [**transactionCheckAuthorization**](docs/Api/TransactionApi.md#transactioncheckauthorization) | **POST** /transaction/check_authorization | Check Authorization
*TransactionApi* | [**transactionDownload**](docs/Api/TransactionApi.md#transactiondownload) | **GET** /transaction/export | Export Transactions
*TransactionApi* | [**transactionEvent**](docs/Api/TransactionApi.md#transactionevent) | **GET** /transaction/{id}/event | Get Transaction Event
*TransactionApi* | [**transactionFetch**](docs/Api/TransactionApi.md#transactionfetch) | **GET** /transaction/{id} | Fetch Transaction
*TransactionApi* | [**transactionInitialize**](docs/Api/TransactionApi.md#transactioninitialize) | **POST** /transaction/initialize | Initialize Transaction
*TransactionApi* | [**transactionList**](docs/Api/TransactionApi.md#transactionlist) | **GET** /transaction | List Transactions
*TransactionApi* | [**transactionPartialDebit**](docs/Api/TransactionApi.md#transactionpartialdebit) | **POST** /transaction/partial_debit | Partial Debit
*TransactionApi* | [**transactionSession**](docs/Api/TransactionApi.md#transactionsession) | **GET** /transaction/{id}/session | Get Transaction Session
*TransactionApi* | [**transactionTimeline**](docs/Api/TransactionApi.md#transactiontimeline) | **GET** /transaction/timeline/{id_or_reference} | Fetch Transaction Timeline
*TransactionApi* | [**transactionTotals**](docs/Api/TransactionApi.md#transactiontotals) | **GET** /transaction/totals | Transaction Totals
*TransactionApi* | [**transactionVerify**](docs/Api/TransactionApi.md#transactionverify) | **GET** /transaction/verify/{reference} | Verify Transaction
*TransferApi* | [**transferBulk**](docs/Api/TransferApi.md#transferbulk) | **POST** /transfer/bulk | Initiate Bulk Transfer
*TransferApi* | [**transferDisableOtp**](docs/Api/TransferApi.md#transferdisableotp) | **POST** /transfer/disable_otp | Disable OTP requirement for Transfers
*TransferApi* | [**transferDisableOtpFinalize**](docs/Api/TransferApi.md#transferdisableotpfinalize) | **POST** /transfer/disable_otp_finalize | Finalize Disabling of OTP requirement for Transfers
*TransferApi* | [**transferDownload**](docs/Api/TransferApi.md#transferdownload) | **GET** /transfer/export | Export Transfers
*TransferApi* | [**transferEnableOtp**](docs/Api/TransferApi.md#transferenableotp) | **POST** /transfer/enable_otp | Enable OTP requirement for Transfers
*TransferApi* | [**transferFetch**](docs/Api/TransferApi.md#transferfetch) | **GET** /transfer/{code} | Fetch Transfer
*TransferApi* | [**transferFinalize**](docs/Api/TransferApi.md#transferfinalize) | **POST** /transfer/finalize_transfer | Finalize Transfer
*TransferApi* | [**transferInitiate**](docs/Api/TransferApi.md#transferinitiate) | **POST** /transfer | Initiate Transfer
*TransferApi* | [**transferList**](docs/Api/TransferApi.md#transferlist) | **GET** /transfer | List Transfers
*TransferApi* | [**transferResendOtp**](docs/Api/TransferApi.md#transferresendotp) | **POST** /transfer/resend_otp | Resend OTP for Transfer
*TransferApi* | [**transferVerify**](docs/Api/TransferApi.md#transferverify) | **GET** /transfer/verify/{reference} | Verify Transfer
*TransferRecipientApi* | [**transferrecipientBulk**](docs/Api/TransferRecipientApi.md#transferrecipientbulk) | **POST** /transferrecipient/bulk | Bulk Create Transfer Recipient
*TransferRecipientApi* | [**transferrecipientCreate**](docs/Api/TransferRecipientApi.md#transferrecipientcreate) | **POST** /transferrecipient | Create Transfer Recipient
*TransferRecipientApi* | [**transferrecipientDelete**](docs/Api/TransferRecipientApi.md#transferrecipientdelete) | **DELETE** /transferrecipient/{code} | Delete Transfer Recipient
*TransferRecipientApi* | [**transferrecipientFetch**](docs/Api/TransferRecipientApi.md#transferrecipientfetch) | **GET** /transferrecipient/{code} | Fetch Transfer recipient
*TransferRecipientApi* | [**transferrecipientList**](docs/Api/TransferRecipientApi.md#transferrecipientlist) | **GET** /transferrecipient | List Transfer Recipients
*TransferRecipientApi* | [**transferrecipientUpdate**](docs/Api/TransferRecipientApi.md#transferrecipientupdate) | **PUT** /transferrecipient/{code} | Update Transfer recipient
*VerificationApi* | [**verificationAvs**](docs/Api/VerificationApi.md#verificationavs) | **GET** /address_verification/states | List States (AVS)
*VerificationApi* | [**verificationFetchBanks**](docs/Api/VerificationApi.md#verificationfetchbanks) | **GET** /bank | Fetch Banks
*VerificationApi* | [**verificationListCountries**](docs/Api/VerificationApi.md#verificationlistcountries) | **GET** /country | List Countries
*VerificationApi* | [**verificationResolveAccountNumber**](docs/Api/VerificationApi.md#verificationresolveaccountnumber) | **GET** /bank/resolve | Resolve Account Number
*VerificationApi* | [**verificationResolveCardBin**](docs/Api/VerificationApi.md#verificationresolvecardbin) | **GET** /decision/bin/{bin} | Resolve Card BIN

## Models

- [Accepted](docs/Model/Accepted.md)
- [Bank](docs/Model/Bank.md)
- [BulkChargeInitiate](docs/Model/BulkChargeInitiate.md)
- [ChargeCreateRequest](docs/Model/ChargeCreateRequest.md)
- [ChargeSubmitAddress](docs/Model/ChargeSubmitAddress.md)
- [ChargeSubmitBirthday](docs/Model/ChargeSubmitBirthday.md)
- [ChargeSubmitOTP](docs/Model/ChargeSubmitOTP.md)
- [ChargeSubmitPhone](docs/Model/ChargeSubmitPhone.md)
- [ChargeSubmitPin](docs/Model/ChargeSubmitPin.md)
- [CustomerCreate](docs/Model/CustomerCreate.md)
- [CustomerDeactivateAuthorization](docs/Model/CustomerDeactivateAuthorization.md)
- [CustomerRiskAction](docs/Model/CustomerRiskAction.md)
- [CustomerUpdate](docs/Model/CustomerUpdate.md)
- [CustomerValidate](docs/Model/CustomerValidate.md)
- [CustomerValidation](docs/Model/CustomerValidation.md)
- [DedicatedVirtualAccountCreate](docs/Model/DedicatedVirtualAccountCreate.md)
- [DedicatedVirtualAccountSplit](docs/Model/DedicatedVirtualAccountSplit.md)
- [DisputeEvidence](docs/Model/DisputeEvidence.md)
- [DisputeResolve](docs/Model/DisputeResolve.md)
- [DisputeUpdate](docs/Model/DisputeUpdate.md)
- [EFT](docs/Model/EFT.md)
- [Error](docs/Model/Error.md)
- [MobileMoney](docs/Model/MobileMoney.md)
- [PageCreate](docs/Model/PageCreate.md)
- [PageProduct](docs/Model/PageProduct.md)
- [PageUpdate](docs/Model/PageUpdate.md)
- [PaymentRequestCreate](docs/Model/PaymentRequestCreate.md)
- [PaymentRequestUpdate](docs/Model/PaymentRequestUpdate.md)
- [PlanCreate](docs/Model/PlanCreate.md)
- [PlanUpdate](docs/Model/PlanUpdate.md)
- [ProductCreate](docs/Model/ProductCreate.md)
- [ProductUpdate](docs/Model/ProductUpdate.md)
- [RefundCreate](docs/Model/RefundCreate.md)
- [Response](docs/Model/Response.md)
- [SplitCreate](docs/Model/SplitCreate.md)
- [SplitSubaccounts](docs/Model/SplitSubaccounts.md)
- [SplitUpdate](docs/Model/SplitUpdate.md)
- [SubaccountCreate](docs/Model/SubaccountCreate.md)
- [SubaccountUpdate](docs/Model/SubaccountUpdate.md)
- [SubscriptionCreate](docs/Model/SubscriptionCreate.md)
- [SubscriptionToggle](docs/Model/SubscriptionToggle.md)
- [TransactionChargeAuthorization](docs/Model/TransactionChargeAuthorization.md)
- [TransactionCheckAuthorization](docs/Model/TransactionCheckAuthorization.md)
- [TransactionInitialize](docs/Model/TransactionInitialize.md)
- [TransactionPartialDebit](docs/Model/TransactionPartialDebit.md)
- [TransferBulk](docs/Model/TransferBulk.md)
- [TransferFinalize](docs/Model/TransferFinalize.md)
- [TransferFinalizeDisableOTP](docs/Model/TransferFinalizeDisableOTP.md)
- [TransferInitiate](docs/Model/TransferInitiate.md)
- [TransferRecipientBulk](docs/Model/TransferRecipientBulk.md)
- [TransferRecipientCreate](docs/Model/TransferRecipientCreate.md)
- [TransferRecipientUpdate](docs/Model/TransferRecipientUpdate.md)
- [TransferResendOTP](docs/Model/TransferResendOTP.md)
- [USSD](docs/Model/USSD.md)
- [VerificationBVNMatch](docs/Model/VerificationBVNMatch.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

techsupport@paystack.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `0.1.0`
    - Generator version: `7.18.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
