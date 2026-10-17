[English](README.md) · [Español](README.es-ES.md) · [Français](README.fr-FR.md)

# Paystack

Client PHP pour l'API Paystack, généré à partir de la spécification Paystack OpenAPI dans ce référentiel.


## Pourquoi ce SDK

- Généré à partir de la source de vérité Paystack OpenAPI dans ce dépôt
- Inclut des aides opt-in pour les délais d'attente, les tentatives, l'idempotence et les erreurs d'API structurées
- Maintient les modèles générés et les classes API alignés sur les spécifications de génération du SDK


## Exigences

PHP 8.1 et versions ultérieures.

## Installation

```sh
composer require alexasomba/paystack
```

Ou depuis la source :

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

Authentifiez les requêtes avec votre clé secrète Paystack via l'objet de configuration généré :

```php
$config = Configuration::getDefaultConfiguration()
    ->setAccessToken($_ENV['PAYSTACK_SECRET_KEY']);
```


## Démarrage rapide

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

Les méthodes API générées renvoient des objets de modèle typés. Attrapez `ApiException` lorsque vous avez besoin de codes d'état bruts, d'en-têtes ou de corps de réponse lors du débogage.


## Bases de l'API

- URL de base : `https://api.paystack.co`
- HTTPS est requis pour toutes les demandes.
- Les demandes et les réponses sont basées sur JSON.
- Les réponses les plus réussies suivent les enveloppes `status`, `message`, `data` et `meta` en option décrites dans `Paystack-API/0a-Introduction.md`.
- Les montants sont généralement envoyés en sous-unités monétaires telles que le kobo, les pesewas ou les centimes. Consultez la documentation du module pour connaître les règles spécifiques aux devises.


## Authentification et environnements

- Les SDK côté serveur doivent utiliser votre clé secrète (`sk_test_*` ou `sk_live_*`).
- Les SDK du navigateur doivent utiliser uniquement votre clé publique (`pk_test_*` ou `pk_live_*`).
- Envoyez les informations d'identification de l'API côté serveur sous la forme `Authorization: Bearer YOUR_SECRET_KEY`.
- Les modes test et live utilisent différentes clés et environnements isolés.
- Faites pivoter les clés si elles sont exposées et ne confiez jamais les clés secrètes au contrôle de code source.
- Si vous activez la liste blanche des adresses IP dans Paystack, les demandes provenant d'adresses IP non sur liste blanche seront bloquées.


## Fiabilité

Ce SDK inclut des assistants opt-in dans `Alexasomba\Paystack\Extras` :

```php
use Alexasomba\Paystack\Extras\HttpClientFactory;
use Alexasomba\Paystack\Extras\Paystack;

$config = Paystack::createConfiguration($_ENV['PAYSTACK_SECRET_KEY']);
$client = HttpClientFactory::create([
    'timeoutSeconds' => 30,
    'idempotency' => ['enabled' => true, 'auto' => true],
]);
```

Utilisez la couche d'extras lorsque vous souhaitez définir en un seul endroit les paramètres par défaut de délai d'expiration, de nouvelle tentative et d'idempotence dans votre application.


## Pagination

- Paystack prend en charge à la fois la pagination décalée et la pagination du curseur.
- La pagination décalée utilise `page` et `perPage`.
- La pagination du curseur utilise les curseurs `use_cursor=true` plus `next` ou `previous` renvoyés dans `meta`.
- La pagination du curseur est particulièrement utile pour les ensembles de données volumineux ou qui changent fréquemment.
- La forme exacte du `meta` varie selon le point final et le mode de pagination.


## Couverture


## Erreurs

- Paystack utilise des codes d'état HTTP conventionnels tels que `200`, `201`, `400`, `401`, `404` et `5xx`.
- Les réponses d'erreur incluent généralement `status`, `message`, `type`, `code` et des informations de diagnostic facultatives `meta`.
- Les types d'erreurs décrits dans `Paystack-API/0d-Errors.md` incluent `api_error`, `validation_error` et `processor_error`.
- Pour les flux de facturation et de vérification, inspectez toujours le corps de la réponse et les champs d'état renvoyés, pas seulement le code HTTP.

