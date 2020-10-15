<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Sylius\Bundle\PayumBundle\Form\Type\StripeGatewayConfigurationType as BaseStripeGatewayConfigurationType;

final class SyliusDirectStripePaymentConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return BaseStripeGatewayConfigurationType::class;
    }
}