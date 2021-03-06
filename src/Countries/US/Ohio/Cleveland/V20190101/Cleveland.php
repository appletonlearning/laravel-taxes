<?php

namespace Appleton\Taxes\Countries\US\Ohio\Cleveland\V20190101;

use Appleton\Taxes\Countries\US\Ohio\Cleveland\Cleveland as BaseCleveland;
use Illuminate\Database\Eloquent\Collection;

class Cleveland extends BaseCleveland
{
    public const TAX_RATE = 0.025;

    public function compute(Collection $tax_areas)
    {
        $this->tax_total = $this->payroll->withholdTax($this->payroll->getEarnings() * static::TAX_RATE);
        return round($this->tax_total, 2);
    }
}
