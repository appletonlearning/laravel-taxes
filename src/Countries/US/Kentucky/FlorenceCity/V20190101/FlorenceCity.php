<?php

namespace Appleton\Taxes\Countries\US\Kentucky\FlorenceCity\V20190101;

use Appleton\Taxes\Countries\US\Kentucky\FlorenceCity\FlorenceCity as BaseFlorenceCity;
use Appleton\Taxes\Traits\HasWageBase;

class FlorenceCity extends BaseFlorenceCity
{
    use HasWageBase;

    const TAX_RATE = 0.02;
    const WAGE_BASE = 132900;
}
