<?php

namespace Appleton\Taxes\Unit\Countries\US\Ohio;

use Appleton\Taxes\Countries\US\Ohio\StLouisville\StLouisville;
use Carbon\Carbon;
use TestCase;

class StLouisvilleTest extends TestCase
{
    public function testStLouisville()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.ohio.st_louisville'));
            $taxes->setWorkLocation($this->getLocation('us.ohio.st_louisville'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(3.00, $results->getTax(StLouisville::class));
    }
}