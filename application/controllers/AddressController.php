<?php

class AddressController extends Zend_Controller_Action
{
    protected $openDb = array();

    public function init()
    {

    }

    public function migrationAction()
    {
        $sehirler = array(
            1 => array(
                'ADANA' => 0,
                'ALADAG' => 1,
                'CEYHAN' => 2,
                'FEKE' => 4,
                'KARAISALI' => 6,
                'KARATAS' => 7,
                'KOZAN' => 8,
                'POZANTI' => 9,
                'SAIMBEYLI' => 10,
                'TUFANBEYLI' => 13,
                'YUMURTALIK' => 14
            ),
            2 => array(
                'ADIYAMAN' => 0
            ),
            3 => array(
                'AFYON' => 0
            ),
            4 => array(
                'AGRI' => 0
            ),
            5 => array(
                'AKSARAY' => 0
            ),
            6 => array(
                'AMASYA' => 0
            ),
            7 => array(
                'AKYURT' => 65,
                'ANKARA' => 0,
                'AYAS' => 67,
                'BALA' => 68,
                'BEYPAZARI' => 69,
                'CAMLIDERE' => 70,
                'CUBUK' => 72,
                'ELMADAG' => 73,
                'EVREN' => 75,
                'GUDUL' => 77,
                'HAYMANA' => 78,
                'KALECIK' => 79,
                'KAZAN' => 80,
                'KIZILCAHAMAM' => 82,
                'NALLIHAN' => 84,
                'POLATLI' => 85,
                'SEREFLIKOCHISAR' => 88
            ),
            8 => array(
                'AKSEKI' => 90,
                'AKSU' => 91,
                'ALANYA' => 92,
                'ANTALYA' => 0,
                'DEMRE' => 93,
                'ELMALI' => 95,
                'FINIKE' => 96,
                'GAZIPASA' => 97,
                'GUNDOGMUS' => 98,
                'IBRADI' => 99,
                'KAS' => 100,
                'KEMER' => 101,
                'KORKUTELI' => 104,
                'KUMLUCA' => 105,
                'MANAVGAT' => 106,
                'SERIK' => 108
            ),
            9 => array(
                'ARDAHAN' => 0
            ),
            10 => array(
                'ARTVIN' => 0
            ),
            11 => array(
                'AYDIN' => 0
            ),
            12 => array(
                'BALIKESIR' => 0
            ),
            13 => array(
                'BARTIN' => 0
            ),
            14 => array(
                'BATMAN' => 0
            ),
            15 => array(
                'BAYBURT' => 0
            ),
            16 => array(
                'BILECIK' => 0,
                'BOZUYUK' => 172,
                'GOLPAZARI' => 173,
                'INHISAR' => 174,
                'YENIPAZAR' => 179
            ),
            17 => array(
                'BINGOL' => 0
            ),
            18 => array(
                'BITLIS' => 0
            ),
            19 => array(
                'BOLU' => 0
            ),
            20 => array(
                'BURDUR' => 0
            ),
            21 => array(
                'BURSA' => 0,
                'BUYUK ORHAN' => 215,
                'GEMLIK' => 216,
                'HARMANCIK' => 218,
                'INEGOL' => 219,
                'IZNIK' => 220,
                'KARACABEY' => 221,
                'KELES' => 222,
                'MUDANYA' => 224,
                'MUSTAFA KEMALPASA' => 225,
                'ORHANGAZI' => 228
            ),
            22 => array(
                'CANAKKALE' => 0
            ),
            23 => array(
                'CANKIRI' => 0
            ),
            24 => array(
                'CORUM' => 0
            ),
            25 => array(
                'DENIZLI' => 0
            ),
            26 => array(
                'BISMIL' => 290,
                'CERMIK' => 291,
                'CUNGUS' => 293,
                'DICLE' => 294,
                'DIYARBAKIR' => 0,
                'EGIL' => 295,
                'ERGANI' => 296,
                'HANI' => 297,
                'HAZRO' => 298,
                'KOCAKOY' => 300,
                'KULP' => 301,
                'LICE' => 302,
                'SILVAN' => 303
            ),
            27 => array(
                'AKCAKOCA' => 306,
                'DUZCE' => 0,
                'GOLYAKA' => 309,
                'KAYNASLI' => 311,
                'YIGILCA' => 313
            ),
            28 => array(
                'EDIRNE' => 0
            ),
            29 => array(
                'ELAZIG' => 0
            ),
            30 => array(
                'ERZINCAN' => 0
            ),
            31 => array(
                'ASKALE' => 343,
                'AZIZIYE' => 344,
                'CAT' => 345,
                'ERZURUM' => 0,
                'HINIS' => 346,
                'HORASAN' => 347,
                'ISPIR' => 348,
                'KARACOBAN' => 349,
                'KARAYAZI' => 350,
                'KOPRUKOY' => 351,
                'NARMAN' => 352,
                'OLTU' => 353,
                'OLUR' => 354,
                'PASINLER' => 356,
                'PAZARYOLU' => 357,
                'SENKAYA' => 358,
                'TEKMAN' => 359,
                'TORTUM' => 360,
                'UZUNDERE' => 361
            ),
            32 => array(
                'ESKISEHIR' => 0
            ),
            33 => array(
                'GAZIANTEP' => 0
            ),
            34 => array(
                'GIRESUN' => 0
            ),
            35 => array(
                'GUMUSHANE' => 0
            ),
            36 => array(
                'HAKKARI' => 0
            ),
            37 => array(
                'HATAY' => 0
            ),
            38 => array(
                'IGDIR' => 0
            ),
            39 => array(
                'ISPARTA' => 0
            ),
            40 => array(
                'CEKMEKOY' => 444,
                'KARTAL' => 446,
                'MALTEPE' => 447,
                'PENDIK' => 448,
                'SANCAKTEPE' => 449,
                'SULTANBEYLI' => 450,
                'SILE' => 451,
                'TUZLA' => 452,
                'ISTANBUL' => 0,
            ),
            41 => array(
                'ARNAVUTKOY' => 455,
                'BEYLIKDUZU' => 463,
                'BUYUKCEKMECE' => 465,
                'CATALCA' => 466,
                'ESENYURT' => 468,
                'ISTANBUL' => 0,
                'KUCUKCEKMECE' => 474,
                'SILIVRI' => 476,
                'SULTANGAZI' => 477
            ),
            42 => array(
                'ALIAGA' => 480,
                'BAYINDIR' => 482,
                'BERGAMA' => 484,
                'BEYDAG' => 485,
                'CESME' => 488,
                'DIKILI' => 490,
                'FOCA' => 491,
                'GUZELBAHCE' => 493,
                'IZMIR' => 0,
                'KARABURUN' => 495,
                'KEMALPASA' => 497,
                'KINIK' => 498,
                'KIRAZ' => 499,
                'ODEMIS' => 504,
                'SEFERIHISAR' => 505,
                'SELCUK' => 506,
                'TIRE' => 507,
                'TORBALI' => 508,
                'URLA' => 509
            ),
            43 => array(
                'KAHRAMANMARAS' => 0
            ),
            44 => array(
                'KARABUK' => 0
            ),
            45 => array(
                'KARAMAN' => 0
            ),
            46 => array(
                'KARS' => 0
            ),
            47 => array(
                'KASTAMONU' => 0
            ),
            48 => array(
                'AKKISLA' => 560,
                'BUNYAN' => 561,
                'DEVELI' => 562,
                'FELAHIYE' => 563,
                'INCESU' => 565,
                'KAYSERI' => 0,
                'PINARBASI' => 569,
                'SARIOGLAN' => 570,
                'SARIZ' => 571,
                'YAHYALI' => 574,
                'YESILHISAR' => 575
            ),
            49 => array(
                'CELEBI' => 578,
                'DELICE' => 579,
                'KARAKECILI' => 580,
                'KIRIKKALE' => 0,
                'SULAKYURT' => 583
            ),
            50 => array(
                'KIRKLARELI' => 0
            ),
            51 => array(
                'AKPINAR' => 594,
                'CICEKDAGI' => 596,
                'KAMAN' => 597,
                'KIRSEHIR' => 0,
                'MUCUR' => 599
            ),
            52 => array(
                'KILIS' => 0
            ),
            53 => array(
                'CAYIROVA' => 605,
                'DARICA' => 606,
                'DILOVASI' => 608,
                'GEBZE' => 609,
                'KANDIRA' => 612,
                'KARAMURSEL' => 613,
                'KOCAELI' => 0
            ),
            54 => array(
                'AKOREN' => 617,
                'AKSEHIR' => 618,
                'ALTINEKIN' => 619,
                'BEYSEHIR' => 620,
                'BOZKIR' => 621,
                'CIHANBEYLI' => 622,
                'CUMRA' => 624,
                'DERBENT' => 625,
                'EREGLI' => 629,
                'GUNEYSINIR' => 630,
                'HADIM' => 631,
                'HUYUK' => 633,
                'ILGIN' => 634,
                'KADINHANI' => 635,
                'KARAPINAR' => 636,
                'KONYA' => 0,
                'KULU' => 638,
                'SEYDISEHIR' => 642,
                'YUNAK' => 646
            ),
            55 => array(
                'KUTAHYA' => 0
            ),
            56 => array(
                'MALATYA' => 0
            ),
            57 => array(
                'MANISA' => 0
            ),
            58 => array(
                'DARGECIT' => 690,
                'DERIK' => 691,
                'KIZILTEPE' => 692,
                'MARDIN' => 0,
                'MAZIDAGI' => 693,
                'MIDYAT' => 695,
                'NUSAYBIN' => 696
            ),
            59 => array(
                'ANAMUR' => 701,
                'AYDINCIK' => 702,
                'CAMLIYAYLA' => 704,
                'ERDEMLI' => 705,
                'GULNAR' => 706,
                'MERSIN' => 0,
                'MUT' => 708,
                'SILIFKE' => 709,
                'TARSUS' => 710
            ),
            60 => array(
                'MUGLA' => 0
            ),
            61 => array(
                'MUS' => 0
            ),
            62 => array(
                'NEVSEHIR' => 0
            ),
            63 => array(
                'NIGDE' => 0
            ),
            64 => array(
                'ORDU' => 0
            ),
            65 => array(
                'OSMANIYE' => 0
            ),
            66 => array(
                'ARDESEN' => 771,
                'CAMLIHEMSIN' => 772,
                'CAYELI' => 773,
                'FINDIKLI' => 775,
                'HEMSIN' => 777,
                'IKIZDERE' => 778,
                'IYIDERE' => 779,
                'PAZAR' => 782,
                'RIZE' => 0
            ),
            67 => array(
                'AKYAZI' => 784,
                'GEYVE' => 788,
                'HENDEK' => 789,
                'KARASU' => 791,
                'KAYNARCA' => 792,
                'KOCAALI' => 793,
                'PAMUKOVA' => 794,
                'SAKARYA' => 0,
                'TARAKLI' => 798
            ),
            68 => array(
                'SAMSUN' => 0
            ),
            69 => array(
                'SIIRT' => 0
            ),
            70 => array(
                'SINOP' => 0
            ),
            71 => array(
                'SIVAS' => 0
            ),
            72 => array(
                'SANLIURFA' => 0
            ),
            73 => array(
                'SIRNAK' => 0
            ),
            74 => array(
                'TEKIRDAG' => 0
            ),
            75 => array(
                'TOKAT' => 0
            ),
            76 => array(
                'ARAKLI' => 889,
                'ARSIN' => 890,
                'CAYKARA' => 893,
                'DERNEKPAZARI' => 894,
                'DUZKOY' => 895,
                'HAYRAT' => 896,
                'OF' => 900,
                'SURMENE' => 901,
                'TONYA' => 903,
                'TRABZON' => 0,
                'VAKFIKEBIR' => 904
            ),
            77 => array(
                'TUNCELI' => 0
            ),
            78 => array(
                'USAK' => 0
            ),
            79 => array(
                'VAN' => 0
            ),
            80 => array(
                'ALTINOVA' => 932,
                'ARMUTLU' => 933,
                'CINARCIK' => 934,
                'TERMAL' => 937,
                'YALOVA' => 0
            ),
            81 => array(
                'YOZGAT' => 0
            ),
            82 => array(
                'ZONGULDAK' => 0
            )
        );

        foreach($sehirler as $sehirId => $ilceler)
        {
            foreach($ilceler as $keyword => $ilceId)
            {
                $migration = new \Entities\DiyanetMigration();
                $migration->setCityId($sehirId)
                    ->setKeyword($keyword)
                    ->setDistrictId($ilceId)
                    ->save();
            }
        }
        exit;
    }

