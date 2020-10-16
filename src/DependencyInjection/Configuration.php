<?php

declare(strict_types=1);

namespace Andynguyen\SyliusDirectStripePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('andynguyen_sylius_direct_stripe_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
