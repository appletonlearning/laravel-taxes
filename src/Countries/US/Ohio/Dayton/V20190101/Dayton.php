<?php

namespace Appleton\Taxes\Countries\US\Ohio\Dayton\V20190101;

use Appleton\Taxes\Countries\US\Ohio\Dayton\Dayton as BaseDayton;
use Illuminate\Database\Eloquent\Collection;

class Dayton extends BaseDayton
{
    public const TAX_RATE = 0.025;

    public function compute(Collection $tax_areas)
    {
        $this->tax_total = $this->payroll->withholdTax($this->payroll->getEarnings() * static::TAX_RATE);
        return round($this->tax_total, 2);
    }
}
