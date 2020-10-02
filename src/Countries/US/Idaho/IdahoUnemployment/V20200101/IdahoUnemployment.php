<?php

namespace Appleton\Taxes\Countries\US\Idaho\IdahoUnemployment\V20200101;

use Appleton\Taxes\Classes\WorkerTaxes\Payroll;
use Appleton\Taxes\Countries\US\Idaho\IdahoUnemployment\IdahoUnemployment as BaseIdahoUnemployment;

class IdahoUnemployment extends BaseIdahoUnemployment
{
    const FUTA_CREDIT = 0.054;
    const NEW_EMPLOYER_RATE = 0.01;
    const WAGE_BASE = 41600;

    public function __construct(Payroll $payroll)
    {
        parent::__construct($payroll);
        $this->tax_rate = config('taxes.rates.us.idaho.unemployment', static::NEW_EMPLOYER_RATE);
    }
}
