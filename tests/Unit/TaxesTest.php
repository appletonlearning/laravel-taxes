<?php

namespace Appleton\Taxes\Classes;

use Appleton\Taxes\Classes\Payroll;
use Appleton\Taxes\Countries\US\Alabama\AlabamaIncome\AlabamaIncome;
use Appleton\Taxes\Countries\US\Georgia\GeorgiaIncome\GeorgiaIncome;
use Appleton\Taxes\Countries\US\Alabama\AlabamaUnemployment\AlabamaUnemployment;
use Appleton\Taxes\Countries\US\Alabama\BirminghamOccupational\BirminghamOccupational;
use Appleton\Taxes\Countries\US\FederalIncome\FederalIncome;
use Appleton\Taxes\Countries\US\FederalUnemployment\FederalUnemployment;
use Appleton\Taxes\Countries\US\Georgia\GeorgiaUnemployment\GeorgiaUnemployment;
use Appleton\Taxes\Countries\US\Medicare\Medicare;
use Appleton\Taxes\Countries\US\Medicare\MedicareEmployer;
use Appleton\Taxes\Countries\US\SocialSecurity\SocialSecurity;
use Appleton\Taxes\Countries\US\SocialSecurity\SocialSecurityEmployer;
use Appleton\Taxes\Models\Countries\US\Alabama\AlabamaIncomeTaxInformation;
use Appleton\Taxes\Models\Countries\US\FederalIncomeTaxInformation;
use Carbon\Carbon;
use Illuminate\Contracts\Container\BindingResolutionException;

class TaxesTest extends \TestCase
{
    public function testTaxes()
    {
        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(7.55, $results->getTax(FederalIncome::class));
        $this->assertSame(0.40, $results->getTax(FederalUnemployment::class));
        $this->assertSame(0.97, $results->getTax(Medicare::class));
        $this->assertSame(0.97, $results->getTax(MedicareEmployer::class));
        $this->assertSame(4.13, $results->getTax(SocialSecurity::class));
        $this->assertSame(4.13, $results->getTax(SocialSecurityEmployer::class));
        $this->assertSame(2.03, $results->getTax(AlabamaIncome::class));
        $this->assertSame(1.80, $results->getTax(AlabamaUnemployment::class));
        $this->assertSame(0.67, $results->getTax(BirminghamOccupational::class));

        Carbon::setTestNow(
            Carbon::parse('January 1, 2018 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.georgia'));
            $taxes->setWorkLocation($this->getLocation('us.georgia'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(0);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(2.21, $results->getTax(GeorgiaIncome::class));
        $this->assertSame(1.80, $results->getTax(GeorgiaUnemployment::class));
    }

    public function testTaxesYtdEarnings()
    {
        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setYtdEarnings(7000);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(0.0, $results->getTax(FederalUnemployment::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setYtdEarnings(8000);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(0.0, $results->getTax(FederalUnemployment::class));
        $this->assertSame(0.0, $results->getTax(AlabamaUnemployment::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setYtdEarnings(127200);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(0.0, $results->getTax(FederalUnemployment::class));
        $this->assertSame(0.0, $results->getTax(AlabamaUnemployment::class));
        $this->assertSame(0.0, $results->getTax(SocialSecurity::class));
        $this->assertSame(0.0, $results->getTax(SocialSecurityEmployer::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setYtdEarnings(200000);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(7.55, $results->getTax(FederalIncome::class));
        $this->assertSame(1.57, $results->getTax(Medicare::class));
        $this->assertSame(0.97, $results->getTax(MedicareEmployer::class));
        $this->assertSame(2.03, $results->getTax(AlabamaIncome::class));
        $this->assertSame(0.0, $results->getTax(AlabamaUnemployment::class));
        $this->assertSame(0.67, $results->getTax(BirminghamOccupational::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setYtdEarnings(500000);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(7.55, $results->getTax(FederalIncome::class));
        $this->assertSame(1.57, $results->getTax(Medicare::class));
        $this->assertSame(0.97, $results->getTax(MedicareEmployer::class));
        $this->assertSame(2.03, $results->getTax(AlabamaIncome::class));
        $this->assertSame(0.0, $results->getTax(AlabamaUnemployment::class));
        $this->assertSame(0.67, $results->getTax(BirminghamOccupational::class));
    }

    public function testTaxesUnresolvableDate()
    {
        $this->expectExceptionMessage('The implementation could not be found.');

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->subMonth());
        });
    }

    public function testTaxesNoUser()
    {
        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser(null);
            $taxes->setEarnings(66.68);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        $this->assertSame(6.88, $results->getTax(FederalIncome::class));
        $this->assertSame(0.40, $results->getTax(FederalUnemployment::class));
        $this->assertSame(0.97, $results->getTax(Medicare::class));
        $this->assertSame(0.97, $results->getTax(MedicareEmployer::class));
        $this->assertSame(4.13, $results->getTax(SocialSecurity::class));
        $this->assertSame(4.13, $results->getTax(SocialSecurityEmployer::class));
        $this->assertSame(2.07, $results->getTax(AlabamaIncome::class));
        $this->assertSame(1.80, $results->getTax(AlabamaUnemployment::class));
        $this->assertSame(0.67, $results->getTax(BirminghamOccupational::class));
    }

    public function testUnbindsPayrollAfter()
    {
        $this->expectException(BindingResolutionException::class);

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(66.68);
            $taxes->setSupplementalEarnings(6.68);
            $taxes->setPayPeriods(260);
            $taxes->setDate(Carbon::now()->addMonth());
        });

        app(Payroll::class);
    }

    public function testNoPayroll()
    {
        $this->assertTrue(FederalIncome::WITHHELD);
    }

    public function testAdditionalWithholding()
    {
        FederalIncomeTaxInformation::forUser($this->user)->update(['additional_withholding' => 10]);
        AlabamaIncomeTaxInformation::forUser($this->user)->update(['additional_withholding' => 10]);

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(10);
        });

        $this->assertSame(10.0, $results->getTax(FederalIncome::class));
        $this->assertSame(0.0, $results->getTax(AlabamaIncome::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(11);
        });

        $this->assertSame(10.0, $results->getTax(FederalIncome::class));
        $this->assertSame(0.16, $results->getTax(AlabamaIncome::class));
    }

    public function testNegativeAdditionalWithholding()
    {
        FederalIncomeTaxInformation::forUser($this->user)->update(['additional_withholding' => -10]);
        AlabamaIncomeTaxInformation::forUser($this->user)->update(['additional_withholding' => -10]);

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(10);
        });

        $this->assertSame(0.0, $results->getTax(FederalIncome::class));
        $this->assertSame(0.0, $results->getTax(AlabamaIncome::class));

        $results = $this->taxes->calculate(function ($taxes) {
            $taxes->setHomeLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setWorkLocation($this->getLocation('us.alabama.birmingham'));
            $taxes->setUser($this->user);
            $taxes->setEarnings(11);
        });

        $this->assertSame(0.0, $results->getTax(FederalIncome::class));
        $this->assertSame(0.0, $results->getTax(AlabamaIncome::class));
    }
}
