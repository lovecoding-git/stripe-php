<?php

namespace Stripe\Service;

/**
 * Factory class for "core" services, i.e. services for API resources in the
 * root namespace.
 *
 * @property CouponService $coupons
 * @property FileService $files
 * @property Issuing\IssuingServiceFactory $issuing
 * @property PaymentIntentService $paymentIntents
 */
class CoreServiceFactory extends AbstractServiceFactory
{
    /** @var array<string, string> */
    private static $classMap = [
        'coupons' => CouponService::class,
        'files' => FileService::class,
        'paymentIntents' => PaymentIntentService::class,

        'issuing' => Issuing\IssuingServiceFactory::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
