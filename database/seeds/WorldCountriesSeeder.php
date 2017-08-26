<?php

use Illuminate\Database\Seeder;

class WorldCountriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ctrystore_countries')->delete();

        $today = date('Y-m-d H:i:s');

        DB::table('ctrystore_countries')->insert([
            'id'=>20,
            'zone_id'=>1,
            'name'=>"Andorra",
            'alpha2'=>"AD",
            'alpha3'=>"AND",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>784,
            'zone_id'=>2,
            'name'=>"United Arab Emirates",
            'alpha2'=>"AE",
            'alpha3'=>"ARE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>4,
            'zone_id'=>2,
            'name'=>"Afghanistan",
            'alpha2'=>"AF",
            'alpha3'=>"AFG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>28,
            'zone_id'=>3,
            'name'=>"Antigua and Barbuda",
            'alpha2'=>"AG",
            'alpha3'=>"ATG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>660,
            'zone_id'=>3,
            'name'=>"Anguilla",
            'alpha2'=>"AI",
            'alpha3'=>"AIA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>8,
            'zone_id'=>1,
            'name'=>"Albania",
            'alpha2'=>"AL",
            'alpha3'=>"ALB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>51,
            'zone_id'=>2,
            'name'=>"Armenia",
            'alpha2'=>"AM",
            'alpha3'=>"ARM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>530,
            'zone_id'=>3,
            'name'=>"Nederlandse Antillen",
            'alpha2'=>"AN",
            'alpha3'=>"ANT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>24,
            'zone_id'=>4,
            'name'=>"Angola",
            'alpha2'=>"AO",
            'alpha3'=>"AGO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>10,
            'zone_id'=>5,
            'name'=>"Antarctica",
            'alpha2'=>"AQ",
            'alpha3'=>"ATA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>32,
            'zone_id'=>6,
            'name'=>"Argentina",
            'alpha2'=>"AR",
            'alpha3'=>"ARG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>16,
            'zone_id'=>7,
            'name'=>"American Samoa",
            'alpha2'=>"AS",
            'alpha3'=>"ASM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>40,
            'zone_id'=>1,
            'name'=>"Austria",
            'alpha2'=>"AT",
            'alpha3'=>"AUT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>36,
            'zone_id'=>7,
            'name'=>"Australia",
            'alpha2'=>"AU",
            'alpha3'=>"AUS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>533,
            'zone_id'=>3,
            'name'=>"Aruba",
            'alpha2'=>"AW",
            'alpha3'=>"ABW",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>248,
            'zone_id'=>1,
            'name'=>"Åland Islands",
            'alpha2'=>"AX",
            'alpha3'=>"ALA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>31,
            'zone_id'=>2,
            'name'=>"Azerbaijan",
            'alpha2'=>"AZ",
            'alpha3'=>"AZE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>70,
            'zone_id'=>1,
            'name'=>"Bosnia and Herzegovina",
            'alpha2'=>"BA",
            'alpha3'=>"BIH",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>52,
            'zone_id'=>3,
            'name'=>"Barbados",
            'alpha2'=>"BB",
            'alpha3'=>"BRB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>50,
            'zone_id'=>8,
            'name'=>"Bangladesh",
            'alpha2'=>"BD",
            'alpha3'=>"BGD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>56,
            'zone_id'=>1,
            'name'=>"Belgium",
            'alpha2'=>"BE",
            'alpha3'=>"BEL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>854,
            'zone_id'=>4,
            'name'=>"Burkina Faso",
            'alpha2'=>"BF",
            'alpha3'=>"BFA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>100,
            'zone_id'=>1,
            'name'=>"Bulgaria",
            'alpha2'=>"BG",
            'alpha3'=>"BGR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>48,
            'zone_id'=>2,
            'name'=>"Bahrain",
            'alpha2'=>"BH",
            'alpha3'=>"BHR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>108,
            'zone_id'=>4,
            'name'=>"Burundi",
            'alpha2'=>"BI",
            'alpha3'=>"BDI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>204,
            'zone_id'=>4,
            'name'=>"Benin",
            'alpha2'=>"BJ",
            'alpha3'=>"BEN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>652,
            'zone_id'=>3,
            'name'=>"Saint Barth&eacute;lemy",
            'alpha2'=>"BL",
            'alpha3'=>"BLM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>60,
            'zone_id'=>3,
            'name'=>"Bermudas",
            'alpha2'=>"BM",
            'alpha3'=>"BMU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>96,
            'zone_id'=>9,
            'name'=>"Brunei Darussalam",
            'alpha2'=>"BN",
            'alpha3'=>"BRN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>68,
            'zone_id'=>6,
            'name'=>"Bolivia",
            'alpha2'=>"BO",
            'alpha3'=>"BOL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>535,
            'zone_id'=>3,
            'name'=>"Bonaire,
            Sint Eustatius and Saba",
            'alpha2'=>"BQ",
            'alpha3'=>"BES",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>76,
            'zone_id'=>6,
            'name'=>"Brazil",
            'alpha2'=>"BR",
            'alpha3'=>"BRA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>44,
            'zone_id'=>3,
            'name'=>"Bahamas",
            'alpha2'=>"BS",
            'alpha3'=>"BHS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>64,
            'zone_id'=>8,
            'name'=>"Bhutan",
            'alpha2'=>"BT",
            'alpha3'=>"BTN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>74,
            'zone_id'=>10,
            'name'=>"Bouvet Island",
            'alpha2'=>"BV",
            'alpha3'=>"BVT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>72,
            'zone_id'=>4,
            'name'=>"Botswana",
            'alpha2'=>"BW",
            'alpha3'=>"BWA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>112,
            'zone_id'=>1,
            'name'=>"Belarus",
            'alpha2'=>"BY",
            'alpha3'=>"BLR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>84,
            'zone_id'=>3,
            'name'=>"Belize",
            'alpha2'=>"BZ",
            'alpha3'=>"BLZ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>124,
            'zone_id'=>11,
            'name'=>"Canada",
            'alpha2'=>"CA",
            'alpha3'=>"CAN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>166,
            'zone_id'=>8,
            'name'=>"Cocos Islands",
            'alpha2'=>"CC",
            'alpha3'=>"CCK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>180,
            'zone_id'=>4,
            'name'=>"The Democratic Republic of the Congo",
            'alpha2'=>"CD",
            'alpha3'=>"COD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>140,
            'zone_id'=>4,
            'name'=>"Central African Republic",
            'alpha2'=>"CF",
            'alpha3'=>"CAF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>178,
            'zone_id'=>4,
            'name'=>"Congo",
            'alpha2'=>"CG",
            'alpha3'=>"COG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>756,
            'zone_id'=>1,
            'name'=>"Switzerland",
            'alpha2'=>"CH",
            'alpha3'=>"CHE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>384,
            'zone_id'=>4,
            'name'=>"Côte d'Ivoire",
            'alpha2'=>"CI",
            'alpha3'=>"CIV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>184,
            'zone_id'=>10,
            'name'=>"Cook Islands",
            'alpha2'=>"CK",
            'alpha3'=>"COK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>152,
            'zone_id'=>6,
            'name'=>"Chile",
            'alpha2'=>"CL",
            'alpha3'=>"CHL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>120,
            'zone_id'=>4,
            'name'=>"Cameroon",
            'alpha2'=>"CM",
            'alpha3'=>"CMR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>156,
            'zone_id'=>9,
            'name'=>"China",
            'alpha2'=>"CN",
            'alpha3'=>"CHN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>170,
            'zone_id'=>6,
            'name'=>"Colombia",
            'alpha2'=>"CO",
            'alpha3'=>"COL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>188,
            'zone_id'=>6,
            'name'=>"Costa Rica",
            'alpha2'=>"CR",
            'alpha3'=>"CRI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>200,
            'zone_id'=>1,
            'name'=>"Czechoslovakia",
            'alpha2'=>"CS",
            'alpha3'=>"CSK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>128,
            'zone_id'=>7,
            'name'=>"Canton and Enderbury Islands",
            'alpha2'=>"CT",
            'alpha3'=>"CTE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>192,
            'zone_id'=>6,
            'name'=>"Cuba",
            'alpha2'=>"CU",
            'alpha3'=>"CUB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>132,
            'zone_id'=>10,
            'name'=>"Cabo Verde",
            'alpha2'=>"CV",
            'alpha3'=>"CPV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>531,
            'zone_id'=>3,
            'name'=>"Curaçao",
            'alpha2'=>"CW",
            'alpha3'=>"CXR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>162,
            'zone_id'=>15,
            'name'=>"Christmas Island",
            'alpha2'=>"CX",
            'alpha3'=>"CXR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>196,
            'zone_id'=>2,
            'name'=>"Cyprus",
            'alpha2'=>"CY",
            'alpha3'=>"CYP",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>203,
            'zone_id'=>1,
            'name'=>"Czech Republic",
            'alpha2'=>"CZ",
            'alpha3'=>"CZE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>276,
            'zone_id'=>1,
            'name'=>"Germany",
            'alpha2'=>"DE",
            'alpha3'=>"DEU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>262,
            'zone_id'=>4,
            'name'=>"Djibouti",
            'alpha2'=>"DJ",
            'alpha3'=>"DJI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>208,
            'zone_id'=>1,
            'name'=>"Denmark",
            'alpha2'=>"DK",
            'alpha3'=>"DNK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>212,
            'zone_id'=>3,
            'name'=>"Dominica",
            'alpha2'=>"DM",
            'alpha3'=>"DMA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>214,
            'zone_id'=>6,
            'name'=>"Dominican Republic",
            'alpha2'=>"DO",
            'alpha3'=>"DOM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>12,
            'zone_id'=>12,
            'name'=>"Algeria",
            'alpha2'=>"DZ",
            'alpha3'=>"DZA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>218,
            'zone_id'=>6,
            'name'=>"Ecuador",
            'alpha2'=>"EC",
            'alpha3'=>"ECU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>233,
            'zone_id'=>1,
            'name'=>"Estonia",
            'alpha2'=>"EE",
            'alpha3'=>"EST",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>818,
            'zone_id'=>2,
            'name'=>"Egypt",
            'alpha2'=>"EG",
            'alpha3'=>"EGY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>732,
            'zone_id'=>16,
            'name'=>"Western Sahara",
            'alpha2'=>"EH",
            'alpha3'=>"ESH",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>232,
            'zone_id'=>4,
            'name'=>"Eritrea",
            'alpha2'=>"ER",
            'alpha3'=>"ERI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>724,
            'zone_id'=>1,
            'name'=>"Spain",
            'alpha2'=>"ES",
            'alpha3'=>"ESP",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>231,
            'zone_id'=>4,
            'name'=>"Ethiopia",
            'alpha2'=>"ET",
            'alpha3'=>"ETH",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>246,
            'zone_id'=>1,
            'name'=>"Finland",
            'alpha2'=>"FI",
            'alpha3'=>"FIN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>242,
            'zone_id'=>7,
            'name'=>"Fiji",
            'alpha2'=>"FJ",
            'alpha3'=>"FJI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>238,
            'zone_id'=>10,
            'name'=>"Falkland Islands [Malvinas
            ]",
            'alpha2'=>"FK",
            'alpha3'=>"KLK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>583,
            'zone_id'=>7,
            'name'=>"Micronesia",
            'alpha2'=>"FM",
            'alpha3'=>"FSM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>234,
            'zone_id'=>1,
            'name'=>"Faroe Island",
            'alpha2'=>"FO",
            'alpha3'=>"FRO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>250,
            'zone_id'=>1,
            'name'=>"France",
            'alpha2'=>"FR",
            'alpha3'=>"FRA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>266,
            'zone_id'=>4,
            'name'=>"Gabon",
            'alpha2'=>"GA",
            'alpha3'=>"GAB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>826,
            'zone_id'=>1,
            'name'=>"United Kingdom of Great Britain and Northern Ireland",
            'alpha2'=>"GB",
            'alpha3'=>"GBR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>308,
            'zone_id'=>3,
            'name'=>"Grenada",
            'alpha2'=>"GD",
            'alpha3'=>"GRD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>268,
            'zone_id'=>2,
            'name'=>"Georgia",
            'alpha2'=>"GE",
            'alpha3'=>"GEO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>254,
            'zone_id'=>6,
            'name'=>"French Guiana",
            'alpha2'=>"GF",
            'alpha3'=>"GUF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>831,
            'zone_id'=>1,
            'name'=>"Guernsey",
            'alpha2'=>"GG",
            'alpha3'=>"GGY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>288,
            'zone_id'=>4,
            'name'=>"Ghana",
            'alpha2'=>"GH",
            'alpha3'=>"GHA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>292,
            'zone_id'=>1,
            'name'=>"Gibraltar",
            'alpha2'=>"GI",
            'alpha3'=>"GIB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>304,
            'zone_id'=>13,
            'name'=>"Greenland",
            'alpha2'=>"GL",
            'alpha3'=>"GRL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>270,
            'zone_id'=>4,
            'name'=>"Gambia",
            'alpha2'=>"GM",
            'alpha3'=>"GMB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>324,
            'zone_id'=>4,
            'name'=>"Guinea",
            'alpha2'=>"GN",
            'alpha3'=>"GIN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>312,
            'zone_id'=>3,
            'name'=>"Guadeloupe",
            'alpha2'=>"GP",
            'alpha3'=>"GLP",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>226,
            'zone_id'=>4,
            'name'=>"Equatorial Guinea",
            'alpha2'=>"GQ",
            'alpha3'=>"GNQ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>300,
            'zone_id'=>1,
            'name'=>"Greece",
            'alpha2'=>"GR",
            'alpha3'=>"GRC",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>239,
            'zone_id'=>10,
            'name'=>"South Georgia and the South Sandwich Islands",
            'alpha2'=>"GS",
            'alpha3'=>"SGS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>320,
            'zone_id'=>6,
            'name'=>"Guatemala",
            'alpha2'=>"GT",
            'alpha3'=>"GTM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>316,
            'zone_id'=>7,
            'name'=>"Guam",
            'alpha2'=>"GU",
            'alpha3'=>"GUM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>624,
            'zone_id'=>4,
            'name'=>"Guinea-Bissau",
            'alpha2'=>"GW",
            'alpha3'=>"GNB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>328,
            'zone_id'=>6,
            'name'=>"Guyana",
            'alpha2'=>"GY",
            'alpha3'=>"GUY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>344,
            'zone_id'=>9,
            'name'=>"Hong Kong",
            'alpha2'=>"HK",
            'alpha3'=>"HKG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>334,
            'zone_id'=>10,
            'name'=>"Heard Island and McDonald Islands",
            'alpha2'=>"HM",
            'alpha3'=>"HMD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>340,
            'zone_id'=>6,
            'name'=>"Honduras",
            'alpha2'=>"HN",
            'alpha3'=>"HND",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>191,
            'zone_id'=>1,
            'name'=>"Croatia",
            'alpha2'=>"HR",
            'alpha3'=>"HRV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>332,
            'zone_id'=>6,
            'name'=>"Haiti",
            'alpha2'=>"HT",
            'alpha3'=>"HTI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>348,
            'zone_id'=>1,
            'name'=>"Hungary",
            'alpha2'=>"HU",
            'alpha3'=>"HUN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>360,
            'zone_id'=>9,
            'name'=>"Indonesia",
            'alpha2'=>"ID",
            'alpha3'=>"IDN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>372,
            'zone_id'=>1,
            'name'=>"Ireland",
            'alpha2'=>"IE",
            'alpha3'=>"IRL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>376,
            'zone_id'=>2,
            'name'=>"Israel",
            'alpha2'=>"IL",
            'alpha3'=>"ISR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>833,
            'zone_id'=>1,
            'name'=>"Isle of Man",
            'alpha2'=>"IM",
            'alpha3'=>"IMN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>356,
            'zone_id'=>8,
            'name'=>"India",
            'alpha2'=>"IN",
            'alpha3'=>"IND",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>86,
            'zone_id'=>7,
            'name'=>"British Indian Ocean Territory",
            'alpha2'=>"IO",
            'alpha3'=>"IOT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>368,
            'zone_id'=>2,
            'name'=>"Iraq",
            'alpha2'=>"IQ",
            'alpha3'=>"IRQ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>364,
            'zone_id'=>4,
            'name'=>"Iran",
            'alpha2'=>"IR",
            'alpha3'=>"IRN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>352,
            'zone_id'=>10,
            'name'=>"Iceland",
            'alpha2'=>"IS",
            'alpha3'=>"ISL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>380,
            'zone_id'=>1,
            'name'=>"Italy",
            'alpha2'=>"IT",
            'alpha3'=>"ITA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>832,
            'zone_id'=>1,
            'name'=>"Jersey",
            'alpha2'=>"JE",
            'alpha3'=>"JEY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>388,
            'zone_id'=>6,
            'name'=>"Jamaica",
            'alpha2'=>"JM",
            'alpha3'=>"JAM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>400,
            'zone_id'=>2,
            'name'=>"Jordan",
            'alpha2'=>"JO",
            'alpha3'=>"JOR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>392,
            'zone_id'=>9,
            'name'=>"Japan",
            'alpha2'=>"JP",
            'alpha3'=>"JPN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>404,
            'zone_id'=>4,
            'name'=>"Kenya",
            'alpha2'=>"KE",
            'alpha3'=>"KEN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>417,
            'zone_id'=>2,
            'name'=>"Kyrgyzstan",
            'alpha2'=>"KG",
            'alpha3'=>"KGZ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>116,
            'zone_id'=>9,
            'name'=>"Cambodia",
            'alpha2'=>"KH",
            'alpha3'=>"KHM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>296,
            'zone_id'=>7,
            'name'=>"Kiribati",
            'alpha2'=>"KI",
            'alpha3'=>"KIR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>174,
            'zone_id'=>4,
            'name'=>"Comoros",
            'alpha2'=>"KM",
            'alpha3'=>"COM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>659,
            'zone_id'=>3,
            'name'=>"Saint Kitts and Nevis",
            'alpha2'=>"KN",
            'alpha3'=>"KNA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>408,
            'zone_id'=>9,
            'name'=>"Democratic People's Republic of Korea",
            'alpha2'=>"KP",
            'alpha3'=>"PRK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>410,
            'zone_id'=>9,
            'name'=>"Republic of Korea ",
            'alpha2'=>"KR",
            'alpha3'=>"KOR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>414,
            'zone_id'=>2,
            'name'=>"Kuwait",
            'alpha2'=>"KW",
            'alpha3'=>"KWT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>136,
            'zone_id'=>3,
            'name'=>"Cayman Island",
            'alpha2'=>"KY",
            'alpha3'=>"CYM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>398,
            'zone_id'=>2,
            'name'=>"Kazakhstan",
            'alpha2'=>"KZ",
            'alpha3'=>"KAZ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>418,
            'zone_id'=>9,
            'name'=>"Lao People's Democratic Republic",
            'alpha2'=>"LA",
            'alpha3'=>"LAO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>422,
            'zone_id'=>2,
            'name'=>"Lebanon",
            'alpha2'=>"LB",
            'alpha3'=>"LBN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>662,
            'zone_id'=>3,
            'name'=>"Saint Lucia",
            'alpha2'=>"LC",
            'alpha3'=>"LCA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>438,
            'zone_id'=>1,
            'name'=>"Liechtenstein",
            'alpha2'=>"LI",
            'alpha3'=>"LIE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>144,
            'zone_id'=>15,
            'name'=>"Sri Lanka",
            'alpha2'=>"LK",
            'alpha3'=>"LKA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>430,
            'zone_id'=>4,
            'name'=>"Liberia",
            'alpha2'=>"LR",
            'alpha3'=>"LBR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>426,
            'zone_id'=>4,
            'name'=>"Lesotho",
            'alpha2'=>"LS",
            'alpha3'=>"LSO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>440,
            'zone_id'=>1,
            'name'=>"Lithuania",
            'alpha2'=>"LT",
            'alpha3'=>"LTU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>442,
            'zone_id'=>1,
            'name'=>"Luxembourg",
            'alpha2'=>"LU",
            'alpha3'=>"LUX",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>428,
            'zone_id'=>1,
            'name'=>"Latvia",
            'alpha2'=>"LV",
            'alpha3'=>"LVA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>434,
            'zone_id'=>12,
            'name'=>"Libya",
            'alpha2'=>"LY",
            'alpha3'=>"LBY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>504,
            'zone_id'=>12,
            'name'=>"Morocco",
            'alpha2'=>"MA",
            'alpha3'=>"MAR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>492,
            'zone_id'=>1,
            'name'=>"Monaco",
            'alpha2'=>"MC",
            'alpha3'=>"MCO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>498,
            'zone_id'=>1,
            'name'=>"Moldova",
            'alpha2'=>"MD",
            'alpha3'=>"MDA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>499,
            'zone_id'=>1,
            'name'=>"Montenegro",
            'alpha2'=>"ME",
            'alpha3'=>"MNE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>450,
            'zone_id'=>4,
            'name'=>"Madagascar",
            'alpha2'=>"MG",
            'alpha3'=>"MDG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>584,
            'zone_id'=>7,
            'name'=>"Marshall Islands",
            'alpha2'=>"MH",
            'alpha3'=>"MHL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>807,
            'zone_id'=>1,
            'name'=>"Macedonia",
            'alpha2'=>"MK",
            'alpha3'=>"MKD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>466,
            'zone_id'=>4,
            'name'=>"Mali",
            'alpha2'=>"ML",
            'alpha3'=>"MLI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>104,
            'zone_id'=>9,
            'name'=>"Myanmar",
            'alpha2'=>"MM",
            'alpha3'=>"MMR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>496,
            'zone_id'=>9,
            'name'=>"Mongolia",
            'alpha2'=>"MN",
            'alpha3'=>"MNG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>446,
            'zone_id'=>9,
            'name'=>"Macao",
            'alpha2'=>"MO",
            'alpha3'=>"MAC",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>474,
            'zone_id'=>3,
            'name'=>"Martinique",
            'alpha2'=>"MQ",
            'alpha3'=>"MTQ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>478,
            'zone_id'=>12,
            'name'=>"Mauritania",
            'alpha2'=>"MR",
            'alpha3'=>"MRT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>500,
            'zone_id'=>3,
            'name'=>"Montserrat",
            'alpha2'=>"MS",
            'alpha3'=>"MSR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>470,
            'zone_id'=>1,
            'name'=>"Malta",
            'alpha2'=>"MT",
            'alpha3'=>"MLT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>480,
            'zone_id'=>4,
            'name'=>"Mauritius",
            'alpha2'=>"MU",
            'alpha3'=>"MUS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>462,
            'zone_id'=>15,
            'name'=>"Maldives",
            'alpha2'=>"MV",
            'alpha3'=>"MDV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>454,
            'zone_id'=>4,
            'name'=>"Malawi",
            'alpha2'=>"MW",
            'alpha3'=>"MWI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>484,
            'zone_id'=>6,
            'name'=>"Mexico",
            'alpha2'=>"MX",
            'alpha3'=>"MEX",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>458,
            'zone_id'=>9,
            'name'=>"Malaysia",
            'alpha2'=>"MY",
            'alpha3'=>"MYS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>508,
            'zone_id'=>4,
            'name'=>"Mozambique",
            'alpha2'=>"MZ",
            'alpha3'=>"MOZ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>516,
            'zone_id'=>4,
            'name'=>"Namibia",
            'alpha2'=>"NA",
            'alpha3'=>"NAM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>540,
            'zone_id'=>7,
            'name'=>"New Caledonia",
            'alpha2'=>"NC",
            'alpha3'=>"NCL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>562,
            'zone_id'=>4,
            'name'=>"Niger",
            'alpha2'=>"NE",
            'alpha3'=>"NER",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>574,
            'zone_id'=>7,
            'name'=>"Norfolk Island",
            'alpha2'=>"NF",
            'alpha3'=>"NFK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>566,
            'zone_id'=>4,
            'name'=>"Nigeria",
            'alpha2'=>"NG",
            'alpha3'=>"NGA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>558,
            'zone_id'=>6,
            'name'=>"Nicaragua",
            'alpha2'=>"NI",
            'alpha3'=>"NIC",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>528,
            'zone_id'=>1,
            'name'=>"Netherlands",
            'alpha2'=>"NL",
            'alpha3'=>"NLD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>578,
            'zone_id'=>7,
            'name'=>"Norway",
            'alpha2'=>"NO",
            'alpha3'=>"NOR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>524,
            'zone_id'=>8,
            'name'=>"Nepal",
            'alpha2'=>"NP",
            'alpha3'=>"NPL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>520,
            'zone_id'=>7,
            'name'=>"Nauru",
            'alpha2'=>"NR",
            'alpha3'=>"NRU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>570,
            'zone_id'=>7,
            'name'=>"Niue",
            'alpha2'=>"NU",
            'alpha3'=>"NIU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>554,
            'zone_id'=>7,
            'name'=>"New Zealand",
            'alpha2'=>"NZ",
            'alpha3'=>"NZL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>512,
            'zone_id'=>2,
            'name'=>"Oman",
            'alpha2'=>"OM",
            'alpha3'=>"OMN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>591,
            'zone_id'=>6,
            'name'=>"Panama",
            'alpha2'=>"PA",
            'alpha3'=>"PAN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>604,
            'zone_id'=>6,
            'name'=>"Peru",
            'alpha2'=>"PE",
            'alpha3'=>"PER",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>258,
            'zone_id'=>10,
            'name'=>"French Polynesia",
            'alpha2'=>"PF",
            'alpha3'=>"PYF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>598,
            'zone_id'=>9,
            'name'=>"Papua New Guinea",
            'alpha2'=>"PG",
            'alpha3'=>"PNG",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>608,
            'zone_id'=>9,
            'name'=>"Philippines",
            'alpha2'=>"PH",
            'alpha3'=>"PHL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>586,
            'zone_id'=>2,
            'name'=>"Pakistan",
            'alpha2'=>"PK",
            'alpha3'=>"PAK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>616,
            'zone_id'=>1,
            'name'=>"Poland",
            'alpha2'=>"PL",
            'alpha3'=>"POL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>666,
            'zone_id'=>1,
            'name'=>"Saint Pierre and Miquelon",
            'alpha2'=>"PM",
            'alpha3'=>"SPM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>612,
            'zone_id'=>10,
            'name'=>"Pitcairn",
            'alpha2'=>"PN",
            'alpha3'=>"PCN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>630,
            'zone_id'=>6,
            'name'=>"Puerto Rico",
            'alpha2'=>"PR",
            'alpha3'=>"PRI",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>275,
            'zone_id'=>2,
            'name'=>"Palestine",
            'alpha2'=>"PS",
            'alpha3'=>"PSE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>620,
            'zone_id'=>1,
            'name'=>"Portugal",
            'alpha2'=>"PT",
            'alpha3'=>"PRT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>585,
            'zone_id'=>1,
            'name'=>"Palau",
            'alpha2'=>"PW",
            'alpha3'=>"PLW",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>600,
            'zone_id'=>6,
            'name'=>"Paraguay",
            'alpha2'=>"PY",
            'alpha3'=>"PRY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>634,
            'zone_id'=>2,
            'name'=>"Qatar",
            'alpha2'=>"QA",
            'alpha3'=>"QAT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>638,
            'zone_id'=>14,
            'name'=>"Reuni&oacute;n",
            'alpha2'=>"RE",
            'alpha3'=>"REU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>642,
            'zone_id'=>1,
            'name'=>"Romania",
            'alpha2'=>"RO",
            'alpha3'=>"ROU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>688,
            'zone_id'=>1,
            'name'=>"Serbia",
            'alpha2'=>"RS",
            'alpha3'=>"SRB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>643,
            'zone_id'=>9,
            'name'=>"Russia",
            'alpha2'=>"RU",
            'alpha3'=>"RUS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>646,
            'zone_id'=>4,
            'name'=>"Rwanda",
            'alpha2'=>"RW",
            'alpha3'=>"RWA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>682,
            'zone_id'=>2,
            'name'=>"Saudi Arabia",
            'alpha2'=>"SA",
            'alpha3'=>"SAU",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>90,
            'zone_id'=>7,
            'name'=>"Solomon Islands",
            'alpha2'=>"SB",
            'alpha3'=>"SLB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>690,
            'zone_id'=>4,
            'name'=>"Seychelles",
            'alpha2'=>"SC",
            'alpha3'=>"SYC",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>736,
            'zone_id'=>4,
            'name'=>"Sudan",
            'alpha2'=>"SD",
            'alpha3'=>"SDN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>752,
            'zone_id'=>1,
            'name'=>"Sweden",
            'alpha2'=>"SE",
            'alpha3'=>"SWE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>702,
            'zone_id'=>9,
            'name'=>"Singapore",
            'alpha2'=>"SG",
            'alpha3'=>"SGP",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>654,
            'zone_id'=>10,
            'name'=>"Saint Helena",
            'alpha2'=>"SH",
            'alpha3'=>"SHN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>705,
            'zone_id'=>1,
            'name'=>"Slovenia",
            'alpha2'=>"SI",
            'alpha3'=>"SVN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>744,
            'zone_id'=>1,
            'name'=>"Svalbard Island and Jan Mayen",
            'alpha2'=>"SJ",
            'alpha3'=>"SJM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>703,
            'zone_id'=>1,
            'name'=>"Slovakia",
            'alpha2'=>"SK",
            'alpha3'=>"SVK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>694,
            'zone_id'=>4,
            'name'=>"Sierra Leone",
            'alpha2'=>"SL",
            'alpha3'=>"SLE",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>674,
            'zone_id'=>1,
            'name'=>"San Marino",
            'alpha2'=>"SM",
            'alpha3'=>"SMR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>686,
            'zone_id'=>4,
            'name'=>"Senegal",
            'alpha2'=>"SN",
            'alpha3'=>"SEN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>706,
            'zone_id'=>4,
            'name'=>"Somalia",
            'alpha2'=>"SO",
            'alpha3'=>"SOM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>740,
            'zone_id'=>6,
            'name'=>"Suriname",
            'alpha2'=>"SM",
            'alpha3'=>"SUR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>678,
            'zone_id'=>4,
            'name'=>"Sao Tome and Principe",
            'alpha2'=>"ST",
            'alpha3'=>"STP",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>222,
            'zone_id'=>6,
            'name'=>"El Salvador",
            'alpha2'=>"SV",
            'alpha3'=>"SLV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>760,
            'zone_id'=>2,
            'name'=>"Syria",
            'alpha2'=>"SY",
            'alpha3'=>"SYR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>748,
            'zone_id'=>4,
            'name'=>"Swaziland",
            'alpha2'=>"SZ",
            'alpha3'=>"SWZ",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>796,
            'zone_id'=>1,
            'name'=>"Turks and Caicos Islands",
            'alpha2'=>"TC",
            'alpha3'=>"TCA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>148,
            'zone_id'=>4,
            'name'=>"Chad",
            'alpha2'=>"TD",
            'alpha3'=>"TCD",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>260,
            'zone_id'=>1,
            'name'=>"French Southern Territories",
            'alpha2'=>"TF",
            'alpha3'=>"ATF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>768,
            'zone_id'=>4,
            'name'=>"Togo",
            'alpha2'=>"TG",
            'alpha3'=>"TGO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>764,
            'zone_id'=>9,
            'name'=>"Thailand",
            'alpha2'=>"TH",
            'alpha3'=>"THA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>762,
            'zone_id'=>2,
            'name'=>"Tajikistan",
            'alpha2'=>"TJ",
            'alpha3'=>"TJK",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>772,
            'zone_id'=>7,
            'name'=>"Tokelau",
            'alpha2'=>"TK",
            'alpha3'=>"TKL",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>626,
            'zone_id'=>9,
            'name'=>"Timor-Leste",
            'alpha2'=>"TL",
            'alpha3'=>"TLS",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>795,
            'zone_id'=>2,
            'name'=>"Turkmenistan",
            'alpha2'=>"TM",
            'alpha3'=>"TKM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>788,
            'zone_id'=>12,
            'name'=>"Tunisia",
            'alpha2'=>"TN",
            'alpha3'=>"TUN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>776,
            'zone_id'=>7,
            'name'=>"Tonga",
            'alpha2'=>"TO",
            'alpha3'=>"TON",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>792,
            'zone_id'=>2,
            'name'=>"Turkey",
            'alpha2'=>"TR",
            'alpha3'=>"TUR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>780,
            'zone_id'=>3,
            'name'=>"Trinidad and Tobago",
            'alpha2'=>"TT",
            'alpha3'=>"TTO",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>798,
            'zone_id'=>7,
            'name'=>"Tuvalu",
            'alpha2'=>"TV",
            'alpha3'=>"TUV",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>158,
            'zone_id'=>9,
            'name'=>"Taiwan",
            'alpha2'=>"TW",
            'alpha3'=>"TWN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>834,
            'zone_id'=>4,
            'name'=>"Tanzania",
            'alpha2'=>"TZ",
            'alpha3'=>"TZA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>804,
            'zone_id'=>1,
            'name'=>"Ukraine",
            'alpha2'=>"UA",
            'alpha3'=>"UKR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>800,
            'zone_id'=>4,
            'name'=>"Uganda",
            'alpha2'=>"UG",
            'alpha3'=>"UGA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>840,
            'zone_id'=>11,
            'name'=>"United States of America",
            'alpha2'=>"US",
            'alpha3'=>"USA",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>858,
            'zone_id'=>6,
            'name'=>"Uruguay",
            'alpha2'=>"UY",
            'alpha3'=>"URY",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>860,
            'zone_id'=>2,
            'name'=>"Uzbekistan",
            'alpha2'=>"UZ",
            'alpha3'=>"UZB",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>336,
            'zone_id'=>1,
            'name'=>"Holy See",
            'alpha2'=>"VA",
            'alpha3'=>"VAT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>670,
            'zone_id'=>3,
            'name'=>"Saint Vicent and the Grenadines",
            'alpha2'=>"VC",
            'alpha3'=>"VCT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>862,
            'zone_id'=>6,
            'name'=>"Venezuela",
            'alpha2'=>"VE",
            'alpha3'=>"VEN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>92,
            'zone_id'=>4,
            'name'=>"Virgin Islands (British)",
            'alpha2'=>"VG",
            'alpha3'=>"VGN",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>850,
            'zone_id'=>3,
            'name'=>"Virgin Islands (U.S.A)",
            'alpha2'=>"VI",
            'alpha3'=>"VIR",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>704,
            'zone_id'=>9,
            'name'=>"Viet Nam",
            'alpha2'=>"VN",
            'alpha3'=>"VNM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>548,
            'zone_id'=>7,
            'name'=>"Vanuatu",
            'alpha2'=>"VU",
            'alpha3'=>"VUT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>876,
            'zone_id'=>7,
            'name'=>"Wallis and Futuna",
            'alpha2'=>"WF",
            'alpha3'=>"WLF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>882,
            'zone_id'=>7,
            'name'=>"Samoa",
            'alpha2'=>"WS",
            'alpha3'=>"WSM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>887,
            'zone_id'=>2,
            'name'=>"Yemen",
            'alpha2'=>"YE",
            'alpha3'=>"YEM",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>175,
            'zone_id'=>14,
            'name'=>"Mayotte",
            'alpha2'=>"YT",
            'alpha3'=>"MYT",
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        DB::table('ctrystore_countries')->insert([
            'id'=>710,
            'zone_id'=>4,
            'name'=>"South Africa",
            'alpha2'=>"ZA",
            'alpha3'=>"ZAF",
            'created_at' => $today,
            'updated_at' => $today,
        ]);
    }
}