    private function _fetchFromDiyanet($keyword)
    {
        $url = 'http://www.diyanet.gov.tr/turkish/namazvakti/vakithes_namazsonuc.asp';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "sehirler=" . urlencode($keyword) . "&R1=AYLIK&buton=Hesapla&ulk=TURKIYE");
        curl_setopt($ch, CURLOPT_COOKIE, "ASPSESSIONIDCABCATAT=GAAJFMHAAJELDEGMGFANBGMB");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: ' . "Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25"
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        $dom = new Zend_Dom_Query($result);
        $results = $dom->query ('div table tr');
        $days = array();
        foreach ($results as $tr)
        {
            $column = 0;
            $day = array();
            foreach($tr->childNodes as $td)
            {
                if ($td->nodeName == 'td')
                {
                    $column++;
                    $value = (string)$td->nodeValue;
                    switch($column)
                    {
                        case 1:
                            $day['date'] = preg_replace('#[^\d\.]#', '', trim($value));
                            break;
                        case 2:
                            $day['imsak'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                        case 3:
                            $day['gunes'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                        case 4:
                            $day['ogle'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                        case 5:
                            $day['ikindi'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                        case 6:
                            $day['aksam'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                        case 7:
                            $day['yatsi'] = preg_replace('#[^\d\:]#', '', str_replace(' ', ':', trim($value)));
                            break;
                    }
                }
            }
            if (count($day) > 0)
                $days[] = $day;
        }

        return $days;
    }

    private function fetchFromDiyanet($keyword)
    {
        try
        {
            $days = $this->_fetchFromDiyanet($keyword);
            error_log("\t\t" . $keyword . "\tFETCHED\t");
        }catch (\Exception $e){
            error_log("\t\t" . $keyword . "\tERROR\t");
            sleep(2);
            return $this->fetchFromDiyanet($keyword);
        }

        return $days;
    }

    public function fetchFromDiyanetAction()
    {
        header('Content-type: text/plian; charset=utf-8;');
        $keyword = $this->_getParam('keyword');

        $migrations = EntityDiyanetMigrationQuery::create()
            ->filterByKeyword($keyword)
            ->filterByDistrictId(0)
            ->find()
            ->toArray();
        foreach($migrations as $migration)
        {
            $keyword = $migration['Keyword'];
            $days = $this->fetchFromDiyanet($keyword);
            foreach($days as $day)
            {
                $namaz = new EntityNamaz();
                $namaz->setCityId($migration['CityId'])
                    ->setDistrictId($migration['DistrictId'])
                    ->setDate(new DateTime($day['date']))
                    ->setImsak($day['imsak'])
                    ->setGunes($day['gunes'])
                    ->setOgle($day['ogle'])
                    ->setIkindi($day['ikindi'])
                    ->setAksam($day['aksam'])
                    ->setYatsi($day['yatsi'])
                    ->save();
            }
        }
        exit;
    }
}