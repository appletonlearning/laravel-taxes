<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Kentucky\V20200101\local;

use Appleton\Taxes\Countries\US\Kentucky\PendletonCounty\PendletonCounty;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;

class PendletonCountyTest extends TaxTestCase
{
    private const DATE = '2020-01-01';
    private const LOCATION = 'us.kentucky.pendleton_county';
    private const TAX_CLASS = PendletonCounty::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    public function testTax(): void
    {
        $this->validate(
            (new TestParametersBuilder())->setDate(self::DATE)
                ->setHomeLocation(self::LOCATION)
                ->setTaxClass(self::TAX_CLASS)
                ->setPayPeriods(52)
                ->setWagesInCents(30000)
                ->setExpectedAmountInCents(300)
                ->build()
        );
    }
}
