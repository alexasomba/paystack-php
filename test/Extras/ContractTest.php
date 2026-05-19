<?php

namespace Alexasomba\Paystack\Test\Extras;

use Alexasomba\Paystack\Api\TransactionApi;
use Alexasomba\Paystack\Extras\HttpClientFactory;
use Alexasomba\Paystack\Extras\Paystack;
use Alexasomba\Paystack\Model\TransactionInitialize;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class ContractTest extends TestCase
{
    /** @return array<string, mixed> */
    private function fixtures(): array
    {
        $json = file_get_contents(__DIR__ . '/../../../contract-fixtures/paystack.json');
        self::assertIsString($json);
        return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    }

    public function testTransactionInitializeUsesSharedContractFixture(): void
    {
        $fixtures = $this->fixtures();
        $mock = new MockHandler([
            new Response(200, [
                'Content-Type' => 'application/json',
                'X-Paystack-Request-Id' => $fixtures['requestId'],
            ], json_encode($fixtures['transactionInitialize']['response'], JSON_THROW_ON_ERROR)),
        ]);

        $client = HttpClientFactory::create([
            'handler' => $mock,
            'idempotency' => [
                'enabled' => true,
                'key' => 'contract-idempotency',
            ],
        ]);
        $config = Paystack::createConfiguration($fixtures['secretKey'], 'https://mock.paystack.test');
        $api = new TransactionApi($client, $config);

        $response = $api->initialize(new TransactionInitialize([
            'email' => $fixtures['transactionInitialize']['request']['email'],
            'amount' => $fixtures['transactionInitialize']['request']['amount'],
        ]));

        $request = $mock->getLastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/transaction/initialize', $request->getUri()->getPath());
        self::assertSame('Bearer ' . $fixtures['secretKey'], $request->getHeaderLine('Authorization'));
        self::assertSame('contract-idempotency', $request->getHeaderLine('Idempotency-Key'));
        self::assertSame($fixtures['transactionInitialize']['response']['data']['reference'], $response->getData()->getReference());
    }

    public function testOptionalLiveSmokeSkippedByDefault(): void
    {
        if (!getenv('PAYSTACK_SECRET_KEY')) {
            self::markTestSkipped('PAYSTACK_SECRET_KEY is not set; skipping optional live smoke test');
        }

        $config = Paystack::createConfiguration((string) getenv('PAYSTACK_SECRET_KEY'));
        $api = new TransactionApi(null, $config);
        $api->callList();

        $this->addToAssertionCount(1);
    }
}
