<?php

namespace Appleton\Taxes\Seeds\US\Alabama;

use Appleton\Taxes\Countries\US\Alabama\ShorterOccupational;
use DB;
use Illuminate\Database\Seeder;

class ShorterSeeder extends Seeder
{
    public function run()
    {
        $id = DB::table(config('taxes.governmental_unit_areas'))->insertGetId([
            'name' => 'Shorter, AL',
            'area' => '0106000020E610000016000000010300000001000000260000004A94BDA59C7755C0809C30613435404067D13B15707755C07422C15433354040200BD121707755C0670C738236354040BA2BBB60707755C06E4E2503403540409C121093707755C0D177B7B244354040906456EF707755C0041DAD6A493540407EDFBF79717755C0F6D214014E354040E9616875727755C093FAB2B453354040F529C764717755C0F302ECA35335404055F833BC597755C0E063B0E2543540405AB56B425A7755C070CCB22781354040D046AE9B527755C0D0D4EB16813540404B38F4160F7755C06B0F7BA18035404076DCF0BBE97655C01D7233DC80354040BDFA78E8BB7655C070CCB22781354040944DB9C2BB7655C00FEECEDA6D354040CAC2D7D7BA7655C06571FF91E9344040DD989EB0C47655C053060E68E93440404E4354E1CF7655C0D6E429ABE9344040306475ABE77655C0825660C8EA3440408F899466F37655C0DB6D179AEB344040F46BEBA7FF7655C03385CE6BEC344040915F3FC4067755C069C6A2E9EC344040ADDC0BCC0A7755C0B663EAAEEC3440404E0B5EF4157755C0E6E786A6EC34404009698D41277755C0F85278D0EC3440405FD04202467755C0ECA4BE2CED344040111C9771537755C0FD0FB056ED344040B3CC22145B7755C06F83DA6FED344040AD122C0E677755C0516A2FA2ED3440403E3E213B6F7755C03FFF3D78ED3440406114048F6F7755C0594E42E90B3540407956D28A6F7755C05C6F9BA9103540402CB98AC56F7755C084B707212035404093A5D6FB8D7755C084B707212035404093A5D6FB8D7755C0344A97FE253540404A94BDA59C7755C05E11FC6F253540404A94BDA59C7755C0809C30613435404001030000000100000008000000AAB8718BF97755C09DD32CD0EE344040CC09DAE4F07755C09DD32CD0EE3440407F86376BF07755C0F92F1004C8344040F01307D0EF7755C04F20EC14AB3440400AF5F411F87755C0CC41D0D1AA344040C214E5D2F87755C0D68D7747C6344040C8D11C59F97755C0022B8716D9344040AAB8718BF97755C09DD32CD0EE3440400103000000010000000500000075E61E12BE7955C0FC54151A88314040B0AA5E7EA77955C0B5A84F728731404033897AC1A77955C0554FE61F7D3140409E93DE37BE7955C05A0C1EA67D31404075E61E12BE7955C0FC54151A883140400103000000010000000900000085402E71E47955C0B18520072532404037E15E99B77955C0C2BCC79926324040CB2A6C06B87955C093E00D695432404009DFFB1BB47955C023D5777E51324040AB07CC43A67955C04D4BAC8C46324040C2499A3FA67955C097C79A91413240403A94A12AA67955C008AA46AF06324040207BBDFBE37955C05D6C5A290432404085402E71E47955C0B1852007253240400103000000010000001D0000002D3F7095277A55C0DC9E20B1DD354040753A90F5D47955C0C476F700DD354040821C9430D37955C0F4FA93F8DC354040B8AB5791D17955C0F4FA93F8DC354040CC9541B5C17955C0B30B06D7DC354040917D9065C17955C0D843FB58C1354040917D9065C17955C0B6D5AC33BE35404008C89750C17955C0E1D05B3CBC35404085E97B0DC17955C0D95A5F24B435404085E97B0DC17955C0E07F2BD9B135404044FAEDEBC07955C09A07B0C8AF354040F19F6EA0C07955C09FE8BAF083354040F19F6EA0C07955C0E7FC14C781354040F19F6EA0C07955C0DCB6EF517F354040AFB0E07EC07955C05853591476354040F7764B72C07955C01FBDE13E723540403E3DB665C07955C0FD4E93196F354040BC783F6EBF7955C0FDA02E5228354040033FAA61BF7955C0F25A09DD25354040033FAA61BF7955C03B6F63B323354040BC783F6EBF7955C0F3716DA818354040A8A8FA95CE7955C09A266C3F1935404076F9D687F57955C00A664CC11A354040DBBE47FDF57955C081053065E034404018CDCAF6217A55C0514D49D6E1344040D427B9C3267A55C062B83A00E2344040E0D57267267A55C00FEF39B01C35404033164D67277A55C0C6A4BF97C23540402D3F7095277A55C0DC9E20B1DD35404001030000000100000008000000143DF031587A55C0BC0512143F30404060217365507A55C0AA9A20EA3E30404060217365507A55C0F8889812493040401F80D4264E7A55C0F888981249304040E8B985AE447A55C0B7990AF1483040406B98A1F1447A55C0B1A206D330304040497EC4AF587A55C004FD851E31304040143DF031587A55C0BC0512143F30404001030000000100000005000000033DD4B6617A55C05DDF878384304040840EBA84437A55C063D009A1833040401281EA1F447A55C0849CF7FF71304040F75AD07B637A55C05AD5928E72304040033DD4B6617A55C05DDF878384304040010300000001000000070000005D4F745DF87A55C0874CF910543140404BE48233F87A55C040A0336953314040E61E12BEF77A55C09AEB34D2523140401C9430D3F67A55C006D671FC50314040D311C0CDE27A55C0863C821B29314040B1170AD80E7B55C0217711A6283140405D4F745DF87A55C0874CF91054314040010300000001000000170000007311DF89597C55C009A87004A93640402D228AC91B7C55C010E9B7AF03374040D53E1D8F197C55C0C1E3DBBB0637404069E388B5F87B55C0D177B7B244374040B35F77BAF37B55C013B875374F3740403672DD94F27B55C013B875374F3740403E5DDDB1D87B55C0014D840D4F374040F869DC9BDF7B55C0D447E00F3F374040CF88D2DEE07B55C0234DBC033C3740402EC896E5EB7B55C0ED28CE51473740404A7CEE04FB7B55C0FA7FD59123374040027FF8F9EF7B55C04DBD6E11183740407D04FEF0F37B55C0AB402D060F374040F607CA6DFB7B55C05F5CAAD2163740406E895C70067C55C0E925C632FD36404065F9BA0CFF7B55C0B22B2D23F5364040C4B30419017C55C07F86376BF036404000378B170B7C55C067F0F78BD9364040FBCA83F4147C55C0DEE68D93C236404005F7031E187C55C0E8DB82A5BA364040FEB7921D1B7C55C0215514AFB23640403868AF3E1E7C55C0A3AEB5F7A93640407311DF89597C55C009A87004A93640400103000000010000000800000044A2D0B2EE7C55C0389CF9D51C2C4040A6CF0EB8AE7C55C02E56D4601A2C4040116C5CFFAE7C55C0828DEBDFF52B40401152B7B3AF7C55C0811FD5B0DF2B404082AB3C81B07C55C0A6EF3504C72B4040EC1681B1BE7C55C0A6EF3504C72B4040F6EAE3A1EF7C55C0A6EF3504C72B404044A2D0B2EE7C55C0389CF9D51C2C40400103000000010000001B000000DF516342CC7D55C0CFBC1C76DF334040F75965A6B47D55C0369204E10A344040635E471CB27D55C0C24EB16A10344040AC8C463EAF7D55C08A3DB48F15344040D5E59480987D55C02D793C2D3F34404028D53E1D8F7D55C09B3924B550344040EE3EC7478B7D55C086CABF9657344040D8648D7A887D55C030A017EE5C34404021938C9C857D55C0C80A7E1B62344040DA1A118C837D55C0EA78CC40653440408F19A88C7F7D55C0F3565D876A344040DE3829CC7B7D55C0C83EC8B260344040DB4B1AA3757D55C0D63730B951344040D0D1AA96747D55C08A027D224F34404054185B08727D55C0BC56427749344040ACFE08C3807D55C08D98D9E7313440408EAED2DD757D55C0273108AC1C344040C72AA5677A7D55C025AC8DB113344040726891ED7C7D55C0580053060E3440405301F73C7F7D55C0D8F15F2008344040F7E5CC76857D55C0D02A33A5F53340401F459DB9877D55C0DEA815A6EF334040CB82893F8A7D55C011FDDAFAE93340405F984C158C7D55C08AC91B60E63340403A8E1F2A8D7D55C02638F581E4334040EECC04C3B97D55C06F8099EFE0334040DF516342CC7D55C0CFBC1C76DF33404001030000000100000007000000730CC85EEF7D55C0D57954FCDF3340406F490ED8D57D55C022179CC1DF334040B0389CF9D57D55C06475ABE7A43340406E15C440D77D55C0D61C2098A3334040DFDC5F3DEE7D55C077DA1A118C334040675E0EBBEF7D55C066A3737E8A334040730CC85EEF7D55C0D57954FCDF3340400103000000010000001A00000077D49810737E55C05C1FD61BB5304040C39E76F86B7E55C09CDA19A6B63040401FA0FB72667E55C0A85489B2B730404008C6C1A5637E55C06C223317B8304040F2EB87D8607E55C07E8D2441B83040400A62A06B5F7E55C0AD11C138B8304040E7A562635E7E55C0CB2A6C06B8304040C403CAA65C7E55C0A85489B2B73040404F2157EA597E55C0FCE25295B6304040C1C8CB9A587E55C0325871AAB5304040577A6D36567E55C05796E82CB33040401002F225547E55C035289A07B03040401DE4F560527E55C00DFD135CAC30404023D5777E517E55C044A67C08AA3040402CD15966117E55C0505436ACA9304040622CD32F117E55C00C5BB395973040409141EE224C7E55C0FF78AF5A99304040DFA7AAD0407E55C0FA980F0874304040D6FD63213A7E55C0ADC1FBAA5C3040405A10CAFB387E55C03EEAAF5758304040E413B2F3367E55C07E54C37E4F30404097C45911357E55C0BEBED6A5463040401B0B0A83327E55C0DDEEE53E3930404093895B05317E55C09A7ADD2230304040B2B8FFC8747E55C0A19FA9D72D30404077D49810737E55C05C1FD61BB53040400103000000010000000700000099999999997E55C0842D76FBAC304040533BC3D4967E55C09B559FABAD304040AE9D2809897E55C01CCC26C0B0304040838593347F7E55C0215514AFB2304040359A5C8C817E55C0780C8FFD2C304040643E20D0997E55C00C569C6A2D30404099999999997E55C0842D76FBAC30404001030000000100000026000000662B2FF99F7E55C0670A9DD7D83340402F4CA60A467E55C09526A5A0DB334040183E22A6447E55C0D5AE09698D3340402FA3586E697E55C02B9FE57970334040118AADA0697E55C09485AFAF75334040E1EB6B5D6A7E55C03FC39B3578334040EBE3A1EF6E7E55C030116F9D7F334040BAF770C9717E55C0C3F2E7DB823340403463D174767E55C0EAE923F08733404020425C397B7E55C04D13B69F8C334040247D5A457F7E55C00ABC934F8F334040DB4E5B23827E55C0E0F42EDE8F3340406E4A79AD847E55C0B1A4DC7D8E3340405CC5E237857E55C0F984ECBC8D3340401AA20A7F867E55C01215AA9B8B33404043352559877E55C07EFFE6C5893340400EDAAB8F877E55C0611A868F88334040A223B9FC877E55C08524B37A87334040DD21C500897E55C0CFA0A17F82334040B47405DB887E55C01A51DA1B7C3340401F2BF86D887E55C050FA42C879334040BB7F2C44877E55C0FA7E6ABC743340400EF450DB867E55C01E8997A773334040B5C2F4BD867E55C0C11C3D7E6F3340406725ADF8867E55C02D077AA86D3340405B5D4E09887E55C03AE97DE36B334040FB20CB82897E55C0FEB627486C3340405A0F5F268A7E55C0F8C5A52A6D334040EE586C938A7E55C0DAACFA5C6D334040630795B88E7E55C02B6B9BE271334040F702B342917E55C0062D2460743340404929E8F6927E55C0A0336953753340407DE882FA967E55C0DAFD2AC0773340407020240B987E55C021AAF06778334040FCDCD0949D7E55C02176A6D0793340404F1DAB949E7E55C033E197FA7933404038DBDC989E7E55C06DAB59677C334040662B2FF99F7E55C0670A9DD7D833404001030000000100000099010000E5CE4C309C7E55C08FA9BBB20B324040B377465B957E55C0EF02250516324040C2DB8310907E55C036C64E7809324040FDA204FD857E55C02A357BA0153240404CDC2A88817E55C0D09849D40B324040AA5FE97C787E55C0EF02250516324040711AA20A7F7E55C03B55BE67243240403E78EDD2867E55C0C26B97361C324040E8818FC18A7E55C0EC832C0B26324040F4DE1802807E55C09D67EC4B36324040024356B77A7E55C01094DBF63D3240403E247CEF6F7E55C0A3923A014D324040C0CB0C1B657E55C0832EE1D05B324040FB928D075B7E55C0003961C2683240401875ADBD4F7E55C0164A26A7763240403A92CB7F487E55C0B309302C7F324040ADF545425B7E55C08A7615527E324040A2957B81597E55C0C843DFDDCA32404031225168597E55C019028063CF32404061A6ED5F597E55C0052FFA0AD2324040A3AF20CD587E55C03AB01C21033340408DEF8B4B557E55C0B5352218073340405BCCCF0D4D7E55C0691D554D1033404080B9162D407E55C0374E0AF31E33404087C1FC15327E55C08F1A13622E33404025AFCE31207E55C02C2B4D4A41334040A56950340F7E55C00B5F5FEB52334040A014ADDC0B7E55C051A3906456334040E5D022DBF97D55C006103E9468334040A626C11BD27D55C00F45813E9133404081B1BE81C97D55C05E6743FE99334040E3FE23D3A17D55C0A2CEDC43C23340403FFD67CD8F7D55C06ADB300A82334040EBFD463B6E7D55C0ABCABE2B82334040622EA9DA6E7D55C08BFD65F7E43340404AECDADE6E7D55C00AD80E46EC3340404AECDADE6E7D55C0F755B950F9334040D978B0C56E7D55C040BB438A0134404084656CE8667D55C04C35B3960234404044BE4BA94B7D55C05ED4EE57013440404C310741477D55C0ED60C43E013440402AA913D0447D55C0ED60C43E01344040909C4CDC2A7D55C0DCF5D21401344040486B0C3A217D55C06D8C9DF012344040765089EB187D55C0A9A10DC006344040D0CFD4EB167D55C0399677D50334404047E6913F187D55C03BFE0B0401344040722F302B147D55C0CA8AE1EA0034404075E5B33C0F7D55C0CA8AE1EA00344040C808A870047D55C0CA8AE1EA003440402F6AF7AB007D55C0CA8AE1EA0034404099107349D57C55C0AC71361D0134404034B742588D7C55C047ACC5A70034404033C4B12E6E7C55C047ACC5A7003440400A4B3CA06C7C55C0EC832C0B263440405E0D501A6A7C55C09752978C6334404008AC1C5A647C55C056D636C5E3344040C267EBE0607C55C0151A886533354040AB59677C5F7C55C048DC63E9433540403D9CC0745A7C55C006103E9468354040EA5BE674597C55C0D253E410713540407FBF982D597C55C001A43671723540408DEF8B4B557C55C0266DAAEE9135404067463F1A4E7C55C09080D1E5CD35404047AB5AD2517C55C0DE1D19ABCD354040E202D0285D7C55C05582C5E1CC3540407D23BA675D7C55C00936AE7FD7354040A6B6D4415E7C55C0E5B67D8FFA354040E1606F62487C55C0689599D2FA354040EE5C18E9457C55C0BB46CB811E364040EFC4AC17437C55C0C7F484251E3640404582A966D67B55C00FD594641D3640407ADD2230D67B55C067D5E76A2B3640401EA5129ED07B55C0014A438D42364040ABAC6D8AC77B55C0F180B2295736404012D731AEB87B55C0DDB3AED1723640402AC58EC6A17B55C031992A1895364040614ED026877B55C0F03499F1B6364040614ED026877B55C0B519A721AA3640404259F8FA5A7B55C02B4A09C1AA3640402B6C06B8207B55C055DD239BAB364040F6E978CC407B55C05E2F4D11E036404007EDD5C7437B55C0A23F34F3E4364040478E7406467B55C031056B9C4D374040D28A6F287C7B55C073F4F8BD4D37404013B70A62A07B55C037C2A2224E374040016F8104C57B55C0F6D214014E374040AD2EA704C47B55C0D270CADC7C374040DDB243FCC37B55C0486DE2E47E374040C5707500C47B55C0FF243E778237404078D32D3BC47B55C0747808E3A73740406FF25B74B27B55C01570CFF3A737404075C6F7C5A57B55C009C21550A8374040A94BC631927B55C08CA03193A837404054FEB5BC727B55C085AFAF75A93740400FB743C3627B55C01AF9BCE2A93740403F6F2A52617B55C0088ECBB8A937404004711E4E607B55C0A98592C9A9374040B8382A37517B55C003D19332A93740402AE09EE74F7B55C0B5334C6DA9374040D2E28C614E7B55C0088ECBB8A9374040232D95B7237B55C020B6F468AA3740403CA3AD4A227B55C07FBE2D58AA374040A2B60DA3207B55C04F3A9160AA3740400282397AFC7A55C0C66AF3FFAA374040CC41D0D1AA7A55C011381268B0374040732A1900AA7A55C0A5F622DA8E374040EA7420EBA97A55C0F4FBFECD8B37404061BF27D6A97A55C04FAF946588374040EBC20FCEA77A55C0855968E734374040AB3B16DBA47A55C005C1E3DBBB364040191A4F04717A55C03A02B859BC364040BCB1A030287A55C0522AE109BD36404033FCA71B287A55C0ADA3AA09A23640404A3E7617287A55C010B056ED9A3640402D3F7095277A55C015359886E13540402D3F7095277A55C0DC9E20B1DD354040A6D24F38BB7A55C09A7B48F8DE354040C1C6F5EFFA7A55C03C6BB75D68364040014EEFE2FD7A55C0203F1BB96E3640408463963D097B55C022A7AFE76B3640409A3DD00A0C7B55C0F913950D6B3640409D44847F117B55C047E5266A693640405C5837DE1D7B55C0A8893E1F65364040D4415E0F267B55C0452C62D861364040AD33BE2F2E7B55C05EF0694E5E36404085251E50367B55C0255AF2785A364040ECA353573E7B55C0DA5889795636404082A62556467B55C0CA8976155236404023BBD232527B55C09E094D124B3640403B1A87FA5D7B55C09C508880433640407EC2D9AD657B55C0810706103E3640406362F3716D7B55C0726C3D43383640405F44DB31757B55C081EA1F4432364040BCE7C072847B55C08D7BF31B26364040BBED42739D7B55C08CD99255113640401405FA449E7B55C0F5F3A622153640409B745B22177C55C0A6B5696CAF35404084285FD0427C55C0EF7211DF8935404007F01648507C55C0C6C210397D354040ED2B0FD2537C55C02E58AA0B783540404643C6A3547C55C03881E9B46E354040D8F0F44A597C55C0D464C6DB4A3540403D9CC0745A7C55C085764EB34035404095B377465B7C55C0D2C265153635404022A46E675F7C55C03468E89FE034404008AC1C5A647C55C02C9CA4F963344040CB2BD7DB667C55C0BCCB457C27344040567DAEB6627C55C0E0B88C9B1A34404009E066F1627C55C0D80E46EC13344040508C2C99637C55C0F451465C00344040EA8F300C587C55C0594B0169FF33404073452921587C55C083A44FABE8334040F0845E7F127C55C0B7B1D991EA3340402C9D0FCF127C55C0EC8497E0D4334040EA793716147C55C059A4897780334040D2890453CD7B55C077BD344580334040020EA14ACD7B55C0683A3B191C3340408A8F4FC8CE7B55C06D5512D907334040D1CDFE40B97B55C04E081D74093340404CBF44BC757B55C07FC0030308334040E3FC4D28447B55C0734694F606334040601E32E5437B55C0982EC4EA8F32404093AAED26F87A55C044A0FA07913240409F58A7CAF77A55C0FFE55AB40033404010CCD1E3F77A55C0AF78EA9106334040D9226937FA7A55C00890A16307334040562AA8A8FA7A55C038143E5B07334040BAF59A1E147B55C057957D57043340408D4468041B7B55C021205F42053340409D47C5FF1D7B55C01572A59E0533404055D80C70417B55C054C554FA09334040601E32E5437B55C048BE124889334040EF39B01C217B55C042CD902A8A334040B22B2D23F57A55C0069B3A8F8A3340406D35EB8CEF7A55C0543882548A3340402BA5677A897A55C000AAB8718B334040C6BC8E38647A55C0DCD3D51D8B334040C6BC8E38647A55C050C1E105113340401C08C902267A55C04B04AA7F1033404004C6FA06267A55C021382EE3A632404046CF2D74257A55C0013274ECA032404087BEBB95257A55C091D5AD9E93324040F831E6AE257A55C0B8921D1B81324040BEF561BD517A55C02FF7C9518032404047C5FF1D517A55C0D3F88557923240404BC8073D9B7A55C01B0DE02D9032404063F030ED9B7A55C029417FA147324040DA3A38D89B7A55C05740A19E3E3240407A185A9D9C7A55C08639419B1C324040CF11F92EA57A55C0389CF9D51C3240400035B56CAD7A55C0BB7A15191D324040DD7BB8E4B87A55C0AFCC5B751D324040C539EAE8B87A55C0EBFEB1101D32404064E94317D47A55C092E7FA3E1C3240404CDBBFB2D27A55C00A630B410E324040FF571D39D27A55C036C64E78093240404D0F0A4AD17A55C071732A1900324040D1E4620CAC7A55C0A1F7C61000324040A260C614AC7A55C09F724C16F73140409C89E942AC7A55C022A98592C9314040B12FD978B07A55C0931CB0ABC9314040836A8313D17A55C05DA79196CA3140403B70CE88D27A55C0FD9E58A7CA314040B8AB5791D17A55C0FED2A23EC93140400072C284D17A55C0AE484C50C3314040B8AB5791D17A55C05C566133C0314040A6406667D17A55C0001E51A1BA31404077BCC96FD17A55C04EEFE2FDB831404047382D78D17A55C085984BAAB631404011DDB3AED17A55C034DAAA24B231404011DDB3AED17A55C02F51BD35B031404011DDB3AED17A55C06CEBA7FFAC31404011DDB3AED17A55C05C1C959BA8314040FA9AE5B2D17A55C065A9F57EA3314040D0ED258DD17A55C03C4A253CA13140400072C284D17A55C0ECBFCE4D9B31404047382D78D17A55C0250516C09431404047382D78D17A55C08C6665FB9031404047382D78D17A55C0EDD632198E3140402FF65E7CD17A55C0C2BE9D4484314040BE823463D17A55C0E10B93A982314040BE823463D17A55C049A12C7C7D31404053CC41D0D17A55C09FCBD424783140407B2B1213D47A55C0B9C3263273314040D0F0660DDE7A55C0C4EC65DB69314040C03E3A75E57A55C08CBE823463314040124BCADDE77A55C0635FB2F16031404069C6A2E9EC7A55C0BF4692205C3140406D1B4641F07A55C0088F368E5831404072BED87BF17A55C06E88F19A57314040C4CA68E4F37A55C06342CC2555314040A54929E8F67A55C0170D198F523140405D4F745DF87A55C0874CF91054314040BC749318047B55C0444C89247A314040634337FB037B55C05708ABB1843140403F506EDBF77A55C0FC885FB18631404010751F80D47A55C0280989B48D3140408ECA4DD4D27A55C01C5BCF108E31404058552FBFD37A55C00ABC934F8F314040ABAFAE0AD47A55C0689082A790314040ABAFAE0AD47A55C02BF697DD9331404004E10A28D47A55C0CEA623809B3140402E8ECA4DD47A55C0B96B09F9A0314040BD1AA034D47A55C0533E0455A3314040DB334B02D47A55C01B2D077AA831404022FAB5F5D37A55C0CBF3E0EEAC3140406AC020E9D37A55C0AC72A1F2AF314040B1868BDCD37A55C0AB3E575BB1314040E10A28D4D37A55C0A86E2EFEB6314040E10A28D4D37A55C01E6B4606B931404028D192C7D37A55C047CA1649BB31404088D9CBB6D37A55C040A54A94BD314040CF9F36AAD37A55C0EBE2361AC0314040FF23D3A1D37A55C00C1D3BA8C4314040FF23D3A1D37A55C06F1283C0CA3140409F1B9AB2D37A55C0527E52EDD3314040CF9F36AAD37A55C05C902DCBD7314040766EDA8CD37A55C01BF2CF0CE2314040A0353FFED27A55C0266C3F19E33140404147AB5AD27A55C0207BBDFBE33140400BD28C45D37A55C0207BBDFBE3314040A5D8D138D47A55C0207BBDFBE3314040E061DA37F77A55C0E4486760E431404087307E1AF77A55C074CE4F711C324040E5EFDE51637B55C02CEE3F321D32404073620FED637B55C0DD408177F2314040F9B836548C7B55C0D05E7D3CF4314040EE2422FC8B7B55C08048BF7D1D32404083A279008B7B55C073D3669C86324040CA4E3FA88B7B55C07F6ABC7493324040849B8C2AC37B55C02BDCF2919432404081CB63CDC87B55C0A4A833F7903240407E6C921FF17B55C0C6BFCFB870324040BA84436FF17B55C09701672959324040548B8862F27B55C00793E2E313324040F23D23111A7C55C01B66683C1132404075029A081B7C55C0AA0EB9196E3240402B4B7496597C55C03C139A2496324040A6D0798D5D7C55C05F984C158C324040C39B35785F7C55C0E54691B586324040D4B837BF617C55C0444FCAA4863240403DF20703CF7C55C0C30C8D27823240408A8F4FC8CE7C55C02F88484DBB324040ECF99AE5B27C55C0F8DEDFA0BD324040CFF753E3A57C55C0EA1F4432E4324040C6C210397D7C55C0F0517FBDC23240407A7077D66E7C55C02EC896E5EB32404059A148F7737C55C0C76647AAEF324040CE4F711C787C55C05A48C0E8F23240402B85402E717C55C0AF78EA9106334040B2D826158D7C55C069006F8104334040865AD3BCE37C55C05D52B5DD043340406D1805C1E37C55C0C2DCEEE53E3340400839EFFFE37C55C0E9F010C64F334040C058DFC0E47C55C055151A8865334040C6151747E57C55C0A320787C7B3340405FEB5223F47C55C08A90BA9D7D33404061A417B5FB7C55C0008DD2A57F334040E8DA17D00B7D55C0064A0A2C80334040DB696B44307D55C066868DB27E33404077D844662E7D55C09679ABAE4333404035E9B6442E7D55C019C748F608334040E27492AD2E7D55C0C37FBA8102334040B72407EC6A7D55C0E7559DD502334040AE282504AB7D55C0F8C08EFF023340401EA2D11DC47D55C0AC5791D10133404078EDD286C37D55C01268B0A9F33240404278B471C47D55C01D8CD827803240406DE00ED4297E55C08A7615527E324040F561BD512B7E55C0E97E4E417E3240402A89EC832C7E55C08A7615527E324040B915C26A2C7E55C02BA226FA7C324040B915C26A2C7E55C03193A8177C324040897780272D7E55C074B680D07A32404017B6662B2F7E55C0B6D9588979324040ACFF73982F7E55C0A46E675F79324040AA7D3A1E337E55C018B2BAD5733240407ADFF8DA337E55C042791F477332404013640454387E55C0BB79AA436E32404041B456B4397E55C0D99255116E324040FF907EFB3A7E55C07F130A1170324040054EB6813B7E55C07365506D7032404087122D793C7E55C092B245D26E3240407B6473D53C7E55C02FBDFDB96832404040321D3A3D7E55C0B9C0E5B166324040FE0E45813E7E55C0F75AD07B633240403EB0E3BF407E55C0F9F6AE415F3240406743FE99417E55C0DC4598A25C324040CCEEC9C3427E55C03DB665C0593240407E5182FE427E55C061C092AB583240405A61FA5E437E55C05E9F39EB53324040A2276552437E55C04D9CDCEF5032404073D712F2417E55C0B4C9E1934E3240404F01309E417E55C0C0779B374E324040810706103E7E55C0198F52094F324040E868554B3A7E55C07172BF43513240403049658A397E55C06B813D26523240402A8C2D04397E55C04D6892585232404006B64AB0387E55C05225CADE523240403D5FB35C367E55C04677103B533240407F828B15357E55C0A0C211A45232404014E63DCE347E55C0DCF4673F523240402094F771347E55C06B813D2652324040F243A511337E55C0B952CF825032404028ED0DBE307E55C0CD599F724C3240402A6F47382D7E55C048C2BE9D443240401904560E2D7E55C07289230F443240403D0E83F92B7E55C0083BC5AA41324040A8C4758C2B7E55C0F0129CFA40324040DE1FEF552B7E55C0F7031E1840324040E57805A2277E55C007B64AB0383240408D959867257E55C0CD1FD3DA34324040527DE717257E55C0A949F0863432404023473A03237E55C044847F11343240401FF296AB1F7E55C00986730D3332404019355F251F7E55C004C93B87323240402040868E1D7E55C07C613255303240408CF678211D7E55C0B30A9B012E324040978A8D791D7E55C0359886E12332404074B4AA251D7E55C0427A8A1C223240407BBFD18E1B7E55C0AF9811DE1E324040BF7E880D167E55C019CA8976153240403140A209147E55C085E81038123240403999B855107E55C04D86E3F90C3240401611C5E40D7E55C0B9A46ABB09324040BE2D58AA0B7E55C0FBC7427408324040242713B70A7E55C020D26F5F07324040C5387F130A7E55C019E1ED4108324040CC43A67C087E55C03DB7D0950832404020EC14AB067E55C0CADB114E0B3240403271AB20067E55C0B83CD68C0C32404068CC24EA057E55C034F6251B0F324040EBAA402D067E55C0130D52F01432404026C3F17C067E55C08218E8DA17324040AF78EA91067E55C0162EABB0193240400F9BC8CC057E55C0B6F1272A1B3240408CD651D5047E55C0B134F0A31A324040F2CF0CE2037E55C0FF0582001932404088670932027E55C078D2C265153240402E36AD14027E55C0902E36AD143240405917B7D1007E55C08CD9925511324040F46BEBA7FF7D55C0456117450F32404072A774B0FE7D55C093FE5E0A0F3240401407D0EFFB7D55C0F8C3CF7F0F324040EA73B515FB7D55C0B1170AD80E324040AF5B04C6FA7D55C0DBDE6E490E32404086C8E9EBF97D55C0B14B546F0D3240402EE57CB1F77D55C02A1895D4093240407008556AF67D55C054DFF94509324040E2C96E66F47D55C0A27C410B09324040DC0C37E0F37D55C054DFF945093240407170E998F37D55C078B5DC99093240408AE6012CF27D55C0537765170C3240409C6B98A1F17D55C0C382FB010F324040E44BA8E0F07D55C044F9821612324040B5FB5580EF7D55C03DD4B661143240402D7AA702EE7D55C0498270051432404027BD6F7CED7D55C025AC8DB11332404004E78C28ED7D55C04F73F222133240403385CE6BEC7D55C01A321EA5123240400AF2B391EB7D55C0AAF23D2311324040280B5F5FEB7D55C005A6D3BA0D324040BD546CCCEB7D55C048FDF50A0B3240405E66D828EB7D55C08A20CEC3093240405D328E91EC7D55C04F560C57073240409B711AA20A7E55C0CD77F01307324040A81ABD1AA07E55C03E1F65C405324040E5CE4C309C7E55C08FA9BBB20B324040010300000001000000110000000CE6AF90B97E55C0ACC612D6C630404018946934B97E55C0942F682101314040450E1137A77E55C0F9F4D89601314040CEC3094CA77E55C05D35CF11F9304040AAD381ACA77E55C04B901150E1304040DA571EA4A77E55C0444E5FCFD7304040F770C971A77E55C06D904946CE304040DA8B683BA67E55C08B6F287CB6304040BD8C62B9A57E55C04D840D4FAF304040226C787AA57E55C05BCEA5B8AA30404085950A2AAA7E55C0323B8BDEA93040408461C092AB7E55C020D099B4A9304040957EC2D9AD7E55C0FCF9B660A930404008910C39B67E55C03F1D8F19A83040402AFF5A5EB97E55C0DA571EA4A7304040D68A36C7B97E55C039605793A73040400CE6AF90B97E55C0ACC612D6C6304040010300000001000000500000004B1B0E4B037F55C0D3BF24952934404028452BF7027F55C0780C8FFD2C3440405EA0A4C0027F55C0530262122E344040B7EBA529027F55C0416326512F3440407CED9925017F55C081EA1F4432344040C51B9947FE7E55C0376E313F37344040A850DD5CFC7E55C01230BABC39344040C1E09A3BFA7E55C0AB02B5183C3440406917D34CF77E55C0C8B3CBB73E34404075C58CF0F67E55C069AB92C83E3440404C327216F67E55C044A165DD3F344040B8E864A9F57E55C02688BA0F4034404094128255F57E55C0AF230ED940344040A1DAE044F47E55C0F59B89E9423440400C91D3D7F37E55C0771211FE45344040E8BAF083F37E55C0D90759164C34404024D3A1D3F37E55C0E8A221E3513440402990D959F47E55C0058882195334404083C13577F47E55C04C3448C153344040B7CEBF5DF67E55C0745FCE6C5734404082734694F67E55C068B114C957344040E464E256417E55C0B8AE9811DE3440409ACB0D863A7E55C0DFA5D425E3344040922232ACE27D55C0412C9B392435404072FC5069C47D55C04757E9EE3A35404031276893C37D55C0855968E734354040E3A3C519C37D55C0F3AB394030354040DEE68D93C27D55C06C787AA52C3540406D8D08C6C17D55C06F48A30227354040FC3383F8C07D55C01E8A027D22354040861DC6A4BF7D55C0D4F02DAC1B35404039CE6DC2BD7D55C0A3E716BA12354040D5CE30B5A57D55C08C2D043928354040C1C760C5A97D55C00DFB3DB14E354040179B560A817D55C075E789E76C354040C6DCB5847C7D55C02995F0845E354040E529ABE97A7D55C0FF01D6AA5D354040BF97C283667D55C0143E5B0707354040645B069CA57D55C0EB19C231CB3440408CBAD6DEA77D55C0CA30EE06D1344040B96E4A79AD7D55C01D740987DE3440402F505260017E55C0A391CF2B9E34404075AE2825047E55C0ECA529029C3440400A2B1554547E55C041D7BE805E34404012C0CDE2C57E55C0F04DD36707344040B262B83A007F55C02BA4FCA4DA334040522635B4017F55C006668522DD334040ED2C7AA7027F55C070B4E386DF33404081768714037F55C0F7E7A221E33340405EA0A4C0027F55C09C340D8AE6334040FFB1101D027F55C06B7C26FBE73340408E3EE603027F55C0658BA4DDE8334040CC26C0B0FC7E55C00DC51D6FF23340409128B4ACFB7E55C0D61BB5C2F43340405BE7DF2EFB7E55C0A663CE33F6334040914259F8FA7E55C0A52F849CF73340408B852172FA7E55C0D47FD6FCF833404062F20698F97E55C0143B1A87FA33404074779D0DF97E55C04BB0389CF9334040984D8061F97E55C0B1DD3D40F7334040F29881CAF87E55C0B7CEBF5DF633404010CCD1E3F77E55C08716D9CEF7334040406A1327F77E55C04BB0389CF9334040E738B709F77E55C074435376FA334040AB2006BAF67E55C02C634337FB334040CF108E59F67E55C072DBBE47FD334040BDA59C2FF67E55C07D21E4BCFF334040884A2366F67E55C06A4E5E6402344040D4997B48F87E55C0E2033BFE0B34404033880FECF87E55C09FAC18AE0E3440409833DB15FA7E55C0384BC972123440407FBDC282FB7E55C060764F1E163440402572C119FC7E55C07D5BB054173440402B2FF99FFC7E55C0ACAB02B51834404047ACC5A7007F55C0F5108DEE2034404076FC1708027F55C08EAF3DB324344040B114C957027F55C04C8C65FA25344040B7D100DE027F55C06971C63027344040DAA7E331037F55C0093543AA283440404B1B0E4B037F55C0D3BF24952934404001030000000100000029000000A8C1340C1F7F55C09735B1C05732404030F2B226167F55C01E3526C45C324040EBC4E578057F55C04390831266324040363B527DE77E55C09FE57970773240401DA8531EDD7E55C0B9FAB1497E3240405B59A2B3CC7E55C0753BFBCA83324040A757CA32C47E55C04A404CC285324040A43330F2B27E55C032C7F2AE7A3240401B1021AE9C7E55C099BA2BBB6032404012A0A696AD7E55C01D3C139A243240403AE5D18DB07E55C0A88AA9F413324040C9570229B17E55C0CF13CFD9023240405DA10F96B17E55C029931ADA0032404045459C4EB27E55C09128B4ACFB314040989F1B9AB27E55C0A663CE33F63140403997E2AAB27E55C0DA1F28B7ED314040CE143AAFB17E55C028F1B913EC314040E1EA0088BB7E55C0A1A014ADDC314040EA944737C27E55C094A12AA6D2314040D425E318C97E55C039799109F8314040B5BE4868CB7E55C051BEA0850432404045B9347EE17E55C00FCF1264043240402C29779FE37E55C0800EF3E5053240403C122F4FE77E55C054DFF94509324040380EBC5AEE7E55C0271422E010324040492BBEA1F07E55C025AC8DB113324040DF13EB54F97E55C0E4D9E55B1F3240402C7DE882FA7E55C0904B1C7920324040D21742CEFB7E55C0849D62D52032404078B29B19FD7E55C0DDE8633E20324040B3B0A71DFE7E55C0CCB1BCAB1E3240408784EFFD0D7F55C071E7C2482F32404098874CF9107F55C0C2A563CE333240402444F982167F55C0E43098BF4232404095B7239C167F55C08F6E84454532404012BF620D177F55C017D68D774732404071ADF6B0177F55C09F3D97A949324040E1067C7E187F55C0A4C684984B324040934F8F6D197F55C097E4805D4D32404033DFC14F1C7F55C0BEDBBC7152324040A8C1340C1F7F55C09735B1C05732404001030000000100000007000000313F3734657F55C0F336363B52374040679AB0FD647F55C0D5E940D65337404073620FED637F55C0029EB470593740403788D68A367F55C02EAA4544313740402EC72B103D7F55C083328D2617374040705E9CF86A7F55C038D906EE40374040313F3734657F55C0F336363B5237404001030000000100000005000000CF691668778055C0C9737D1F0E3440405C7171546E8055C0DBDE6E490E3440401BB62DCA6C8055C0C1AC50A4FB3340407B0F971C778055C06E861BF0F9334040CF691668778055C0C9737D1F0E3440400103000000010000004C000000E736E15E998055C00667F0F78B354040B3CC22145B8055C0D689CBF10A364040B586527B118055C07F10C99063354040116E32AA0C8055C01900AAB871354040B98AC56F0A8055C0AB798EC877354040075C57CC088055C01494A2957B3540402C802903078055C03CBF28417F35404027F73B14058055C0E10B93A982354040D50451F7018055C0B5A84F728735404072A774B0FE7F55C0656F29E78B354040E49CD843FB7F55C0F25F2008903540402EE57CB1F77F55C0EA060ABC933540406A65C22FF57F55C0726E13EE953540403672DD94F27F55C00584D6C397354040320395F1EF7F55C076C3B645993540402EC896E5EB7F55C00AD9791B9B3540408AC91B60E67F55C08C834BC79C354040711C78B5DC7F55C0083D9B559F354040E55FCB2BD77F55C013B70A62A0354040E6C75F5AD47F55C054A69883A0354040D0ED258DD17F55C0D2C77C40A0354040B9DFA128D07F55C0DE7536E49F354040724D81CCCE7F55C0D8B8FE5D9F35404085200725CC7F55C068791EDC9D3540400A67B796C97F55C063F030ED9B354040FF209221C77F55C0F9A1D288993540408333F8FBC57F55C0CA51802898354040B30584D6C37F55C019575C1C95354040F64201DBC17F55C0740AF2B391354040D3A0681EC07F55C07C6308008E35404033DDEBA4BE7F55C0EF7211DF89354040CE31207BBD7F55C0809BC58B85354040ED647094BC7F55C0D0D4EB1681354040E1EA0088BB7F55C0E54350357A354040BB41B456B47F55C0DBA0F65B3B354040ECF99AE5B27F55C0B2BCAB1E303540408D0B0742B27F55C0FC389A232B354040D1E4620CAC7F55C0E76C01A1F5344040272F3201BF7F55C0CFF3A78DEA3440405514AFB2B67F55C0EDB5A0F7C63440403F1D8F19A87F55C0BD1AA034D43440408D08C6C1A57F55C092B1DAFCBF34404016D86322A57F55C017601F9DBA3440401CAF40F4A47F55C07E8D2441B8344040E2CAD93BA37F55C09700FC53AA344040014C1938A07F55C0C2C1DEC490344040FCA886FD9E7F55C03318231285344040EA3D95D39E7F55C01C2444F9823440401405FA449E7F55C09D499BAA7B344040A968ACFD9D7F55C0D0D1AA96743440400871E5EC9D7F55C033DE567A6D344040321EA5129E7F55C096EA025E663440409DBAF2599E7F55C063450DA6613440404946CEC29E7F55C083FA96395D344040E466B8019F7F55C096CD1C925A344040198EE733A07F55C0126A86545134404066F7E461A17F55C0F7544E7B4A344040A69883A0A37F55C09EEC66463F3440406614CB2DAD7F55C00D501A6A14344040C76647AAEF7F55C0BA86191A4F3440406CB3B112F37F55C09D2CB5DE6F3440404FE8F527F17F55C0E23C9CC07434404084436FF1F07F55C0CF9D60FF753440407F86376BF07F55C0AB93331477344040B4E1B034F07F55C099F4F75278344040910BCEE0EF7F55C08098840B7934404020B24813EF7F55C06C91B41B7D344040321D3A3DEF7F55C071E6577380344040378C82E0F17F55C0CE52B29C843440401E300F99F27F55C0E6E8F17B9B3440402154A9D9038055C026E318C91E3540402461DF4E228055C0AA97DF6932354040D714C8EC2C8055C0EA93DC611335404033333333338055C0B24813EF00354040CB6262F3718055C04C4EED0C53354040E736E15E998055C00667F0F78B354040',
        ]);

        DB::table(config('taxes.tax_areas'))->insert([
            'name' => 'Shorter Occupational Tax',
            'tax' => ShorterOccupational::class,
            'governmental_unit_area_id' => $id,
        ]);
    }
}
