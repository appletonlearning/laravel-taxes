<?php

namespace Appleton\Taxes\Providers;

use Appleton\Taxes\Classes\Payroll;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class TaxServiceProvider extends ServiceProvider
{
    protected $defer = true;

    protected $interfaces = [
        \Appleton\Taxes\Countries\US\FederalIncome\FederalIncome::class,
        \Appleton\Taxes\Countries\US\FederalUnemployment\FederalUnemployment::class,
        \Appleton\Taxes\Countries\US\Medicare\Medicare::class,
        \Appleton\Taxes\Countries\US\Medicare\MedicareEmployer::class,
        \Appleton\Taxes\Countries\US\SocialSecurity\SocialSecurity::class,
        \Appleton\Taxes\Countries\US\SocialSecurity\SocialSecurityEmployer::class,
        \Appleton\Taxes\Countries\US\Alabama\AlabamaIncome\AlabamaIncome::class,
        \Appleton\Taxes\Countries\US\Alabama\AlabamaUnemployment\AlabamaUnemployment::class,
        \Appleton\Taxes\Countries\US\Alabama\AttallaOccupational\AttallaOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\AuburnOccupational\AuburnOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\BearCreekOccupational\BearCreekOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\BeavertonOccupational\BeavertonOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\BessemerOccupational\BessemerOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\BirminghamOccupational\BirminghamOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\BrilliantOccupational\BrilliantOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\FairfieldOccupational\FairfieldOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\FortDepositOccupational\FortDepositOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\GadsdenOccupational\GadsdenOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\GlencoeOccupational\GlencoeOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\GoodwaterOccupational\GoodwaterOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\GuinOccupational\GuinOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\HackleburgOccupational\HackleburgOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\HaleyvilleOccupational\HaleyvilleOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\HamiltonOccupational\HamiltonOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\HobsonCityOccupational\HobsonCityOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\IrondaleOccupational\IrondaleOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\LeedsOccupational\LeedsOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\LynnOccupational\LynnOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\MaconCountyOccupational\MaconCountyOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\MidfieldOccupational\MidfieldOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\MossesOccupational\MossesOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\OpelikaOccupational\OpelikaOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\RainbowCityOccupational\RainbowCityOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\RedBayOccupational\RedBayOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\ShorterOccupational\ShorterOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\SouthsideOccupational\SouthsideOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\SulligentOccupational\SulligentOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\TarrantOccupational\TarrantOccupational::class,
        \Appleton\Taxes\Countries\US\Alabama\TuskegeeOccupational\TuskegeeOccupational::class,
        \Appleton\Taxes\Countries\US\Arizona\ArizonaIncome\ArizonaIncome::class,
        \Appleton\Taxes\Countries\US\Arizona\ArizonaUnemployment\ArizonaUnemployment::class,
        \Appleton\Taxes\Countries\US\California\CaliforniaDisabilityInsurance\CaliforniaDisabilityInsurance::class,
        \Appleton\Taxes\Countries\US\California\CaliforniaEmploymentTrainingTax\CaliforniaEmploymentTrainingTax::class,
        \Appleton\Taxes\Countries\US\California\CaliforniaIncome\CaliforniaIncome::class,
        \Appleton\Taxes\Countries\US\California\CaliforniaUnemployment\CaliforniaUnemployment::class,
        \Appleton\Taxes\Countries\US\Colorado\ColoradoIncome\ColoradoIncome::class,
        \Appleton\Taxes\Countries\US\Colorado\ColoradoUnemployment\ColoradoUnemployment::class,
        \Appleton\Taxes\Countries\US\Georgia\GeorgiaIncome\GeorgiaIncome::class,
        \Appleton\Taxes\Countries\US\Georgia\GeorgiaUnemployment\GeorgiaUnemployment::class,
        \Appleton\Taxes\Countries\US\Illinois\IllinoisIncome\IllinoisIncome::class,
        \Appleton\Taxes\Countries\US\Illinois\IllinoisUnemployment\IllinoisUnemployment::class,
        \Appleton\Taxes\Countries\US\Indiana\IndianaIncome\IndianaIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\IndianaUnemployment\IndianaUnemployment::class,
        \Appleton\Taxes\Countries\US\Indiana\AdamsIncome\AdamsIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\AllenIncome\AllenIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\BartholomewIncome\BartholomewIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\BentonIncome\BentonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\BlackfordIncome\BlackfordIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\BooneIncome\BooneIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\BrownIncome\BrownIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\CarrollIncome\CarrollIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\CassIncome\CassIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ClarkIncome\ClarkIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ClayIncome\ClayIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ClintonIncome\ClintonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\CrawfordIncome\CrawfordIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DaviessIncome\DaviessIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DearbornIncome\DearbornIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DecaturIncome\DecaturIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DeKalbIncome\DeKalbIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DelawareIncome\DelawareIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\DuboisIncome\DuboisIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ElkhartIncome\ElkhartIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\FayetteIncome\FayetteIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\FloydIncome\FloydIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\FountainIncome\FountainIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\FranklinIncome\FranklinIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\FultonIncome\FultonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\GibsonIncome\GibsonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\GrantIncome\GrantIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\GreeneIncome\GreeneIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HamiltonIncome\HamiltonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HancockIncome\HancockIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HarrisonIncome\HarrisonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HendricksIncome\HendricksIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HenryIncome\HenryIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HowardIncome\HowardIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\HuntingtonIncome\HuntingtonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JacksonIncome\JacksonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JasperIncome\JasperIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JayIncome\JayIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JeffersonIncome\JeffersonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JenningsIncome\JenningsIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\JohnsonIncome\JohnsonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\KnoxIncome\KnoxIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\KosciuskoIncome\KosciuskoIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\LaGrangeIncome\LaGrangeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\LakeIncome\LakeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\LaPorteIncome\LaPorteIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\LawrenceIncome\LawrenceIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MadisonIncome\MadisonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MarionIncome\MarionIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MarshallIncome\MarshallIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MartinIncome\MartinIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MiamiIncome\MiamiIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MonroeIncome\MonroeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MontgomeryIncome\MontgomeryIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\MorganIncome\MorganIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\NewtonIncome\NewtonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\NobleIncome\NobleIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\OhioIncome\OhioIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\OrangeIncome\OrangeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\OwenIncome\OwenIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ParkeIncome\ParkeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PerryIncome\PerryIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PikeIncome\PikeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PorterIncome\PorterIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PoseyIncome\PoseyIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PulaskiIncome\PulaskiIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\PutnamIncome\PutnamIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\RandolphIncome\RandolphIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\RipleyIncome\RipleyIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\RushIncome\RushIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ScottIncome\ScottIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\ShelbyIncome\ShelbyIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\SpencerIncome\SpencerIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\StarkeIncome\StarkeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\SteubenIncome\SteubenIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\StJosephIncome\StJosephIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\SullivanIncome\SullivanIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\SwitzerlandIncome\SwitzerlandIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\TippecanoeIncome\TippecanoeIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\TiptonIncome\TiptonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\UnionIncome\UnionIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\VanderburghIncome\VanderburghIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\VermillionIncome\VermillionIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\VigoIncome\VigoIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WabashIncome\WabashIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WarrenIncome\WarrenIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WarrickIncome\WarrickIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WashingtonIncome\WashingtonIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WayneIncome\WayneIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WellsIncome\WellsIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WhiteIncome\WhiteIncome::class,
        \Appleton\Taxes\Countries\US\Indiana\WhitleyIncome\WhitleyIncome::class,
        \Appleton\Taxes\Countries\US\Florida\FloridaUnemployment\FloridaUnemployment::class,
        \Appleton\Taxes\Countries\US\Tennessee\TennesseeUnemployment\TennesseeUnemployment::class,
        \Appleton\Taxes\Countries\US\Texas\TexasUnemployment\TexasUnemployment::class,
        \Appleton\Taxes\Countries\US\Kentucky\AdairvilleCity\AdairvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\AllenCounty\AllenCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\AshlandCity\AshlandCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\AuburnCity\AuburnCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BallardCounty\BallardCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BardstownCity\BardstownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BardwellCity\BardwellCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BathCounty\BathCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BeattyvilleCity\BeattyvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BellevueCity\BellevueCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BentonCity\BentonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BereaCity\BereaCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BooneCountyMentalHealth\BooneCountyMentalHealth::class,
        \Appleton\Taxes\Countries\US\Kentucky\BooneCountyOrdinance\BooneCountyOrdinance::class,
        \Appleton\Taxes\Countries\US\Kentucky\BooneCountySchoolDistrict\BooneCountySchoolDistrict::class,
        \Appleton\Taxes\Countries\US\Kentucky\BourbonCounty\BourbonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BowlingGreenCity\BowlingGreenCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BoydCounty\BoydCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BoyleCounty\BoyleCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BreathittCounty\BreathittCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\BrodheadCity\BrodheadCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BromleyCity\BromleyCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\BrownsvilleCity\BrownsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ButlerCounty\ButlerCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\CadizCity\CadizCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CaldwellCounty\CaldwellCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\CalvertCity\CalvertCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CamargoCity\CamargoCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CampbellsvilleCity\CampbellsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CarlisleCity\CarlisleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CatlettsburgCity\CatlettsburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CaveCity\CaveCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ClarkCounty\ClarkCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\ClarksonCity\ClarksonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ClayCity\ClayCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ClayCounty\ClayCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\ClintonCounty\ClintonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\CoalRunVillageCity\CoalRunVillageCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CrescentSpringsCity\CrescentSpringsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\CrittendenCounty\CrittendenCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\CynthianaCity\CynthianaCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\DanvilleCity\DanvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\DaviessCounty\DaviessCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\DawsonSpringsCity\DawsonSpringsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\DaytonCity\DaytonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\DryRidgeCity\DryRidgeCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EarlingtonCity\EarlingtonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EddyvilleCity\EddyvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EdgewoodCity\EdgewoodCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EdmontonCity\EdmontonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ElizabethtownCity\ElizabethtownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ElkhornCity\ElkhornCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ElktonCity\ElktonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ElsmereCity\ElsmereCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EminenceCity\EminenceCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ErlangerCity\ErlangerCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\EstillCounty\EstillCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\FayetteCountySchoolDistrict\FayetteCountySchoolDistrict::class,
        \Appleton\Taxes\Countries\US\Kentucky\FlemingsburgCity\FlemingsburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FlorenceCity\FlorenceCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FortMitchellCity\FortMitchellCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FortThomasCity\FortThomasCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FrankfortCity\FrankfortCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FranklinCity\FranklinCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\FranklinCounty\FranklinCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\FultonCity\FultonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GallatinCounty\GallatinCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\GarrardCounty\GarrardCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\GeorgetownCity\GeorgetownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GlasgowCity\GlasgowCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GrantCounty\GrantCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\GravesCounty\GravesCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\GraysonCity\GraysonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GraysonCounty\GraysonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\GreensburgCity\GreensburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GreenupCity\GreenupCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\GuthrieCity\GuthrieCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HancockCounty\HancockCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HarrisonCounty\HarrisonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HarrodsburgCity\HarrodsburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HartCounty\HartCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HartfordCity\HartfordCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HendersonCity\HendersonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HendersonCounty\HendersonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HickmanCity\HickmanCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HickmanCounty\HickmanCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HillviewCity\HillviewCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HodgenvilleCity\HodgenvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HopkinsCounty\HopkinsCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\HopkinsvilleCity\HopkinsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\HorseCaveCity\HorseCaveCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\IndependenceCity\IndependenceCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\JacksonCity\JacksonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\JacksonCounty\JacksonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\JamestownCity\JamestownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\JeffersonCounty\JeffersonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\JeffersontownCity\JeffersontownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\JeffersonvilleCity\JeffersonvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\JessamineCounty\JessamineCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\JohnsonCounty\JohnsonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\JunctionCity\JunctionCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\KentuckyIncome\KentuckyIncome::class,
        \Appleton\Taxes\Countries\US\Kentucky\KentuckyUnemployment\KentuckyUnemployment::class,
        \Appleton\Taxes\Countries\US\Kentucky\KnoxCounty\KnoxCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LaGrangeCity\LaGrangeCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LakesideParkCity\LakesideParkCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LancasterCity\LancasterCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LaurelCounty\LaurelCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LebanonCity\LebanonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LebanonJunctionCity\LebanonJunctionCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LeitchfieldCity\LeitchfieldCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LeslieCounty\LeslieCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LewisburgCity\LewisburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\LexingtonFayetteUrbanCounty\LexingtonFayetteUrbanCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LincolnCounty\LincolnCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LivingstonCounty\LivingstonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LoganCounty\LoganCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\LudlowCity\LudlowCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MadisonCounty\MadisonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MadisonvilleCity\MadisonvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MagoffinCounty\MagoffinCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MarionCity\MarionCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MarionCounty\MarionCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MarshallCounty\MarshallCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MartinCity\MartinCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MartinCounty\MartinCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MayfieldCity\MayfieldCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MaysvilleCity\MaysvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\McCrackenCounty\McCrackenCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\McCrearyCounty\McCrearyCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\McKeeCity\McKeeCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MenifeeCounty\MenifeeCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MercerCounty\MercerCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MetcalfeCounty\MetcalfeCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MiddlesboroCity\MiddlesboroCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MidwayCity\MidwayCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MillersburgCity\MillersburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MonroeCounty\MonroeCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MontgomeryCounty\MontgomeryCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MoreheadCity\MoreheadCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MorganCounty\MorganCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\MorgantownCity\MorgantownCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MountOlivetCity\MountOlivetCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MountVernonCity\MountVernonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MountWashingtonCity\MountWashingtonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MuldraughCity\MuldraughCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MunfordvilleCity\MunfordvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\MurrayCity\MurrayCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\NicholasCounty\NicholasCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\NicholasvilleCity\NicholasvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\NortonvilleCity\NortonvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\OakGroveCity\OakGroveCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\OhioCounty\OhioCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\OliveHillCity\OliveHillCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\OwensboroCity\OwensboroCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\OwentonCity\OwentonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PaducahCity\PaducahCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PaintsvilleCity\PaintsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ParisCity\ParisCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ParkCity\ParkCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PendletonCounty\PendletonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\PerryCounty\PerryCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\PerryvilleCity\PerryvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PikeCounty\PikeCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\PikevilleCity\PikevilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PinevilleCity\PinevilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PioneerVillageCity\PioneerVillageCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PowellCounty\PowellCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\PrestonsburgCity\PrestonsburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PrincetonCity\PrincetonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\PulaskiCounty\PulaskiCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\RacelandCity\RacelandCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RadcliffCity\RadcliffCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RichmondCity\RichmondCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RobertsonCounty\RobertsonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\RockcastleCounty\RockcastleCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\RowanCounty\RowanCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\RussellCity\RussellCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RussellSpringsCity\RussellSpringsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RussellvilleCity\RussellvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\RylandHeightsCity\RylandHeightsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SalyersvilleCity\SalyersvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ScottCounty\ScottCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\ScottCountySchoolDistrict\ScottCountySchoolDistrict::class,
        \Appleton\Taxes\Countries\US\Kentucky\ScottsvilleCity\ScottsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ShelbyCounty\ShelbyCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\ShelbyvilleCity\ShelbyvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ShepherdsvilleCity\ShepherdsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ShivelyCity\ShivelyCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SilverGroveCity\SilverGroveCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SimpsonCounty\SimpsonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\SimpsonvilleCity\SimpsonvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SomersetCity\SomersetCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SouthgateCity\SouthgateCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\SpencerCounty\SpencerCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\SpringfieldCity\SpringfieldCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\StanfordCity\StanfordCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\StantonCity\StantonCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\StMatthewsCity\StMatthewsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\TaylorCounty\TaylorCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\TaylorMillCity\TaylorMillCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\TaylorsvilleCity\TaylorsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\ToddCounty\ToddCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\TompkinsvilleCity\TompkinsvilleCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\UnionCounty\UnionCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\VanceburgCity\VanceburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\VersaillesCity\VersaillesCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\VillaHillsCity\VillaHillsCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\VineGroveCity\VineGroveCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WarrenCounty\WarrenCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WarrenCountySchoolDistrict\WarrenCountySchoolDistrict::class,
        \Appleton\Taxes\Countries\US\Kentucky\WarsawCity\WarsawCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WashingtonCounty\WashingtonCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WayneCounty\WayneCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WestBuechelCity\WestBuechelCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WestLibertyCity\WestLibertyCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WestPointCity\WestPointCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WhitesburgCity\WhitesburgCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WhitleyCounty\WhitleyCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WilmoreCity\WilmoreCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WinchesterCity\WinchesterCity::class,
        \Appleton\Taxes\Countries\US\Kentucky\WolfeCounty\WolfeCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WoodfordCounty\WoodfordCounty::class,
        \Appleton\Taxes\Countries\US\Kentucky\WurtlandCity\WurtlandCity::class,
        \Appleton\Taxes\Countries\US\Louisiana\LouisianaIncome\LouisianaIncome::class,
        \Appleton\Taxes\Countries\US\Louisiana\LouisianaUnemployment\LouisianaUnemployment::class,
        \Appleton\Taxes\Countries\US\Maryland\MarylandIncome\MarylandIncome::class,
        \Appleton\Taxes\Countries\US\Maryland\MarylandUnemployment\MarylandUnemployment::class,
        \Appleton\Taxes\Countries\US\Maryland\Allegany\Allegany::class,
        \Appleton\Taxes\Countries\US\Maryland\AnneArundel\AnneArundel::class,
        \Appleton\Taxes\Countries\US\Maryland\Baltimore\Baltimore::class,
        \Appleton\Taxes\Countries\US\Maryland\BaltimoreCity\BaltimoreCity::class,
        \Appleton\Taxes\Countries\US\Maryland\Calvert\Calvert::class,
        \Appleton\Taxes\Countries\US\Maryland\Caroline\Caroline::class,
        \Appleton\Taxes\Countries\US\Maryland\Carroll\Carroll::class,
        \Appleton\Taxes\Countries\US\Maryland\Cecil\Cecil::class,
        \Appleton\Taxes\Countries\US\Maryland\Charles\Charles::class,
        \Appleton\Taxes\Countries\US\Maryland\Dorchester\Dorchester::class,
        \Appleton\Taxes\Countries\US\Maryland\Frederick\Frederick::class,
        \Appleton\Taxes\Countries\US\Maryland\Garrett\Garrett::class,
        \Appleton\Taxes\Countries\US\Maryland\Harford\Harford::class,
        \Appleton\Taxes\Countries\US\Maryland\Howard\Howard::class,
        \Appleton\Taxes\Countries\US\Maryland\Kent\Kent::class,
        \Appleton\Taxes\Countries\US\Maryland\Montgomery\Montgomery::class,
        \Appleton\Taxes\Countries\US\Maryland\PrinceGeorges\PrinceGeorges::class,
        \Appleton\Taxes\Countries\US\Maryland\QueenAnnes\QueenAnnes::class,
        \Appleton\Taxes\Countries\US\Maryland\StMarys\StMarys::class,
        \Appleton\Taxes\Countries\US\Maryland\Somerset\Somerset::class,
        \Appleton\Taxes\Countries\US\Maryland\Talbot\Talbot::class,
        \Appleton\Taxes\Countries\US\Maryland\Washington\Washington::class,
        \Appleton\Taxes\Countries\US\Maryland\Wicomico\Wicomico::class,
        \Appleton\Taxes\Countries\US\Maryland\Worcester\Worcester::class,
        \Appleton\Taxes\Countries\US\Massachusetts\MassachusettsFamilyMedicalLeave\MassachusettsFamilyMedicalLeave::class,
        \Appleton\Taxes\Countries\US\Massachusetts\MassachusettsFamilyMedicalLeaveEmployer\MassachusettsFamilyMedicalLeaveEmployer::class,
        \Appleton\Taxes\Countries\US\Massachusetts\MassachusettsIncome\MassachusettsIncome::class,
        \Appleton\Taxes\Countries\US\Massachusetts\MassachusettsWorkforceTrainingFund\MassachusettsWorkforceTrainingFund::class,
        \Appleton\Taxes\Countries\US\Massachusetts\MassachusettsUnemployment\MassachusettsUnemployment::class,
        \Appleton\Taxes\Countries\US\Michigan\MichiganIncome\MichiganIncome::class,
        \Appleton\Taxes\Countries\US\Michigan\MichiganUnemployment\MichiganUnemployment::class,
        \Appleton\Taxes\Countries\US\Mississippi\MississippiIncome\MississippiIncome::class,
        \Appleton\Taxes\Countries\US\Mississippi\MississippiUnemployment\MississippiUnemployment::class,
        \Appleton\Taxes\Countries\US\Nevada\NevadaUnemployment\NevadaUnemployment::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewarkPayroll\NewarkPayroll::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyDisabilityInsurance\NewJerseyDisabilityInsurance::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyDisabilityInsuranceEmployer\NewJerseyDisabilityInsuranceEmployer::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyFamilyMedicalLeave\NewJerseyFamilyMedicalLeave::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyIncome\NewJerseyIncome::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyUnemployment\NewJerseyUnemployment::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewJerseyUnemploymentInsurance\NewJerseyUnemploymentInsurance::class,
        \Appleton\Taxes\Countries\US\NewMexico\NewMexicoIncome\NewMexicoIncome::class,
        \Appleton\Taxes\Countries\US\NewMexico\NewMexicoUnemployment\NewMexicoUnemployment::class,
        \Appleton\Taxes\Countries\US\NewJersey\NewarkPayroll\NewarkPayroll::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkCity\NewYorkCity::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkDisabilityInsurance\NewYorkDisabilityInsurance::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkFamilyMedicalLeave\NewYorkFamilyMedicalLeave::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkIncome\NewYorkIncome::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkMetropolitanCommuterTransportationMobility\NewYorkMetropolitanCommuterTransportationMobility::class,
        \Appleton\Taxes\Countries\US\NewYork\NewYorkUnemployment\NewYorkUnemployment::class,
        \Appleton\Taxes\Countries\US\NewYork\Yonkers\Yonkers::class,
        \Appleton\Taxes\Countries\US\NorthCarolina\NorthCarolinaIncome\NorthCarolinaIncome::class,
        \Appleton\Taxes\Countries\US\NorthCarolina\NorthCarolinaUnemployment\NorthCarolinaUnemployment::class,
        \Appleton\Taxes\Countries\US\Ohio\OhioIncome\OhioIncome::class,
        \Appleton\Taxes\Countries\US\Ohio\OhioUnemployment\OhioUnemployment::class,
        \Appleton\Taxes\Countries\US\Oklahoma\OklahomaIncome\OklahomaIncome::class,
        \Appleton\Taxes\Countries\US\Oklahoma\OklahomaUnemployment\OklahomaUnemployment::class,
        \Appleton\Taxes\Countries\US\Virginia\VirginiaIncome\VirginiaIncome::class,
        \Appleton\Taxes\Countries\US\Virginia\VirginiaUnemployment\VirginiaUnemployment::class,
        \Appleton\Taxes\Countries\US\WashingtonDC\WashingtonDCIncome\WashingtonDCIncome::class,
        \Appleton\Taxes\Countries\US\WashingtonDC\WashingtonDCUnemployment\WashingtonDCUnemployment::class,
        \Appleton\Taxes\Countries\US\WestVirginia\WestVirginiaIncome\WestVirginiaIncome::class,
        \Appleton\Taxes\Countries\US\WestVirginia\WestVirginiaUnemployment\WestVirginiaUnemployment::class,
        \Appleton\Taxes\Countries\US\Wisconsin\WisconsinIncome\WisconsinIncome::class,
        \Appleton\Taxes\Countries\US\Wisconsin\WisconsinUnemployment\WisconsinUnemployment::class,
    ];

    private function getImplementations($interface)
    {
        return array_reverse(array_map('basename', glob(dirname((new \ReflectionClass($interface))->getFileName()) . '/V*', GLOB_ONLYDIR)));
    }

    private function resolveImplementation($interface, $date)
    {
        $basename = class_basename($interface);
        $namespace = substr($interface, 0, -strlen($basename) - 1);
        foreach ($this->getImplementations($interface) as $implementation) {
            if ($date->diffInDays(Carbon::createFromFormat('Ymd', substr($implementation, 1)), false) <= 0) {
                return $namespace . '\\' . $implementation . '\\' . $basename;
            }
        }
        throw new \Exception('The implementation could not be found.');
    }

    public function register()
    {
        $this->app->bind(
            \Appleton\Taxes\Classes\StateUnemployment::class,
            \Appleton\Taxes\Classes\BaseStateUnemployment::class
        );

        foreach ($this->interfaces as $interface) {
            $this->app->bind($interface, function ($app) use ($interface) {
                $payroll = $app->make(Payroll::class);
                $implementation = $this->resolveImplementation($interface, $payroll->date);

                return $app->make($implementation);
            });
        }
    }

    public function provides()
    {
        return $this->interfaces;
    }
}
