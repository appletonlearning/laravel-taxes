<?php

namespace Appleton\Taxes\Unit\Countries\US\Ohio;

use Appleton\Taxes\Countries\US\Ohio\Gahanna\Gahanna;
use Carbon\Carbon;
use TestCase;

class GahannaTest extends TestCase
{
    public function testGahanna()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.ohio.gahanna'));
            $taxes->setWorkLocation($this->getLocation('us.ohio.gahanna'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(7.50, $results->getTax(Gahanna::class));
    }
}