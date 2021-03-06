<?php

namespace Appleton\Taxes\Countries\US\Michigan\MichiganCityTaxes\WalkerTax;

use Appleton\Taxes\Countries\US\Michigan\MichiganCityTaxes\MichiganCityTax;

abstract class WalkerTax extends MichiganCityTax
{
    private const CITY_NAME = 'Walker';

    protected static function getCityName(): string
    {
        return self::CITY_NAME;
    }
}
