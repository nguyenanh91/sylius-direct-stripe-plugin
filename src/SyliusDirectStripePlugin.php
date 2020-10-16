<?php

declare(strict_types=1);

namespace Andynguyen\SyliusDirectStripePlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusDirectStripePlugin extends Bundle
{
    use SyliusPluginTrait;
}
