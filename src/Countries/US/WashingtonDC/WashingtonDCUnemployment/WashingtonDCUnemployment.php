<?php
namespace Appleton\Taxes\Countries\US\WashingtonDC\WashingtonDCUnemployment;

use Appleton\Taxes\Classes\WorkerTaxes\Taxes\BaseStateUnemployment;

class WashingtonDCUnemployment extends BaseStateUnemployment
{
    const TYPE = 'state';
    const WITHHELD = false;
    const STATE = 'DC';
}
