# Paystack

The OpenAPI specification of the Paystack API that merchants and developers can harness to build financial solutions in Africa.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/alexasomba/paystack-openapi.git"
    }
  ],
  "require": {
    "alexasomba/paystack-openapi": "*@dev"
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


$apiInstance = new Alexasomba\\Paystack\Api\ApplePayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$use_cursor = true; // bool | A flag to indicate if cursor based pagination should be used
$next = 'next_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the next set of data
$previous = 'previous_example'; // string | An alphanumeric value returned for every cursor based retrieval, used to retrieve the previous set of data

try {
    $result = $apiInstance->applePayListDomain($use_cursor, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayApi->applePayListDomain: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.paystack.co*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplePayApi* | [**applePayListDomain**](docs/Api/ApplePayApi.md#applepaylistdomain) | **GET** /apple-pay/domain | List Domains
*ApplePayApi* | [**applePayRegisterDomain**](docs/Api/ApplePayApi.md#applepayregisterdomain) | **POST** /apple-pay/domain | Register Domain
*ApplePayApi* | [**applePayUnregisterDomain**](docs/Api/ApplePayApi.md#applepayunregisterdomain) | **DELETE** /apple-pay/domain | Unregister Domain
*BalanceApi* | [**balanceFetch**](docs/Api/BalanceApi.md#balancefetch) | **GET** /balance | Fetch Balance
*BalanceApi* | [**balanceLedger**](docs/Api/BalanceApi.md#balanceledger) | **GET** /balance/ledger | Balance Ledger
*BankApi* | [**bankList**](docs/Api/BankApi.md#banklist) | **GET** /bank | List Banks
*BankApi* | [**bankResolveAccountNumber**](docs/Api/BankApi.md#bankresolveaccountnumber) | **GET** /bank/resolve | Resolve Account Number
*BankApi* | [**bankValidateAccountNumber**](docs/Api/BankApi.md#bankvalidateaccountnumber) | **POST** /bank/validate | Validate Bank Account
*BulkChargeApi* | [**bulkChargeCharges**](docs/Api/BulkChargeApi.md#bulkchargecharges) | **GET** /bulkcharge/{code}/charges | List Charges in a Batch
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
*CustomerApi* | [**customerDeactivateAuthorization**](docs/Api/CustomerApi.md#customerdeactivateauthorization) | **POST** /customer/authorization/deactivate | Deactivate Authorization
*CustomerApi* | [**customerDirectDebitActivationCharge**](docs/Api/CustomerApi.md#customerdirectdebitactivationcharge) | **PUT** /customer/{id}/directdebit-activation-charge | Direct Debit Activation Charge
*CustomerApi* | [**customerFetch**](docs/Api/CustomerApi.md#customerfetch) | **GET** /customer/{code} | Fetch Customer
*CustomerApi* | [**customerFetchMandateAuthorizations**](docs/Api/CustomerApi.md#customerfetchmandateauthorizations) | **GET** /customer/{id}/directdebit-mandate-authorizations | Fetch Mandate Authorizations
*CustomerApi* | [**customerInitializeAuthorization**](docs/Api/CustomerApi.md#customerinitializeauthorization) | **POST** /customer/authorization/initialize | Initialize Authorization
*CustomerApi* | [**customerInitializeDirectDebit**](docs/Api/CustomerApi.md#customerinitializedirectdebit) | **POST** /customer/{id}/initialize-direct-debit | Initialize Direct Debit
*CustomerApi* | [**customerList**](docs/Api/CustomerApi.md#customerlist) | **GET** /customer | List Customers
*CustomerApi* | [**customerRiskAction**](docs/Api/CustomerApi.md#customerriskaction) | **POST** /customer/set_risk_action | Set Risk Action
*CustomerApi* | [**customerUpdate**](docs/Api/CustomerApi.md#customerupdate) | **PUT** /customer/{code} | Update Customer
*CustomerApi* | [**customerValidate**](docs/Api/CustomerApi.md#customervalidate) | **POST** /customer/{code}/identification | Validate Customer
*CustomerApi* | [**customerVerifyAuthorization**](docs/Api/CustomerApi.md#customerverifyauthorization) | **GET** /customer/authorization/verify/{reference} | Verify Authorization
*DedicatedVirtualAccountApi* | [**dedicatedAccountAddSplit**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountaddsplit) | **POST** /dedicated_account/split | Split Dedicated Account Transaction
*DedicatedVirtualAccountApi* | [**dedicatedAccountAssign**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountassign) | **POST** /dedicated_account/assign | Assign Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountAvailableProviders**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountavailableproviders) | **GET** /dedicated_account/available_providers | Fetch Bank Providers
*DedicatedVirtualAccountApi* | [**dedicatedAccountCreate**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountcreate) | **POST** /dedicated_account | Create Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountDeactivate**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountdeactivate) | **DELETE** /dedicated_account/{id} | Deactivate Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountFetch**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountfetch) | **GET** /dedicated_account/{id} | Fetch Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountList**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountlist) | **GET** /dedicated_account | List Dedicated Accounts
*DedicatedVirtualAccountApi* | [**dedicatedAccountRemoveSplit**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountremovesplit) | **DELETE** /dedicated_account/split | Remove Split from Dedicated Account
*DedicatedVirtualAccountApi* | [**dedicatedAccountRequery**](docs/Api/DedicatedVirtualAccountApi.md#dedicatedaccountrequery) | **GET** /dedicated_account/requery | Requery Dedicated Account
*DirectDebitApi* | [**directdebitListMandateAuthorizations**](docs/Api/DirectDebitApi.md#directdebitlistmandateauthorizations) | **GET** /directdebit/mandate-authorizations | List Mandate Authorizations
*DirectDebitApi* | [**directdebitTriggerActivationCharge**](docs/Api/DirectDebitApi.md#directdebittriggeractivationcharge) | **PUT** /directdebit/activation-charge | Trigger Activation Charge
*DisputeApi* | [**disputeDownload**](docs/Api/DisputeApi.md#disputedownload) | **GET** /dispute/export | Export Disputes
*DisputeApi* | [**disputeEvidence**](docs/Api/DisputeApi.md#disputeevidence) | **POST** /dispute/{id}/evidence | Add Evidence
*DisputeApi* | [**disputeFetch**](docs/Api/DisputeApi.md#disputefetch) | **GET** /dispute/{id} | Fetch Dispute
*DisputeApi* | [**disputeList**](docs/Api/DisputeApi.md#disputelist) | **GET** /dispute | List Disputes
*DisputeApi* | [**disputeResolve**](docs/Api/DisputeApi.md#disputeresolve) | **PUT** /dispute/{id}/resolve | Resolve Dispute
*DisputeApi* | [**disputeTransaction**](docs/Api/DisputeApi.md#disputetransaction) | **GET** /dispute/transaction/{id} | List Transaction Disputes
*DisputeApi* | [**disputeUpdate**](docs/Api/DisputeApi.md#disputeupdate) | **PUT** /dispute/{id} | Update Dispute
*DisputeApi* | [**disputeUploadUrl**](docs/Api/DisputeApi.md#disputeuploadurl) | **GET** /dispute/{id}/upload_url | Fetch Upload URL
*IntegrationApi* | [**integrationFetchPaymentSessionTimeout**](docs/Api/IntegrationApi.md#integrationfetchpaymentsessiontimeout) | **GET** /integration/payment_session_timeout | Fetch Payment Session Timeout
*IntegrationApi* | [**integrationUpdatePaymentSessionTimeout**](docs/Api/IntegrationApi.md#integrationupdatepaymentsessiontimeout) | **PUT** /integration/payment_session_timeout | Update Payment Session Timeout
*MiscellaneousApi* | [**miscellaneousAvs**](docs/Api/MiscellaneousApi.md#miscellaneousavs) | **GET** /address_verification/states | List States (AVS)
*MiscellaneousApi* | [**miscellaneousListCountries**](docs/Api/MiscellaneousApi.md#miscellaneouslistcountries) | **GET** /country | List Countries
*MiscellaneousApi* | [**miscellaneousResolveCardBin**](docs/Api/MiscellaneousApi.md#miscellaneousresolvecardbin) | **GET** /decision/bin/{bin} | Resolve Card BIN
*OrderApi* | [**orderCreate**](docs/Api/OrderApi.md#ordercreate) | **POST** /order | Create Order
*OrderApi* | [**orderFetch**](docs/Api/OrderApi.md#orderfetch) | **GET** /order/{id} | Fetch Order
*OrderApi* | [**orderList**](docs/Api/OrderApi.md#orderlist) | **GET** /order | List Orders
*OrderApi* | [**orderProduct**](docs/Api/OrderApi.md#orderproduct) | **GET** /order/product/{id} | Fetch Product Orders
*OrderApi* | [**orderValidate**](docs/Api/OrderApi.md#ordervalidate) | **GET** /order/{code}/validate | Validate Order
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
*RefundApi* | [**refundRetry**](docs/Api/RefundApi.md#refundretry) | **POST** /refund/retry_with_customer_details/{id} | Retry Refund
*SettlementApi* | [**settlementsFetch**](docs/Api/SettlementApi.md#settlementsfetch) | **GET** /settlement | List Settlements
*SettlementApi* | [**settlementsTransaction**](docs/Api/SettlementApi.md#settlementstransaction) | **GET** /settlement/{id}/transactions | Fetch Settlement Transactions
*SplitApi* | [**splitAddSubaccount**](docs/Api/SplitApi.md#splitaddsubaccount) | **POST** /split/{id}/subaccount/add | Add Subaccount to Split
*SplitApi* | [**splitCreate**](docs/Api/SplitApi.md#splitcreate) | **POST** /split | Create Split
*SplitApi* | [**splitFetch**](docs/Api/SplitApi.md#splitfetch) | **GET** /split/{id} | Fetch Split
*SplitApi* | [**splitList**](docs/Api/SplitApi.md#splitlist) | **GET** /split | List Splits
*SplitApi* | [**splitRemoveSubaccount**](docs/Api/SplitApi.md#splitremovesubaccount) | **POST** /split/{id}/subaccount/remove | Remove Subaccount from split
*SplitApi* | [**splitUpdate**](docs/Api/SplitApi.md#splitupdate) | **PUT** /split/{id} | Update Split
*StorefrontApi* | [**storefrontAddProducts**](docs/Api/StorefrontApi.md#storefrontaddproducts) | **POST** /storefront/{id}/product | Add Products to Storefront
*StorefrontApi* | [**storefrontCreate**](docs/Api/StorefrontApi.md#storefrontcreate) | **POST** /storefront | Create Storefront
*StorefrontApi* | [**storefrontDelete**](docs/Api/StorefrontApi.md#storefrontdelete) | **DELETE** /storefront/{id} | Delete Storefront
*StorefrontApi* | [**storefrontDuplicate**](docs/Api/StorefrontApi.md#storefrontduplicate) | **POST** /storefront/{id}/duplicate | Duplicate Storefront
*StorefrontApi* | [**storefrontFetch**](docs/Api/StorefrontApi.md#storefrontfetch) | **GET** /storefront/{id} | Fetch Storefront
*StorefrontApi* | [**storefrontFetchOrders**](docs/Api/StorefrontApi.md#storefrontfetchorders) | **GET** /storefront/{id}/order | Fetch Storefront Orders
*StorefrontApi* | [**storefrontList**](docs/Api/StorefrontApi.md#storefrontlist) | **GET** /storefront | List Storefronts
*StorefrontApi* | [**storefrontListProducts**](docs/Api/StorefrontApi.md#storefrontlistproducts) | **GET** /storefront/{id}/product | List Storefront Products
*StorefrontApi* | [**storefrontPublish**](docs/Api/StorefrontApi.md#storefrontpublish) | **POST** /storefront/{id}/publish | Publish Storefront
*StorefrontApi* | [**storefrontUpdate**](docs/Api/StorefrontApi.md#storefrontupdate) | **PUT** /storefront/{id} | Update Storefront
*StorefrontApi* | [**storefrontVerifySlug**](docs/Api/StorefrontApi.md#storefrontverifyslug) | **GET** /storefront/verify/{slug} | Verify Storefront Slug
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
*TerminalApi* | [**terminalCommission**](docs/Api/TerminalApi.md#terminalcommission) | **POST** /terminal/commission_device | Commission Terminal
*TerminalApi* | [**terminalDecommission**](docs/Api/TerminalApi.md#terminaldecommission) | **POST** /terminal/decommission_device | Decommission Terminal
*TerminalApi* | [**terminalFetch**](docs/Api/TerminalApi.md#terminalfetch) | **GET** /terminal/{terminal_id} | Fetch Terminal
*TerminalApi* | [**terminalFetchEventStatus**](docs/Api/TerminalApi.md#terminalfetcheventstatus) | **GET** /terminal/{terminal_id}/event/{event_id} | Fetch Event Status
*TerminalApi* | [**terminalFetchTerminalStatus**](docs/Api/TerminalApi.md#terminalfetchterminalstatus) | **GET** /terminal/{terminal_id}/presence | Fetch Terminal Status
*TerminalApi* | [**terminalList**](docs/Api/TerminalApi.md#terminallist) | **GET** /terminal | List Terminals
*TerminalApi* | [**terminalSendEvent**](docs/Api/TerminalApi.md#terminalsendevent) | **POST** /terminal/{id}/event | Send Event
*TerminalApi* | [**terminalUpdate**](docs/Api/TerminalApi.md#terminalupdate) | **PUT** /terminal/{terminal_id} | Update Terminal
*TransactionApi* | [**transactionChargeAuthorization**](docs/Api/TransactionApi.md#transactionchargeauthorization) | **POST** /transaction/charge_authorization | Charge Authorization
*TransactionApi* | [**transactionCheckAuthorization**](docs/Api/TransactionApi.md#transactioncheckauthorization) | **POST** /transaction/check_authorization | Check Authorization
*TransactionApi* | [**transactionEvent**](docs/Api/TransactionApi.md#transactionevent) | **GET** /transaction/{id}/event | Get Transaction Event
*TransactionApi* | [**transactionExport**](docs/Api/TransactionApi.md#transactionexport) | **GET** /transaction/export | Export Transactions
*TransactionApi* | [**transactionFetch**](docs/Api/TransactionApi.md#transactionfetch) | **GET** /transaction/{id} | Fetch Transaction
*TransactionApi* | [**transactionInitialize**](docs/Api/TransactionApi.md#transactioninitialize) | **POST** /transaction/initialize | Initialize Transaction
*TransactionApi* | [**transactionList**](docs/Api/TransactionApi.md#transactionlist) | **GET** /transaction | List Transactions
*TransactionApi* | [**transactionPartialDebit**](docs/Api/TransactionApi.md#transactionpartialdebit) | **POST** /transaction/partial_debit | Partial Debit
*TransactionApi* | [**transactionSession**](docs/Api/TransactionApi.md#transactionsession) | **GET** /transaction/{id}/session | Get Transaction Session
*TransactionApi* | [**transactionTimeline**](docs/Api/TransactionApi.md#transactiontimeline) | **GET** /transaction/timeline/{id} | Fetch Transaction Timeline
*TransactionApi* | [**transactionTotals**](docs/Api/TransactionApi.md#transactiontotals) | **GET** /transaction/totals | Transaction Totals
*TransactionApi* | [**transactionVerify**](docs/Api/TransactionApi.md#transactionverify) | **GET** /transaction/verify/{reference} | Verify Transaction
*TransferApi* | [**transferBulk**](docs/Api/TransferApi.md#transferbulk) | **POST** /transfer/bulk | Initiate Bulk Transfer
*TransferApi* | [**transferDisableOtp**](docs/Api/TransferApi.md#transferdisableotp) | **POST** /transfer/disable_otp | Disable OTP for Transfers
*TransferApi* | [**transferDisableOtpFinalize**](docs/Api/TransferApi.md#transferdisableotpfinalize) | **POST** /transfer/disable_otp_finalize | Finalize Disabling OTP for Transfers
*TransferApi* | [**transferEnableOtp**](docs/Api/TransferApi.md#transferenableotp) | **POST** /transfer/enable_otp | Enable OTP requirement for Transfers
*TransferApi* | [**transferExportTransfer**](docs/Api/TransferApi.md#transferexporttransfer) | **GET** /transfer/export | Export Transfers
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
*TransferRecipientApi* | [**transferrecipientUpdate**](docs/Api/TransferRecipientApi.md#transferrecipientupdate) | **PUT** /transferrecipient/{code} | Update Transfer Recipient
*VirtualTerminalApi* | [**virtualTerminalAddSplitCode**](docs/Api/VirtualTerminalApi.md#virtualterminaladdsplitcode) | **PUT** /virtual_terminal/{code}/split_code | Add Split Code to Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalCreate**](docs/Api/VirtualTerminalApi.md#virtualterminalcreate) | **POST** /virtual_terminal | Create Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalDeactivate**](docs/Api/VirtualTerminalApi.md#virtualterminaldeactivate) | **PUT** /virtual_terminal/{code}/deactivate | Deactivate Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalDeleteSplitCode**](docs/Api/VirtualTerminalApi.md#virtualterminaldeletesplitcode) | **DELETE** /virtual_terminal/{code}/split_code | Remove Split Code from Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalDestinationAssign**](docs/Api/VirtualTerminalApi.md#virtualterminaldestinationassign) | **POST** /virtual_terminal/{code}/destination/assign | Assign Destination to Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalDestinationUnassign**](docs/Api/VirtualTerminalApi.md#virtualterminaldestinationunassign) | **POST** /virtual_terminal/{code}/destination/unassign | Unassign Destination from Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalFetch**](docs/Api/VirtualTerminalApi.md#virtualterminalfetch) | **GET** /virtual_terminal/{code} | Fetch Virtual Terminal
*VirtualTerminalApi* | [**virtualTerminalList**](docs/Api/VirtualTerminalApi.md#virtualterminallist) | **GET** /virtual_terminal | List Virtual Terminals
*VirtualTerminalApi* | [**virtualTerminalUpdate**](docs/Api/VirtualTerminalApi.md#virtualterminalupdate) | **PUT** /virtual_terminal/{code} | Update Virtual Terminal

## Models

- [ApplePayCreateOkModel](docs/Model/ApplePayCreateOkModel.md)
- [ApplePayParam](docs/Model/ApplePayParam.md)
- [BalanceCheckResponse](docs/Model/BalanceCheckResponse.md)
- [BalanceCheckResponseArray](docs/Model/BalanceCheckResponseArray.md)
- [BalanceFetchLedgerResponse](docs/Model/BalanceFetchLedgerResponse.md)
- [BalanceFetchLedgerResponseArray](docs/Model/BalanceFetchLedgerResponseArray.md)
- [Bank](docs/Model/Bank.md)
- [BankValidateRequest](docs/Model/BankValidateRequest.md)
- [BulkChargeFetchBulkBatchChargesResponse](docs/Model/BulkChargeFetchBulkBatchChargesResponse.md)
- [BulkChargeFetchBulkBatchChargesResponseArray](docs/Model/BulkChargeFetchBulkBatchChargesResponseArray.md)
- [BulkChargeFetchBulkBatchChargesResponseArrayCustomer](docs/Model/BulkChargeFetchBulkBatchChargesResponseArrayCustomer.md)
- [BulkChargeFetchBulkBatchChargesResponseArrayCustomerMetadata](docs/Model/BulkChargeFetchBulkBatchChargesResponseArrayCustomerMetadata.md)
- [BulkChargeFetchBulkBatchChargesResponseMeta](docs/Model/BulkChargeFetchBulkBatchChargesResponseMeta.md)
- [BulkChargeFetchResponse](docs/Model/BulkChargeFetchResponse.md)
- [BulkChargeInitiate](docs/Model/BulkChargeInitiate.md)
- [BulkChargeInitiateResponse](docs/Model/BulkChargeInitiateResponse.md)
- [BulkChargeInitiateResponseData](docs/Model/BulkChargeInitiateResponseData.md)
- [BulkChargeListResponse](docs/Model/BulkChargeListResponse.md)
- [BulkChargeListResponseArray](docs/Model/BulkChargeListResponseArray.md)
- [BulkChargeListResponseMeta](docs/Model/BulkChargeListResponseMeta.md)
- [BulkChargeListResponseMetaPerPage](docs/Model/BulkChargeListResponseMetaPerPage.md)
- [BulkChargePauseResponse](docs/Model/BulkChargePauseResponse.md)
- [BulkChargeResumeResponse](docs/Model/BulkChargeResumeResponse.md)
- [ChargeAuthorizationResponse](docs/Model/ChargeAuthorizationResponse.md)
- [ChargeAuthorizationResponseData](docs/Model/ChargeAuthorizationResponseData.md)
- [ChargeAuthorizationResponseDataAuthorization](docs/Model/ChargeAuthorizationResponseDataAuthorization.md)
- [ChargeAuthorizationResponseDataCustomer](docs/Model/ChargeAuthorizationResponseDataCustomer.md)
- [ChargeAuthorizationResponseDataCustomerMetadata](docs/Model/ChargeAuthorizationResponseDataCustomerMetadata.md)
- [ChargeAuthorizationResponseDataLog](docs/Model/ChargeAuthorizationResponseDataLog.md)
- [ChargeAuthorizationResponseDataLogHistoryInner](docs/Model/ChargeAuthorizationResponseDataLogHistoryInner.md)
- [ChargeCheckPendingResponse](docs/Model/ChargeCheckPendingResponse.md)
- [ChargeCreate](docs/Model/ChargeCreate.md)
- [ChargeCreateRequest](docs/Model/ChargeCreateRequest.md)
- [ChargeCreateResponse](docs/Model/ChargeCreateResponse.md)
- [ChargeCreateResponseData](docs/Model/ChargeCreateResponseData.md)
- [ChargeSubmitAddress](docs/Model/ChargeSubmitAddress.md)
- [ChargeSubmitBirthday](docs/Model/ChargeSubmitBirthday.md)
- [ChargeSubmitBirthdayResponse](docs/Model/ChargeSubmitBirthdayResponse.md)
- [ChargeSubmitBirthdayResponseData](docs/Model/ChargeSubmitBirthdayResponseData.md)
- [ChargeSubmitOTP](docs/Model/ChargeSubmitOTP.md)
- [ChargeSubmitOtpResponse](docs/Model/ChargeSubmitOtpResponse.md)
- [ChargeSubmitPhone](docs/Model/ChargeSubmitPhone.md)
- [ChargeSubmitPhoneResponse](docs/Model/ChargeSubmitPhoneResponse.md)
- [ChargeSubmitPhoneResponseData](docs/Model/ChargeSubmitPhoneResponseData.md)
- [ChargeSubmitPin](docs/Model/ChargeSubmitPin.md)
- [ChargeSubmitPinResponse](docs/Model/ChargeSubmitPinResponse.md)
- [ChargeSubmitPinResponseData](docs/Model/ChargeSubmitPinResponseData.md)
- [ChargeSubmitPinResponseDataAuthorization](docs/Model/ChargeSubmitPinResponseDataAuthorization.md)
- [ChargeSubmitPinResponseDataCustomer](docs/Model/ChargeSubmitPinResponseDataCustomer.md)
- [ControlPanelFetchPaymentSessionTimeoutResponse](docs/Model/ControlPanelFetchPaymentSessionTimeoutResponse.md)
- [ControlPanelFetchPaymentSessionTimeoutResponseData](docs/Model/ControlPanelFetchPaymentSessionTimeoutResponseData.md)
- [ControlPanelUpdatePaymentSessionTimeoutResponse](docs/Model/ControlPanelUpdatePaymentSessionTimeoutResponse.md)
- [Currency](docs/Model/Currency.md)
- [CustomerAuthorizationInitializeAccount](docs/Model/CustomerAuthorizationInitializeAccount.md)
- [CustomerAuthorizationInitializeAddress](docs/Model/CustomerAuthorizationInitializeAddress.md)
- [CustomerAuthorizationInitializeRequest](docs/Model/CustomerAuthorizationInitializeRequest.md)
- [CustomerAuthorizationInitializeResponse](docs/Model/CustomerAuthorizationInitializeResponse.md)
- [CustomerAuthorizationInitializeResponseData](docs/Model/CustomerAuthorizationInitializeResponseData.md)
- [CustomerAuthorizationVerifyResponse](docs/Model/CustomerAuthorizationVerifyResponse.md)
- [CustomerAuthorizationVerifyResponseCustomer](docs/Model/CustomerAuthorizationVerifyResponseCustomer.md)
- [CustomerAuthorizationVerifyResponseData](docs/Model/CustomerAuthorizationVerifyResponseData.md)
- [CustomerCreate](docs/Model/CustomerCreate.md)
- [CustomerCreateResponse](docs/Model/CustomerCreateResponse.md)
- [CustomerCreateResponseData](docs/Model/CustomerCreateResponseData.md)
- [CustomerDeactivateAuthorization](docs/Model/CustomerDeactivateAuthorization.md)
- [CustomerDeactivateAuthorizationResponse](docs/Model/CustomerDeactivateAuthorizationResponse.md)
- [CustomerDirectDebitActivationChargeRequest](docs/Model/CustomerDirectDebitActivationChargeRequest.md)
- [CustomerDirectDebitActivationChargeResponse](docs/Model/CustomerDirectDebitActivationChargeResponse.md)
- [CustomerFetchMandateAuthorizationsResponse](docs/Model/CustomerFetchMandateAuthorizationsResponse.md)
- [CustomerFetchMandateAuthorizationsResponseData](docs/Model/CustomerFetchMandateAuthorizationsResponseData.md)
- [CustomerFetchMandateAuthorizationsResponseDataCustomer](docs/Model/CustomerFetchMandateAuthorizationsResponseDataCustomer.md)
- [CustomerFetchMandateAuthorizationsResponseMeta](docs/Model/CustomerFetchMandateAuthorizationsResponseMeta.md)
- [CustomerFetchResponse](docs/Model/CustomerFetchResponse.md)
- [CustomerFetchResponseData](docs/Model/CustomerFetchResponseData.md)
- [CustomerInitializeDirectDebitAccount](docs/Model/CustomerInitializeDirectDebitAccount.md)
- [CustomerInitializeDirectDebitAddress](docs/Model/CustomerInitializeDirectDebitAddress.md)
- [CustomerInitializeDirectDebitRequest](docs/Model/CustomerInitializeDirectDebitRequest.md)
- [CustomerInitializeDirectDebitResponse](docs/Model/CustomerInitializeDirectDebitResponse.md)
- [CustomerInitializeDirectDebitResponseData](docs/Model/CustomerInitializeDirectDebitResponseData.md)
- [CustomerListResponse](docs/Model/CustomerListResponse.md)
- [CustomerListResponseArray](docs/Model/CustomerListResponseArray.md)
- [CustomerListResponseMeta](docs/Model/CustomerListResponseMeta.md)
- [CustomerRiskAction](docs/Model/CustomerRiskAction.md)
- [CustomerUpdate](docs/Model/CustomerUpdate.md)
- [CustomerUpdateResponse](docs/Model/CustomerUpdateResponse.md)
- [CustomerUpdateResponseData](docs/Model/CustomerUpdateResponseData.md)
- [CustomerValidate](docs/Model/CustomerValidate.md)
- [CustomerValidateResponse](docs/Model/CustomerValidateResponse.md)
- [CustomerWhitelistBlacklistResponse](docs/Model/CustomerWhitelistBlacklistResponse.md)
- [CustomerWhitelistBlacklistResponseData](docs/Model/CustomerWhitelistBlacklistResponseData.md)
- [DedicatedNubanCreateResponse](docs/Model/DedicatedNubanCreateResponse.md)
- [DedicatedNubanCreateResponseData](docs/Model/DedicatedNubanCreateResponseData.md)
- [DedicatedNubanCreateResponseDataAssignment](docs/Model/DedicatedNubanCreateResponseDataAssignment.md)
- [DedicatedNubanCreateResponseDataCustomer](docs/Model/DedicatedNubanCreateResponseDataCustomer.md)
- [DedicatedNubanDeactivateResponse](docs/Model/DedicatedNubanDeactivateResponse.md)
- [DedicatedNubanDeactivateResponseData](docs/Model/DedicatedNubanDeactivateResponseData.md)
- [DedicatedNubanDeactivateResponseDataAssignment](docs/Model/DedicatedNubanDeactivateResponseDataAssignment.md)
- [DedicatedNubanFetchResponse](docs/Model/DedicatedNubanFetchResponse.md)
- [DedicatedNubanFetchResponseData](docs/Model/DedicatedNubanFetchResponseData.md)
- [DedicatedNubanListResponse](docs/Model/DedicatedNubanListResponse.md)
- [DedicatedNubanListResponseArray](docs/Model/DedicatedNubanListResponseArray.md)
- [DedicatedNubanListResponseArrayBank](docs/Model/DedicatedNubanListResponseArrayBank.md)
- [DedicatedNubanListResponseArrayCustomer](docs/Model/DedicatedNubanListResponseArrayCustomer.md)
- [DedicatedNubanListResponseArraySplitConfig](docs/Model/DedicatedNubanListResponseArraySplitConfig.md)
- [DedicatedVirtualAccountAssign](docs/Model/DedicatedVirtualAccountAssign.md)
- [DedicatedVirtualAccountCreate](docs/Model/DedicatedVirtualAccountCreate.md)
- [DedicatedVirtualAccountRemoveSplit](docs/Model/DedicatedVirtualAccountRemoveSplit.md)
- [DedicatedVirtualAccountSplit](docs/Model/DedicatedVirtualAccountSplit.md)
- [DirectDebitActivationChargeRequest](docs/Model/DirectDebitActivationChargeRequest.md)
- [DirectDebitActivationChargeResponse](docs/Model/DirectDebitActivationChargeResponse.md)
- [DisputeAddEvidenceResponse](docs/Model/DisputeAddEvidenceResponse.md)
- [DisputeAddEvidenceResponseData](docs/Model/DisputeAddEvidenceResponseData.md)
- [DisputeEvidence](docs/Model/DisputeEvidence.md)
- [DisputeExportResponse](docs/Model/DisputeExportResponse.md)
- [DisputeFetchResponse](docs/Model/DisputeFetchResponse.md)
- [DisputeFetchResponseData](docs/Model/DisputeFetchResponseData.md)
- [DisputeFetchResponseDataTransaction](docs/Model/DisputeFetchResponseDataTransaction.md)
- [DisputeFetchResponseDataTransactionAuthorization](docs/Model/DisputeFetchResponseDataTransactionAuthorization.md)
- [DisputeFetchResponseDataTransactionCustomer](docs/Model/DisputeFetchResponseDataTransactionCustomer.md)
- [DisputeHistoryArray](docs/Model/DisputeHistoryArray.md)
- [DisputeListResponse](docs/Model/DisputeListResponse.md)
- [DisputeListResponseArray](docs/Model/DisputeListResponseArray.md)
- [DisputeListResponseArrayTransaction](docs/Model/DisputeListResponseArrayTransaction.md)
- [DisputeListTransactionResponse](docs/Model/DisputeListTransactionResponse.md)
- [DisputeListTransactionResponseData](docs/Model/DisputeListTransactionResponseData.md)
- [DisputeListTransactionResponseDataTransaction](docs/Model/DisputeListTransactionResponseDataTransaction.md)
- [DisputeMessagesArray](docs/Model/DisputeMessagesArray.md)
- [DisputeResolve](docs/Model/DisputeResolve.md)
- [DisputeResolveResponse](docs/Model/DisputeResolveResponse.md)
- [DisputeResolveResponseData](docs/Model/DisputeResolveResponseData.md)
- [DisputeResolveResponseDataMessage](docs/Model/DisputeResolveResponseDataMessage.md)
- [DisputeUpdate](docs/Model/DisputeUpdate.md)
- [DisputeUpdateResponse](docs/Model/DisputeUpdateResponse.md)
- [DisputeUploadURLResponse](docs/Model/DisputeUploadURLResponse.md)
- [DisputeUploadURLResponseData](docs/Model/DisputeUploadURLResponseData.md)
- [EFT](docs/Model/EFT.md)
- [Error](docs/Model/Error.md)
- [ErrorMeta](docs/Model/ErrorMeta.md)
- [ErrorRecordsArray](docs/Model/ErrorRecordsArray.md)
- [MetadataCustomFieldsArray](docs/Model/MetadataCustomFieldsArray.md)
- [MiscellaneousListBanksResponse](docs/Model/MiscellaneousListBanksResponse.md)
- [MiscellaneousListBanksResponseArray](docs/Model/MiscellaneousListBanksResponseArray.md)
- [MiscellaneousListCountriesResponse](docs/Model/MiscellaneousListCountriesResponse.md)
- [MiscellaneousListCountriesResponseArray](docs/Model/MiscellaneousListCountriesResponseArray.md)
- [MiscellaneousListCountriesResponseArrayRelationships](docs/Model/MiscellaneousListCountriesResponseArrayRelationships.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrency](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrency.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrencies](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrencies.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGN](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGN.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGNBank](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGNBank.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGNBankAccountNumberPattern](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesNGNBankAccountNumberPattern.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesUSD](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesUSD.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesUSDBank](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsCurrencySupportedCurrenciesUSDBank.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsIntegrationFeature](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsIntegrationFeature.md)
- [MiscellaneousListCountriesResponseArrayRelationshipsIntegrationType](docs/Model/MiscellaneousListCountriesResponseArrayRelationshipsIntegrationType.md)
- [MiscellaneousListStatesResponse](docs/Model/MiscellaneousListStatesResponse.md)
- [MiscellaneousListStatesResponseArray](docs/Model/MiscellaneousListStatesResponseArray.md)
- [MobileMoney](docs/Model/MobileMoney.md)
- [OrderCreate](docs/Model/OrderCreate.md)
- [OrderCreateResponse](docs/Model/OrderCreateResponse.md)
- [OrderCreateResponseData](docs/Model/OrderCreateResponseData.md)
- [OrderCreateResponseDataShipping](docs/Model/OrderCreateResponseDataShipping.md)
- [OrderCreateResponseDataShippingMethod](docs/Model/OrderCreateResponseDataShippingMethod.md)
- [OrderFetchProductResponse](docs/Model/OrderFetchProductResponse.md)
- [OrderFetchProductResponseArray](docs/Model/OrderFetchProductResponseArray.md)
- [OrderFetchProductResponseMeta](docs/Model/OrderFetchProductResponseMeta.md)
- [OrderFetchResponse](docs/Model/OrderFetchResponse.md)
- [OrderFetchResponseData](docs/Model/OrderFetchResponseData.md)
- [OrderItems](docs/Model/OrderItems.md)
- [OrderItemsArray](docs/Model/OrderItemsArray.md)
- [OrderListResponse](docs/Model/OrderListResponse.md)
- [OrderListResponseArray](docs/Model/OrderListResponseArray.md)
- [OrderListResponseMeta](docs/Model/OrderListResponseMeta.md)
- [OrderShipping](docs/Model/OrderShipping.md)
- [OrderValidateResponse](docs/Model/OrderValidateResponse.md)
- [OrderValidateResponseData](docs/Model/OrderValidateResponseData.md)
- [OrderValidateResponseDataIntegration](docs/Model/OrderValidateResponseDataIntegration.md)
- [PageAddProductsResponse](docs/Model/PageAddProductsResponse.md)
- [PageAddProductsResponseData](docs/Model/PageAddProductsResponseData.md)
- [PageCheckSlugAvailabilityResponse](docs/Model/PageCheckSlugAvailabilityResponse.md)
- [PageCreate](docs/Model/PageCreate.md)
- [PageCreateResponse](docs/Model/PageCreateResponse.md)
- [PageCreateResponseData](docs/Model/PageCreateResponseData.md)
- [PageFetchResponse](docs/Model/PageFetchResponse.md)
- [PageFetchResponseData](docs/Model/PageFetchResponseData.md)
- [PageListResponse](docs/Model/PageListResponse.md)
- [PageListResponseArray](docs/Model/PageListResponseArray.md)
- [PageProduct](docs/Model/PageProduct.md)
- [PageProductsArray](docs/Model/PageProductsArray.md)
- [PageUpdate](docs/Model/PageUpdate.md)
- [PageUpdateResponse](docs/Model/PageUpdateResponse.md)
- [PageUpdateResponseData](docs/Model/PageUpdateResponseData.md)
- [PaymentRequestArchiveResponse](docs/Model/PaymentRequestArchiveResponse.md)
- [PaymentRequestCreate](docs/Model/PaymentRequestCreate.md)
- [PaymentRequestCreateResponse](docs/Model/PaymentRequestCreateResponse.md)
- [PaymentRequestCreateResponseData](docs/Model/PaymentRequestCreateResponseData.md)
- [PaymentRequestFinalizeResponse](docs/Model/PaymentRequestFinalizeResponse.md)
- [PaymentRequestFinalizeResponseData](docs/Model/PaymentRequestFinalizeResponseData.md)
- [PaymentRequestFinalizeResponseDataDiscount](docs/Model/PaymentRequestFinalizeResponseDataDiscount.md)
- [PaymentRequestLineItemsArray](docs/Model/PaymentRequestLineItemsArray.md)
- [PaymentRequestListResponse](docs/Model/PaymentRequestListResponse.md)
- [PaymentRequestListResponseArray](docs/Model/PaymentRequestListResponseArray.md)
- [PaymentRequestNotificationsArray](docs/Model/PaymentRequestNotificationsArray.md)
- [PaymentRequestPendingArray](docs/Model/PaymentRequestPendingArray.md)
- [PaymentRequestSendNotificationResponse](docs/Model/PaymentRequestSendNotificationResponse.md)
- [PaymentRequestSuccessfulArray](docs/Model/PaymentRequestSuccessfulArray.md)
- [PaymentRequestTaxArray](docs/Model/PaymentRequestTaxArray.md)
- [PaymentRequestTotalArray](docs/Model/PaymentRequestTotalArray.md)
- [PaymentRequestTotalResponse](docs/Model/PaymentRequestTotalResponse.md)
- [PaymentRequestTotalResponseData](docs/Model/PaymentRequestTotalResponseData.md)
- [PaymentRequestUpdate](docs/Model/PaymentRequestUpdate.md)
- [PaymentRequestUpdateResponse](docs/Model/PaymentRequestUpdateResponse.md)
- [PaymentRequestUpdateResponseData](docs/Model/PaymentRequestUpdateResponseData.md)
- [PaymentRequestVerifyResponse](docs/Model/PaymentRequestVerifyResponse.md)
- [PaymentRequestVerifyResponseData](docs/Model/PaymentRequestVerifyResponseData.md)
- [PaymentRequestVerifyResponseDataIntegration](docs/Model/PaymentRequestVerifyResponseDataIntegration.md)
- [PaymentSession](docs/Model/PaymentSession.md)
- [PlanCreate](docs/Model/PlanCreate.md)
- [PlanCreateResponse](docs/Model/PlanCreateResponse.md)
- [PlanCreateResponseData](docs/Model/PlanCreateResponseData.md)
- [PlanFetchResponse](docs/Model/PlanFetchResponse.md)
- [PlanFetchResponseData](docs/Model/PlanFetchResponseData.md)
- [PlanListResponse](docs/Model/PlanListResponse.md)
- [PlanListResponseArray](docs/Model/PlanListResponseArray.md)
- [PlanUpdate](docs/Model/PlanUpdate.md)
- [PlanUpdateResponse](docs/Model/PlanUpdateResponse.md)
- [ProductCreate](docs/Model/ProductCreate.md)
- [ProductCreateResponse](docs/Model/ProductCreateResponse.md)
- [ProductCreateResponseData](docs/Model/ProductCreateResponseData.md)
- [ProductDeleteResponse](docs/Model/ProductDeleteResponse.md)
- [ProductFetchResponse](docs/Model/ProductFetchResponse.md)
- [ProductFetchResponseData](docs/Model/ProductFetchResponseData.md)
- [ProductListsResponse](docs/Model/ProductListsResponse.md)
- [ProductListsResponseArray](docs/Model/ProductListsResponseArray.md)
- [ProductListsResponseArrayMetadata](docs/Model/ProductListsResponseArrayMetadata.md)
- [ProductListsResponseArrayShippingFields](docs/Model/ProductListsResponseArrayShippingFields.md)
- [ProductListsResponseMeta](docs/Model/ProductListsResponseMeta.md)
- [ProductUpdate](docs/Model/ProductUpdate.md)
- [ProductUpdateResponse](docs/Model/ProductUpdateResponse.md)
- [ProductUpdateResponseData](docs/Model/ProductUpdateResponseData.md)
- [RefundCreate](docs/Model/RefundCreate.md)
- [RefundCreateResponse](docs/Model/RefundCreateResponse.md)
- [RefundCreateResponseData](docs/Model/RefundCreateResponseData.md)
- [RefundCreateResponseDataTransaction](docs/Model/RefundCreateResponseDataTransaction.md)
- [RefundCreateResponseDataTransactionAuthorization](docs/Model/RefundCreateResponseDataTransactionAuthorization.md)
- [RefundCreateResponseDataTransactionCustomer](docs/Model/RefundCreateResponseDataTransactionCustomer.md)
- [RefundCreateResponseDataTransactionSubaccount](docs/Model/RefundCreateResponseDataTransactionSubaccount.md)
- [RefundFetchResponse](docs/Model/RefundFetchResponse.md)
- [RefundFetchResponseData](docs/Model/RefundFetchResponseData.md)
- [RefundFetchResponseDataCustomer](docs/Model/RefundFetchResponseDataCustomer.md)
- [RefundListResponse](docs/Model/RefundListResponse.md)
- [RefundListResponseArray](docs/Model/RefundListResponseArray.md)
- [RefundListResponseMeta](docs/Model/RefundListResponseMeta.md)
- [RefundRetry](docs/Model/RefundRetry.md)
- [RefundRetryAccountDetails](docs/Model/RefundRetryAccountDetails.md)
- [RefundRetryResponse](docs/Model/RefundRetryResponse.md)
- [RefundRetryResponseData](docs/Model/RefundRetryResponseData.md)
- [Response](docs/Model/Response.md)
- [SplitAddUpdateSubaccountResponse](docs/Model/SplitAddUpdateSubaccountResponse.md)
- [SplitCreate](docs/Model/SplitCreate.md)
- [SplitCreateResponse](docs/Model/SplitCreateResponse.md)
- [SplitCreateResponseData](docs/Model/SplitCreateResponseData.md)
- [SplitFetchResponse](docs/Model/SplitFetchResponse.md)
- [SplitFetchResponseData](docs/Model/SplitFetchResponseData.md)
- [SplitListResponse](docs/Model/SplitListResponse.md)
- [SplitListResponseArray](docs/Model/SplitListResponseArray.md)
- [SplitRemoveSubaccountResponse](docs/Model/SplitRemoveSubaccountResponse.md)
- [SplitSubaccounts](docs/Model/SplitSubaccounts.md)
- [SplitSubaccountsArray](docs/Model/SplitSubaccountsArray.md)
- [SplitSubaccountsArraySubaccount](docs/Model/SplitSubaccountsArraySubaccount.md)
- [SplitUpdate](docs/Model/SplitUpdate.md)
- [SplitUpdateResponse](docs/Model/SplitUpdateResponse.md)
- [StorefrontAddProducts](docs/Model/StorefrontAddProducts.md)
- [StorefrontContactsArray](docs/Model/StorefrontContactsArray.md)
- [StorefrontCreate](docs/Model/StorefrontCreate.md)
- [StorefrontCreateResponse](docs/Model/StorefrontCreateResponse.md)
- [StorefrontCreateResponseData](docs/Model/StorefrontCreateResponseData.md)
- [StorefrontDeleteResponse](docs/Model/StorefrontDeleteResponse.md)
- [StorefrontFetchResponse](docs/Model/StorefrontFetchResponse.md)
- [StorefrontFetchResponseMeta](docs/Model/StorefrontFetchResponseMeta.md)
- [StorefrontListResponse](docs/Model/StorefrontListResponse.md)
- [StorefrontListResponseArray](docs/Model/StorefrontListResponseArray.md)
- [StorefrontUpdate](docs/Model/StorefrontUpdate.md)
- [StorefrontUpdateResponse](docs/Model/StorefrontUpdateResponse.md)
- [SubaccountCreate](docs/Model/SubaccountCreate.md)
- [SubaccountCreateResponse](docs/Model/SubaccountCreateResponse.md)
- [SubaccountCreateResponseData](docs/Model/SubaccountCreateResponseData.md)
- [SubaccountFetchResponse](docs/Model/SubaccountFetchResponse.md)
- [SubaccountFetchResponseData](docs/Model/SubaccountFetchResponseData.md)
- [SubaccountListResponse](docs/Model/SubaccountListResponse.md)
- [SubaccountListResponseArray](docs/Model/SubaccountListResponseArray.md)
- [SubaccountListResponseMeta](docs/Model/SubaccountListResponseMeta.md)
- [SubaccountUpdate](docs/Model/SubaccountUpdate.md)
- [SubaccountUpdateResponse](docs/Model/SubaccountUpdateResponse.md)
- [SubaccountUpdateResponseData](docs/Model/SubaccountUpdateResponseData.md)
- [SubscriptionCreate](docs/Model/SubscriptionCreate.md)
- [SubscriptionCreateResponse](docs/Model/SubscriptionCreateResponse.md)
- [SubscriptionCreateResponseData](docs/Model/SubscriptionCreateResponseData.md)
- [SubscriptionDisableResponse](docs/Model/SubscriptionDisableResponse.md)
- [SubscriptionFetchResponse](docs/Model/SubscriptionFetchResponse.md)
- [SubscriptionFetchResponseData](docs/Model/SubscriptionFetchResponseData.md)
- [SubscriptionFetchResponseDataPlan](docs/Model/SubscriptionFetchResponseDataPlan.md)
- [SubscriptionListResponse](docs/Model/SubscriptionListResponse.md)
- [SubscriptionListResponseArray](docs/Model/SubscriptionListResponseArray.md)
- [SubscriptionListResponseArrayAuthorization](docs/Model/SubscriptionListResponseArrayAuthorization.md)
- [SubscriptionListResponseArrayCustomer](docs/Model/SubscriptionListResponseArrayCustomer.md)
- [SubscriptionListResponseArrayPlan](docs/Model/SubscriptionListResponseArrayPlan.md)
- [SubscriptionToggle](docs/Model/SubscriptionToggle.md)
- [TerminalActivationToggle](docs/Model/TerminalActivationToggle.md)
- [TerminalCommissionDeviceResponse](docs/Model/TerminalCommissionDeviceResponse.md)
- [TerminalDecommissionDeviceResponse](docs/Model/TerminalDecommissionDeviceResponse.md)
- [TerminalGetResponse](docs/Model/TerminalGetResponse.md)
- [TerminalGetResponseData](docs/Model/TerminalGetResponseData.md)
- [TerminalGetStatusResponse](docs/Model/TerminalGetStatusResponse.md)
- [TerminalGetStatusResponseData](docs/Model/TerminalGetStatusResponseData.md)
- [TerminalListsResponse](docs/Model/TerminalListsResponse.md)
- [TerminalListsResponseArray](docs/Model/TerminalListsResponseArray.md)
- [TerminalListsResponseMeta](docs/Model/TerminalListsResponseMeta.md)
- [TerminalSendEvent](docs/Model/TerminalSendEvent.md)
- [TerminalSendEventData](docs/Model/TerminalSendEventData.md)
- [TerminalUpate](docs/Model/TerminalUpate.md)
- [TerminalUpdateResponse](docs/Model/TerminalUpdateResponse.md)
- [TransactionChargeAuthorization](docs/Model/TransactionChargeAuthorization.md)
- [TransactionCheckAuthorization](docs/Model/TransactionCheckAuthorization.md)
- [TransactionExportResponse](docs/Model/TransactionExportResponse.md)
- [TransactionExportResponseData](docs/Model/TransactionExportResponseData.md)
- [TransactionFetchResponse](docs/Model/TransactionFetchResponse.md)
- [TransactionFetchResponseData](docs/Model/TransactionFetchResponseData.md)
- [TransactionFetchResponseDataAuthorization](docs/Model/TransactionFetchResponseDataAuthorization.md)
- [TransactionFetchResponseDataCustomer](docs/Model/TransactionFetchResponseDataCustomer.md)
- [TransactionFetchResponseDataMetadata](docs/Model/TransactionFetchResponseDataMetadata.md)
- [TransactionFetchResponseDataSource](docs/Model/TransactionFetchResponseDataSource.md)
- [TransactionInitialize](docs/Model/TransactionInitialize.md)
- [TransactionInitializeBadRequestModel](docs/Model/TransactionInitializeBadRequestModel.md)
- [TransactionInitializeResponse](docs/Model/TransactionInitializeResponse.md)
- [TransactionInitializeResponseData](docs/Model/TransactionInitializeResponseData.md)
- [TransactionListResponse](docs/Model/TransactionListResponse.md)
- [TransactionListResponseArray](docs/Model/TransactionListResponseArray.md)
- [TransactionListResponseArrayAuthorization](docs/Model/TransactionListResponseArrayAuthorization.md)
- [TransactionListResponseArrayCustomer](docs/Model/TransactionListResponseArrayCustomer.md)
- [TransactionListResponseArraySource](docs/Model/TransactionListResponseArraySource.md)
- [TransactionListResponseMeta](docs/Model/TransactionListResponseMeta.md)
- [TransactionListResponseMetaPerPage](docs/Model/TransactionListResponseMetaPerPage.md)
- [TransactionPartialDebit](docs/Model/TransactionPartialDebit.md)
- [TransactionPartialDebitResponse](docs/Model/TransactionPartialDebitResponse.md)
- [TransactionPartialDebitResponseData](docs/Model/TransactionPartialDebitResponseData.md)
- [TransactionPartialDebitResponseDataAuthorization](docs/Model/TransactionPartialDebitResponseDataAuthorization.md)
- [TransactionPartialDebitResponseDataCustomer](docs/Model/TransactionPartialDebitResponseDataCustomer.md)
- [TransactionPendingTransfersByCurrencyArray](docs/Model/TransactionPendingTransfersByCurrencyArray.md)
- [TransactionTimelineResponse](docs/Model/TransactionTimelineResponse.md)
- [TransactionTotalVolumeByCurrencyArray](docs/Model/TransactionTotalVolumeByCurrencyArray.md)
- [TransactionTotalsResponse](docs/Model/TransactionTotalsResponse.md)
- [TransactionTotalsResponseData](docs/Model/TransactionTotalsResponseData.md)
- [TransferBase](docs/Model/TransferBase.md)
- [TransferBulk](docs/Model/TransferBulk.md)
- [TransferBulkResponse](docs/Model/TransferBulkResponse.md)
- [TransferBulkResponseArray](docs/Model/TransferBulkResponseArray.md)
- [TransferCreateResponse](docs/Model/TransferCreateResponse.md)
- [TransferCreateResponseData](docs/Model/TransferCreateResponseData.md)
- [TransferDisablesOtpResponse](docs/Model/TransferDisablesOtpResponse.md)
- [TransferEnablesOtpResponse](docs/Model/TransferEnablesOtpResponse.md)
- [TransferFeesBreakdownArray](docs/Model/TransferFeesBreakdownArray.md)
- [TransferFetchResponse](docs/Model/TransferFetchResponse.md)
- [TransferFetchResponseData](docs/Model/TransferFetchResponseData.md)
- [TransferFinalize](docs/Model/TransferFinalize.md)
- [TransferFinalizeDisableOTP](docs/Model/TransferFinalizeDisableOTP.md)
- [TransferFinalizeDisablesOtpResponse](docs/Model/TransferFinalizeDisablesOtpResponse.md)
- [TransferInitiate](docs/Model/TransferInitiate.md)
- [TransferListResponse](docs/Model/TransferListResponse.md)
- [TransferListResponseArray](docs/Model/TransferListResponseArray.md)
- [TransferListResponseArrayRecipient](docs/Model/TransferListResponseArrayRecipient.md)
- [TransferListResponseArrayRecipientDetails](docs/Model/TransferListResponseArrayRecipientDetails.md)
- [TransferListResponseArraySession](docs/Model/TransferListResponseArraySession.md)
- [TransferRecipientBulk](docs/Model/TransferRecipientBulk.md)
- [TransferRecipientBulkCreateResponse](docs/Model/TransferRecipientBulkCreateResponse.md)
- [TransferRecipientBulkCreateResponseData](docs/Model/TransferRecipientBulkCreateResponseData.md)
- [TransferRecipientCreate](docs/Model/TransferRecipientCreate.md)
- [TransferRecipientCreateResponse](docs/Model/TransferRecipientCreateResponse.md)
- [TransferRecipientCreateResponseData](docs/Model/TransferRecipientCreateResponseData.md)
- [TransferRecipientDeleteResponse](docs/Model/TransferRecipientDeleteResponse.md)
- [TransferRecipientErrorsArray](docs/Model/TransferRecipientErrorsArray.md)
- [TransferRecipientFetchResponse](docs/Model/TransferRecipientFetchResponse.md)
- [TransferRecipientFetchResponseData](docs/Model/TransferRecipientFetchResponseData.md)
- [TransferRecipientFetchResponseDataDetails](docs/Model/TransferRecipientFetchResponseDataDetails.md)
- [TransferRecipientListResponse](docs/Model/TransferRecipientListResponse.md)
- [TransferRecipientListResponseArray](docs/Model/TransferRecipientListResponseArray.md)
- [TransferRecipientListResponseArrayDetails](docs/Model/TransferRecipientListResponseArrayDetails.md)
- [TransferRecipientUpdate](docs/Model/TransferRecipientUpdate.md)
- [TransferRecipientUpdateResponse](docs/Model/TransferRecipientUpdateResponse.md)
- [TransferResendOTP](docs/Model/TransferResendOTP.md)
- [TransferResendsOtpResponse](docs/Model/TransferResendsOtpResponse.md)
- [TransferVerifyResponse](docs/Model/TransferVerifyResponse.md)
- [TransferVerifyResponseData](docs/Model/TransferVerifyResponseData.md)
- [TransferVerifyResponseDataRecipient](docs/Model/TransferVerifyResponseDataRecipient.md)
- [TransferVerifyResponseDataRecipientDetails](docs/Model/TransferVerifyResponseDataRecipientDetails.md)
- [USSD](docs/Model/USSD.md)
- [VerificationResolveAccountNumberResponse](docs/Model/VerificationResolveAccountNumberResponse.md)
- [VerificationResolveAccountNumberResponseData](docs/Model/VerificationResolveAccountNumberResponseData.md)
- [VerificationResolveCardBINResponse](docs/Model/VerificationResolveCardBINResponse.md)
- [VerificationResolveCardBINResponseData](docs/Model/VerificationResolveCardBINResponseData.md)
- [VerificationValidateAccountResponse](docs/Model/VerificationValidateAccountResponse.md)
- [VerificationValidateAccountResponseData](docs/Model/VerificationValidateAccountResponseData.md)
- [VerifyResponse](docs/Model/VerifyResponse.md)
- [VerifyResponseData](docs/Model/VerifyResponseData.md)
- [VerifyResponseDataAuthorization](docs/Model/VerifyResponseDataAuthorization.md)
- [VerifyResponseDataCustomer](docs/Model/VerifyResponseDataCustomer.md)
- [VerifyResponseDataLog](docs/Model/VerifyResponseDataLog.md)
- [VerifyResponseDataLogHistoryInner](docs/Model/VerifyResponseDataLogHistoryInner.md)
- [VerifyResponseDataMetadata](docs/Model/VerifyResponseDataMetadata.md)
- [VerifyResponseDataPlanObject](docs/Model/VerifyResponseDataPlanObject.md)
- [VirtualTerminalAddSplitCode](docs/Model/VirtualTerminalAddSplitCode.md)
- [VirtualTerminalAddSplitCodeResponse](docs/Model/VirtualTerminalAddSplitCodeResponse.md)
- [VirtualTerminalAddSplitCodeResponseData](docs/Model/VirtualTerminalAddSplitCodeResponseData.md)
- [VirtualTerminalCreate](docs/Model/VirtualTerminalCreate.md)
- [VirtualTerminalCreateDestinationsInner](docs/Model/VirtualTerminalCreateDestinationsInner.md)
- [VirtualTerminalCreateResponse](docs/Model/VirtualTerminalCreateResponse.md)
- [VirtualTerminalCreateResponseData](docs/Model/VirtualTerminalCreateResponseData.md)
- [VirtualTerminalCreateResponseDataDestinationsInner](docs/Model/VirtualTerminalCreateResponseDataDestinationsInner.md)
- [VirtualTerminalDeactivateResponse](docs/Model/VirtualTerminalDeactivateResponse.md)
- [VirtualTerminalDeleteSplitCode](docs/Model/VirtualTerminalDeleteSplitCode.md)
- [VirtualTerminalDeleteSplitCodeResponse](docs/Model/VirtualTerminalDeleteSplitCodeResponse.md)
- [VirtualTerminalDestinationAssign](docs/Model/VirtualTerminalDestinationAssign.md)
- [VirtualTerminalDestinationAssignResponse](docs/Model/VirtualTerminalDestinationAssignResponse.md)
- [VirtualTerminalDestinationAssignResponseDataInner](docs/Model/VirtualTerminalDestinationAssignResponseDataInner.md)
- [VirtualTerminalDestinationUnassign](docs/Model/VirtualTerminalDestinationUnassign.md)
- [VirtualTerminalDestinationUnassignResponse](docs/Model/VirtualTerminalDestinationUnassignResponse.md)
- [VirtualTerminalFetchResponse](docs/Model/VirtualTerminalFetchResponse.md)
- [VirtualTerminalFetchResponseData](docs/Model/VirtualTerminalFetchResponseData.md)
- [VirtualTerminalFetchResponseDataDestinationsInner](docs/Model/VirtualTerminalFetchResponseDataDestinationsInner.md)
- [VirtualTerminalListResponse](docs/Model/VirtualTerminalListResponse.md)
- [VirtualTerminalListResponseArray](docs/Model/VirtualTerminalListResponseArray.md)
- [VirtualTerminalListResponseMeta](docs/Model/VirtualTerminalListResponseMeta.md)
- [VirtualTerminalUpdate](docs/Model/VirtualTerminalUpdate.md)
- [VirtualTerminalUpdateResponse](docs/Model/VirtualTerminalUpdateResponse.md)

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
    - Package version: `1.1.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
