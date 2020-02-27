<?php

namespace Stripe;

/**
 * @property \Stripe\Service\CouponService $coupons
 * @property \Stripe\Service\FileService $files
 * @property \Stripe\Service\Issuing\IssuingServiceFactory $issuing
 * @property \Stripe\Service\PaymentSourceService $paymentSources
 */
class StripeClient extends BaseStripeClient
{
    /** @var \Stripe\Service\CoreServiceFactory */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \Stripe\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}
