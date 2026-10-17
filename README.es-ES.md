[English](README.md) · [Español](README.es-ES.md) · [Français](README.fr-FR.md)

# Paystack

Cliente PHP para la API de Paystack, generado a partir de la especificación OpenAPI de Paystack incluida en este repositorio.


## ¿Por qué utilizar este SDK?

- Generado a partir de la fuente de verdad (OpenAPI de Paystack) contenida en este repositorio.
- Incluye utilidades opcionales para gestionar tiempos de espera (timeouts), reintentos, idempotencia y errores de API estructurados.
- Mantiene los modelos y las clases de la API generados en consonancia con la especificación de generación del SDK.


## Requisitos

PHP 8.1 o superior.


## Instalación

```sh
composer require alexasomba/paystack
```

O bien, desde el código fuente:

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

Autentica tus solicitudes utilizando tu clave secreta (secret key) de Paystack a través del objeto de configuración generado:

```php
$config = Configuration::getDefaultConfiguration()
    ->setAccessToken($_ENV['PAYSTACK_SECRET_KEY']);
```


## Inicio rápido

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

Los métodos de la API generados devuelven objetos de modelo tipados. Captura `ApiException` si necesitas acceder a los códigos de estado, encabezados o cuerpos de respuesta originales durante la depuración (debugging).


## Conceptos básicos de la API

- URL base: `https://api.paystack.co`
- Es obligatorio utilizar HTTPS para todas las solicitudes.
- Tanto las solicitudes como las respuestas están basadas en formato JSON.
- La mayoría de las respuestas exitosas siguen la estructura de envoltorio (envelope) definida en `Paystack-API/0a-Introduction.md`, que incluye los campos `status`, `message`, `data` y, opcionalmente, `meta`.
- Los importes suelen enviarse en subunidades de moneda, como kobo, pesewas o céntimos. Consulta la documentación del módulo para conocer las reglas específicas de cada moneda.

## Autenticación y entornos

- Los SDK del lado del servidor deben utilizar tu clave secreta (`sk_test_*` o `sk_live_*`).
- Los SDK para navegador deben utilizar únicamente tu clave pública (`pk_test_*` o `pk_live_*`).
- Envía las credenciales de la API del lado del servidor como `Authorization: Bearer YOUR_SECRET_KEY`.
- Los modos de prueba (test) y de producción (live) utilizan claves diferentes y entornos aislados.
- Rota las claves si estas se ven expuestas y nunca incluyas claves secretas en el control de versiones (repositorio de código).
- Si habilitas la lista blanca de direcciones IP en Paystack, las solicitudes provenientes de direcciones IP que no estén en dicha lista serán bloqueadas.


## Fiabilidad

Este SDK incluye utilidades opcionales en `Alexasomba\Paystack\Extras`:

```php
use Alexasomba\Paystack\Extras\HttpClientFactory;
use Alexasomba\Paystack\Extras\Paystack;

$config = Paystack::createConfiguration($_ENV['PAYSTACK_SECRET_KEY']);
$client = HttpClientFactory::create([
    'timeoutSeconds' => 30,
    'idempotency' => ['enabled' => true, 'auto' => true],
]);
```

Utiliza la capa de opciones adicionales (*extras layer*) cuando desees definir, en un único lugar, los valores predeterminados para el tiempo de espera (*timeout*), los reintentos y la idempotencia en toda tu aplicación.


## Paginación

- Paystack admite tanto la paginación basada en desplazamiento (*offset*) como la paginación basada en punteros (*cursor*).
- La paginación basada en desplazamiento utiliza `page` y `perPage`.
- La paginación basada en punteros utiliza `use_cursor=true`, junto con los punteros `next` o `previous`, los cuales se devuelven en `meta`.
- La paginación basada en punteros resulta especialmente útil para conjuntos de datos grandes o que cambian con frecuencia.
- La estructura exacta de `meta` varía según el *endpoint* y el modo de paginación utilizado.

## Cobertura


## Errores

- Paystack utiliza códigos de estado HTTP convencionales, tales como `200`, `201`, `400`, `401`, `404` y `5xx`.
- Las respuestas de error suelen incluir `status`, `message`, `type`, `code`, así como información de diagnóstico opcional `meta`.
- Los tipos de error descritos en `Paystack-API/0d-Errors.md` incluyen `api_error`, `validation_error` y `processor_error`.
- Para los flujos de cobro y verificación, examine siempre el cuerpo de la respuesta devuelta y los campos de estado, no solo el código HTTP.

Este SDK se genera a partir de la especificación del SDK en este monorepositorio y abarca las operaciones incluidas en las clases de API generadas bajo `lib/Api`.


## Módulos

Para este SDK, estas familias de esquemas se generan como clases de modelo bajo `lib/Model` y son utilizadas por las clases de API bajo `lib/Api`.

| Módulo                                                               | Familia de esquemas / modelos                            |
| -------------------------------------------------------------------- | -------------------------------------------------------- |
| Transacciones                                                        | `Transaction*`                                           |
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
| Bancos                                                               | `Bank*`                                                  |
| Varios                                                               | `Miscellaneous* / Currency`                              |


## Ejemplos de módulos

Estos ejemplos son deliberadamente breves. Úsalos como puntos de partida y, posteriormente, amplía los objetos de modelo generados y los argumentos de los métodos de la API según las necesidades de tu caso de uso.

### Transacciones

