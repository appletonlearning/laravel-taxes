<?php

namespace Appleton\Taxes\Countries\US\NewMexico\NewMexicoIncome;

use Carbon\Carbon;

class NewMexicoIncomeTest extends \TestCase
{
    public function testNewMexicoIncome2018WorkerA()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2018 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerA();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(270);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(7340.50);
        });

        $this->assertSame(4.77, $results->getTax(NewMexicoIncome::class));
    }

    public function testNewMexicoIncome2019WorkerA()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2019 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerA();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(270);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(7340.50);
        });

        $this->assertSame(4.78, $results->getTax(NewMexicoIncome::class));
    }

    public function testNewMexicoIncome2018WorkerB()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2018 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerB();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(785);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(17845);
        });

        $this->assertSame(17.87, $results->getTax(NewMexicoIncome::class));
    }

    public function testNewMexicoIncome2019WorkerB()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2019 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerB();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(785);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(17845);
        });

        $this->assertSame(17.87, $results->getTax(NewMexicoIncome::class));
    }

    public function testNewMexicoIncome2018WorkerC()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2018 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerC();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(365);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(10432.12);
        });

        $this->assertSame(2.44, $results->getTax(NewMexicoIncome::class));
    }

    public function testNewMexicoIncome2019WorkerC()
    {
        Carbon::setTestNow(
            Carbon::parse('January 1, 2019 8am', 'America/Chicago')->setTimezone('UTC')
        );

        $user = $this->createWorkerC();

        $results = $this->taxes->calculate(function ($taxes) use ($user) {
            $taxes->setHomeLocation($this->getLocation('us.new_mexico'));
            $taxes->setWorkLocation($this->getLocation('us.new_mexico'));
            $taxes->setUser($user);
            $taxes->setEarnings(365);
            $taxes->setPayPeriods(52);
            $taxes->setYtdEarnings(10432.12);
        });

        $this->assertSame(2.44, $results->getTax(NewMexicoIncome::class));
    }
}
