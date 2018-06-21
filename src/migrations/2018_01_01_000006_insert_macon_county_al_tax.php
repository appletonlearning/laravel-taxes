<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Appleton\Taxes\Countries\US\Alabama\MaconCountyOccupational\MaconCountyOccupational;

class InsertMaconCountyAlTax extends Migration
{
    protected $governmental_unit_areas = 'governmental_unit_areas';
    protected $tax_areas = 'tax_areas';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Macon County, AL',
            'area' => '0106000020E6100000010000000103000000010000003D01000098DA5207798155C00E85CFD6C135404029780AB9528155C033A6608DB335404074B169A5108155C0B30B06D7DC354040533A58FFE78055C07636E49F193640404F0306499F8055C008910C39B6364040AA5FE97C788055C00518963FDF364040F7C610001C8055C09700FC53AA364040B9533A58FF7F55C0F2B391EBA6364040527B116DC77F55C017601F9DBA36404056629E95B47F55C04565C39ACA3640402650C422867F55C03410CB660E374040E36DA5D7667F55C0A437DC476E3740405C548B88627F55C0910C39B69E374040218D0A9C6C7F55C0EA059FE6E4374040334FAE29907F55C0D31055F833384040075DC2A1B77F55C0E8A1B60DA338404041446ADAC57F55C099D53BDC0E39404084F3A963957F55C0C26C020CCB3940403CBF28417F7F55C0B1C05774EB394040E8BF07AF5D7F55C0F9A067B3EA394040B96C74CE4F7F55C03DD52137C3394040A7EA1ED95C7F55C010CB660E493940404C4EED0C537F55C0D7A3703D0A39404075FF58880E7F55C0E066F16261384040A81C93C5FD7E55C000E2AE5E4538404059147651F47E55C06F9C14E63D38404032E6AE25E47E55C0923EADA23F38404016F549EEB07E55C09E60FF756E38404016670C73827E55C0143FC6DCB5384040B398D87C5C7E55C0B265F9BA0C39404015FC36C4787E55C05322895E4639404041B96DDFA37E55C00744882B67394040962023A0C27E55C0075A8121AB394040EAC891CEC07E55C029EB3713D339404069E1B20A9B7E55C0D6726726183A4040C2D84290837E55C09D616A4B1D3A40402C4833164D7E55C0F4A276BF0A3A404081902C60027E55C0821953B0C6394040CE6BEC12D57D55C0D1E4620CAC394040083D9B559F7D55C023F59ECA69394040B1C1C2499A7D55C0EE974F560C394040D3BEB9BF7A7D55C0183DB7D095384040AB59677C5F7D55C06AA4A5F276384040545051F52B7D55C0ACAA97DF693840406BED7DAA0A7D55C0E7C589AF7638404018CBF44BC47C55C050711C78B5384040B2F50CE1987C55C02CD505BCCC384040723106D6717C55C04CF8A57EDE384040FCA9F1D24D7C55C0497F2F85073940401137A792017C55C08BFED0CC93394040A7CCCD37A27B55C0FFE89B340D3A40408C63247B847B55C0DB183BE1253A40402E52280B5F7B55C09D2D20B41E3A404055F99E91087B55C0570740DCD5394040AF415F7AFB7955C0320400C79E394040A54A94BDA57955C0AAED26F8A6394040FEF0F3DF837955C0F3E49A029939404091B586527B7955C0CD21A9859239404088F19A57757955C07C6308008E394040DA38622D3E7955C05D34643C4A394040910BCEE0EF7855C0F9A23D5E48394040326FD575A87855C08E7747C66A394040A70183A44F7855C0D15966118A394040F564FED1377855C0B01EF7ADD639404082ACA7565F7855C0124E0B5EF43940403A3AAE46767855C04609FA0B3D3A4040DFA7AAD0407855C0E605D847A73A40404D486B0C3A7855C043ACFE08C33A40403049658A397855C0D09A1F7F693B404063B48EAA267855C0A0C4E74EB03B4040DA70581AF87755C036C64E78093C4040FE60E0B9F77755C02BBF0CC6883C40407E18213CDA7755C04BCB48BDA73C40409C508880437755C0670DDE57E53C4040390A1005337755C07FD767CEFA3C4040242713B70A7755C0BC3D0801F93C4040F2EA1C03B27655C07651F4C0C73C4040BBD05CA7917655C0B1A6B228EC3C404079AD84EE927655C0286211C30E3D4040664815C5AB7655C03594DA8B683D4040B0E42A16BF7655C0F546AD307D3D4040722F302B147755C09A081B9E5E3D40409F8EC70C547755C08499B67F653D4040E622BE13B37755C0E9EFA5F0A03D404029965B5A0D7855C044F98216123E4040F9B9A1293B7855C0C9C9C4AD823E40408A7615527E7855C02C0FD253E43E40409CDA19A6B67855C0EB18575C1C3F404023A0C211A47855C05EF415A4193F404041EDB776A27755C0A8DE1AD82A3F4040DA73999A047355C0C0401020433F4040802BD9B1117355C0A81B28F04E444040D7C05609167355C07E33315D88474040E08442041C7355C05D88D51F614A4040ABADD85F767255C0FCE3BD6A654A404004A9143B1A6F55C05B3D27BD6F4A404019AC38D55A6E55C07365506D704A4040703FE081016E55C039B874CC794A404045D7851F9C6D55C0B6D95889794A4040C78157CB9D6D55C0501BD5E9404C40409C3237DF886C55C0B7CD5488474C404038D55A98856C55C07D941117804A404071581AF8516A55C0A7ACA6EB894A4040C51A2E724F6A55C0D996016729494040072461DF4E6A55C0751DAA29C94840400DFB3DB14E6A55C07BA01518B248404039605793A76855C02AAC545051474040594E42E90B6755C09E279EB3054640408F6FEF1AF46555C00341800C1D4540407AF99D26336555C01381EA1F44444040DBFB54151A6555C04E621058394440400F5D50DF326455C0C79E3D97A9434040F2E84658546355C01F4AB4E4F142404075392520266255C0E3310395F141404077F69507E95F55C0B3D0CE6916404040CCE9B298D85F55C02DE8BD31044040403B17467A515F55C00F96B1A19B3F4040D192C7D3F25D55C0CC0A45BA9F3F40405296218E755C55C0CA6E66F4A33F4040F775E09C115C55C0969526A5A03F4040506D7022FA5B55C0B91B446B453D40401F7EFE7BF05B55C09B8C2AC3B83B4040BA9EE8BAF05B55C0F3716DA8183B4040FF3D78EDD25B55C089B5F814003740402A6D718DCF5B55C0FFC9DFBDA336404082FFAD64C75B55C0DB4B1AA3753440407EAA0A0DC45B55C074081C0934324040D6AA5D13D25B55C069E4F38AA7284040FAB48AFED05B55C0069E7B0F97284040E7AA798EC85B55C0A41820D104204040200A664CC15B55C0492EFF21FD1E4040399A232BBF5B55C0310917F2081E404050A73CBA116655C066D65240DA1D404066683C11C46955C0CD203EB0E31D404049810530656D55C045B9347EE11D4040342E1C08C97155C053CF8250DE1D4040546EA296E67255C08F183DB7D01D4040D93D7958A87655C0FD304278B41D4040310A82C7B77655C0C266800BB21D4040EDEF6C8FDE7655C0384C3448C11D404051BB5F05F87655C06A1492CCEA1D40408DB62A89EC7655C0F451465C001E40400188BB7A157755C05DDA70581A1E4040723271AB207755C020B58993FB1D4040B3412619397755C098874CF9101E404013B534B7427755C075931804561E404059164CFC517755C0CBF10A444F1E4040E23C9CC0747755C0230ED940BA1E40405CE2C803917755C067B62BF4C11E4040E597C118917755C030EF71A6091F4040F44F70B1A27755C0BBB72231411F4040F8F884ECBC7755C03F389F3A561F4040A69BC420B07755C0DCD3D51D8B1F404077BCC96FD17755C0988922A46E1F4040062B4EB5167855C0D446753A901F404005C078060D7855C02749D74CBE1F4040F3A8F8BF237855C081CEA44DD51F4040249529E6207855C06405BF0D31204040AA97DF69327855C07442E8A04B204040A19FA9D72D7855C08D28ED0DBE20404078EFA831217855C0895E46B1DC20404081E7DEC3257855C0B003E78C28214040BBB4E1B0347855C057207A5226214040AEEFC341427855C0F92D3A596A214040CD052E8F357855C0AAB9DC60A821404076DB85E63A7855C0F2B567960422404067EF8CB62A7855C0BB29E5B512224040AD33BE2F2E7855C0DFA7AAD040224040FCC401F4FB7755C0DCD7817346224040E5B33C0FEE7755C0068195438B2240406934B918037855C0C45DBD8A8C22404019AA622AFD7755C04B04AA7F102340401F477364E57755C0A4E194B9F9224040AD2EA704C47755C04209336DFF22404077BCC96FD17755C0BB9A3C6535234040A50F5D50DF7755C063EB19C23123404027A089B0E17755C01BB96E4A79234040143E5B07077855C0E315889E9423404099BB96900F7855C07F66101FD82340401AF8510DFB7755C0B1683A3B19244040E7A6CD380D7855C0530262122E24404046AF06280D7855C0753BFBCA83244040C154336B297855C0F19C2D20B42440401D8D43FD2E7855C024EF1CCA5025404048C2BE9D447855C0A986FD9E582540403E78EDD2867855C0F6285C8FC22540403BFF76D9AF7855C024456458C5254040475854C4E97855C0A65D4C33DD254040E04A766C047955C06A882AFC192640406F7F2E1A327955C0DFBE0E9C332640404CC3F011317955C07F30F0DC7B26404083DA6FED447955C082FFAD64C7264040828C800A477955C0F0164850FC264040E52329E9617955C0F775E09C112740402C0DFCA8867955C00458E4D70F2740409811DE1E847955C09EE925C632234040459C4EB2D57A55C0374E0AF31E234040FB1C1F2DCE7A55C072512D228A234040FA08FCE1E77A55C014083BC5AA234040B2F4A10BEA7A55C05B96AFCBF0234040A81C93C5FD7A55C0AF75A911FA234040D288997D1E7B55C09085E81038244040041A6CEA3C7B55C0105A0F5F2624404052280B5F5F7B55C065E1EB6B5D2440407FA4880CAB7B55C07711A628972440403E5DDDB1D87B55C001A08A1BB72440402E19C748F67B55C02FD978B0C52440402CB4739A057C55C0D2FE0758AB2440405723BBD2327C55C0AA2A3410CB24404097AAB4C5357C55C0ADDC0BCC0A2540400EBA84436F7C55C0FB21365838254040F65D11FC6F7C55C0CCD07822882540401BF33AE2907C55C012329067972540404B917C25907C55C0AD1402B9C425404037E15E99B77C55C0D590B8C7D2254040B3EBDE8AC47C55C0880FECF82F2640409BC937DBDC7C55C02063EE5A422640409CF6949C137D55C0774B72C0AE26404085EB51B81E7D55C03B014D840D274040EC4CA1F31A7D55C09CC1DF2F662740406422A5D93C7D55C089D00836AE2740409C84D217427D55C0923F1878EE274040D28BDAFD2A7D55C0A75B76887F2840401858C7F1437D55C0BD1B0B0A832840408121AB5B3D7D55C052F01472A5284040594DD7135D7D55C07E703E75AC2840406EBF7CB2627D55C038A0A52BD8284040438A01124D7D55C0C2A38D23D62840401E1840F8507D55C01B12F758FA28404086527B116D7D55C01E8A027D2229404093E00D69547D55C005685BCD3A294040B41A12F7587D55C04B033FAA612940405EBC1FB75F7D55C0D40CA9A2782940406EA46C91B47D55C0DB4E5B2382294040402D060FD37D55C0C03FA54A9429404050FC1873D77D55C0AC545051F529404062D520CCED7D55C062BB7B80EE294040728A8EE4F27D55C03EB0E3BF402A4040D45FAFB0E07D55C0F6949C137B2A40400F9BC8CC057E55C0284696CCB12A40401EA4A7C8217E55C0522AE109BD2A404038D6C56D347E55C09641B5C1892A404021E868554B7E55C0D0967329AE2A4040CB48BDA7727E55C041D653ABAF2A40406DFFCA4A937E55C08CF4A276BF2A40400CACE3F8A17E55C07A4FE5B4A72A404013286211C37E55C0020EA14ACD2A4040EE5A423EE87E55C0B29AAE27BA2A40400B941458007F55C096067E54C32A404001A5A146217F55C0A279008BFC2A404047A81952457F55C0F818AC38D52A40407FD93D79587F55C02DCE18E6042B40405AD5928E727F55C04BE7C3B3042B4040AB933314777F55C061FE0A992B2B4040328D2617637F55C0F99CBB5D2F2B4040496760E4657F55C018AF7955672B40407555A016837F55C022365838492B4040C5C551B9897F55C00A9FAD83832B404040DAFF006B7F55C09DF4BEF1B52B4040F71C588E907F55C006668522DD2B404070952710767F55C0A1F14410E72B4040770E65A88A7F55C0B0743E3C4B2C4040EDB60BCD757F55C0D4D51D8B6D2C404042EA76F6957F55C03F8C101E6D2C40400E4B033FAA7F55C0A0C211A4522C40400322C495B37F55C0651BB803752C404097E0D407927F55C0D906EE409D2C40409B3BFA5FAE7F55C061A75835082D4040239D8191977F55C0D5EAABAB022D4040E7A4F78DAF7F55C00551F701482D4040592F8672A27F55C063997E89782D4040205F4205877F55C0D15966118A2D4040321EA5129E7F55C0FC71FBE5932D40405307793D987F55C0077DE9EDCF2D4040A3CB9BC3B57F55C01A506F46CD2D40403673486AA17F55C06971C630272E404064E60297C77F55C0A9DBD9571E2E4040C74961DEE37F55C07AFF1F274C2E4040293FA9F6E97F55C0EA95B20C712E40409B5434D6FE7F55C07905A227652E404090F46915FD7F55C0D653ABAFAE2E4040315A4755138055C0BB44F5D6C02E40406F4562821A8055C0DEC83CF2072F4040E2AFC91AF57F55C01DC539EAE82E404024ED461FF37F55C075AE2825042F404063B48EAA268055C06536C824232F40406325E659498055C02D5915E1262F4040E0490B97558055C03DD00A0C592F404010919A76318055C01DCA5015532F40407E349C32378055C0689082A7902F404062484E266E8055C0E0B88C9B1A3040409F56D11F9A8055C01F12BEF73730404097FDBAD39D8055C0FB0626378A3040407495EEAEB38055C04AD1CABDC030404061FC34EECD8055C08D0A9C6C03314040560DC2DCEE8055C005172B6A3031404050508A56EE8055C0E63DCE3461314040B75D68AED38055C096CFF23CB8314040BDC62E51BD8055C024B37A87DB314040527B116DC78055C0ADA415DF50324040B2497EC4AF8055C0AE4676A565324040A1496249B98055C0224F92AE993240404B8DD0CFD48055C096AFCBF09F324040C5E1CCAFE68055C0EC6AF294D53240402BD8463CD98055C0C495B37746334040E04BE141B38055C00EB9196EC033404009DFFB1BB48055C07250C24CDB33404072309B00C38055C0828DEBDFF533404087DF4DB7EC8055C058E36C3A02344040A833F790F08055C074B0FECF613440403E59315C1D8155C0997FF44D9A3440409718CBF44B8155C02CD670917B3440408448861C5B8155C0EA025E66D83440403F6CE9D1548155C063601DC70F354040A0DFF76F5E8155C0A14ACD1E6835404002F22554708155C01781B1BE8135404098DA5207798155C00E85CFD6C1354040'
        ]);

        DB::table($this->tax_areas)->insert([[
            'name' => 'Macon County Occupational Tax',
            'tax' => MaconCountyOccupational::class,
            'governmental_unit_area_id' => $id,
        ]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table($this->tax_areas)->where('name', 'Macon County Occupational Tax')->delete();
        DB::table($this->governmental_unit_areas)->where('name', 'Macon County, AL')->delete();
    }
}