```php
$response = $transactionApi->transactionInitialize(
    new TransactionInitialize(['email' => 'customer@example.com', 'amount' => 5000])
);
```


### Verificación de pagos (verificación de transacciones)

```php
$verified = $transactionApi->transactionVerify('ref_123');
```


### Cargos

```php
$chargeApi->chargeCreate(new ChargeCreateRequest(['email' => 'customer@example.com']));
```


### Cargos masivos

```php
$bulkChargeApi->bulkChargeInitiate([
    new BulkChargeInitiate(['authorization' => 'AUTH_xxx', 'amount' => 5000, 'reference' => 'bulk-ref-1']),
]);
```


### Subcuentas

```php
$subaccountApi->subaccountCreate(new SubaccountCreate(['business_name' => 'Acme Stores']));
```


### División de transacciones

```php
$splitApi->splitCreate(new SplitCreate(['name' => 'Main split', 'type' => 'percentage', 'currency' => 'NGN']));
```


### Terminal

```php
$terminals = $terminalApi->terminalList();
```


### Terminal virtual

```php
$virtualTerminalApi->virtualTerminalCreate(new VirtualTerminalCreate(['name' => 'Web checkout terminal']));
```


### Clientes

```php
$customerApi->customerCreate(new CustomerCreate(['email' => 'customer@example.com']));
```


### Débito directo

```php
$directDebitApi->directdebitInitialize(new DirectDebitInitializeRequest(['email' => 'customer@example.com']));
```


### Cuentas virtuales dedicadas

```php
$dedicatedVirtualAccountApi->dedicatedAccountAssign(new DedicatedVirtualAccountAssign(['customer' => 12345]));
```


### Apple Pay

```php
$applePayApi->applePayRegisterDomain(new ApplePayParam(['domain_name' => 'example.com']));
```


### Planes

```php
$planApi->planCreate(new PlanCreate(['name' => 'Starter', 'amount' => 500000, 'interval' => 'monthly']));
```


### Suscripciones

```php
$subscriptionApi->subscriptionCreate(new SubscriptionCreate(['customer' => 'CUS_xxx', 'plan' => 'PLN_xxx']));
```


### Destinatarios de transferencias

```php
$transferRecipientApi->transferrecipientCreate(new TransferRecipientCreate(['name' => 'Ada Lovelace', 'type' => 'nuban']));
```


### Transferencias

```php
$transferApi->transferCreate(new TransferInitiate(['source' => 'balance', 'amount' => 5000, 'recipient' => 'RCP_xxx']));
```


### Control de transferencias (configuración de OTP; dentro de Transferencias)

```php
$transferApi->transferEnableOtp();
```


### Saldo

```php
$balance = $balanceApi->balanceFetch();
```


### Solicitudes de pago (facturas)

```php
$paymentRequestApi->paymentRequestCreate(new PaymentRequestCreate(['amount' => 5000, 'description' => 'Consulting invoice']));
```


### Verificación (resolución de cuenta / validación de cuenta / resolución de BIN de tarjeta)

```php
$resolved = $bankApi->bankResolveAccountNumber('0001234567', '057');
```


### Productos

```php
$productApi->productCreate(new ProductCreate(['name' => 'T-shirt', 'price' => 5000, 'currency' => 'NGN']));
```


### Tiendas

```php
$storefronts = $storefrontApi->storefrontList();
```


### Pedidos

```php
$orderApi->orderCreate(new OrderCreate(['customer' => 'CUS_xxx']));
```


### Páginas de pago

```php
$pageApi->pageCreate(new PageCreate(['name' => 'Event Ticket', 'amount' => 5000]));
```


### Liquidaciones

```php
$settlements = $settlementApi->settlementList();
```


### Integración

```php
$timeout = $integrationApi->integrationFetchPaymentSessionTimeout();
```


### Panel de control (tiempo de espera de la sesión de pago; en la sección de Integración)

```php
$integrationApi->integrationUpdatePaymentSessionTimeout(20);
```


### Reembolsos

```php
$refundApi->refundCreate(new RefundCreate(['transaction' => 123456789, 'amount' => 5000]));
```


### Disputas

```php
$disputes = $disputeApi->disputeList();
```


### Bancos

```php
$banks = $bankApi->bankList('nigeria');
```


### Varios

```php
$countries = $miscellaneousApi->miscellaneousListCountries();
```


## Notas de configuración

El cliente PHP generado sigue ofreciendo la interfaz de configuración estándar de OpenAPI Generator. En la mayoría de las integraciones, el requisito principal consiste en establecer el token de autenticación (bearer token) y, opcionalmente, sustituir el cliente Guzzle por uno personalizado.

## SDKs relacionados

- Node: [alexasomba/paystack-node](https://github.com/alexasomba/paystack-node)
- Axios: [alexasomba/paystack-axios](https://github.com/alexasomba/paystack-axios)
- Navegador: [alexasomba/paystack-browser](https://github.com/alexasomba/paystack-browser)
- Go: [alexasomba/paystack-go](https://github.com/alexasomba/paystack-go)
- Python: [alexasomba/paystack-python](https://github.com/alexasomba/paystack-python)


## Código fuente

- Fuente del monorepo: [alexasomba/paystack-openapi](https://github.com/alexasomba/paystack-openapi)
- Repositorio del SDK independiente: [https://github.com/alexasomba/paystack-php](https://github.com/alexasomba/paystack-php)
