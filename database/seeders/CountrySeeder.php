<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Country::firstOrCreate([
            'alpha3' => 'AFG',
            'alpha2' => 'AF',
            'name' => 'Afghanistan',
            'phone_code' => 93,
            'currency_symbol' => '؋',
            'currency_code' => 'AFN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ALA',
            'alpha2' => 'AX',
            'name' => 'Aland Islands',
            'phone_code' => 358,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ALB',
            'alpha2' => 'AL',
            'name' => 'Albania',
            'phone_code' => 355,
            'currency_symbol' => 'Lek',
            'currency_code' => 'ALL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DZA',
            'alpha2' => 'DZ',
            'name' => 'Algeria',
            'phone_code' => 213,
            'currency_symbol' => 'دج',
            'currency_code' => 'DZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ASM',
            'alpha2' => 'AS',
            'name' => 'American Samoa',
            'phone_code' => 1684,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AND',
            'alpha2' => 'AD',
            'name' => 'Andorra',
            'phone_code' => 376,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AGO',
            'alpha2' => 'AO',
            'name' => 'Angola',
            'phone_code' => 244,
            'currency_symbol' => 'Kz',
            'currency_code' => 'AOA',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AIA',
            'alpha2' => 'AI',
            'name' => 'Anguilla',
            'phone_code' => 1264,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ATA',
            'alpha2' => 'AQ',
            'name' => 'Antarctica',
            'phone_code' => 672,
            'currency_symbol' => '$',
            'currency_code' => 'AAD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ATG',
            'alpha2' => 'AG',
            'name' => 'Antigua and Barbuda',
            'phone_code' => 1268,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ARG',
            'alpha2' => 'AR',
            'name' => 'Argentina',
            'phone_code' => 54,
            'currency_symbol' => '$',
            'currency_code' => 'ARS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ARM',
            'alpha2' => 'AM',
            'name' => 'Armenia',
            'phone_code' => 374,
            'currency_symbol' => '֏',
            'currency_code' => 'AMD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ABW',
            'alpha2' => 'AW',
            'name' => 'Aruba',
            'phone_code' => 297,
            'currency_symbol' => 'ƒ',
            'currency_code' => 'AWG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AUS',
            'alpha2' => 'AU',
            'name' => 'Australia',
            'phone_code' => 61,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AUT',
            'alpha2' => 'AT',
            'name' => 'Austria',
            'phone_code' => 43,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'AZE',
            'alpha2' => 'AZ',
            'name' => 'Azerbaijan',
            'phone_code' => 994,
            'currency_symbol' => 'm',
            'currency_code' => 'AZN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BHS',
            'alpha2' => 'BS',
            'name' => 'Bahamas',
            'phone_code' => 1242,
            'currency_symbol' => 'B$',
            'currency_code' => 'BSD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BHR',
            'alpha2' => 'BH',
            'name' => 'Bahrain',
            'phone_code' => 973,
            'currency_symbol' => '.د.ب',
            'currency_code' => 'BHD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BGD',
            'alpha2' => 'BD',
            'name' => 'Bangladesh',
            'phone_code' => 880,
            'currency_symbol' => '৳',
            'currency_code' => 'BDT',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BRB',
            'alpha2' => 'BB',
            'name' => 'Barbados',
            'phone_code' => 1246,
            'currency_symbol' => 'Bds$',
            'currency_code' => 'BBD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BLR',
            'alpha2' => 'BY',
            'name' => 'Belarus',
            'phone_code' => 375,
            'currency_symbol' => 'Br',
            'currency_code' => 'BYN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BEL',
            'alpha2' => 'BE',
            'name' => 'Belgium',
            'phone_code' => 32,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BLZ',
            'alpha2' => 'BZ',
            'name' => 'Belize',
            'phone_code' => 501,
            'currency_symbol' => '$',
            'currency_code' => 'BZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BEN',
            'alpha2' => 'BJ',
            'name' => 'Benin',
            'phone_code' => 229,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BMU',
            'alpha2' => 'BM',
            'name' => 'Bermuda',
            'phone_code' => 1441,
            'currency_symbol' => '$',
            'currency_code' => 'BMD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BTN',
            'alpha2' => 'BT',
            'name' => 'Bhutan',
            'phone_code' => 975,
            'currency_symbol' => 'Nu.',
            'currency_code' => 'BTN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BOL',
            'alpha2' => 'BO',
            'name' => 'Bolivia',
            'phone_code' => 591,
            'currency_symbol' => 'Bs.',
            'currency_code' => 'BOB',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BES',
            'alpha2' => 'BQ',
            'name' => 'Bonaire, Sint Eustatius and Saba',
            'phone_code' => 599,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BIH',
            'alpha2' => 'BA',
            'name' => 'Bosnia and Herzegovina',
            'phone_code' => 387,
            'currency_symbol' => 'KM',
            'currency_code' => 'BAM',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BWA',
            'alpha2' => 'BW',
            'name' => 'Botswana',
            'phone_code' => 267,
            'currency_symbol' => 'P',
            'currency_code' => 'BWP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BVT',
            'alpha2' => 'BV',
            'name' => 'Bouvet Island',
            'phone_code' => 55,
            'currency_symbol' => 'kr',
            'currency_code' => 'NOK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BRA',
            'alpha2' => 'BR',
            'name' => 'Brazil',
            'phone_code' => 55,
            'currency_symbol' => 'R$',
            'currency_code' => 'BRL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IOT',
            'alpha2' => 'IO',
            'name' => 'British Indian Ocean Territory',
            'phone_code' => 246,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BRN',
            'alpha2' => 'BN',
            'name' => 'Brunei Darussalam',
            'phone_code' => 673,
            'currency_symbol' => 'B$',
            'currency_code' => 'BND',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BGR',
            'alpha2' => 'BG',
            'name' => 'Bulgaria',
            'phone_code' => 359,
            'currency_symbol' => 'Лв.',
            'currency_code' => 'BGN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BFA',
            'alpha2' => 'BF',
            'name' => 'Burkina Faso',
            'phone_code' => 226,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BDI',
            'alpha2' => 'BI',
            'name' => 'Burundi',
            'phone_code' => 257,
            'currency_symbol' => 'FBu',
            'currency_code' => 'BIF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KHM',
            'alpha2' => 'KH',
            'name' => 'Cambodia',
            'phone_code' => 855,
            'currency_symbol' => 'KHR',
            'currency_code' => 'KHR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CMR',
            'alpha2' => 'CM',
            'name' => 'Cameroon',
            'phone_code' => 237,
            'currency_symbol' => 'FCFA',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CAN',
            'alpha2' => 'CA',
            'name' => 'Canada',
            'phone_code' => 1,
            'currency_symbol' => '$',
            'currency_code' => 'CAD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CPV',
            'alpha2' => 'CV',
            'name' => 'Cape Verde',
            'phone_code' => 238,
            'currency_symbol' => '$',
            'currency_code' => 'CVE',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CYM',
            'alpha2' => 'KY',
            'name' => 'Cayman Islands',
            'phone_code' => 1345,
            'currency_symbol' => '$',
            'currency_code' => 'KYD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CAF',
            'alpha2' => 'CF',
            'name' => 'Central African Republic',
            'phone_code' => 236,
            'currency_symbol' => 'FCFA',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TCD',
            'alpha2' => 'TD',
            'name' => 'Chad',
            'phone_code' => 235,
            'currency_symbol' => 'FCFA',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CHL',
            'alpha2' => 'CL',
            'name' => 'Chile',
            'phone_code' => 56,
            'currency_symbol' => '$',
            'currency_code' => 'CLP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CHN',
            'alpha2' => 'CN',
            'name' => 'China',
            'phone_code' => 86,
            'currency_symbol' => '¥',
            'currency_code' => 'CNY',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CXR',
            'alpha2' => 'CX',
            'name' => 'Christmas Island',
            'phone_code' => 61,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CCK',
            'alpha2' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
            'phone_code' => 672,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'COL',
            'alpha2' => 'CO',
            'name' => 'Colombia',
            'phone_code' => 57,
            'currency_symbol' => '$',
            'currency_code' => 'COP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'COM',
            'alpha2' => 'KM',
            'name' => 'Comoros',
            'phone_code' => 269,
            'currency_symbol' => 'CF',
            'currency_code' => 'KMF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'COG',
            'alpha2' => 'CG',
            'name' => 'Congo',
            'phone_code' => 242,
            'currency_symbol' => 'FC',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'COD',
            'alpha2' => 'CD',
            'name' => 'Congo, Democratic Republic of the Congo',
            'phone_code' => 242,
            'currency_symbol' => 'FC',
            'currency_code' => 'CDF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'COK',
            'alpha2' => 'CK',
            'name' => 'Cook Islands',
            'phone_code' => 682,
            'currency_symbol' => '$',
            'currency_code' => 'NZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CRI',
            'alpha2' => 'CR',
            'name' => 'Costa Rica',
            'phone_code' => 506,
            'currency_symbol' => '₡',
            'currency_code' => 'CRC',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CIV',
            'alpha2' => 'CI',
            'name' => "Cote D'Ivoire",
            'phone_code' => 225,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HRV',
            'alpha2' => 'HR',
            'name' => 'Croatia',
            'phone_code' => 385,
            'currency_symbol' => 'kn',
            'currency_code' => 'HRK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CUB',
            'alpha2' => 'CU',
            'name' => 'Cuba',
            'phone_code' => 53,
            'currency_symbol' => '$',
            'currency_code' => 'CUP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CUW',
            'alpha2' => 'CW',
            'name' => 'Curacao',
            'phone_code' => 599,
            'currency_symbol' => 'ƒ',
            'currency_code' => 'ANG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CYP',
            'alpha2' => 'CY',
            'name' => 'Cyprus',
            'phone_code' => 357,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CZE',
            'alpha2' => 'CZ',
            'name' => 'Czech Republic',
            'phone_code' => 420,
            'currency_symbol' => 'Kč',
            'currency_code' => 'CZK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DNK',
            'alpha2' => 'DK',
            'name' => 'Denmark',
            'phone_code' => 45,
            'currency_symbol' => 'Kr.',
            'currency_code' => 'DKK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DJI',
            'alpha2' => 'DJ',
            'name' => 'Djibouti',
            'phone_code' => 253,
            'currency_symbol' => 'Fdj',
            'currency_code' => 'DJF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DMA',
            'alpha2' => 'DM',
            'name' => 'Dominica',
            'phone_code' => 1767,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DOM',
            'alpha2' => 'DO',
            'name' => 'Dominican Republic',
            'phone_code' => 1809,
            'currency_symbol' => '$',
            'currency_code' => 'DOP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ECU',
            'alpha2' => 'EC',
            'name' => 'Ecuador',
            'phone_code' => 593,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'EGY',
            'alpha2' => 'EG',
            'name' => 'Egypt',
            'phone_code' => 20,
            'currency_symbol' => 'ج.م',
            'currency_code' => 'EGP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SLV',
            'alpha2' => 'SV',
            'name' => 'El Salvador',
            'phone_code' => 503,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GNQ',
            'alpha2' => 'GQ',
            'name' => 'Equatorial Guinea',
            'phone_code' => 240,
            'currency_symbol' => 'FCFA',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ERI',
            'alpha2' => 'ER',
            'name' => 'Eritrea',
            'phone_code' => 291,
            'currency_symbol' => 'Nfk',
            'currency_code' => 'ERN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'EST',
            'alpha2' => 'EE',
            'name' => 'Estonia',
            'phone_code' => 372,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ETH',
            'alpha2' => 'ET',
            'name' => 'Ethiopia',
            'phone_code' => 251,
            'currency_symbol' => 'Nkf',
            'currency_code' => 'ETB',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FLK',
            'alpha2' => 'FK',
            'name' => 'Falkland Islands (Malvinas)',
            'phone_code' => 500,
            'currency_symbol' => '£',
            'currency_code' => 'FKP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FRO',
            'alpha2' => 'FO',
            'name' => 'Faroe Islands',
            'phone_code' => 298,
            'currency_symbol' => 'Kr.',
            'currency_code' => 'DKK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FJI',
            'alpha2' => 'FJ',
            'name' => 'Fiji',
            'phone_code' => 679,
            'currency_symbol' => 'FJ$',
            'currency_code' => 'FJD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FIN',
            'alpha2' => 'FI',
            'name' => 'Finland',
            'phone_code' => 358,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FRA',
            'alpha2' => 'FR',
            'name' => 'France',
            'phone_code' => 33,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GUF',
            'alpha2' => 'GF',
            'name' => 'French Guiana',
            'phone_code' => 594,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PYF',
            'alpha2' => 'PF',
            'name' => 'French Polynesia',
            'phone_code' => 689,
            'currency_symbol' => '₣',
            'currency_code' => 'XPF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ATF',
            'alpha2' => 'TF',
            'name' => 'French Southern Territories',
            'phone_code' => 262,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GAB',
            'alpha2' => 'GA',
            'name' => 'Gabon',
            'phone_code' => 241,
            'currency_symbol' => 'FCFA',
            'currency_code' => 'XAF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GMB',
            'alpha2' => 'GM',
            'name' => 'Gambia',
            'phone_code' => 220,
            'currency_symbol' => 'D',
            'currency_code' => 'GMD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GEO',
            'alpha2' => 'GE',
            'name' => 'Georgia',
            'phone_code' => 995,
            'currency_symbol' => 'ლ',
            'currency_code' => 'GEL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'DEU',
            'alpha2' => 'DE',
            'name' => 'Germany',
            'phone_code' => 49,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GHA',
            'alpha2' => 'GH',
            'name' => 'Ghana',
            'phone_code' => 233,
            'currency_symbol' => 'GH₵',
            'currency_code' => 'GHS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GIB',
            'alpha2' => 'GI',
            'name' => 'Gibraltar',
            'phone_code' => 350,
            'currency_symbol' => '£',
            'currency_code' => 'GIP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GRC',
            'alpha2' => 'GR',
            'name' => 'Greece',
            'phone_code' => 30,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GRL',
            'alpha2' => 'GL',
            'name' => 'Greenland',
            'phone_code' => 299,
            'currency_symbol' => 'Kr.',
            'currency_code' => 'DKK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GRD',
            'alpha2' => 'GD',
            'name' => 'Grenada',
            'phone_code' => 1473,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GLP',
            'alpha2' => 'GP',
            'name' => 'Guadeloupe',
            'phone_code' => 590,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GUM',
            'alpha2' => 'GU',
            'name' => 'Guam',
            'phone_code' => 1671,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GTM',
            'alpha2' => 'GT',
            'name' => 'Guatemala',
            'phone_code' => 502,
            'currency_symbol' => 'Q',
            'currency_code' => 'GTQ',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GGY',
            'alpha2' => 'GG',
            'name' => 'Guernsey',
            'phone_code' => 44,
            'currency_symbol' => '£',
            'currency_code' => 'GBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GIN',
            'alpha2' => 'GN',
            'name' => 'Guinea',
            'phone_code' => 224,
            'currency_symbol' => 'FG',
            'currency_code' => 'GNF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GNB',
            'alpha2' => 'GW',
            'name' => 'Guinea-Bissau',
            'phone_code' => 245,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GUY',
            'alpha2' => 'GY',
            'name' => 'Guyana',
            'phone_code' => 592,
            'currency_symbol' => '$',
            'currency_code' => 'GYD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HTI',
            'alpha2' => 'HT',
            'name' => 'Haiti',
            'phone_code' => 509,
            'currency_symbol' => 'G',
            'currency_code' => 'HTG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HMD',
            'alpha2' => 'HM',
            'name' => 'Heard Island and Mcdonald Islands',
            'phone_code' => 0,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VAT',
            'alpha2' => 'VA',
            'name' => 'Holy See (Vatican City State)',
            'phone_code' => 39,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HND',
            'alpha2' => 'HN',
            'name' => 'Honduras',
            'phone_code' => 504,
            'currency_symbol' => 'L',
            'currency_code' => 'HNL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HKG',
            'alpha2' => 'HK',
            'name' => 'Hong Kong',
            'phone_code' => 852,
            'currency_symbol' => '$',
            'currency_code' => 'HKD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'HUN',
            'alpha2' => 'HU',
            'name' => 'Hungary',
            'phone_code' => 36,
            'currency_symbol' => 'Ft',
            'currency_code' => 'HUF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ISL',
            'alpha2' => 'IS',
            'name' => 'Iceland',
            'phone_code' => 354,
            'currency_symbol' => 'kr',
            'currency_code' => 'ISK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IND',
            'alpha2' => 'IN',
            'name' => 'India',
            'phone_code' => 91,
            'currency_symbol' => '₹',
            'currency_code' => 'INR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IDN',
            'alpha2' => 'ID',
            'name' => 'Indonesia',
            'phone_code' => 62,
            'currency_symbol' => 'Rp',
            'currency_code' => 'IDR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IRN',
            'alpha2' => 'IR',
            'name' => 'Iran, Islamic Republic of',
            'phone_code' => 98,
            'currency_symbol' => '﷼',
            'currency_code' => 'IRR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IRQ',
            'alpha2' => 'IQ',
            'name' => 'Iraq',
            'phone_code' => 964,
            'currency_symbol' => 'د.ع',
            'currency_code' => 'IQD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IRL',
            'alpha2' => 'IE',
            'name' => 'Ireland',
            'phone_code' => 353,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'IMN',
            'alpha2' => 'IM',
            'name' => 'Isle of Man',
            'phone_code' => 44,
            'currency_symbol' => '£',
            'currency_code' => 'GBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ISR',
            'alpha2' => 'IL',
            'name' => 'Israel',
            'phone_code' => 972,
            'currency_symbol' => '₪',
            'currency_code' => 'ILS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ITA',
            'alpha2' => 'IT',
            'name' => 'Italy',
            'phone_code' => 39,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'JAM',
            'alpha2' => 'JM',
            'name' => 'Jamaica',
            'phone_code' => 1876,
            'currency_symbol' => 'J$',
            'currency_code' => 'JMD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'JPN',
            'alpha2' => 'JP',
            'name' => 'Japan',
            'phone_code' => 81,
            'currency_symbol' => '¥',
            'currency_code' => 'JPY',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'JEY',
            'alpha2' => 'JE',
            'name' => 'Jersey',
            'phone_code' => 44,
            'currency_symbol' => '£',
            'currency_code' => 'GBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'JOR',
            'alpha2' => 'JO',
            'name' => 'Jordan',
            'phone_code' => 962,
            'currency_symbol' => 'ا.د',
            'currency_code' => 'JOD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KAZ',
            'alpha2' => 'KZ',
            'name' => 'Kazakhstan',
            'phone_code' => 7,
            'currency_symbol' => 'лв',
            'currency_code' => 'KZT',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KEN',
            'alpha2' => 'KE',
            'name' => 'Kenya',
            'phone_code' => 254,
            'currency_symbol' => 'KSh',
            'currency_code' => 'KES',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KIR',
            'alpha2' => 'KI',
            'name' => 'Kiribati',
            'phone_code' => 686,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PRK',
            'alpha2' => 'KP',
            'name' => "Korea, Democratic People\'s Republic of",
            'phone_code' => 850,
            'currency_symbol' => '₩',
            'currency_code' => 'KPW',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KOR',
            'alpha2' => 'KR',
            'name' => 'Korea, Republic of',
            'phone_code' => 82,
            'currency_symbol' => '₩',
            'currency_code' => 'KRW',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'XKX',
            'alpha2' => 'XK',
            'name' => 'Kosovo',
            'phone_code' => 381,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KWT',
            'alpha2' => 'KW',
            'name' => 'Kuwait',
            'phone_code' => 965,
            'currency_symbol' => 'ك.د',
            'currency_code' => 'KWD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KGZ',
            'alpha2' => 'KG',
            'name' => 'Kyrgyzstan',
            'phone_code' => 996,
            'currency_symbol' => 'лв',
            'currency_code' => 'KGS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LAO',
            'alpha2' => 'LA',
            'name' => "Lao People\'s Democratic Republic",
            'phone_code' => 856,
            'currency_symbol' => '₭',
            'currency_code' => 'LAK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LVA',
            'alpha2' => 'LV',
            'name' => 'Latvia',
            'phone_code' => 371,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LBN',
            'alpha2' => 'LB',
            'name' => 'Lebanon',
            'phone_code' => 961,
            'currency_symbol' => '£',
            'currency_code' => 'LBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LSO',
            'alpha2' => 'LS',
            'name' => 'Lesotho',
            'phone_code' => 266,
            'currency_symbol' => 'L',
            'currency_code' => 'LSL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LBR',
            'alpha2' => 'LR',
            'name' => 'Liberia',
            'phone_code' => 231,
            'currency_symbol' => '$',
            'currency_code' => 'LRD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LBY',
            'alpha2' => 'LY',
            'name' => 'Libyan Arab Jamahiriya',
            'phone_code' => 218,
            'currency_symbol' => 'د.ل',
            'currency_code' => 'LYD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LIE',
            'alpha2' => 'LI',
            'name' => 'Liechtenstein',
            'phone_code' => 423,
            'currency_symbol' => 'CHf',
            'currency_code' => 'CHF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LTU',
            'alpha2' => 'LT',
            'name' => 'Lithuania',
            'phone_code' => 370,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LUX',
            'alpha2' => 'LU',
            'name' => 'Luxembourg',
            'phone_code' => 352,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MAC',
            'alpha2' => 'MO',
            'name' => 'Macao',
            'phone_code' => 853,
            'currency_symbol' => '$',
            'currency_code' => 'MOP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MKD',
            'alpha2' => 'MK',
            'name' => 'Macedonia, the Former Yugoslav Republic of',
            'phone_code' => 389,
            'currency_symbol' => 'ден',
            'currency_code' => 'MKD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MDG',
            'alpha2' => 'MG',
            'name' => 'Madagascar',
            'phone_code' => 261,
            'currency_symbol' => 'Ar',
            'currency_code' => 'MGA',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MWI',
            'alpha2' => 'MW',
            'name' => 'Malawi',
            'phone_code' => 265,
            'currency_symbol' => 'MK',
            'currency_code' => 'MWK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MYS',
            'alpha2' => 'MY',
            'name' => 'Malaysia',
            'phone_code' => 60,
            'currency_symbol' => 'RM',
            'currency_code' => 'MYR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MDV',
            'alpha2' => 'MV',
            'name' => 'Maldives',
            'phone_code' => 960,
            'currency_symbol' => 'Rf',
            'currency_code' => 'MVR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MLI',
            'alpha2' => 'ML',
            'name' => 'Mali',
            'phone_code' => 223,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MLT',
            'alpha2' => 'MT',
            'name' => 'Malta',
            'phone_code' => 356,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MHL',
            'alpha2' => 'MH',
            'name' => 'Marshall Islands',
            'phone_code' => 692,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MTQ',
            'alpha2' => 'MQ',
            'name' => 'Martinique',
            'phone_code' => 596,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MRT',
            'alpha2' => 'MR',
            'name' => 'Mauritania',
            'phone_code' => 222,
            'currency_symbol' => 'MRU',
            'currency_code' => 'MRO',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MUS',
            'alpha2' => 'MU',
            'name' => 'Mauritius',
            'phone_code' => 230,
            'currency_symbol' => '₨',
            'currency_code' => 'MUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MYT',
            'alpha2' => 'YT',
            'name' => 'Mayotte',
            'phone_code' => 269,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MEX',
            'alpha2' => 'MX',
            'name' => 'Mexico',
            'phone_code' => 52,
            'currency_symbol' => '$',
            'currency_code' => 'MXN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'FSM',
            'alpha2' => 'FM',
            'name' => 'Micronesia, Federated States of',
            'phone_code' => 691,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MDA',
            'alpha2' => 'MD',
            'name' => 'Moldova, Republic of',
            'phone_code' => 373,
            'currency_symbol' => 'L',
            'currency_code' => 'MDL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MCO',
            'alpha2' => 'MC',
            'name' => 'Monaco',
            'phone_code' => 377,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MNG',
            'alpha2' => 'MN',
            'name' => 'Mongolia',
            'phone_code' => 976,
            'currency_symbol' => '₮',
            'currency_code' => 'MNT',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MNE',
            'alpha2' => 'ME',
            'name' => 'Montenegro',
            'phone_code' => 382,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MSR',
            'alpha2' => 'MS',
            'name' => 'Montserrat',
            'phone_code' => 1664,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MAR',
            'alpha2' => 'MA',
            'name' => 'Morocco',
            'phone_code' => 212,
            'currency_symbol' => 'DH',
            'currency_code' => 'MAD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MOZ',
            'alpha2' => 'MZ',
            'name' => 'Mozambique',
            'phone_code' => 258,
            'currency_symbol' => 'MT',
            'currency_code' => 'MZN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MMR',
            'alpha2' => 'MM',
            'name' => 'Myanmar',
            'phone_code' => 95,
            'currency_symbol' => 'K',
            'currency_code' => 'MMK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NAM',
            'alpha2' => 'NA',
            'name' => 'Namibia',
            'phone_code' => 264,
            'currency_symbol' => '$',
            'currency_code' => 'NAD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NRU',
            'alpha2' => 'NR',
            'name' => 'Nauru',
            'phone_code' => 674,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NPL',
            'alpha2' => 'NP',
            'name' => 'Nepal',
            'phone_code' => 977,
            'currency_symbol' => '₨',
            'currency_code' => 'NPR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NLD',
            'alpha2' => 'NL',
            'name' => 'Netherlands',
            'phone_code' => 31,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ANT',
            'alpha2' => 'AN',
            'name' => 'Netherlands Antilles',
            'phone_code' => 599,
            'currency_symbol' => 'NAf',
            'currency_code' => 'ANG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NCL',
            'alpha2' => 'NC',
            'name' => 'New Caledonia',
            'phone_code' => 687,
            'currency_symbol' => '₣',
            'currency_code' => 'XPF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NZL',
            'alpha2' => 'NZ',
            'name' => 'New Zealand',
            'phone_code' => 64,
            'currency_symbol' => '$',
            'currency_code' => 'NZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NIC',
            'alpha2' => 'NI',
            'name' => 'Nicaragua',
            'phone_code' => 505,
            'currency_symbol' => 'C$',
            'currency_code' => 'NIO',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NER',
            'alpha2' => 'NE',
            'name' => 'Niger',
            'phone_code' => 227,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NGA',
            'alpha2' => 'NG',
            'name' => 'Nigeria',
            'phone_code' => 234,
            'currency_symbol' => '₦',
            'currency_code' => 'NGN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NIU',
            'alpha2' => 'NU',
            'name' => 'Niue',
            'phone_code' => 683,
            'currency_symbol' => '$',
            'currency_code' => 'NZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NFK',
            'alpha2' => 'NF',
            'name' => 'Norfolk Island',
            'phone_code' => 672,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MNP',
            'alpha2' => 'MP',
            'name' => 'Northern Mariana Islands',
            'phone_code' => 1670,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'NOR',
            'alpha2' => 'NO',
            'name' => 'Norway',
            'phone_code' => 47,
            'currency_symbol' => 'kr',
            'currency_code' => 'NOK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'OMN',
            'alpha2' => 'OM',
            'name' => 'Oman',
            'phone_code' => 968,
            'currency_symbol' => '.ع.ر',
            'currency_code' => 'OMR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PAK',
            'alpha2' => 'PK',
            'name' => 'Pakistan',
            'phone_code' => 92,
            'currency_symbol' => '₨',
            'currency_code' => 'PKR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PLW',
            'alpha2' => 'PW',
            'name' => 'Palau',
            'phone_code' => 680,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PSE',
            'alpha2' => 'PS',
            'name' => 'Palestinian Territory, Occupied',
            'phone_code' => 970,
            'currency_symbol' => '₪',
            'currency_code' => 'ILS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PAN',
            'alpha2' => 'PA',
            'name' => 'Panama',
            'phone_code' => 507,
            'currency_symbol' => 'B/.',
            'currency_code' => 'PAB',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PNG',
            'alpha2' => 'PG',
            'name' => 'Papua New Guinea',
            'phone_code' => 675,
            'currency_symbol' => 'K',
            'currency_code' => 'PGK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PRY',
            'alpha2' => 'PY',
            'name' => 'Paraguay',
            'phone_code' => 595,
            'currency_symbol' => '₲',
            'currency_code' => 'PYG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PER',
            'alpha2' => 'PE',
            'name' => 'Peru',
            'phone_code' => 51,
            'currency_symbol' => 'S/.',
            'currency_code' => 'PEN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PHL',
            'alpha2' => 'PH',
            'name' => 'Philippines',
            'phone_code' => 63,
            'currency_symbol' => '₱',
            'currency_code' => 'PHP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PCN',
            'alpha2' => 'PN',
            'name' => 'Pitcairn',
            'phone_code' => 64,
            'currency_symbol' => '$',
            'currency_code' => 'NZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'POL',
            'alpha2' => 'PL',
            'name' => 'Poland',
            'phone_code' => 48,
            'currency_symbol' => 'zł',
            'currency_code' => 'PLN',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PRT',
            'alpha2' => 'PT',
            'name' => 'Portugal',
            'phone_code' => 351,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'PRI',
            'alpha2' => 'PR',
            'name' => 'Puerto Rico',
            'phone_code' => 1787,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'QAT',
            'alpha2' => 'QA',
            'name' => 'Qatar',
            'phone_code' => 974,
            'currency_symbol' => 'ق.ر',
            'currency_code' => 'QAR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'REU',
            'alpha2' => 'RE',
            'name' => 'Reunion',
            'phone_code' => 262,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ROM',
            'alpha2' => 'RO',
            'name' => 'Romania',
            'phone_code' => 40,
            'currency_symbol' => 'lei',
            'currency_code' => 'RON',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'RUS',
            'alpha2' => 'RU',
            'name' => 'Russian Federation',
            'phone_code' => 70,
            'currency_symbol' => '₽',
            'currency_code' => 'RUB',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'RWA',
            'alpha2' => 'RW',
            'name' => 'Rwanda',
            'phone_code' => 250,
            'currency_symbol' => 'FRw',
            'currency_code' => 'RWF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'BLM',
            'alpha2' => 'BL',
            'name' => 'Saint Barthelemy',
            'phone_code' => 590,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SHN',
            'alpha2' => 'SH',
            'name' => 'Saint Helena',
            'phone_code' => 290,
            'currency_symbol' => '£',
            'currency_code' => 'SHP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'KNA',
            'alpha2' => 'KN',
            'name' => 'Saint Kitts and Nevis',
            'phone_code' => 1869,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LCA',
            'alpha2' => 'LC',
            'name' => 'Saint Lucia',
            'phone_code' => 1758,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'MAF',
            'alpha2' => 'MF',
            'name' => 'Saint Martin',
            'phone_code' => 590,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SPM',
            'alpha2' => 'PM',
            'name' => 'Saint Pierre and Miquelon',
            'phone_code' => 508,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VCT',
            'alpha2' => 'VC',
            'name' => 'Saint Vincent and the Grenadines',
            'phone_code' => 1784,
            'currency_symbol' => '$',
            'currency_code' => 'XCD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'WSM',
            'alpha2' => 'WS',
            'name' => 'Samoa',
            'phone_code' => 684,
            'currency_symbol' => 'SAT',
            'currency_code' => 'WST',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SMR',
            'alpha2' => 'SM',
            'name' => 'San Marino',
            'phone_code' => 378,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'STP',
            'alpha2' => 'ST',
            'name' => 'Sao Tome and Principe',
            'phone_code' => 239,
            'currency_symbol' => 'Db',
            'currency_code' => 'STD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SAU',
            'alpha2' => 'SA',
            'name' => 'Saudi Arabia',
            'phone_code' => 966,
            'currency_symbol' => '﷼',
            'currency_code' => 'SAR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SEN',
            'alpha2' => 'SN',
            'name' => 'Senegal',
            'phone_code' => 221,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SRB',
            'alpha2' => 'RS',
            'name' => 'Serbia',
            'phone_code' => 381,
            'currency_symbol' => 'din',
            'currency_code' => 'RSD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SCG',
            'alpha2' => 'CS',
            'name' => 'Serbia and Montenegro',
            'phone_code' => 381,
            'currency_symbol' => 'din',
            'currency_code' => 'RSD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SYC',
            'alpha2' => 'SC',
            'name' => 'Seychelles',
            'phone_code' => 248,
            'currency_symbol' => 'SRe',
            'currency_code' => 'SCR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SLE',
            'alpha2' => 'SL',
            'name' => 'Sierra Leone',
            'phone_code' => 232,
            'currency_symbol' => 'Le',
            'currency_code' => 'SLL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SGP',
            'alpha2' => 'SG',
            'name' => 'Singapore',
            'phone_code' => 65,
            'currency_symbol' => '$',
            'currency_code' => 'SGD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SXM',
            'alpha2' => 'SX',
            'name' => 'Sint Maarten',
            'phone_code' => 1,
            'currency_symbol' => 'ƒ',
            'currency_code' => 'ANG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SVK',
            'alpha2' => 'SK',
            'name' => 'Slovakia',
            'phone_code' => 421,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SVN',
            'alpha2' => 'SI',
            'name' => 'Slovenia',
            'phone_code' => 386,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SLB',
            'alpha2' => 'SB',
            'name' => 'Solomon Islands',
            'phone_code' => 677,
            'currency_symbol' => 'Si$',
            'currency_code' => 'SBD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SOM',
            'alpha2' => 'SO',
            'name' => 'Somalia',
            'phone_code' => 252,
            'currency_symbol' => 'Sh.so.',
            'currency_code' => 'SOS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ZAF',
            'alpha2' => 'ZA',
            'name' => 'South Africa',
            'phone_code' => 27,
            'currency_symbol' => 'R',
            'currency_code' => 'ZAR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SGS',
            'alpha2' => 'GS',
            'name' => 'South Georgia and the South Sandwich Islands',
            'phone_code' => 500,
            'currency_symbol' => '£',
            'currency_code' => 'GBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SSD',
            'alpha2' => 'SS',
            'name' => 'South Sudan',
            'phone_code' => 211,
            'currency_symbol' => '£',
            'currency_code' => 'SSP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ESP',
            'alpha2' => 'ES',
            'name' => 'Spain',
            'phone_code' => 34,
            'currency_symbol' => '€',
            'currency_code' => 'EUR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'LKA',
            'alpha2' => 'LK',
            'name' => 'Sri Lanka',
            'phone_code' => 94,
            'currency_symbol' => 'Rs',
            'currency_code' => 'LKR',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SDN',
            'alpha2' => 'SD',
            'name' => 'Sudan',
            'phone_code' => 249,
            'currency_symbol' => '.س.ج',
            'currency_code' => 'SDG',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SUR',
            'alpha2' => 'SR',
            'name' => 'Suriname',
            'phone_code' => 597,
            'currency_symbol' => '$',
            'currency_code' => 'SRD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SJM',
            'alpha2' => 'SJ',
            'name' => 'Svalbard and Jan Mayen',
            'phone_code' => 47,
            'currency_symbol' => 'kr',
            'currency_code' => 'NOK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SWZ',
            'alpha2' => 'SZ',
            'name' => 'Swaziland',
            'phone_code' => 268,
            'currency_symbol' => 'E',
            'currency_code' => 'SZL',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SWE',
            'alpha2' => 'SE',
            'name' => 'Sweden',
            'phone_code' => 46,
            'currency_symbol' => 'kr',
            'currency_code' => 'SEK',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'CHE',
            'alpha2' => 'CH',
            'name' => 'Switzerland',
            'phone_code' => 41,
            'currency_symbol' => 'CHf',
            'currency_code' => 'CHF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'SYR',
            'alpha2' => 'SY',
            'name' => 'Syrian Arab Republic',
            'phone_code' => 963,
            'currency_symbol' => 'LS',
            'currency_code' => 'SYP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TWN',
            'alpha2' => 'TW',
            'name' => 'Taiwan, Province of China',
            'phone_code' => 886,
            'currency_symbol' => '$',
            'currency_code' => 'TWD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TJK',
            'alpha2' => 'TJ',
            'name' => 'Tajikistan',
            'phone_code' => 992,
            'currency_symbol' => 'SM',
            'currency_code' => 'TJS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TZA',
            'alpha2' => 'TZ',
            'name' => 'Tanzania, United Republic of',
            'phone_code' => 255,
            'currency_symbol' => 'TSh',
            'currency_code' => 'TZS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'THA',
            'alpha2' => 'TH',
            'name' => 'Thailand',
            'phone_code' => 66,
            'currency_symbol' => '฿',
            'currency_code' => 'THB',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TLS',
            'alpha2' => 'TL',
            'name' => 'Timor-Leste',
            'phone_code' => 670,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TGO',
            'alpha2' => 'TG',
            'name' => 'Togo',
            'phone_code' => 228,
            'currency_symbol' => 'CFA',
            'currency_code' => 'XOF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TKL',
            'alpha2' => 'TK',
            'name' => 'Tokelau',
            'phone_code' => 690,
            'currency_symbol' => '$',
            'currency_code' => 'NZD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TON',
            'alpha2' => 'TO',
            'name' => 'Tonga',
            'phone_code' => 676,
            'currency_symbol' => '$',
            'currency_code' => 'TOP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TTO',
            'alpha2' => 'TT',
            'name' => 'Trinidad and Tobago',
            'phone_code' => 1868,
            'currency_symbol' => '$',
            'currency_code' => 'TTD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TUN',
            'alpha2' => 'TN',
            'name' => 'Tunisia',
            'phone_code' => 216,
            'currency_symbol' => 'ت.د',
            'currency_code' => 'TND',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TUR',
            'alpha2' => 'TR',
            'name' => 'Turkey',
            'phone_code' => 90,
            'currency_symbol' => '₺',
            'currency_code' => 'TRY',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TKM',
            'alpha2' => 'TM',
            'name' => 'Turkmenistan',
            'phone_code' => 7370,
            'currency_symbol' => 'T',
            'currency_code' => 'TMT',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TCA',
            'alpha2' => 'TC',
            'name' => 'Turks and Caicos Islands',
            'phone_code' => 1649,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'TUV',
            'alpha2' => 'TV',
            'name' => 'Tuvalu',
            'phone_code' => 688,
            'currency_symbol' => '$',
            'currency_code' => 'AUD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'UGA',
            'alpha2' => 'UG',
            'name' => 'Uganda',
            'phone_code' => 256,
            'currency_symbol' => 'USh',
            'currency_code' => 'UGX',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'UKR',
            'alpha2' => 'UA',
            'name' => 'Ukraine',
            'phone_code' => 380,
            'currency_symbol' => '₴',
            'currency_code' => 'UAH',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ARE',
            'alpha2' => 'AE',
            'name' => 'United Arab Emirates',
            'phone_code' => 971,
            'currency_symbol' => 'إ.د',
            'currency_code' => 'AED',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'GBR',
            'alpha2' => 'GB',
            'name' => 'United Kingdom',
            'phone_code' => 44,
            'currency_symbol' => '£',
            'currency_code' => 'GBP',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'USA',
            'alpha2' => 'US',
            'name' => 'United States',
            'phone_code' => 1,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'UMI',
            'alpha2' => 'UM',
            'name' => 'United States Minor Outlying Islands',
            'phone_code' => 1,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'URY',
            'alpha2' => 'UY',
            'name' => 'Uruguay',
            'phone_code' => 598,
            'currency_symbol' => '$',
            'currency_code' => 'UYU',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'UZB',
            'alpha2' => 'UZ',
            'name' => 'Uzbekistan',
            'phone_code' => 998,
            'currency_symbol' => 'лв',
            'currency_code' => 'UZS',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VUT',
            'alpha2' => 'VU',
            'name' => 'Vanuatu',
            'phone_code' => 678,
            'currency_symbol' => 'VT',
            'currency_code' => 'VUV',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VEN',
            'alpha2' => 'VE',
            'name' => 'Venezuela',
            'phone_code' => 58,
            'currency_symbol' => 'Bs',
            'currency_code' => 'VEF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VNM',
            'alpha2' => 'VN',
            'name' => 'Viet Nam',
            'phone_code' => 84,
            'currency_symbol' => '₫',
            'currency_code' => 'VND',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VGB',
            'alpha2' => 'VG',
            'name' => 'Virgin Islands, British',
            'phone_code' => 1284,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'VIR',
            'alpha2' => 'VI',
            'name' => 'Virgin Islands, U.S.',
            'phone_code' => 1340,
            'currency_symbol' => '$',
            'currency_code' => 'USD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'WLF',
            'alpha2' => 'WF',
            'name' => 'Wallis and Futuna',
            'phone_code' => 681,
            'currency_symbol' => '₣',
            'currency_code' => 'XPF',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ESH',
            'alpha2' => 'EH',
            'name' => 'Western Sahara',
            'phone_code' => 212,
            'currency_symbol' => 'MAD',
            'currency_code' => 'MAD',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'YEM',
            'alpha2' => 'YE',
            'name' => 'Yemen',
            'phone_code' => 967,
            'currency_symbol' => '﷼',
            'currency_code' => 'YER',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ZMB',
            'alpha2' => 'ZM',
            'name' => 'Zambia',
            'phone_code' => 260,
            'currency_symbol' => 'ZK',
            'currency_code' => 'ZMW',
        ]);

        Country::firstOrCreate([
            'alpha3' => 'ZWE',
            'alpha2' => 'ZW',
            'name' => 'Zimbabwe',
            'phone_code' => 263,
            'currency_symbol' => '$',
            'currency_code' => 'ZWL',
        ]);
    }
}