Ce SDK est généré à partir de la spécification SDK dans ce monorepo et couvre les opérations émises dans les classes API générées sous `lib/Api`.

## Modules

Pour ce SDK, ces familles de schémas sont émises en tant que classes de modèles générées sous `lib/Model` et utilisées par les classes API sous `lib/Api`.

| Module | Schéma / famille de modèles |
| -------------------------------------------------------------------- | ---------------------------------------------------- |
| Opérations | `Transaction*` |
| Vérifier les paiements (vérification des transactions) | `VerifyResponse / TransactionFetchResponse` |
| Frais | `Charge*` |
| Frais de gros | `BulkCharge*` |
| Sous-comptes | `Subaccount*` |
| Fractionnements de transactions | `Split*` |
| Borne | `Terminal*` |
| Terminal virtuel | `VirtualTerminal*` |
| Clients | `Customer*` |
| Prélèvement automatique | `DirectDebit*` |
| Comptes virtuels dédiés | `DedicatedNuban* / DedicatedVirtualAccount*` |
| Apple Payer | `ApplePay*` |
| Forfaits | `Plan*` |
| Abonnements | `Subscription*` |
| Destinataires du transfert | `TransferRecipient*` |
| Transferts | `Transfer*` |
| Contrôle des transferts (paramètres OTP ; sous Transferts) | `TransferEnable* / TransferDisable* / TransferFinalize*` |
| Solde | `Balance*` |
| Demandes de paiement (factures) | `PaymentRequest*` |
| Vérification (Résoudre le compte / Valider le compte / Résoudre le BIN de la carte) | `Verification*` |
| Produits | `Product*` |
| Vitrines de magasins | `Storefront*` |
| Commandes | `Order*` |
| Pages de paiement | `Page*` |
| Règlements | `Settlement*` |
| Intégration | `Integration*` |
| Panneau de configuration (Délai d'expiration de la session de paiement ; sous Intégration) | `ControlPanel*` |
| Remboursements | `Refund*` |
| Litiges | `Dispute*` |
| Banques | `Bank*` |
| Divers | `Miscellaneous* / Currency` |


## Exemples de modules

Ce sont des exemples volontairement courts. Utilisez-les comme points d'entrée, puis développez les objets de modèle générés et les arguments de méthode API pour votre cas d'utilisation.


### Transactions

```php
$response = $transactionApi->transactionInitialize(
    new TransactionInitialize(['email' => 'customer@example.com', 'amount' => 5000])
);
```


### Vérifier les paiements (vérification des transactions)

```php
$verified = $transactionApi->transactionVerify('ref_123');
```


### Frais

```php
$chargeApi->chargeCreate(new ChargeCreateRequest(['email' => 'customer@example.com']));
```


### Frais groupés

```php
$bulkChargeApi->bulkChargeInitiate([
    new BulkChargeInitiate(['authorization' => 'AUTH_xxx', 'amount' => 5000, 'reference' => 'bulk-ref-1']),
]);
```


### Sous-comptes

```php
$subaccountApi->subaccountCreate(new SubaccountCreate(['business_name' => 'Acme Stores']));
```


### Répartition des transactions

```php
$splitApi->splitCreate(new SplitCreate(['name' => 'Main split', 'type' => 'percentage', 'currency' => 'NGN']));
```


### Terminal
```php
$terminals = $terminalApi->terminalList();
```


### Terminal virtuel

```php
$virtualTerminalApi->virtualTerminalCreate(new VirtualTerminalCreate(['name' => 'Web checkout terminal']));
```


### Clients

```php
$customerApi->customerCreate(new CustomerCreate(['email' => 'customer@example.com']));
```


### Prélèvement automatique

```php
$directDebitApi->directdebitInitialize(new DirectDebitInitializeRequest(['email' => 'customer@example.com']));
```


### Comptes virtuels dédiés

```php
$dedicatedVirtualAccountApi->dedicatedAccountAssign(new DedicatedVirtualAccountAssign(['customer' => 12345]));
```


### Apple Pay

```php
$applePayApi->applePayRegisterDomain(new ApplePayParam(['domain_name' => 'example.com']));
```


### Plans
```php
$planApi->planCreate(new PlanCreate(['name' => 'Starter', 'amount' => 500000, 'interval' => 'monthly']));
```


### Abonnements

```php
$subscriptionApi->subscriptionCreate(new SubscriptionCreate(['customer' => 'CUS_xxx', 'plan' => 'PLN_xxx']));
```


### Destinataires du transfert

```php
$transferRecipientApi->transferrecipientCreate(new TransferRecipientCreate(['name' => 'Ada Lovelace', 'type' => 'nuban']));
```


### Transferts

```php
$transferApi->transferCreate(new TransferInitiate(['source' => 'balance', 'amount' => 5000, 'recipient' => 'RCP_xxx']));
```


### Contrôle des transferts (paramètres OTP ; sous Transferts)

```php
$transferApi->transferEnableOtp();
```


### Solde

```php
$balance = $balanceApi->balanceFetch();
```


### Demandes de paiement (factures)

```php
$paymentRequestApi->paymentRequestCreate(new PaymentRequestCreate(['amount' => 5000, 'description' => 'Consulting invoice']));
```


### Vérification (Résoudre le compte / Valider le compte / Résoudre le BIN de la carte)

```php
$resolved = $bankApi->bankResolveAccountNumber('0001234567', '057');
```


### Produits

```php
$productApi->productCreate(new ProductCreate(['name' => 'T-shirt', 'price' => 5000, 'currency' => 'NGN']));
```


### Vitrines de magasins

```php
$storefronts = $storefrontApi->storefrontList();
```


### Commandes

```php
$orderApi->orderCreate(new OrderCreate(['customer' => 'CUS_xxx']));
```


### Pages de paiement

```php
$pageApi->pageCreate(new PageCreate(['name' => 'Event Ticket', 'amount' => 5000]));
```


### Règlements

```php
$settlements = $settlementApi->settlementList();
```


### Intégration

```php
$timeout = $integrationApi->integrationFetchPaymentSessionTimeout();
```


### Panneau de configuration (Délai d'expiration de la session de paiement ; sous Intégration)

```php
$integrationApi->integrationUpdatePaymentSessionTimeout(20);
```


### Remboursements

```php
$refundApi->refundCreate(new RefundCreate(['transaction' => 123456789, 'amount' => 5000]));
```


### Litiges

```php
$disputes = $disputeApi->disputeList();
```


### Banques

```php
$banks = $bankApi->bankList('nigeria');
```


### Divers

```php
$countries = $miscellaneousApi->miscellaneousListCountries();
```


## Notes de configuration

Le client PHP généré expose toujours la surface de configuration standard d'OpenAPI Generator. Dans la plupart des intégrations, la principale exigence est de définir le jeton du porteur et éventuellement de l'échanger dans un client Guzzle personnalisé.


## SDK associés

- Node : [alexasomba/paystack-node](https://github.com/alexasomba/paystack-node)
- Axios : [alexasomba/paystack-axios](https://github.com/alexasomba/paystack-axios)
- Navigateur : [alexasomba/paystack-browser](https://github.com/alexasomba/paystack-browser)
- Allez : [alexasomba/paystack-go](https://github.com/alexasomba/paystack-go)
- Python : [alexasomba/paystack-python](https://github.com/alexasomba/paystack-python)


## Source

- Source Monorepo : [alexasomba/paystack-openapi](https://github.com/alexasomba/paystack-openapi)
- Dépôt SDK autonome : [https://github.com/alexasomba/paystack-php](https://github.com/alexasomba/paystack-php)
