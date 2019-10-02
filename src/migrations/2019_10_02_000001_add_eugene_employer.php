<?php

use Appleton\Taxes\Countries\US\Oregon\EugeneEmployer\EugeneEmployer;
use Appleton\Taxes\Models\TaxArea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddEugeneEmployer extends Migration
{
    protected $governmental_unit_areas = 'governmental_unit_areas';
    protected $taxes = 'taxes';
    protected $tax_areas = 'tax_areas';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $eugene_gua_id = DB::table($this->governmental_unit_areas)->insertGetId([
            'name' => 'Eugene, OR',
            'area' => '0106000020E61000000100000001030000000100000062030000C1AA7AF99D095FC0E2C798BB96F44540F54A598638095FC05F234910AEFA4540F08B4B55DA085FC013F241CF66FF4540C4EE3B86C7085FC0C28366D7BD0146406A353AF3C5085FC076A844BB3A024640D21E2FA4C3085FC01F4AB4E4F1024640249D819197085FC008AC1C5A640546402426A8E15B085FC0C0CE4D9B7108464006DA1D520C085FC0DFBF7971E20B464043671A450C085FC09702AD2FE30B464062A1D634EF075FC00667F0F78B0D46403EEB1A2D07085FC0C32ADEC83C0E464055BFD2F9F0075FC09F8D5C37A50E4640475854C4E9075FC082C476F7000F464018CDCAF621085FC03F6CE9D1540F46405AF3E32F2D085FC04F1DAB949E0F464052431B800D085FC0B18520072510464098309A95ED075FC0623255302A1146403AE7A7380E085FC07092E68F69114640C2C2499A3F085FC07B4CA4349B114640BCCB457C27085FC0291F82AAD1114640B0C6D97404085FC032C85D84291246400211E2CAD9075FC0810706103E124640E4DBBB067D075FC0ED60C43E01164640C878944A78075FC03D26529ACD1746404A2D5C536A075FC0EBA1C33C6218464029780AB952075FC04D9F1D705D1946401E86562767075FC0D26D895C701A4640B54E5C8E57075FC088855AD3BC1B4640F2608BDD3E075FC02713B70A621C4640C2853C821B075FC0779E78CE161E4640CA4FAA7D3A075FC0508D976E121F4640CEFBFF3861075FC0BA48A12C7C1F46405A4A969350075FC02DAEF199EC1F46406AA510C825075FC016DBA4A2B120464081B3942C27075FC0DFFB1BB457214640040473F4F8065FC0EA73B515FB214640AABBB20B06075FC0A6B228ECA2224640C09481035A075FC059F78F85E8224640E0B721C66B075FC00392B06F272346406662BD1757075FC0FBAC32535A234640A2478C9E5B055FC0506F46CD5723464046AF06280D045FC0B4A9BA47362346405F0B7A6F0C045FC0D99596917A23464098F90E7EE2005FC0BE9D44847F2346409ACB0D863AFC5EC02FDD2406812346405305A3923AFC5EC06CAF05BD37244640E6E786A6ECFB5EC0A949F0863424464072FE261422F35EC0BA69334E43244640F435CB65A3F15EC080F0A1444B2446406AA510C825F15EC085798F334D244640CCF10A444FEE5EC09DF2E846582446400A815CE2C8ED5EC03EEAAF5758244640E1D39CBCC8ED5EC0F292FFC9DF2346400E30F31DFCE55EC0FFEA71DF6A234640CEC29E76F8E55EC03CA06CCA15244640C6A17E17B6E45EC04E7974232C2446403C139A2496E35EC0B68311FB042446405EDA70581AE25EC0310917F20824464042E8A04B38DE5EC0DEE2E13D07244640E140481630DE5EC01990BDDEFD234640AFCF9CF529DD5EC0395CAB3DEC2346406F66F4A3E1DC5EC05454FD4AE7234640FA97A432C5D75EC09E3E027FF8234640425E0F26C5D75EC05F07CE1951244640AEB7CD5488D75EC07D2079E750244640901150E108D55EC05F07CE1951244640EC34D25279D25EC08F8B6A1151244640ED0C535BEACF5EC030833122512446400629780AB9CE5EC05F07CE19512446401A170E8464CE5EC05F07CE1951244640F9669B1BD3CC5EC05F07CE1951244640D0251C7A8BCB5EC05F07CE1951244640572250FD83CB5EC017D68D7747244640EE42739D46CB5EC07DE882FA96234640601BF16437CB5EC07B8159A148234640A034D42824CB5EC0CC43A67C082246401C0B0A8332CB5EC08600E0D8B3214640459E245D33CB5EC0546D37C137214640DBDD03745FCB5EC0AB75E272BC204640008A912573CB5EC03E07962364204640734BAB2171CB5EC0095229763420464060E7A6CD38CB5EC02EA86F99D31F464046B5882826CB5EC002D71533C21F4640C362D4B5F6CA5EC065C6DB4AAF1F4640CE37A27BD6CA5EC09FCBD424781F4640EEAF1EF7ADCA5EC0172CD505BC1E4640AA5FE97C78CA5EC00EA14ACD1E1E46407F68E6C935CA5EC063B5F97FD51D4640D49CBCC804CA5EC0D71533C2DB1D4640836A8313D1C95EC04A94BDA59C1D4640EFC9C342ADC95EC07B8159A1481D4640F6D1A92B9FC95EC0FFB1101D021D464041B96DDFA3C95EC09487855AD31C46404AD1CABDC0C95EC0E716BA12811C464070EEAF1EF7C95EC039ED2939271C4640DC9DB5DB2ECA5EC08922A46E671B464040C1C58A1ACA5EC077B81D1A161B4640A7CAF78C44CA5EC0C07630629F1A4640C9C9C4AD82CA5EC038D6C56D341A46408444DAC69FCA5EC04468041BD7194640EE75525F96CA5EC063F030ED9B194640AD86C43D96C45EC02235ED629A1946404337FB03E5C35EC045D7851F9C19464068AD68739CC25EC04A60730E9E1946402312859675C25EC0F2EA1C03B21946409D12109370C25EC097FDBAD39D194640E22021CA17BF5EC0253FE257AC194640C971A774B0BE5EC08313D1AFAD194640A8514832ABBE5EC0F486FBC8AD19464010CCD1E3F7B95EC09F909DB7B119464078279F1EDBB95EC0FC389A232B214640DD24068195B85EC0B890477023214640473B6EF8DDB75EC0ED9DD15625214640D80DDB1665B75EC0B728B341262146404AB54FC763B75EC0DB4AAFCDC6244640795A7EE02AB75EC0C3802557B12446405F0B7A6F0CB75EC0041901158E24464000A60C1CD0B65EC0A9143B1A87244640378AAC3594B65EC0C45DBD8A8C2446408A05BEA25BB65EC0BB287AE063244640289F1EDB32B65EC0B56B425A63244640BF7E880D16B65EC0730E9E094D2446404A969350FAB55EC0B98784EFFD2346407F129F3BC1B55EC00455A35703244640FF9254A698B55EC0682096CD1C244640AD2F12DA72B55EC09F71E14048244640942EFD4B52B55EC05F9335EA212446408D7BF31B26B55EC08505F7031E244640C40AB77C24B55EC01C9430D3F6234640E92807B309B55EC0270F0BB5A6234640B0FD648C0FB55EC03FC39B3578234640AD174339D1B45EC067D13B157023464084471B47ACB45EC0C151F2EA1C23464061FA5E4370B45EC0910DA48B4D234640336DFFCA4AB45EC081785DBF60234640B45549641FB45EC006F357C85C234640FB3F87F9F2B35EC047382D78D12346404AB1A371A8B35EC05EBC1FB75F24464053CDACA580B35EC020D1048A5824464051DA1B7C61B35EC03B6BB75D6824464036AFEAAC16B35EC0723106D6712446402EE23B31EBB25EC0501A6A1492244640CBD6FA22A1B25EC0E884D04197244640A4880CAB78B25EC01B0DE02D9024464005172B6A30B25EC0E1606F62482446401A2FDD2406B25EC0DCD7817346244640E84CDA54DDB15EC021054F2157244640BAD91F28B7B15EC083DDB06D51244640C5ABAC6D8AB15EC0D99255116E2446402AE3DF675CB15EC04BE82E89B3244640B05417F032B15EC0982D5915E1244640EE2076A6D0B05EC094A300513025464056F146E691B05EC03CD7F7E12025464040FA264D83B05EC02288F370022546401AA3755435B05EC0300DC347C42446403DB7D09508B05EC0C287122D792446406878B306EFAF5EC0E0D4079277244640EF1D3526C4AF5EC0E75086AA98244640FE47A643A7AF5EC07AFEB4519D24464049A12C7C7DAF5EC0F1D6F9B7CB244640C310397D3DAF5EC0FA230C0396244640CE1ABCAFCAAE5EC0F0DC7BB8E4244640E0DA899290AE5EC0832D76FBAC2446408A73D4D171AE5EC0A5677A89B12446404819710168AE5EC0587380608E2446400C01C0B167AE5EC0029B73F04C2446408099EFE027AE5EC0BB5D2F4D1124464061360186E5AD5EC05EB7088CF52346400473F4F8BDAD5EC04DBA2D910B2446403AECBE6378AD5EC0E4BD6A65C223464073A087DA36AD5EC0621399B9C0234640A165DD3F16AD5EC0EB8B84B69C234640F4F75278D0AC5EC02E742502D5234640F4E159828CAC5EC0AA0A0DC4B2234640AF22A30392AC5EC070AFCC5B75234640A6D3BA0D6AAC5EC0B517D1764C23464062F19BC24AAC5EC02C5F97E13F23464091990B5C1EAC5EC0FD6662BA102346402AC423F1F2AB5EC090F7AA9509234640C4D155BABBAB5EC0E38BF678212346409D83674293AB5EC07D7555A016234640807B9E3F6DAB5EC02C7DE882FA22464029417FA147AB5EC0DAA7E33103234640EC4FE27327AB5EC0A339B2F2CB2246403FE5982CEEAA5EC0F31B261AA42246407233DC80CFAA5EC01CEA77616B22464020990E9D9EAA5EC0904AB1A371224640035DFB027AAA5EC038F24064912246409FAF592E1BAA5EC05796E82CB32246406326512FF8A95EC0D30FEA2285224640077AA86DC3A95EC03B6BB75D682246404BE82E89B3A95EC094BDA59C2F22464043AA285E65A95EC03143E389202246403691990B5CA95EC0B3976DA7AD21464080B9162D40A95EC0800A47904A214640E17D552E54A95EC094A46B26DF204640658D7A8846A95EC06C74CE4F712046404E7CB5A338A95EC03AC95697532046408881AE7D01A95EC00514EAE9232046402C1213D4F0A85EC02A8D98D9E71F4640AA108FC4CBA85EC0DFDC5F3DEE1F46407769C36169A85EC0F0C2D66CE51F46404EEB36A8FDA75EC047ACC5A70020464022FAB5F5D3A75EC08B6B7C26FB1F464010768A5583A75EC0427573F1B71F46401CEE23B726A75EC016BB7D56991F464020B24813EFA65EC019E3C3EC651F4640635E471CB2A65EC03D62F4DC421F4640D93EE42D57A65EC0336DFFCA4A1F4640F607CA6DFBA55EC033A14962491F4640266C3F19E3A55EC088BB7A15191F46404BCB48BDA7A55EC03368E89FE01E46402CF015DD7AA55EC01AF67B629D1E4640CD565EF23FA55EC0C878944A781E46403F8D7BF31BA55EC007AF5DDA701E464017D4B7CCE9A45EC052D4997B481E46409487855AD3A45EC00D6D0036201E4640132BA391CFA45EC0EA5C514A081E46401B12F758FAA45EC053793BC2691D4640198D7C5EF1A45EC04606B98B301D46400035B56CADA45EC02E01F8A7541D4640D82D02637DA45EC03BFA5FAE451D4640B4AF3C484FA45EC0C537143E5B1D46407C478D0931A45EC039234A7B831D464018761893FEA35EC04C1938A0A51D464079211D1EC2A35EC087C09140831D46404B74965984A35EC090BB0853941D4640D046AE9B52A35EC01D03B2D7BB1D464077D844662EA35EC0A8A78FC01F1E4640C85C19541BA35EC03FAA61BF271E46409816F549EEA25EC096EB6D33151E46406EDE3829CCA25EC06F4562821A1E464001F8A75489A25EC01990BDDEFD1D46407E37DDB243A25EC0BC9179E40F1E4640D3D9C9E028A25EC082700514EA1D464012D9075916A25EC006D50627A21D46408C2AC3B81BA25EC06F2A52616C1D46405A65A6B4FEA15EC0A7E49CD8431D4640F0F62004E4A15EC09E4143FF041D4640A8C29FE1CDA15EC0014EEFE2FD1C4640A30392B06FA15EC055BE6724421D46408DB5BFB33DA15EC0CCD07822881D4640B9FC87F4DBA05EC08F705AF0A21D4640F8156BB8C8A05EC0BDFBE3BD6A1D4640AE2EA704C4A05EC02634492C291D46403C670B08ADA05EC0772D211FF41C4640B85B920376A05EC0A52DAEF1991C4640169F02603CA05EC06802452C621C4640F88903E8F79F5EC06C5D6A847E1C46402B8716D9CE9F5EC0D0D1AA96741C4640B9FAB1497E9F5EC00244C18C291C464038BF61A2419F5EC0B98C9B1A681C4640841266DAFE9E5EC0EA5BE674591C464016C1FF56B29E5EC0E7C072840C1C46400B410E4A989E5EC0FEB4519D0E1C46403C31EBC5509E5EC09337C0CC771C46408940F50F229E5EC0BB7F2C44871C4640889B53C9009E5EC0A78FC01F7E1C4640850662D9CC9D5EC0C45DBD8A8C1C4640DEC66647AA9D5EC03DF03158711C464067463F1A4E9D5EC08AE59656431C46401ABD1AA0349D5EC0C552245F091C4640DC847B65DE9C5EC04772F90FE91B46405796E82CB39C5EC098BC0166BE1B4640C57421567F9C5EC07C45B75ED31B464074452921589C5EC086E28E37F91B46406667D13B159C5EC072A774B0FE1B46405721E527D59B5EC04C3448C1531C464070AFCC5B759B5EC00227DBC01D1C4640AA49F086349B5EC0BC067DE9ED1B4640EB387EA8349B5EC01551137D3E1C4640C5C72764E7995EC06A1327F73B1C4640B34291EEE7995EC03CA1D79FC41B46404A94BDA59C985EC0F8156BB8C81B464074417DCB9C985EC0F3035779021B4640F73AA92F4B985EC0B43C0FEECE1A4640C211A452EC975EC09DD32CD0EE1A464050A8A78FC0975EC07406465ED61A46401E8CD82780975EC0DE37BEF6CC1A4640B39597FC4F975EC0A5660FB4021B464058C51B9947975EC07EC68503211B46401478279F1E975EC0287FF78E1A1B4640882D3D9AEA965EC078B130444E1B46403E912749D7965EC0ED612F14B01B4640861DC6A4BF965EC060C8EA56CF1B4640C4B46FEEAF965EC06A6B44300E1C464050340F6091965EC0446D1B46411C4640209738F240965EC099EE75525F1C464002284696CC955EC0DC4598A25C1C4640200A664CC1955EC06BBA9EE8BA1C464094A5D6FB8D955EC06494675E0E1D464020EEEA5564955EC01D1CEC4D0C1D4640B77C24253D955EC00BEBC6BB231D4640E42A16BF29955EC0917BBABA631D464090A339B2F2945EC0F418E599971D4640CB0F5CE509955EC0FA5FAE450B1E464025E7C41EDA945EC039CFD8976C1E4640382EE3A606955EC02CF3565D871E4640FC5580EF36955EC0E5284014CC1E4640D177B7B244955EC014E63DCE341F4640FA96395D16955EC02B1213D4F01F4640BBB88D06F0945EC0410B09185D2046402D7AA702EE905EC086FE092E562046402D7AA702EE905EC00798F90E7E204640FDDCD0949D8E5EC00798F90E7E204640B8C83D5DDD815EC09624CFF57D204640DCEF5014E8815EC03561FBC91821464084D4EDEC2B7A5EC0F8FA5A971A2146403D0E83F92B7A5EC0F44C2F31962146403719558671745EC054556820962146403DF19C2D20745EC0F302ECA3532146405EA0A4C002745EC0CAC0012D5D21464094DFA293A5735EC0A0BFD023462146402654707841735EC0A1D634EF38214640EF1F0BD121735EC00DFCA886FD20464078B5DC9909735EC07711A628972046409A92ACC3D1725EC0323CF6B358204640C43C2B69C5725EC01C25AFCE3120464084D6C39789725EC0700514EAE91F4640C2D8429083725EC01F65C405A01F46403CF9F4D896725EC064B0E2546B1F46401EA9BEF38B725EC0CCB4FD2B2B1F4640ED65DB696B725EC04D0F0A4AD11E464083177D0569725EC037177FDB131E4640B091240857725EC0E4F736FDD91D4640DD25715644725EC02EC6C03A8E1D4640F86EF3C649725EC0DFFB1BB4571D464070B0373124725EC0459F8F32E21C464014048F6FEF715EC0213EB0E3BF1C464067B96C74CE715EC05BCF108E591C464046990D32C9715EC05D6C5A29041C46400262122EE4715EC07D5C1B2AC61B46408386FE092E725EC0268A90BA9D1B4640AF09698D41725EC085251E50361B464088F2052D24725EC01C23D923D41A46402A75C93846725EC0605793A7AC1A464052EE3EC747725EC0E15F048D991A4640BCCB457C27725EC0DFF8DA334B1A4640800EF3E505725EC05E82531F481A46409CA8A5B915725EC0A850DD5CFC194640A663CE33F6715EC031957EC2D91946402F50526001725EC0C18A53AD85194640047289230F725EC0F4A44C6A68194640B9533A58FF715EC09E98F56228194640B69DB64604725EC0B5FB5580EF18464012143FC6DC715EC0D00A0C59DD1846405B087250C2715EC0AEBA0ED594184640CD3B4ED191715EC0512B4CDF6B18464048A46DFC89715EC0AF91240857184640BC04A73E90715EC05D6C5A2904184640D6DF12807F715EC05531957EC2174640ACE7A4F78D715EC0B01F6283851746405EA10F96B1715EC077F2E9B12D174640C0B33D7AC3715EC0349C3237DF164640B35C363AE7715EC06DC5FEB27B164640C72C7B12D8715EC0FD868906291646402E20B41EBE715EC01C9430D3F61546407959130B7C715EC0408864C8B11546409E4319AA62715EC0CB2E185C73154640CF69166877715EC01D39D219181546402025766D6F715EC01BF5108DEE144640A9A27895B5715EC08C463EAF781446408BE07F2BD9715EC09D83674293144640A0FA07910C725EC0D105F52D73144640FB761211FE715EC0ADBB79AA43144640D8BAD408FD715EC00B23BDA8DD13464012C2A38D23725EC0D386C3D2C0134640F0879FFF1E725EC03FA6B5696C1346403CDA38622D725EC0705985CD001346404DD7135D17725EC01E85EB51B8124640EA1F4432E4715EC064726A67981246405F5E807D74715EC0C6FB71FBE51146402A6EDC627E715EC066A3737E8A11464043C70E2A71715EC06A4AB20E471146406F2D93E178715EC0F7A92A3410114640CF2F4AD05F715EC0E3C0ABE5CE1046406EBF7CB262715EC07138F3AB39104640AC8A709351715EC0BAD8B45208104640B83B6BB75D715EC0BFB9BF7ADC0F46407B4ACE893D715EC0A88DEA74200F46407AC2120F28715EC085032159C00E46407DAF21382E715EC026C286A7570E46409DB81CAF40715EC006483481220E46409AB4A9BA47715EC056D3F544D70D4640FF5C34643C715EC0028063CF9E0D46409B02999D45715EC0A835CD3B4E0D4640D6C9198A3B715EC069E388B5F80C4640593332C85D715EC0AFCA85CABF0C464040DAFF006B715EC06B64575A460C46409161156F64715EC0C9E1934E240C464002F2255470715EC07B698A00A70B4640FACF9A1F7F715EC05C74B2D47A0B46400E4E44BFB6715EC033BE2F2E550B464064C91CCBBB715EC0CCD24ECDE50A46409EEA909BE1715EC01EDD088B8A0A4640C5C72764E7715EC0855CA967410A464032CB9E0436725EC08C65FA25E2094640CF2F4AD05F725EC0CDE67118CC0946402EA9DA6E82725EC010CAFB389A09464032E4D87A86725EC0F73AA92F4B094640CBB9145795725EC0923B6C22330946404565C39ACA725EC01DC6A4BF97084640CE8E54DFF9725EC0F6B3588AE407464022C5008926735EC0B7EC10FFB007464068942EFD4B735EC0658D7A884607464026C286A757735EC092E52494BE064640BEA085048C735EC076172829B0064640D908C4EBFA735EC08AA9F413CE0646400A4CA7751B745EC040102043C7064640137EA99F37745EC0E1421EC18D064640B2614D6551745EC07171546EA2064640DE3829CC7B745EC0F819170E840646405CC823B891745EC0300F99F2210646403E5DDDB1D8745EC0B69BE09BA605464008B0C8AF1F755EC07A19C5724B054640787AA52C43755EC0ED45B41D53054640605B3FFD67755EC02A1BD65416054640483657CD73755EC06395D233BD0446405CE674594C755EC0E1421EC18D0446406FB9FAB149755EC0EFAA07CC430446406519E25817755EC05C1B2AC6F9034640B96DDFA3FE745EC058350873BB0346408ACC5CE0F2745EC05B41D3122B0346407B116DC7D4745EC06A4B1DE4F5024640E4F4F57CCD745EC01FD61BB5C2024640586FD40AD3745EC09658198D7C0246402C8194D8B5745EC0A5BA8097190246407A32FFE89B745EC0D767CEFA940146403C3080F0A1745EC0454607246101464008C89750C1745EC0D21A834E08014640425E0F26C5745EC0DDED7A698A0046401AA19FA9D7745EC0A696ADF5450046407AE3A430EF745EC087687407B1FF4540FE80070610755EC00BCD751A69FF45405664744012755EC05C001AA54BFF45409E40D82956755EC083A10E2BDCFE45406E179AEB34755EC07AA69718CBFE45401E705D3123755EC043554CA59FFE4540397CD28904755EC00AD6389B8EFE4540A0A52BD846755EC05EBC1FB75FFE45409FCBD42478755EC099EE75525FFE4540ACE7A4F78D755EC0BBB4E1B034FE4540A06AF46A80755EC023F3C81F0CFE4540E3E13D0796755EC09A417C60C7FD45403BC780ECF5755EC0C4B2994352FD454096D1C8E715765EC0350A4966F5FC454072E1404816765EC0E4F4F57CCDFC4540AE0D15E3FC755EC034BA83D899FC454043E6CAA0DA755EC0E3C116BB7DFC4540FF756EDA8C755EC0126A865451FC4540E411DC48D9755EC0A58636001BFC45406397A8DE1A765EC02041F163CCFB4540F2E8465854765EC0A1B77878CFFB45405AF2785A7E765EC076FD82DDB0FB4540F296AB1F9B765EC0E238F06AB9FB454025E7C41EDA765EC0C343183F8DFB4540BC40498105775EC07920B24813FB4540B4CD8DE909775EC058FE7C5BB0FA4540E84F1BD5E9765EC04754A86E2EFA45406A82A8FB00775EC0425DA45016FA4540A680B4FF01775EC005A051BAF4F945406AFAEC80EB765EC04CA4349BC7F94540C211A452EC765EC01900AAB871F94540D2E3F736FD765EC0786000E143F9454076A8A624EB765EC0CB29013109F9454014048F6FEF765EC0CD57C9C7EEF84540944F8F6D19775EC07347FFCBB5F84540D68F4DF223775EC0F10BAF2479F84540EF53556820775EC022E2E65432F845409946938B31775EC0E3FDB8FDF2F7454053B131AF23775EC081B1BE81C9F745401B7FA2B261775EC0FD48111956F745404F2157EA59775EC08B8BA37213F74540E813799274775EC071E6577380F6454055BDFC4E93775EC07F6B274A42F6454072A8DF85AD775EC0656D533C2EF64540FF04172B6A775EC07AFA08FCE1F545401AFD683865775EC03B1C5DA5BBF545405262D7F676775EC0917BBABA63F545400820B58993775EC0BEBB95253AF54540B2BE81C98D775EC0D50792770EF5454082A8FB00A4775EC019C8B3CBB7F445403448C153C8775EC03AB187F6B1F44540EAB0C22D1F785EC0E57B462234F445404182E2C798785EC018213CDA38F445408E01D9EBDD785EC09C6D6E4C4FF44540F911BF620D795EC0D79FC4E74EF44540A2D0B2EE1F795EC095F6065F98F445404A0D6D0036795EC02BDCF29194F44540247D5A457F795EC0CA13083BC5F4454084F3A96395795EC0B0FD648C0FF54540B1FB8EE1B1795EC0053411363CF54540C9CB9A58E0795EC004A9143B1AF54540AAB8718BF9795EC02F302B14E9F44540704562821A7A5EC0B54C86E3F9F4454044DB3175577A5EC02FA52E19C7F44540D40CA9A2787A5EC0317BD976DAF445400B5EF415A47A5EC046CD57C9C7F445402AFC19DEAC7A5EC0255987A3ABF4454012656F29E77A5EC024085740A1F445408653E6E61B7B5EC0F72004E44BF4454036AE7FD7677B5EC08192020B60F445406231EA5A7B7B5EC0D68F4DF223F445401B1021AE9C7B5EC0950F41D5E8F34540BB7B80EECB7B5EC0C3F17C06D4F34540E161DA37F77B5EC0070951BEA0F345406EC328081E7C5EC0070ABC934FF3454079AF5A99F07B5EC0C495B37746F345404A7A185A9D7B5EC0CDAE7B2B12F34540D5B14AE9997B5EC0BC033C69E1F2454030D3F6AFAC7B5EC03B54539275F24540C4CDA964007C5EC0ED60C43E01F245408A027D224F7C5EC001D8800871F145406C239EEC667C5EC0C478CDAB3AF145408A7615527E7C5EC06C96CB46E7F045408F8AFF3BA27C5EC03596B036C6F04540DE5A26C3F17C5EC0F0694E5E64F0454052BB5F05F87C5EC0279F1EDB32F045405CAD1397E37C5EC0E5F0492712F045401BD82AC1E27C5EC0A65D4C33DDEF45405A99F04BFD7C5EC0B4C5353E93EF45401A6F2BBD367D5EC01DE736E15EEF4540E27A14AE477D5EC09BFC169D2CEF45404EF04DD3677D5EC07EC6850321EF45403D2AFEEF887D5EC0F2785A7EE0EE4540D9CF6229927D5EC090F8156BB8EE4540DAE21A9FC97D5EC01E8B6D52D1EE4540CC26C0B0FC7D5EC020D099B4A9EE4540EF906280447E5EC089601C5C3AEE454025068195437E5EC07764AC36FFED4540E2395B40687E5EC0EE0390DAC4ED454016F9F5436C7E5EC09BC761307FED454051F701486D7E5EC0D34ECDE506ED4540144031B2647E5EC076F9D687F5EC45403F8F519E797E5EC010B056ED9AEC4540CE4F711C787E5EC00F7D772B4BEC4540240C03965C7E5EC0950F41D5E8EB45403C4ED1915C7E5EC0B2632310AFEB454088D4B48B697E5EC0C87BD5CA84EB4540BB421F2C637E5EC0BD8DCD8E54EB45405E0D501A6A7E5EC0492EFF21FDEA454081CCCEA2777E5EC07C7C4276DEEA4540583CF548837E5EC0FA2477D844EA4540F0C34142947E5EC05EF1D4230DEA45407C7A6CCB807E5EC0EB56CF49EFE94540D53DB2B96A7E5EC08716D9CEF7E9454060217365507E5EC0F10C1AFA27EA454073F4F8BD4D7E5EC004FEF0F3DFE945401B65FD66627E5EC04AED45B41DE9454096CD1C925A7E5EC0B3942C27A1E84540D3872EA86F7E5EC05ED4EE5701E8454098A3C7EF6D7E5EC03CF88903E8E74540EECA2E185C7E5EC0E0F3C308E1E74540C0CFB870207E5EC03E3C4B9011E8454079C9FFE4EF7D5EC06C3B6D8D08E84540E8D84125AE7D5EC06A32E36DA5E745400CB265F9BA7D5EC0C43D963E74E7454008C89750C17D5EC052978C6324E745406C088ECBB87D5EC083BEF4F6E7E645400C23BDA8DD7D5EC052F01472A5E645403E027FF8F97D5EC0444FCAA486E6454077F69507E97D5EC0AD8218E8DAE545403D4679E6E57D5EC0EE3EC7478BE545404FE8F527F17D5EC0E2AE5E4546E545408E1EBFB7E97D5EC0B7239C16BCE4454098F6CDFDD57D5EC03DF0315871E44540999F1B9AB27D5EC0897780272DE4454010255AF2787D5EC0DC291DACFFE34540813D26529A7D5EC0DD5ED218ADE34540990D32C9C87D5EC094F3C5DE8BE345409AD2FA5B027E5EC02BBD361B2BE34540103AE8120E7E5EC000732D5A80E245404510E7E1047E5EC0D174763238E245406264C91CCB7D5EC090D78349F1E1454077D7D9907F7D5EC01FBC7669C3E1454002637D03937D5EC09A249694BBE1454002486DE2E47D5EC0E6E61BD13DE14540884A2366F67D5EC0787E5182FEE045409B8E006E167E5EC07B48F8DEDFE045406840BD19357E5EC0D4B837BF61E045400475CAA31B7E5EC0CAC4AD8218E04540562C7E53587E5EC0410C74ED0BE0454014747B49637E5EC0F790F0BDBFDF4540669DF17D717E5EC0D920938C9CDF4540FC5069C4CC7E5EC07C0DC17119DF45406A8995D1C87E5EC0F9BA0CFFE9DE4540E065868DB27E5EC0F8872D3D9ADE4540574277499C7E5EC0AA4203B16CDE45404DBC033C697E5EC02907B30930DE454044FB58C16F7E5EC007EBFF1CE6DD454066DEAAEB507E5EC00F289B7285DD4540F7AB00DF6D7E5EC05EB9DE3653DD4540FA0967B7967E5EC02A8A5759DBDC4540DA3A38D89B7E5EC0E8DB82A5BADC45404A0C022B877E5EC04C8BFA2477DC45400C040132747E5EC0B3CF639467DC4540CCF10A444F7E5EC008CE1951DADB4540E17A14AE477E5EC01F65C405A0DB4540EC2E5052607E5EC002BB9A3C65DB4540BE2F2E55697E5EC075C58CF0F6DA45402C2E8ECA4D7E5EC0AE4676A565DA4540A5DAA7E3317E5EC08DB5BFB33DDA45403198BF42E67D5EC0E109BDFE24DA4540923CD7F7E17D5EC094F8DC09F6D94540FC8D76DCF07D5EC0ED9BFBABC7D945404CFA7B293C7E5EC0E15D2EE23BD94540B2101D02477E5EC0567E198C11D94540D76839D0437E5EC0F3380CE6AFD845401AC39CA04D7E5EC07D94111780D84540750470B3787E5EC0B3B27DC85BD84540630AD6389B7E5EC009FB761211D84540DBC2F352B17E5EC0F10EF0A485D745407E569929AD7E5EC04CA60A4625D74540B2B794F3C57E5EC09641B5C189D64540DAC87553CA7E5EC08D7BF31B26D64540E144F46BEB7E5EC05852EE3EC7D545401A2FDD24067F5EC0C267EBE060D545409AD2FA5B027F5EC0C05774EB35D5454036C98FF8157F5EC01A2FDD2406D54540F0879FFF1E7F5EC033C005D9B2D445401E87C1FC157F5EC02F50526001D445401A868F88297F5EC02E1D739EB1D34540F0366F9C147F5EC0E560360186D34540E00D6954E07E5EC0569DD5027BD2454084B53176C27E5EC0982F2FC03ED24540C11BD2A8C07E5EC0F25EB532E1D14540AB048BC3997E5EC0F850A2258FD145401DE736E15E7E5EC030BABC395CD14540772FF7C9517E5EC008FEB7921DD14540E4F90CA8377E5EC0191F662FDBD04540B83CD68C0C7E5EC0C667B27F9ED045405A48C0E8F27D5EC099D18F8653D04540D36F5F07CE7D5EC0BF60376C5BD0454097546D37C17D5EC0660FB40243D04540EBA7FFACF97D5EC03CDA38622DD04540FC6EBA65877E5EC0DBFB54151AD045407AA69718CB7E5EC09D616A4B1DD045405E11FC6F257F5EC060AA99B514D045406C43C5387F7F5EC0CDE506431DD045405514AFB2B67F5EC080D3BB783FD04540E99AC937DB7F5EC055A4C2D842D045402979758E01805EC0724F57772CD04540F8FA5A971A805EC0116C5CFFAECF4540191BBAD91F805EC0F56569A7E6CE45403430F2B226805EC06F6072A3C8CE454081EA1F4432805EC0F5A0A014ADCE4540A4198BA6B3805EC0CC26C0B0FCCD4540D4282499D5805EC0A4FB3905F9CD45408A3DB48F15815EC050A73CBA11CE4540B2F677B647815EC06A32E36DA5CD4540F04E3E3DB6815EC05EF3AACE6ACD454059C0046EDD815EC01F49490F43CD4540F3AE7AC03C825EC074B4AA251DCD4540A27895B54D825EC09D0DF96706CD4540FBE93F6B7E825EC03AE466B801CD45404A46CEC29E825EC0BFF04A92E7CC45406C088ECBB8825EC0A43330F2B2CC4540B936548CF3825EC0F7E5CC7685CC45407CF0DAA50D835EC02CF3565D87CC454094BDA59C2F835EC057E9EE3A1BCC4540B80375CAA3835EC095ECD808C4CB454039B709F7CA835EC0A5F622DA8ECB4540810871E5EC835EC0376A85E97BCB4540D288997D1E845EC04049810530CB454075ADBD4F55845EC0AC1C5A643BCB45409C69C2F693845EC0AC1C5A643BCB454098689082A7845EC0B77A4E7ADFCA4540A75B76887F845EC0486AA16472CA4540F25F200890845EC047205ED72FCA4540E1270EA0DF845EC07B2DE8BD31CA45405D6C5A2904855EC0F7216FB9FAC945409CFC169D2C855EC0B49080D1E5C9454093A9825149855EC0EB56CF49EFC94540234C512E8D855EC076A4FACE2FCA454042B5C189E8855EC0ABB184B531CA45400E30F31DFC855EC0232D95B723CA45405BED612F14865EC0F241CF66D5C945403F56F0DB10865EC0E2E7BF07AFC9454094D74AE82E865EC0B2D826158DC945403DB665C059865EC005508C2C99C945409C6C0377A0865EC04301DBC188C945401D03B2D7BB865EC01A2E724F57C94540653733FAD1865EC076BF0AF0DDC84540700B96EA02875EC08B5242B0AAC84540C53BC09316875EC0B9A3FFE55AC84540E27492AD2E875EC0861BF0F961C8454081CCCEA277875EC0DD5D6743FEC74540CA6DFB1EF5875EC098309A95EDC745406FD74B5304885EC04F0647C9ABC745400057B26323885EC0F94A202576C74540D177B7B244885EC0A3C9C51858C74540D49E927362885EC0C24A051555C7454057E883656C885EC02575029A08C74540A48B4D2B85885EC053CC41D0D1C64540D594641D8E885EC0E884D04197C645404C1938A0A5885EC02E1B9DF353C64540E8F527F1B9885EC0D39D279EB3C54540DA1CE736E1885EC038BBB54C86C54540B9196EC0E7885EC0B821C66B5EC545401C97715303895EC0D009A1832EC545400CEBC6BB23895EC0622D3E05C0C445405E2BA1BB24895EC0E61C3C139AC44540A3E716BA12895EC0A6ED5F5969C4454088307E1AF7885EC06744696FF0C34540AA9ECC3FFA885EC0A31F0DA7CCC345407C7BD7A02F895EC082C2A04CA3C34540E86B96CB46895EC08F705AF0A2C345409B73F04C68895EC0786000E143C345402AFD84B35B895EC09850C1E105C34540ACC77DAB75895EC042209738F2C24540F7E80DF791895EC0C9207711A6C24540B053AC1A84895EC043E1B37570C2454036B1C05774895EC026A60BB1FAC14540F29716F549895EC05801BEDBBCC14540035B25581C895EC08043A852B3C14540BC033C69E1885EC0F833BC5983C1454080643A747A885EC01B62BCE655C145406A6D1ADB6B885EC01AC1C6F5EFC045409C8713984E885EC047E4BB94BAC04540AF40F4A44C885EC01D3BA8C475C04540D7A205685B885EC00FB22C98F8BF4540BD5301F73C885EC05E6743FE99BF45407E8B4E965A885EC0AAD216D7F8BE454066A3737E8A885EC0601C5C3AE6BE4540A65EB7088C885EC07213B534B7BE45408735954561885EC012D9075916BE4540DC48D92269885EC0AF58C345EEBD454046B75ED383885EC0149337C0CCBD45406CAE9AE788885EC0E36DA5D766BD4540CE4F711C78885EC00838842A35BD4540B2D5E59480885EC05CE49EAEEEBC45409831056B9C885EC0CD58349D9DBC45409F3C2CD49A885EC04B3ACAC16CBC45405C02F04FA9885EC0DCD8EC48F5BB45405531957EC2885EC0E0D6DD3CD5BB4540F0F62004E4885EC00936AE7FD7BB4540605628D2FD885EC08D429259BDBB45402ECBD765F8885EC0BDDEFDF15EBB45406284F068E3885EC09201A08A1BBB454074E95F92CA885EC0C2853C821BBB4540C4D155BABB885EC0CEDC43C2F7BA4540EF5701BEDB885EC006465ED6C4BA45404337FB03E5885EC03CD9CD8C7EBA4540849B8C2AC3885EC0D671FC5069BA45407C629D2ADF885EC0FC8C0B0742BA4540EA3E00A94D895EC083A3E4D539BA4540399B8E006E895EC0A833F790F0B94540D097DEFE5C895EC0D10149D8B7B94540F22895F084895EC063B6645584B94540397D3D5FB3895EC00EBA84436FB945402866BD18CA895EC0BBD408FD4CB9454064726A6798895EC063EC8497E0B845406362F3716D895EC05915E126A3B84540657094BC3A895EC0A6CF0EB8AEB845401EA7E8482E895EC0D172A087DAB8454041D5E8D500895EC006BAF605F4B84540868E1D54E2885EC00705A568E5B8454014799274CD885EC04DD53DB2B9B845402176A6D079885EC087BD50C076B8454072FDBB3E73885EC09701672959B845401DE4F56052915EC0AC70CB4752B84540888043A852915EC0BB7F2C4487B845406E50FBAD9D9C5EC04D10751F80B8454084BC1E4C8AA05EC06DC5FEB27BB84540CB82893F8AA05EC0A86C585359B845401D8EAED2DDA75EC0F5D555815AB84540234BE658DEA75EC0B45549641FB84540E0BA624678AF5EC08A37328FFCB7454001BEDBBC71AF5EC09526A5A0DBB94540739CDB847BAF5EC0C77F812040C24540DF6C73637AAF5EC05BD1E638B7C5454057B1F84D61B15EC013D4F02DACC5454010CF126404B25EC073F38DE89EC545400EDAAB8F87B45EC0E90C8CBCACC545401E4FCB0F5CB55EC06C088ECBB8C54540DC80CF0F23B95EC0EC1681B1BEC54540B537F8C264BA5EC04A60730E9EC54540365CE49EAEBB5EC0A12C7C7DADC545400518963FDFBB5EC06FBBD05CA7C54540880CAB7823BE5EC009F7CABC55C5454038BC202235BF5EC0E5B2D1393FC545407AABAE4335BF5EC0DD770C8FFDC44540CE88D2DEE0C65EC019355F251FC5454079AC1919E4C65EC0DF18028063C545406A11514CDEC65EC0C90050C58DCD4540B269A510C8C85EC09F39EB538ECD45409EB0C403CAC85EC03E3F8C101ED345409C14E63DCEC85EC02B4A09C1AAD64540371B2B31CFC85EC0B648DA8D3EDE45402E742502D5C85EC01059A48977E04540A487A1D5C9C85EC00ED6FF39CCE34540C22E8A1EF8C85EC0EBFF1CE6CBE345409CF86A4771C95EC092E86514CBE34540AA7B6473D5C95EC050F9D7F2CAE34540E3E0D231E7CB5EC08E93C2BCC7E345406FD40AD3F7D35EC064E94317D4E34540789B374E0AD45EC064E94317D4E345409F3D97A949D65EC000A94D9CDCE34540E71DA7E848D65EC0EFC3414294E745407095271076D95EC03FFD67CD8FE7454058AEB7CD54DA5EC02C64AE0CAAE74540287FF78E1ADE5EC0DBF63DEAAFE74540527AA69718DE5EC0DEFE5C3464EA454023658BA4DDE15EC0B05758703FEA4540E99AC937DBE15EC05E11FC6F25EF45407636E49F19E55EC0A034D42824EF45409A5AB6D617E55EC099EFE0270EF24540ECDCB419A7E75EC02461DF4E22F245402F4E7CB5A3E75EC08A5759DB14F345408CBAD6DEA7E75EC0CC43A67C08F4454038F581E49DE75EC012656F29E7F545409082A7902BEA5EC0C8D11C59F9F54540C72B103D29EA5EC0F3C64961DEF745403123BC3D08ED5EC0CC26C0B0FCF7454030BB270F0BED5EC0E7FEEA71DFF84540B0928FDD05EF5EC0BBB20B06D7F845407C4963B48EF05EC03BA41820D1F84540205ED72FD8F35EC024B6BB07E8F84540516A2FA2EDF45EC07F86376BF0F8454056276728EEF45EC0143FC6DCB5F84540E6B2D1393FF55EC07EC16ED8B6F845406D1ADB6B41F55EC0963D096CCEF7454056D7A19A92F55EC025CADE52CEF74540D2C43BC093F55EC06072A3C85AF745405C936E4BE4F55EC0C66B5ED559F7454031B2648EE5F55EC0A8FC6B79E5F645404436902E36F65EC014E7A8A3E3F64540A06EA0C03BF65EC07E71A94A5BF6454059DB148F8BF65EC09599D2FA5BF6454044A0FA0791F65EC00A9E42AED4F5454046EC134031F75EC07F66101FD8F54540FC6F253B36F75EC0D06053E751F545400A849D62D5F75EC0FD14C78157F545408066101FD8F75EC0942F682101F545401A53B0C6D9F75EC0F4C308E1D1F44540C26ED8B628F85EC045B6F3FDD4F445403046240A2DF85EC03D997FF44DF4454026FF93BF7BF85EC06BB587BD50F44540CA3159DC7FF85EC06F46CD57C9F345407044F7AC6BF95EC0DE1D19ABCDF34540E50CC51D6FF95EC0E9D32AFA43F3454058E71890BDF95EC0E9D32AFA43F345401A4D2EC6C0F95EC05983F755B9F24540C382FB010FFA5EC0BF7CB262B8F2454000FE2955A2FA5EC09BFD8172DBF24540DE73603942FB5EC0D51EF64201F34540DC0BCC0A45FB5EC06F2D93E178F04540A088450C3BFB5EC0DF88EE59D7EE4540D0D38041D2FB5EC0C6F8307BD9EE4540CCED5EEE93FC5EC037A4518193EF4540AA99B51490FC5EC04A06802A6EEE454059A31EA2D1FD5EC08789062978EE45407784D38217FF5EC0450F7C0C56EE4540E066F16261005FC0164A26A776EE4540ECF65965A6015FC0C4E9245B5DEE4540FAB31F2922045FC0E78BBD175FEE45404837C2A222045FC02670EB6E9EEE45402F3201BF46055FC024EB707495EE454046054EB681065FC05131CEDF84EE4540A8C64B3789065FC0BCE7C07284EE454086AFAF75A9065FC0BE839F3880EE4540A39410ACAA065FC08EFF024180EE45402D5DC136E2085FC0A1BB24CE8AEE454071EF189A280A5FC01DD4C9608EEE4540C1AA7AF99D095FC0E2C798BB96F44540'
        ]);

        $eugene_tax_id = DB::table($this->taxes)->insertGetId([
            'name' => 'Eugene Oregon Employer Tax',
            'class' => EugeneEmployer::class,
        ]);

        DB::table($this->tax_areas)->insert([[
            'tax_id' => $eugene_tax_id,
            'home_governmental_unit_area_id' => $eugene_gua_id,
            'work_governmental_unit_area_id' => $eugene_gua_id,
            'based' => TaxArea::BASED_ON_WORK_AND_NOT_HOME_LOCATION,
        ]]);
    }

    public function down()
    {
        $tax_id = DB::table('taxes')
            ->where('class', EugeneEmployer::class)
            ->first()
            ->id;

        DB::table('tax_areas')->where('tax_id', $tax_id)->delete();
        DB::table('taxes')->where('id', $tax_id)->delete();
    }
}
