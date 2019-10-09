<?php

namespace Appleton\Taxes\Countries\US\Vermont\VermontUnemployment\V20190101;

use Appleton\Taxes\Classes\Payroll;
use Appleton\Taxes\Countries\US\Vermont\VermontUnemployment\VermontUnemployment as BaseVermontUnemployment;

class VermontUnemployment extends BaseVermontUnemployment
{
    public const NEW_EMPLOYER_RATE = 0.01;
    public const WAGE_BASE = 15600;

    public function __construct(Payroll $payroll)
    {
        parent::__construct($payroll);
        $this->tax_rate = config('taxes.rates.us.vermont.unemployment', static::NEW_EMPLOYER_RATE);
    }
}