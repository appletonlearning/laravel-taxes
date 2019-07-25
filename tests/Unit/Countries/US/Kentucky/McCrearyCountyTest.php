<?php

namespace Appleton\Taxes\Unit\Countries\US\Kentucky;

use Appleton\Taxes\Countries\US\Kentucky\McCrearyCounty\McCrearyCounty;
use Carbon\Carbon;
use TestCase;

class McCrearyCountyTest extends TestCase
{
    public function testMcCrearyCounty()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.kentucky.mccreary_county'));
            $taxes->setWorkLocation($this->getLocation('us.kentucky.mccreary_county'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(4.50, $results->getTax(McCrearyCounty::class));
    }
}