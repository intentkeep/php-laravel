<?php

namespace App\Services;

class SubscriptionService
{
    public const BILLING_GRACE_PERIOD_DAYS = 14;

    public function activate(string $plan): string
    {
        if ($plan !== 'pro') {
            throw new \InvalidArgumentException('INVALID_PLAN');
        }
        return 'ACTIVE';
    }
}
