<?php

declare(strict_types=1);

namespace Andynguyen\SyliusDirectStripePlugin\Payum;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\GatewayFactory;
use Andynguyen\SyliusDirectStripePlugin\Payum\Action\StatusAction;

final class SyliusPaymentGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'sylius_direct_stripe_payment',
            'payum.factory_title' => 'Sylius Direct Stripe Payment',
            'payum.action.status' => new StatusAction(),
        ]);
    }
}