<?php

namespace Appleton\Taxes\Countries\US\Colorado\AuroraOccupationalPrivilegeEmployer\V20190101;

use Appleton\Taxes\Countries\US\Colorado\AuroraOccupationalPrivilegeEmployer\AuroraOccupationalPrivilegeEmployer as BaseAuroraOccupationalPrivilegeEmployer;
use Illuminate\Support\Facades\DB;
use stdClass;

class AuroraOccupationalPrivilegeEmployer extends BaseAuroraOccupationalPrivilegeEmployer
{
    private const MONTHLY_WAGE_AMOUNT = 250;
    private const MONTHLY_TAX_AMOUNT = 200;

    protected function getMonthlyWageAmountInDollars(): int
    {
        return self::MONTHLY_WAGE_AMOUNT;
    }

    protected function getMonthlyTaxAmountInCents(): int
    {
        return self::MONTHLY_TAX_AMOUNT;
    }

    protected function getLocalGovernmentalUnitArea(): stdClass
    {
        return DB::table('governmental_unit_areas')
            ->where('name', 'Aurora, CO')
            ->first();
    }
}
