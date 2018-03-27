<?php

namespace Appleton\Taxes\Countries\US\SocialSecurity\V20180101;

class SocialSecurityEmployer extends SocialSecurity
{
    const WITHHELD = false;

    public function compute()
    {
        return round($this->getAdjustedEarnings() * static::TAX_RATE, 2);
    }
}