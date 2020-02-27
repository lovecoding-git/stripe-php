<?php

namespace Stripe\Service\Issuing;

/**
 * Factory class for services for API resources in the `issuing` namespace.
 *
 * @property CardholderService $cardholders
 * @property CardService $cards
 */
class IssuingServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /** @var array<string, string> */
    private static $classMap = [
        'cardholders' => CardholderService::class,
        'cards' => CardService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
