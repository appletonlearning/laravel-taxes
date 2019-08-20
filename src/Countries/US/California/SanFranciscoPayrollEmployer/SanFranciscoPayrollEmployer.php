<?php

namespace Appleton\Taxes\Countries\US\California\SanFranciscoPayrollEmployer;

use Appleton\Taxes\Classes\BasePayrollState;
use Illuminate\Support\Collection;

abstract class SanFranciscoPayrollEmployer extends BasePayrollState
{
    abstract public function getStartAmount(): int;

    abstract public function getTaxAmount(): float;

    public function compute(Collection $tax_areas): float
    {
        $ytd_wages = $this->company_payroll->getYtdWages($tax_areas->first());
        $wages = $this->company_payroll->getWages($tax_areas->first());

        if ($ytd_wages + $wages < $this->getStartAmount()) {
            return 0.0;
        }

        $applicable_wages = $ytd_wages > $this->getStartAmount()
            ? $wages
            : $ytd_wages + $wages - $this->getStartAmount();

        return round($applicable_wages * $this->getTaxAmount(), 4);
    }

    public function getWages(Collection $tax_areas): float
    {
        return $this->company_payroll->getWages($tax_areas->first());
    }
}