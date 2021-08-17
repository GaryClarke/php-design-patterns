<?php

namespace App\Plans\Free;

use App\Plans\Plan as MasterPlan;

class Plan extends MasterPlan
{
    private const RATE = 0;
    protected array $features = ['50 emails', '50 contacts', 'No support. Ever. Bye'];

    public function getRate(): int
    {
        return self::RATE;
    }
}