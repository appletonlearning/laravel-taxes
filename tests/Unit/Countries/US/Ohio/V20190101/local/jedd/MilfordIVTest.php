<?php

namespace Appleton\Taxes\Tests\Unit\Countries\US\Ohio\V20190101\JEDD;

use Appleton\Taxes\Countries\US\Ohio\JEDD\MilfordIV\MilfordIV;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;
use Appleton\Taxes\Tests\Unit\Countries\US\Ohio\JeddTaxTestCase;

class MilfordIVTest extends JeddTaxTestCase
{
    private const DATE = '2019-01-01';
    private const LOCATION = 'us.ohio';
    private const TAX_CLASS = MilfordIV::class;

    public function testTax(): void
    {
        $this->validate(
            (new TestParametersBuilder())
                ->setDate(self::DATE)
                ->setHomeLocation(self::LOCATION)
                ->setTaxClass(self::TAX_CLASS)
                ->setAdditionalTax(self::TAX_CLASS)
                ->setPayPeriods(52)
                ->setWagesInCents(30000)
                ->setExpectedAmountInCents(300)
                ->build()
        );
    }
}
