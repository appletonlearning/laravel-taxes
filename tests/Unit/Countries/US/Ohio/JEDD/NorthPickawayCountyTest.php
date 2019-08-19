<?php

namespace Appleton\Taxes\Unit\Countries\US\Ohio\JEDD;

use Appleton\Taxes\Countries\US\Ohio\JEDD\NorthPickawayCounty\NorthPickawayCounty;
use Carbon\Carbon;
use TestCase;

class NorthPickawayCountyTest extends TestCase
{
    public function testNorthPickawayCounty()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.ohio'));
            $taxes->setWorkLocation($this->getLocation('us.ohio'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
            $taxes->setAdditionalTaxes([NorthPickawayCounty::class]);
        });

        $this->assertSame(7.5, $results->getTax(NorthPickawayCounty::class));
    }
}