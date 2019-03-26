<?php

use Appleton\Taxes\Countries\US\Maryland\MarylandIncome\MarylandIncome;
use Appleton\Taxes\Countries\US\Maryland\MarylandUnemployment\MarylandUnemployment;
use Appleton\Taxes\Models\TaxArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Appleton\Taxes\Countries\US\Maryland\Allegany\Allegany;

class CreateMarylandAlleganyLocalIncomeTax extends Migration
{
    protected $maryland_income_tax_information = 'maryland_income_tax_information';
    protected $governmental_unit_areas = 'governmental_unit_areas';
    protected $tax_areas = 'tax_areas';
    protected $taxes = 'taxes';

    public function up()
    {


        $allegany_gua_id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Allegany, MD',
            'area' => '0106000020E610000001000000010300000001000000F50100003BE3FBE252C453C0E7A562635EBD4340C16F438CD7C353C0535DC0CB0CBF43401B649291B3C353C0E2900DA48BBF4340E95E27F565C353C0575C1C959BC04340DEACC1FBAAC253C0798EC87729C343409E3F6D54A7C253C0E42D573F36C3434039ED293927C153C00BD0B69A75C84340C35F9335EABF53C098BF42E6CACC4340073E062B4EBF53C0E02A4F20ECCE43403655F7C8E6BD53C069A67B9DD4D343407689EAAD81BD53C0670C738236D54340E4F38AA71EBD53C0A4A833F790D64340056A317898BC53C078D1579066D84340EF4128366BBB53C07709000284DC43400B560DEB8CBA53C05A09E59484DC434045071613CDB953C099E6AA1385DC4340E69E00FFAFB853C06A250DD085DC434047AED8D0A5B653C0A7831D2987DC43403237CD4C65B653C05B8BBF5387DC4340EE592A1D1AB653C0CAA56E8587DC4340D5A00B1B9CB553C00842B3D887DC4340D4AB92162FB453C048A7E8C988DC4340905C3C69BCB353C0F662B01589DC4340D1DF769C87B253C0338CBFE189DC4340A55DA04F71B153C0681EA7998ADC434096A348433FB153C0FFB0B9BA8ADC434019A15A7F85AF53C0CC65A6DE8BDC4340837364FD84AF53C03147FCDE8BDC4340492D944C4EAE53C0054D4BAC8CDC4340B006C61F21AE53C07CE9C7608CDC4340F66D777436AD53C03BCB83D88ADC43408A1B4DB230AA53C05A771FCB85DC4340AF1D24EF20AA53C04469C6B085DC4340CC90793990A853C05EE9F51283DC4340B80AEE9F0FA753C00F2C139080DC4340B33F506EDBA453C0BA2EFCE07CDC4340CEC29E76F8A253C06725ADF886DC43409A3FA6B569A253C0F1D7648D7ADC43405718FBFF949F53C09CE8F9C081DC4340EAE923F0879D53C06725ADF886DC4340664D2CF0159C53C09D7DE5417ADC434018D7AD27369B53C0520AE4867ADC434043DAB2BB5B9853C0D91616687BDC434001D2B6FEF09553C0F647D9267CDC4340D1AFAD9FFE9553C0B0E2546B61DC434040F850A2259653C049641F6459DC43405471E316F39553C038691A14CDDB4340A723809BC59553C096E65608ABDB43403C670B08AD9553C02C8194D8B5DB4340486DE2E47E9553C0E3C281902CDC4340D097DEFE5C9553C0EF366F9C14DC43400113B875379553C0EED0B01875DB434081936DE00E9553C03D2828452BDB43405B41D3122B9553C0A71FD4450ADB43409A081B9E5E9553C0D617096D39DB4340F04FA912659553C059DAA9B9DCDA4340280EA0DFF79453C0ABCDFFAB8EDA434027124C35B39453C090D6187442DA4340FB20CB82899453C0AF415F7AFBD94340520E6613609453C09DB98784EFD9434077499C15519453C0C58EC6A17ED94340A0336953759453C0F94B8BFA24D94340077B1343729453C0F2B22616F8D843405643E21E4B9453C02172FA7ABED84340CAFB389A239453C07381CB63CDD843403A014D840D9453C047AAEFFCA2D843401551137D3E9453C0B8E4B8533AD84340093197546D9453C0081EDFDE35D8434019A88C7F9F9453C0969350FA42D843409B6F44F7AC9453C00F09DFFB1BD843409109F835929453C06A317898F6D74340352383DC459453C031B2648EE5D743407EFD101B2C9453C033E02C25CBD743407405DB88279453C097FDBAD39DD7434024D236FE449453C03CD68C0C72D74340EC4B361E6C9453C007B29E5A7DD74340C5E23785959453C0368DEDB5A0D743402C64AE0CAA9453C04301DBC188D74340DD240681959453C065DEAAEB50D74340971E4DF5649453C0DD42572250D743405BB56B425A9453C0FEB7921D1BD74340A65EB7088C9453C0306475ABE7D6434023128596759453C0F204C24EB1D643409CFBABC77D9453C0FAD2DB9F8BD6434071E2AB1DC59453C0D07F0F5EBBD64340F9BA0CFFE99453C0E2C798BB96D643405C55F65D119553C0D7C1C1DEC4D6434047AAEFFCA29553C01F84807C09D74340164F3DD2E09553C0FBCBEEC9C3D643404F39268BFB9553C0D4264EEE77D64340BE688F17D29553C0E126A3CA30D64340779FE3A3C59553C0B6B75B9203D6434059BE2EC37F9553C043E38920CED54340DB317557769553C0BC934F8F6DD543407CD28904539553C01ADD41EC4CD543409DD843FB589553C0868E1D54E2D443405C548B88629553C0F8FBC56CC9D4434082C5E1CCAF9553C0AEF36F97FDD44340BEBC00FBE89553C05DFB027AE1D44340EA76F695079653C0130B7C45B7D44340A8380EBC5A9653C0FF5BC98E8DD4434023BA675DA39653C0CD751A69A9D4434021753BFBCA9653C087FC3383F8D44340BA30D28BDA9653C0800BB265F9D44340BA2D910BCE9653C0D787F546ADD44340397D3D5FB39653C0317C444C89D4434096404AECDA9653C0A6ED5F5969D44340B8AD2D3C2F9753C07B6649809AD443400DDE57E5429753C09B90D61874D44340F84ECC7A319753C0280D350A49D4434089E942ACFE9653C03CBD529621D4434073840CE4D99653C05FB01BB62DD44340A2B437F8C29653C0D8D47954FCD3434034A0DE8C9A9653C0E6E44526E0D34340F6984869369653C04E0CC9C9C4D34340AE44A0FA079653C07B80EECB99D34340BAF605F4C29553C0C343183F8DD34340990AF148BC9553C09351651877D3434004AA7F10C99553C0016BD5AE09D34340B0E600C11C9653C05B41D3122BD34340BD19355F259653C0EDB4352218D3434026529ACDE39553C005C24EB16AD243406E30D461859553C06456EF703BD24340481630815B9553C09B8BBFED09D24340145AD6FD639553C0FEB5BC72BDD14340C84B584B5E9553C0ACF7DF5E78D1434021938C9C859653C0DEC5FB71FBD14340D53C47E4BB9653C01E4DF564FED1434062D520CCED9653C09947FE60E0D14340CF2D7425029753C0789961A3ACD143408E3BA583F59653C04259F8FA5AD143405B22179CC19653C0EF1CCA5015D143409B1E1494A29653C0F8DEDFA0BDD04340F6D1A92B9F9653C0EE073C3080D043408731E9EFA59653C0677DCA3159D0434077B988EFC49653C0DF6DDE3829D0434008707A17EF9653C0DEFFC70913D04340981249F4329753C0C458A65F22D04340C6D97404709753C06490BB0853D0434035D1E7A38C9753C0C440D7BE80D04340AA7EA5F3E19753C0033C69E1B2D04340D2FF722D5A9853C0BD38F1D58ED043404A09C1AA7A9853C07669C36169D04340F42F49658A9853C010035DFB02D04340A79201A08A9853C07BF486FBC8CF43405E2D7766829853C08D08C6C1A5CF4340CBD42478439853C026E318C91ECF434093399677D59753C02E3883BF5FCE434070B1A206D39753C059A835CD3BCE434080B74082E29753C027F73B1405CE4340F030ED9BFB9753C0B9196EC0E7CD4340FDBD141E349853C0C612D6C6D8CD43408E0244C18C9853C02B1213D4F0CD43402288F370029953C0AE2990D959CE4340D4B5F63E559953C0DDEC0F94DBCE4340E674594C6C9A53C0836BEEE87FCF434064575A46EA9A53C034828DEBDFCF4340435376FA419B53C01F645930F1CF4340A8C64B37899B53C040F67AF7C7CF43401D1D5723BB9B53C0A9F413CE6ECF4340C7F2AE7AC09B53C094BA641C23CF43409146054EB69B53C03BAA9A20EACE43401ADCD6169E9B53C027F56569A7CE4340223317B83C9B53C0890AD5CDC5CD43408DD0CFD4EB9A53C06840BD1935CD4340984F6EDAEA9A53C060E0E8DF33CD4340F8DF4A766C9A53C024EB707495CC434029029CDEC59953C0A98427F4FACB4340F086342A709953C0BE86E0B88CCB4340CBF10A444F9953C0054B75012FCB434061A3ACDF4C9953C0946A9F8EC7CA434044FB58C16F9953C0C0EB33677DCA434080F277EFA89953C03657CD7344CA434044300E2E1D9A53C0E658DE550FCA43403E74417DCB9A53C0452C62D861CA4340FDD8243FE29A53C088F19A5775CA4340B56CAD2F129B53C04E266E15C4CA43402429E961689B53C0ED80EB8A19CB4340E8D9ACFA5C9C53C0F6EE8FF7AACB43409BE447FC8A9C53C04ED2FC31ADCB43406F9A3E3BE09C53C000AAB8718BCB434089096AF8169D53C0D95BCAF962CB4340014A438D429D53C0B8AD2D3C2FCB434083F755B9509D53C0A0A3552DE9CA4340E620E868559D53C0C1DF2F664BCA43409605137F149D53C0573CF54883C94340895B0531D09C53C0B55208E412C9434075ADBD4F559C53C0A4A833F790C84340D0B2EE1F0B9C53C06C41EF8D21C843402C62D8614C9B53C08B321B6492C743409B745B22179B53C05B92037635C743406DE179A9D89A53C00740DCD5ABC64340327216F6B49A53C049641F6459C643401E51A1BAB99A53C0E36BCF2C09C64340F8359204E19A53C0668522DDCFC5434095D40968229B53C0CAF962EFC5C5434076FBAC32539B53C08D075BECF6C5434043C70E2A719B53C0D2F9F02C41C64340F697DD93879B53C08DB454DE8EC6434047904AB1A39B53C0902C6002B7C6434079758E01D99B53C03FC571E0D5C643409597FC4FFE9B53C038A0A52BD8C64340F3716DA8189C53C02829B000A6C643407A884677109C53C0B41A12F758C6434019A721AAF09B53C01EC18D942DC6434011A96917D39B53C04EB51666A1C54340AFD007CBD89B53C0F2CEA10C55C5434068ACFD9DED9B53C06D5512D907C5434040BE840A0E9C53C09ACFB9DBF5C44340E046CA16499C53C0E76B96CB46C54340971AA19FA99C53C0DD054A0A2CC6434005323B8BDE9C53C0AA4203B16CC643402EE411DC489D53C013B4C9E193C6434065355D4F749D53C00B0A83328DC64340462234828D9D53C06379573D60C6434010AD156D8E9D53C05DF7562426C64340CB48BDA7729D53C0234BE658DEC543400AA01859329D53C0B1FB8EE1B1C54340C860C5A9D69C53C08FA4A487A1C543405648F949B59C53C08CBE823463C543402B67EF8CB69C53C0F792C6681DC543405E2C0C91D39C53C0CB811E6ADBC44340001F8B0AF09C53C0075E2BF1DEC4434020B285571E9D53C0C9A48FADE4C44340DBBDDC27479D53C076DCF0BBE9C443401EA67D737F9D53C0B6D8EDB3CAC443401F7F69519F9D53C00249D8B793C443405A492BBEA19D53C055C1A8A44EC443409388F02F829D53C02CD2C43BC0C343400C9D67C2809D53C0ABC2C84B71C34340BE839F38809D53C0828FC18A53C3434078962023A09D53C06D3997E2AAC2434054A86E2EFE9D53C05DF7562426C243402D3F7095279E53C00A2FC1A90FC24340E49EAEEE589E53C08A71FE2614C243401FBC7669C39E53C051F701486DC24340CD74AF93FA9E53C0838593347FC24340FBB0DEA8159F53C0EAE6E26F7BC24340915ED4EE579F53C0419DF2E846C2434079C9FFE4EF9F53C05ED905836BC2434039D6C56D34A053C0A300513063C243406420CF2EDFA053C01BD82AC1E2C24340B821C66B5EA153C048A297512CC34340F2896CDC70A153C0958FFD8B2BC3434095F1BDEF7DA153C074FEDFFF2AC343400A815CE2C8A153C098DBBDDC27C343401421753BFBA253C005A4FD0FB0C243404A27124C35A353C01C7BF65CA6C24340BDAAB35A60A353C070438CD7BCC24340FD2D01F8A7A353C0C1012D5DC1C24340E9B6442E38A453C03D0D18247DC243400E4C6E1459A453C0FF8F13268CC2434093AB58FCA6A453C04D2CF015DDC24340ED461FF301A553C09013268C66C34340A3C684984BA553C07EFFE6C589C3434027A1B62D9BA553C0904A8F4792C343408578245E9EA553C03E95D39E92C343401A506F46CDA553C0E84CDA54DDC34340A8FC6B79E5A553C0A9BEF38B12C44340902FA182C3A553C0DD21C50089C443400BCF4BC5C6A553C02104E44BA8C44340008FA850DDA553C0244223D8B8C44340ACA8C1340CA653C01F680586ACC443404A7842AF3FA653C0BCE7C07284C44340D978B0C56EA653C08849B89047C44340E867EA758BA653C092E7FA3E1CC443401AFCFD62B6A653C01F2922C32AC44340596C938AC6A653C09D0FCF1264C44340D3F4D901D7A653C0D15625917DC44340DCFC4D0E41A753C076A28236C3C44340AB22DC6454A753C01EBFB7E9CFC44340ABCC94D6DFA753C057E6ADBA0EC543402958E36C3AA853C0452A8C2D04C54340445654383DA853C050773C82DAC44340996379573DA853C03E5DDDB1D8C443405EBC1FB75FA853C092B1DAFCBFC44340C0AC50A4FBA953C0D82AC1E270C4434058A0EB1C13AA53C0490A64197DC44340BFB7E9CF7EAA53C02C9B3924B5C443404417D4B7CCAA53C0FF3C0D1824C54340ABCE6A813DAB53C0795A7EE02AC5434072C284D1ACAB53C05CFFAECF9CC543401344DD0720AC53C0A79196CADBC5434055D80C7041AC53C082E49D4319C643409F3D97A949AC53C03BA583F57FC643409278793A57AC53C0C22FF5F3A6C64340E23C9CC074AC53C059BDC3EDD0C643404A44F81741AD53C057207A5226C7434090F63FC05AAD53C0C5C9FD0E45C74340E605D847A7AD53C019A721AAF0C743400FED6305BFAD53C0340D8AE601C84340D8254EB15FAE53C0DF1B9D5D2EC8434078D1579066AE53C0DB696B4430C84340B810FAD475AE53C0FB4C551E83C8434085ED27637CAE53C03F51D9B0A6C84340C03BF9F4D8AE53C0DBA50D87A5C943401686C8E9EBAE53C049809A5AB6CA4340D93C0E83F9AE53C05A9F724C16CB4340F581E49D43AF53C0FF0241800CCB4340AB3FC23060AF53C093DE37BEF6CA4340CD21A98592AF53C0873254C554CA43400C03965CC5AF53C0E84B6F7F2ECA43408505F7031EB053C0E55DF58079CA43402616F88A6EB053C09F8EC70C54CA434033A31F0DA7B053C0279EB30584CA43407380608E1EB153C09EE925C632CB4340C5C37B0E2CB153C0B43A394371CB43403BA6EECA2EB153C04EEFE2FDB8CB4340548D5E0D50B153C07AA86DC328CC4340DB148F8B6AB153C0C09481035ACC4340823AE5D18DB153C0177E703E75CC4340DB405BD7A2B153C0152B1B34A1CC43404FABE80FCDB153C0F17EDC7EF9CC43407F492A53CCB153C08602B68311CD434084640113B8B153C05373B9C150CD43404A24D1CB28B153C0E1783E03EACD434031ED9BFBABB053C0A88AA9F413CE43401D1F2DCE18B053C08BA548BE12CE43407CD0B359F5AF53C072A1F2AFE5CD434066DCD440F3AF53C05FECBDF8A2CD43404E4354E1CFAF53C0D2C1FA3F87CD43400516C09481AF53C065C5707500CE4340F6065F984CAF53C012BC218D0ACE434052094FE8F5AE53C013807F4A95CE43407E384888F2AE53C0EC4D0CC9C9CE434032AB77B81DAF53C0AED4B32094CF4340375B27D65DAF53C0B60FA7E7D4CF43408F368E588BAF53C09F8F32E202D04340AD855968E7AF53C0205D6C5A29D04340D4D51D8B6DB053C09FAD8383BDCF43405C902DCBD7B053C0D74B530438CF43405CC98E8D40B153C07590D78349CF4340780778D2C2B153C0EFC3414294CF43400BEC3191D2B153C05D6DC5FEB2CF43400BEC3191D2B153C0BC3AC780ECCF43404ADAC987B9B153C02DAFE09457D0434036E50AEF72B153C0B01F628385D14340E43449635AB153C05380E59AB6D14340CC28965B5AB153C085984BAAB6D14340FEC35F3A29B153C0936E9F24D4D14340F7AFAC3429B153C004E10A28D4D14340F946411929B153C08F0A1884D4D1434085949F54FBB053C04A06802A6ED243407008556AF6B053C075AF93FAB2D24340671998CBFCB053C03E152642D9D243405FEE93A300B153C00E130D52F0D24340FE7DC68503B153C0C9703C9F01D34340B980951427B153C059F5DC70ECD24340761EC4626CB153C043452D28C3D243402C616D8C9DB153C0E63922DFA5D2434020C5692ED1B153C006129E340FD243408881AE7D01B253C04CC2853C82D14340486E4DBA2DB253C0E864A9F57ED14340310400C79EB253C0213B6F63B3D14340D6623E8EDAB253C0A6D0877F89D1434007DF1F4BDEB253C0B08EFCE086D143403D4679E6E5B253C0359A5C8C81D143408236397CD2B253C0F430B43A39D1434072C119FCFDB253C00C5A48C0E8D043406C3B6D8D08B353C0DFA63FFB91D043401B834E081DB353C0E55DF58079D04340E57E87A240B353C0FAB5F5D37FD0434030B77BB94FB353C0F450DB8651D04340C632FD12F1B253C01405FA449ECE434018EAF6C3F0B253C0E27229A69ACE43403C122F4FE7B253C08AABCABE2BCE4340BBD23252EFB253C04C6A6803B0CD434033DC80CF0FB353C06939D0436DCD4340D026874F3AB353C0103FFF3D78CD4340718C648F50B353C00169FF03ACCD43400443243574B353C01F502FD2B7CD43408BFC7A4DC6B353C0A1023202D3CD43407928A0D3CBB353C0681285D6D4CD434068075C57CCB353C02E742502D5CD43403254C554FAB353C04CF8A57EDECC43408B97B863FAB353C0AA8AE416D9CC434085949F54FBB353C0B1A19BFD81CC4340354069A851B453C0DAC70A7E1BCC434012AD885B5EB453C0820EC8C2CFCB434078EC091963B453C04BF3587EB3CB434089EE59D768B453C00F45813E91CB434087889B53C9B453C08E0244C18CCB4340E84CDA54DDB453C0DBF7A8BF5ECB4340A5DFD61FE0B453C0E537FBCCA7CA43403EAE0D15E3B453C066F3380CE6C9434067D47C957CB453C0130EBDC5C3C94340C020E9D32AB453C0B9C4910722C94340D4B9A29410B453C07FA4880CABC84340352383DC45B453C090BA9D7DE5C743406E3315E291B453C0A2CEDC43C2C74340DF8B2FDAE3B453C06F0B96EA02C84340CAFB389A23B553C0A6D0798D5DC843409CBD33DAAAB553C0AA8251499DC84340FEF65C2AC3B553C0AEFB96397CC84340A5D590B8C7B553C0A019C40776C84340C8B1F50CE1B553C0FDD7B96933C84340143E5B0707B653C05BB39597FCC7434098DBBDDC27B653C00CCB9F6F0BC8434090B681AB3EB653C0770AFCD1F0C743401B9FC9FE79B653C06C1FF296ABC74340DB17D00B77B653C0C345EEE9EAC64340B5DC990986B653C0772E8CF4A2C643402F8507CDAEB653C06B2A8BC22EC64340AD307DAF21B753C0ECA353573EC54340F73768AF3EB753C01D90847D3BC5434014AE47E17AB753C02FA4C34318C543402522FC8BA0B753C01D1CEC4D0CC543405983F755B9B753C0FF942A51F6C4434003594FADBEB753C0CB9F6F0B96C443407765170CAEB753C0E8BF07AF5DC443401DE38A8BA3B753C0F19E03CB11C44340D21742CEFBB753C0D2C3D0EAE4C2434091B3B0A71DB853C01E85EB51B8C24340F59B89E942B853C07EC16ED8B6C24340C1189128B4B853C0674128EFE3C24340CFD6C1C1DEB853C004C6FA0626C34340C64FE3DEFCB853C0A37213B534C343407EFD101B2CB953C0B98AC56F0AC34340FAD005F52DB953C035B39602D2C24340C552245F09B953C07CF2B0506BC243400A4966F50EB953C0A0A696ADF5C14340F25A09DD25B953C024EEB1F4A1C143407AFF1F274CB953C0745B22179CC14340F0D93A38D8B953C027BEDA519CC143409546CCECF3B953C056B77A4E7AC143400262122EE4B953C0EF5696E82CC14340CCCF0D4DD9B953C04BE2AC889AC043409FC2D52F27BA53C055753A0898BF43403E90BC7328BA53C05B7A34D593BF43404B033FAA61BA53C09DF529C764BF4340DE3829CC7BBA53C0A4A65D4C33BF434070CCB22781BA53C0151BF33AE2BE43404BCB48BDA7BA53C05208E41247BE434078FF273AB1BA53C0F89821343FBE434061C5A9D6C2BA53C0FF3F4E9830BE43402E1B9DF353BB53C0E606431D56BE4340B587BD50C0BB53C011FC6F253BBE43409605137F14BC53C0AB0320EEEABD4340CE9208D526BC53C061EF9E82CEBD4340F21CEB522EBC53C0710FF4E5C2BD4340FB8F4C874EBC53C08C6665FB90BD4340BDA772DA53BC53C0145AD6FD63BD43405B9544F641BC53C0F5BC1B0B0ABD4340276552431BBC53C01BEF8E8CD5BC43408A662ED618BC53C0EA972D5AC2BC43409B8E006E16BC53C04D840D4FAFBC434024CFF57D38BC53C0AC36FFAF3ABC4340E9D2BF2495BC53C0C0ADBB79AABB4340A54C6A6803BD53C01AFA27B858BB434086C77E164BBD53C0E1B4E0455FBB434062F71DC363BD53C02BA0504F1FBB4340DEE1766858BD53C0D829560DC2BA4340753B6FA848BD53C00FB707B0A1BA43404F73F22213BD53C0503239B533BA4340F06DFAB31FBD53C078B5DC9909BA4340DE1B430070BD53C0A2B77878CFB9434043AD69DE71BD53C075AC527AA6B943402FF834272FBD53C009F7CABC55B9434093382BA226BD53C0F16261889CB8434094DA8B683BBD53C096CD1C925AB84340A6D264324FBD53C0801F615F52B84340EB33677DCABD53C043E21E4B1FB84340F3C98AE1EABD53C032535A7F4BB84340B3D0CE6916BE53C086376BF0BEB84340F07D6A6045BE53C0F99D05A8F8B843405E9ECE15A5BE53C0A437DC476EB943404258C3E55CBF53C0226B64B9EDB94340D26F5F07CEBF53C04CFA7B293CBA4340EC6CE75542C053C0D6836CDCA7BA43403C5F389F4CC053C0EEA9D962B1BA43406A32E36DA5C053C06FF1F09E03BB43405E0EBBEF18C153C0FA7DFFE6C5BB4340718C648F50C153C05395B6B8C6BB4340482DFBE6BAC153C0B4E7137F90BB4340A305685BCDC153C0C156091687BB4340672AC423F1C153C0EA3A545392BB4340E4F6CB272BC253C010ACAA97DFBB4340C804FC1A49C253C0A54BFF9254BC434011FFB0A547C253C000E1438996BC43401BA76C1951C253C030D5BB07C9BC4340D66EBBD05CC253C0BAF2599E07BD434014F48F2879C253C03654E33D1EBD434067B2B7C7B8C253C0A21B250651BD434056B950F9D7C253C064E42CEC69BD4340278E956500C353C026D70CBCD7BD4340B7D100DE02C353C094BE1072DEBD434011E2CAD93BC353C04198DBBDDCBD43404E33745050C353C05F856EC1C7BD43407E71A94A5BC353C064AF777FBCBD4340247A19C572C353C0BF805EB873BD4340EE9A749E75C353C0DADF9EC34FBD4340CAD9C6C67BC353C00F63D90D02BD4340F12895F084C353C028EFE3688EBC43405F984C158CC353C01F9DBAF259BC434019C8B3CBB7C353C06CCCEB8843BC43406D1805C1E3C353C0B69F8CF161BC434092E7FA3E1CC453C0348463963DBD4340E600C11C3DC453C0A9F413CE6EBD43405EFD04343FC453C0804579F36CBD43407ECEED5952C453C0584618F95BBD43403BE3FBE252C453C0E7A562635EBD4340'
        ]);

        $allegany_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Allegany Tax',
            'class' => Allegany::class,
        ]);

        $maryland_gua_id = DB::table($this->governmental_unit_areas)
            ->where('name', 'Maryland')
            ->first()
            ->id;

        DB::table($this->tax_areas)->insert([[
            'tax_id' => $allegany_tax_id,
            'home_governmental_unit_area_id' => $allegany_gua_id,
            'based' => TaxArea::BASED_ON_HOME_LOCATION,
        ]]);
    }
}