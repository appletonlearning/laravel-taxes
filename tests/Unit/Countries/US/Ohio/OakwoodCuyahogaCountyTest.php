<?php

namespace Appleton\Taxes\Unit\Countries\US\Ohio;

use Appleton\Taxes\Countries\US\Ohio\OakwoodCuyahogaCounty\OakwoodCuyahogaCounty;
use Carbon\Carbon;
use TestCase;

class OakwoodCuyahogaCountyTest extends TestCase
{
    public function testOakwoodCuyahogaCounty()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.ohio.oakwood_cuyahoga_county'));
            $taxes->setWorkLocation($this->getLocation('us.ohio.oakwood_cuyahoga_county'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(7.50, $results->getTax(OakwoodCuyahogaCounty::class));
    }
}