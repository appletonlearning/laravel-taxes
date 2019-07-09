<?php

namespace Appleton\Taxes\Unit\Countries\US\Kentucky;

use Appleton\Taxes\Countries\US\Kentucky\IndependenceCity\IndependenceCity;
use Carbon\Carbon;
use TestCase;

class IndependenceCityTest extends TestCase
{
    public function testIndependenceCity()
    {
        Carbon::setTestNow(Carbon::parse('2019-02-01'));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.kentucky.independence_city'));
            $taxes->setWorkLocation($this->getLocation('us.kentucky.independence_city'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(300);
            $taxes->setPayPeriods(52);
        });

        $this->assertSame(3.75, $results->getTax(IndependenceCity::class));
    }
}
