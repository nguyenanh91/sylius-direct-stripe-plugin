<?php

declare(strict_types=1);

namespace Andynguyen\SyliusDirectStripePlugin\Payum\Action;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Payum\Core\Action\ActionInterface;
use Payum\Core\ApiAwareInterface;
use Payum\Core\Exception\RequestNotSupportedException;
use Payum\Core\Exception\UnsupportedApiException;
use Sylius\Component\Core\Model\PaymentInterface as SyliusPaymentInterface;
use Payum\Core\Request\Capture;

final class CaptureAction implements ActionInterface
{
    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function execute($request): void
    {
        RequestNotSupportedException::assertSupports($this, $request);

        /** @var SyliusPaymentInterface $payment */
        $payment = $request->getModel();

        $payment->setDetails(['status' => 200]);
        /*
        try {
            $response = $this->client->request('POST', 'https://sylius-payment.free.beeceptor.com', [
                'body' => json_encode([
                    'price' => $payment->getAmount(),
                    'currency' => $payment->getCurrencyCode(),
                    'api_key' => 'acacacsacaca'
                ]),
            ]);
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
        } finally {
            $payment->setDetails(['status' => $response->getStatusCode()]);
        }*/
    }

    public function supports($request): bool
    {
        return
            $request instanceof Capture &&
            $request->getModel() instanceof SyliusPaymentInterface
        ;
    }

}