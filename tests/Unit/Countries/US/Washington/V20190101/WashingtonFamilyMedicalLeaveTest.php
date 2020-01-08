<?php

namespace Appleton\Taxes\Countries\US\Washington\V20190101;

use Appleton\Taxes\Countries\US\Washington\WashingtonFamilyMedicalLeave\WashingtonFamilyMedicalLeave;
use Appleton\Taxes\Tests\Unit\Countries\TaxTestCase;
use Appleton\Taxes\Tests\Unit\Countries\TestParameters;
use Appleton\Taxes\Tests\Unit\Countries\TestParametersBuilder;

class WashingtonFamilyMedicalLeaveTest extends TaxTestCase
{
    private const DATE = '2019-01-01';
    private const WASHINGTON_LOCATION = 'us.washington';
    private const ALABAMA_LOCATION = 'us.alabama';
    private const TAX_CLASS = WashingtonFamilyMedicalLeave::class;

    public function setUp(): void
    {
        parent::setUp();
        $this->query_runner->addTax(self::TAX_CLASS);
    }

    /**
     * @dataProvider provideTestData
     */
    public function testWashingtonFamilyMedicalLeaveTax(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    /**
     * @dataProvider provideTestDataOutOfArea
     */
    public function testWashingtonFamilyMedicalLeaveTaxOutOfArea(TestParameters $parameters): void
    {
        $this->validate($parameters);
    }

    public function provideTestData(): array
    {
        $builder = new TestParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            '00' => [
                $builder
                    ->setHomeLocation(self::WASHINGTON_LOCATION)
                    ->setWorkLocation(self::WASHINGTON_LOCATION)
                    ->setWagesInCents(35000)
                    ->setPaycheckTipAmount(625)
                    ->setTakehomeTipAmount(500)
                    ->setExpectedAmountInCents(86)
                    ->build()
            ],
            '01' => [
                $builder
                    ->setHomeLocation(self::WASHINGTON_LOCATION)
                    ->setWorkLocation(self::WASHINGTON_LOCATION)
                    ->setWagesInCents(35000)
                    ->setPaycheckTipAmount(100)
                    ->setTakehomeTipAmount(100)
                    ->setExpectedAmountInCents(88)
                    ->build()
            ],
            '02' => [
                $builder
                    ->setHomeLocation(self::WASHINGTON_LOCATION)
                    ->setWorkLocation(self::WASHINGTON_LOCATION)
                    ->setWagesInCents(35000)
                    ->setPaycheckTipAmount(800)
                    ->setTakehomeTipAmount(800)
                    ->setExpectedAmountInCents(85)
                    ->build()
            ],
        ];
    }

    public function provideTestDataOutOfArea(): array
    {
        $builder = new TestParametersBuilder();
        $builder
            ->setDate(self::DATE)
            ->setTaxClass(self::TAX_CLASS)
            ->setPayPeriods(52);

        return [
            '00' => [
                $builder
                    ->setHomeLocation(self::WASHINGTON_LOCATION)
                    ->setWorkLocation(self::ALABAMA_LOCATION)
                    ->setWagesInCents(35000)
                    ->setPaycheckTipAmount(800)
                    ->setTakehomeTipAmount(800)
                    ->setExpectedAmountInCents(0)
                    ->build()
            ],
            '01' => [
                $builder
                    ->setHomeLocation(self::WASHINGTON_LOCATION)
                    ->setWorkLocation(self::ALABAMA_LOCATION)
                    ->setWagesInCents(35000)
                    ->setPaycheckTipAmount(800)
                    ->setTakehomeTipAmount(800)
                    ->setExpectedAmountInCents(0)
                    ->build()
            ],
        ];
    }
}
