<?php

namespace Xefi\Faker\Countries\Extensions;

use Xefi\Faker\Extensions\Extension;

class CountriesExtension extends Extension
{
    protected array $countries = [
        ['name' => 'Afghanistan', 'iso_country_code_alpha2' => 'AF', 'iso_country_code_alpha3' => 'AFG'],
        ['name' => 'Albania', 'iso_country_code_alpha2' => 'AL', 'iso_country_code_alpha3' => 'ALB'],
        ['name' => 'Algeria', 'iso_country_code_alpha2' => 'DZ', 'iso_country_code_alpha3' => 'DZA'],
        ['name' => 'Andorra', 'iso_country_code_alpha2' => 'AD', 'iso_country_code_alpha3' => 'AND'],
        ['name' => 'Angola', 'iso_country_code_alpha2' => 'AO', 'iso_country_code_alpha3' => 'AGO'],
        ['name' => 'Antigua and Barbuda', 'iso_country_code_alpha2' => 'AG', 'iso_country_code_alpha3' => 'ATG'],
        ['name' => 'Argentina', 'iso_country_code_alpha2' => 'AR', 'iso_country_code_alpha3' => 'ARG'],
        ['name' => 'Armenia', 'iso_country_code_alpha2' => 'AM', 'iso_country_code_alpha3' => 'ARM'],
        ['name' => 'Australia', 'iso_country_code_alpha2' => 'AU', 'iso_country_code_alpha3' => 'AUS'],
        ['name' => 'Austria', 'iso_country_code_alpha2' => 'AT', 'iso_country_code_alpha3' => 'AUT'],
        ['name' => 'Azerbaijan', 'iso_country_code_alpha2' => 'AZ', 'iso_country_code_alpha3' => 'AZE'],

        ['name' => 'Bahamas', 'iso_country_code_alpha2' => 'BS', 'iso_country_code_alpha3' => 'BHS'],
        ['name' => 'Bahrain', 'iso_country_code_alpha2' => 'BH', 'iso_country_code_alpha3' => 'BHR'],
        ['name' => 'Bangladesh', 'iso_country_code_alpha2' => 'BD', 'iso_country_code_alpha3' => 'BGD'],
        ['name' => 'Barbados', 'iso_country_code_alpha2' => 'BB', 'iso_country_code_alpha3' => 'BRB'],
        ['name' => 'Belarus', 'iso_country_code_alpha2' => 'BY', 'iso_country_code_alpha3' => 'BLR'],
        ['name' => 'Belgium', 'iso_country_code_alpha2' => 'BE', 'iso_country_code_alpha3' => 'BEL'],
        ['name' => 'Belize', 'iso_country_code_alpha2' => 'BZ', 'iso_country_code_alpha3' => 'BLZ'],
        ['name' => 'Benin', 'iso_country_code_alpha2' => 'BJ', 'iso_country_code_alpha3' => 'BEN'],
        ['name' => 'Bhutan', 'iso_country_code_alpha2' => 'BT', 'iso_country_code_alpha3' => 'BTN'],
        ['name' => 'Bolivia', 'iso_country_code_alpha2' => 'BO', 'iso_country_code_alpha3' => 'BOL'],
        ['name' => 'Bosnia and Herzegovina', 'iso_country_code_alpha2' => 'BA', 'iso_country_code_alpha3' => 'BIH'],
        ['name' => 'Botswana', 'iso_country_code_alpha2' => 'BW', 'iso_country_code_alpha3' => 'BWA'],
        ['name' => 'Brazil', 'iso_country_code_alpha2' => 'BR', 'iso_country_code_alpha3' => 'BRA'],
        ['name' => 'Brunei', 'iso_country_code_alpha2' => 'BN', 'iso_country_code_alpha3' => 'BRN'],
        ['name' => 'Bulgaria', 'iso_country_code_alpha2' => 'BG', 'iso_country_code_alpha3' => 'BGR'],
        ['name' => 'Burkina Faso', 'iso_country_code_alpha2' => 'BF', 'iso_country_code_alpha3' => 'BFA'],
        ['name' => 'Burundi', 'iso_country_code_alpha2' => 'BI', 'iso_country_code_alpha3' => 'BDI'],

        ['name' => 'Cambodia', 'iso_country_code_alpha2' => 'KH', 'iso_country_code_alpha3' => 'KHM'],
        ['name' => 'Cameroon', 'iso_country_code_alpha2' => 'CM', 'iso_country_code_alpha3' => 'CMR'],
        ['name' => 'Canada', 'iso_country_code_alpha2' => 'CA', 'iso_country_code_alpha3' => 'CAN'],
        ['name' => 'Cape Verde', 'iso_country_code_alpha2' => 'CV', 'iso_country_code_alpha3' => 'CPV'],
        ['name' => 'Central African Republic', 'iso_country_code_alpha2' => 'CF', 'iso_country_code_alpha3' => 'CAF'],
        ['name' => 'Chad', 'iso_country_code_alpha2' => 'TD', 'iso_country_code_alpha3' => 'TCD'],
        ['name' => 'Chile', 'iso_country_code_alpha2' => 'CL', 'iso_country_code_alpha3' => 'CHL'],
        ['name' => 'China', 'iso_country_code_alpha2' => 'CN', 'iso_country_code_alpha3' => 'CHN'],
        ['name' => 'Colombia', 'iso_country_code_alpha2' => 'CO', 'iso_country_code_alpha3' => 'COL'],
        ['name' => 'Comoros', 'iso_country_code_alpha2' => 'KM', 'iso_country_code_alpha3' => 'COM'],
        ['name' => 'Congo (Congo-Brazzaville)', 'iso_country_code_alpha2' => 'CG', 'iso_country_code_alpha3' => 'COG'],
        ['name' => 'Costa Rica', 'iso_country_code_alpha2' => 'CR', 'iso_country_code_alpha3' => 'CRI'],
        ['name' => 'Croatia', 'iso_country_code_alpha2' => 'HR', 'iso_country_code_alpha3' => 'HRV'],
        ['name' => 'Cuba', 'iso_country_code_alpha2' => 'CU', 'iso_country_code_alpha3' => 'CUB'],
        ['name' => 'Cyprus', 'iso_country_code_alpha2' => 'CY', 'iso_country_code_alpha3' => 'CYP'],
        ['name' => 'Czechia', 'iso_country_code_alpha2' => 'CZ', 'iso_country_code_alpha3' => 'CZE'],

        ['name' => 'Denmark', 'iso_country_code_alpha2' => 'DK', 'iso_country_code_alpha3' => 'DNK'],
        ['name' => 'Djibouti', 'iso_country_code_alpha2' => 'DJ', 'iso_country_code_alpha3' => 'DJI'],
        ['name' => 'Dominica', 'iso_country_code_alpha2' => 'DM', 'iso_country_code_alpha3' => 'DMA'],
        ['name' => 'Dominican Republic', 'iso_country_code_alpha2' => 'DO', 'iso_country_code_alpha3' => 'DOM'],

        ['name' => 'Ecuador', 'iso_country_code_alpha2' => 'EC', 'iso_country_code_alpha3' => 'ECU'],
        ['name' => 'Egypt', 'iso_country_code_alpha2' => 'EG', 'iso_country_code_alpha3' => 'EGY'],
        ['name' => 'El Salvador', 'iso_country_code_alpha2' => 'SV', 'iso_country_code_alpha3' => 'SLV'],
        ['name' => 'Equatorial Guinea', 'iso_country_code_alpha2' => 'GQ', 'iso_country_code_alpha3' => 'GNQ'],
        ['name' => 'Eritrea', 'iso_country_code_alpha2' => 'ER', 'iso_country_code_alpha3' => 'ERI'],
        ['name' => 'Estonia', 'iso_country_code_alpha2' => 'EE', 'iso_country_code_alpha3' => 'EST'],
        ['name' => 'Eswatini', 'iso_country_code_alpha2' => 'SZ', 'iso_country_code_alpha3' => 'SWZ'],
        ['name' => 'Ethiopia', 'iso_country_code_alpha2' => 'ET', 'iso_country_code_alpha3' => 'ETH'],

        ['name' => 'Finland', 'iso_country_code_alpha2' => 'FI', 'iso_country_code_alpha3' => 'FIN'],
        ['name' => 'France', 'iso_country_code_alpha2' => 'FR', 'iso_country_code_alpha3' => 'FRA'],

        ['name' => 'Gabon', 'iso_country_code_alpha2' => 'GA', 'iso_country_code_alpha3' => 'GAB'],
        ['name' => 'Gambia', 'iso_country_code_alpha2' => 'GM', 'iso_country_code_alpha3' => 'GMB'],
        ['name' => 'Georgia', 'iso_country_code_alpha2' => 'GE', 'iso_country_code_alpha3' => 'GEO'],
        ['name' => 'Germany', 'iso_country_code_alpha2' => 'DE', 'iso_country_code_alpha3' => 'DEU'],
        ['name' => 'Ghana', 'iso_country_code_alpha2' => 'GH', 'iso_country_code_alpha3' => 'GHA'],
        ['name' => 'Greece', 'iso_country_code_alpha2' => 'GR', 'iso_country_code_alpha3' => 'GRC'],
        ['name' => 'Grenada', 'iso_country_code_alpha2' => 'GD', 'iso_country_code_alpha3' => 'GRD'],
        ['name' => 'Guatemala', 'iso_country_code_alpha2' => 'GT', 'iso_country_code_alpha3' => 'GTM'],
        ['name' => 'Guinea', 'iso_country_code_alpha2' => 'GN', 'iso_country_code_alpha3' => 'GIN'],
        ['name' => 'Guinea-Bissau', 'iso_country_code_alpha2' => 'GW', 'iso_country_code_alpha3' => 'GNB'],
        ['name' => 'Guyana', 'iso_country_code_alpha2' => 'GY', 'iso_country_code_alpha3' => 'GUY'],

        ['name' => 'Haiti', 'iso_country_code_alpha2' => 'HT', 'iso_country_code_alpha3' => 'HTI'],
        ['name' => 'Honduras', 'iso_country_code_alpha2' => 'HN', 'iso_country_code_alpha3' => 'HND'],
        ['name' => 'Hungary', 'iso_country_code_alpha2' => 'HU', 'iso_country_code_alpha3' => 'HUN'],

        ['name' => 'Iceland', 'iso_country_code_alpha2' => 'IS', 'iso_country_code_alpha3' => 'ISL'],
        ['name' => 'India', 'iso_country_code_alpha2' => 'IN', 'iso_country_code_alpha3' => 'IND'],
        ['name' => 'Indonesia', 'iso_country_code_alpha2' => 'ID', 'iso_country_code_alpha3' => 'IDN'],
        ['name' => 'Iran', 'iso_country_code_alpha2' => 'IR', 'iso_country_code_alpha3' => 'IRN'],
        ['name' => 'Iraq', 'iso_country_code_alpha2' => 'IQ', 'iso_country_code_alpha3' => 'IRQ'],
        ['name' => 'Ireland', 'iso_country_code_alpha2' => 'IE', 'iso_country_code_alpha3' => 'IRL'],
        ['name' => 'Israel', 'iso_country_code_alpha2' => 'IL', 'iso_country_code_alpha3' => 'ISR'],
        ['name' => 'Italy', 'iso_country_code_alpha2' => 'IT', 'iso_country_code_alpha3' => 'ITA'],

        ['name' => 'Jamaica', 'iso_country_code_alpha2' => 'JM', 'iso_country_code_alpha3' => 'JAM'],
        ['name' => 'Japan', 'iso_country_code_alpha2' => 'JP', 'iso_country_code_alpha3' => 'JPN'],
        ['name' => 'Jordan', 'iso_country_code_alpha2' => 'JO', 'iso_country_code_alpha3' => 'JOR'],

        ['name' => 'Kazakhstan', 'iso_country_code_alpha2' => 'KZ', 'iso_country_code_alpha3' => 'KAZ'],
        ['name' => 'Kenya', 'iso_country_code_alpha2' => 'KE', 'iso_country_code_alpha3' => 'KEN'],
        ['name' => 'Kiribati', 'iso_country_code_alpha2' => 'KI', 'iso_country_code_alpha3' => 'KIR'],
        ['name' => 'Kosovo', 'iso_country_code_alpha2' => 'XK', 'iso_country_code_alpha3' => 'XKX'],
        ['name' => 'Kuwait', 'iso_country_code_alpha2' => 'KW', 'iso_country_code_alpha3' => 'KWT'],
        ['name' => 'Kyrgyzstan', 'iso_country_code_alpha2' => 'KG', 'iso_country_code_alpha3' => 'KGZ'],

        ['name' => 'Laos', 'iso_country_code_alpha2' => 'LA', 'iso_country_code_alpha3' => 'LAO'],
        ['name' => 'Latvia', 'iso_country_code_alpha2' => 'LV', 'iso_country_code_alpha3' => 'LVA'],
        ['name' => 'Lebanon', 'iso_country_code_alpha2' => 'LB', 'iso_country_code_alpha3' => 'LBN'],
        ['name' => 'Lesotho', 'iso_country_code_alpha2' => 'LS', 'iso_country_code_alpha3' => 'LSO'],
        ['name' => 'Liberia', 'iso_country_code_alpha2' => 'LR', 'iso_country_code_alpha3' => 'LBR'],
        ['name' => 'Libya', 'iso_country_code_alpha2' => 'LY', 'iso_country_code_alpha3' => 'LBY'],
        ['name' => 'Liechtenstein', 'iso_country_code_alpha2' => 'LI', 'iso_country_code_alpha3' => 'LIE'],
        ['name' => 'Lithuania', 'iso_country_code_alpha2' => 'LT', 'iso_country_code_alpha3' => 'LTU'],
        ['name' => 'Luxembourg', 'iso_country_code_alpha2' => 'LU', 'iso_country_code_alpha3' => 'LUX'],

        ['name' => 'Madagascar', 'iso_country_code_alpha2' => 'MG', 'iso_country_code_alpha3' => 'MDG'],
        ['name' => 'Malawi', 'iso_country_code_alpha2' => 'MW', 'iso_country_code_alpha3' => 'MWI'],
        ['name' => 'Malaysia', 'iso_country_code_alpha2' => 'MY', 'iso_country_code_alpha3' => 'MYS'],
        ['name' => 'Maldives', 'iso_country_code_alpha2' => 'MV', 'iso_country_code_alpha3' => 'MDV'],
        ['name' => 'Mali', 'iso_country_code_alpha2' => 'ML', 'iso_country_code_alpha3' => 'MLI'],
        ['name' => 'Malta', 'iso_country_code_alpha2' => 'MT', 'iso_country_code_alpha3' => 'MLT'],
        ['name' => 'Marshall Islands', 'iso_country_code_alpha2' => 'MH', 'iso_country_code_alpha3' => 'MHL'],
        ['name' => 'Mauritania', 'iso_country_code_alpha2' => 'MR', 'iso_country_code_alpha3' => 'MRT'],
        ['name' => 'Mauritius', 'iso_country_code_alpha2' => 'MU', 'iso_country_code_alpha3' => 'MUS'],
        ['name' => 'Mexico', 'iso_country_code_alpha2' => 'MX', 'iso_country_code_alpha3' => 'MEX'],
        ['name' => 'Micronesia', 'iso_country_code_alpha2' => 'FM', 'iso_country_code_alpha3' => 'FSM'],
        ['name' => 'Moldova', 'iso_country_code_alpha2' => 'MD', 'iso_country_code_alpha3' => 'MDA'],
        ['name' => 'Monaco', 'iso_country_code_alpha2' => 'MC', 'iso_country_code_alpha3' => 'MCO'],
        ['name' => 'Mongolia', 'iso_country_code_alpha2' => 'MN', 'iso_country_code_alpha3' => 'MNG'],
        ['name' => 'Montenegro', 'iso_country_code_alpha2' => 'ME', 'iso_country_code_alpha3' => 'MNE'],
        ['name' => 'Morocco', 'iso_country_code_alpha2' => 'MA', 'iso_country_code_alpha3' => 'MAR'],
        ['name' => 'Mozambique', 'iso_country_code_alpha2' => 'MZ', 'iso_country_code_alpha3' => 'MOZ'],
        ['name' => 'Myanmar', 'iso_country_code_alpha2' => 'MM', 'iso_country_code_alpha3' => 'MMR'],

        ['name' => 'Namibia', 'iso_country_code_alpha2' => 'NA', 'iso_country_code_alpha3' => 'NAM'],
        ['name' => 'Nauru', 'iso_country_code_alpha2' => 'NR', 'iso_country_code_alpha3' => 'NRU'],
        ['name' => 'Nepal', 'iso_country_code_alpha2' => 'NP', 'iso_country_code_alpha3' => 'NPL'],
        ['name' => 'Netherlands', 'iso_country_code_alpha2' => 'NL', 'iso_country_code_alpha3' => 'NLD'],
        ['name' => 'New Zealand', 'iso_country_code_alpha2' => 'NZ', 'iso_country_code_alpha3' => 'NZL'],
        ['name' => 'Nicaragua', 'iso_country_code_alpha2' => 'NI', 'iso_country_code_alpha3' => 'NIC'],
        ['name' => 'Niger', 'iso_country_code_alpha2' => 'NE', 'iso_country_code_alpha3' => 'NER'],
        ['name' => 'Nigeria', 'iso_country_code_alpha2' => 'NG', 'iso_country_code_alpha3' => 'NGA'],
        ['name' => 'North Korea', 'iso_country_code_alpha2' => 'KP', 'iso_country_code_alpha3' => 'PRK'],
        ['name' => 'North Macedonia', 'iso_country_code_alpha2' => 'MK', 'iso_country_code_alpha3' => 'MKD'],
        ['name' => 'Norway', 'iso_country_code_alpha2' => 'NO', 'iso_country_code_alpha3' => 'NOR'],

        ['name' => 'Oman', 'iso_country_code_alpha2' => 'OM', 'iso_country_code_alpha3' => 'OMN'],

        ['name' => 'Pakistan', 'iso_country_code_alpha2' => 'PK', 'iso_country_code_alpha3' => 'PAK'],
        ['name' => 'Palau', 'iso_country_code_alpha2' => 'PW', 'iso_country_code_alpha3' => 'PLW'],
        ['name' => 'Palestine', 'iso_country_code_alpha2' => 'PS', 'iso_country_code_alpha3' => 'PSE'],
        ['name' => 'Panama', 'iso_country_code_alpha2' => 'PA', 'iso_country_code_alpha3' => 'PAN'],
        ['name' => 'Papua New Guinea', 'iso_country_code_alpha2' => 'PG', 'iso_country_code_alpha3' => 'PNG'],
        ['name' => 'Paraguay', 'iso_country_code_alpha2' => 'PY', 'iso_country_code_alpha3' => 'PRY'],
        ['name' => 'Peru', 'iso_country_code_alpha2' => 'PE', 'iso_country_code_alpha3' => 'PER'],
        ['name' => 'Philippines', 'iso_country_code_alpha2' => 'PH', 'iso_country_code_alpha3' => 'PHL'],
        ['name' => 'Poland', 'iso_country_code_alpha2' => 'PL', 'iso_country_code_alpha3' => 'POL'],
        ['name' => 'Portugal', 'iso_country_code_alpha2' => 'PT', 'iso_country_code_alpha3' => 'PRT'],

        ['name' => 'Qatar', 'iso_country_code_alpha2' => 'QA', 'iso_country_code_alpha3' => 'QAT'],

        ['name' => 'Romania', 'iso_country_code_alpha2' => 'RO', 'iso_country_code_alpha3' => 'ROU'],
        ['name' => 'Russia', 'iso_country_code_alpha2' => 'RU', 'iso_country_code_alpha3' => 'RUS'],
        ['name' => 'Rwanda', 'iso_country_code_alpha2' => 'RW', 'iso_country_code_alpha3' => 'RWA'],

        ['name' => 'Saint Kitts and Nevis', 'iso_country_code_alpha2' => 'KN', 'iso_country_code_alpha3' => 'KNA'],
        ['name' => 'Saint Lucia', 'iso_country_code_alpha2' => 'LC', 'iso_country_code_alpha3' => 'LCA'],
        ['name' => 'Saint Vincent and the Grenadines', 'iso_country_code_alpha2' => 'VC', 'iso_country_code_alpha3' => 'VCT'],
        ['name' => 'Samoa', 'iso_country_code_alpha2' => 'WS', 'iso_country_code_alpha3' => 'WSM'],
        ['name' => 'San Marino', 'iso_country_code_alpha2' => 'SM', 'iso_country_code_alpha3' => 'SMR'],
        ['name' => 'Sao Tome and Principe', 'iso_country_code_alpha2' => 'ST', 'iso_country_code_alpha3' => 'STP'],
        ['name' => 'Saudi Arabia', 'iso_country_code_alpha2' => 'SA', 'iso_country_code_alpha3' => 'SAU'],
        ['name' => 'Senegal', 'iso_country_code_alpha2' => 'SN', 'iso_country_code_alpha3' => 'SEN'],
        ['name' => 'Serbia', 'iso_country_code_alpha2' => 'RS', 'iso_country_code_alpha3' => 'SRB'],
        ['name' => 'Seychelles', 'iso_country_code_alpha2' => 'SC', 'iso_country_code_alpha3' => 'SYC'],
        ['name' => 'Sierra Leone', 'iso_country_code_alpha2' => 'SL', 'iso_country_code_alpha3' => 'SLE'],
        ['name' => 'Singapore', 'iso_country_code_alpha2' => 'SG', 'iso_country_code_alpha3' => 'SGP'],
        ['name' => 'Slovakia', 'iso_country_code_alpha2' => 'SK', 'iso_country_code_alpha3' => 'SVK'],
        ['name' => 'Slovenia', 'iso_country_code_alpha2' => 'SI', 'iso_country_code_alpha3' => 'SVN'],
        ['name' => 'Solomon Islands', 'iso_country_code_alpha2' => 'SB', 'iso_country_code_alpha3' => 'SLB'],
        ['name' => 'Somalia', 'iso_country_code_alpha2' => 'SO', 'iso_country_code_alpha3' => 'SOM'],
        ['name' => 'South Africa', 'iso_country_code_alpha2' => 'ZA', 'iso_country_code_alpha3' => 'ZAF'],
        ['name' => 'South Korea', 'iso_country_code_alpha2' => 'KR', 'iso_country_code_alpha3' => 'KOR'],
        ['name' => 'South Sudan', 'iso_country_code_alpha2' => 'SS', 'iso_country_code_alpha3' => 'SSD'],
        ['name' => 'Spain', 'iso_country_code_alpha2' => 'ES', 'iso_country_code_alpha3' => 'ESP'],
        ['name' => 'Sri Lanka', 'iso_country_code_alpha2' => 'LK', 'iso_country_code_alpha3' => 'LKA'],
        ['name' => 'Sudan', 'iso_country_code_alpha2' => 'SD', 'iso_country_code_alpha3' => 'SDN'],
        ['name' => 'Suriname', 'iso_country_code_alpha2' => 'SR', 'iso_country_code_alpha3' => 'SUR'],
        ['name' => 'Sweden', 'iso_country_code_alpha2' => 'SE', 'iso_country_code_alpha3' => 'SWE'],
        ['name' => 'Switzerland', 'iso_country_code_alpha2' => 'CH', 'iso_country_code_alpha3' => 'CHE'],
        ['name' => 'Syria', 'iso_country_code_alpha2' => 'SY', 'iso_country_code_alpha3' => 'SYR'],

        ['name' => 'Taiwan', 'iso_country_code_alpha2' => 'TW', 'iso_country_code_alpha3' => 'TWN'],
        ['name' => 'Tajikistan', 'iso_country_code_alpha2' => 'TJ', 'iso_country_code_alpha3' => 'TJK'],
        ['name' => 'Tanzania', 'iso_country_code_alpha2' => 'TZ', 'iso_country_code_alpha3' => 'TZA'],
        ['name' => 'Thailand', 'iso_country_code_alpha2' => 'TH', 'iso_country_code_alpha3' => 'THA'],
        ['name' => 'Timor-Leste', 'iso_country_code_alpha2' => 'TL', 'iso_country_code_alpha3' => 'TLS'],
        ['name' => 'Togo', 'iso_country_code_alpha2' => 'TG', 'iso_country_code_alpha3' => 'TGO'],
        ['name' => 'Tonga', 'iso_country_code_alpha2' => 'TO', 'iso_country_code_alpha3' => 'TON'],
        ['name' => 'Trinidad and Tobago', 'iso_country_code_alpha2' => 'TT', 'iso_country_code_alpha3' => 'TTO'],
        ['name' => 'Tunisia', 'iso_country_code_alpha2' => 'TN', 'iso_country_code_alpha3' => 'TUN'],
        ['name' => 'Turkey', 'iso_country_code_alpha2' => 'TR', 'iso_country_code_alpha3' => 'TUR'],
        ['name' => 'Turkmenistan', 'iso_country_code_alpha2' => 'TM', 'iso_country_code_alpha3' => 'TKM'],
        ['name' => 'Tuvalu', 'iso_country_code_alpha2' => 'TV', 'iso_country_code_alpha3' => 'TUV'],

        ['name' => 'Uganda', 'iso_country_code_alpha2' => 'UG', 'iso_country_code_alpha3' => 'UGA'],
        ['name' => 'Ukraine', 'iso_country_code_alpha2' => 'UA', 'iso_country_code_alpha3' => 'UKR'],
        ['name' => 'United Arab Emirates', 'iso_country_code_alpha2' => 'AE', 'iso_country_code_alpha3' => 'ARE'],
        ['name' => 'United Kingdom', 'iso_country_code_alpha2' => 'GB', 'iso_country_code_alpha3' => 'GBR'],
        ['name' => 'United States', 'iso_country_code_alpha2' => 'US', 'iso_country_code_alpha3' => 'USA'],
        ['name' => 'Uruguay', 'iso_country_code_alpha2' => 'UY', 'iso_country_code_alpha3' => 'URY'],
        ['name' => 'Uzbekistan', 'iso_country_code_alpha2' => 'UZ', 'iso_country_code_alpha3' => 'UZB'],

        ['name' => 'Vanuatu', 'iso_country_code_alpha2' => 'VU', 'iso_country_code_alpha3' => 'VUT'],
        ['name' => 'Vatican City', 'iso_country_code_alpha2' => 'VA', 'iso_country_code_alpha3' => 'VAT'],
        ['name' => 'Venezuela', 'iso_country_code_alpha2' => 'VE', 'iso_country_code_alpha3' => 'VEN'],
        ['name' => 'Vietnam', 'iso_country_code_alpha2' => 'VN', 'iso_country_code_alpha3' => 'VNM'],

        ['name' => 'Western Sahara', 'iso_country_code_alpha2' => 'EH', 'iso_country_code_alpha3' => 'ESH'],

        ['name' => 'Yemen', 'iso_country_code_alpha2' => 'YE', 'iso_country_code_alpha3' => 'YEM'],

        ['name' => 'Zambia', 'iso_country_code_alpha2' => 'ZM', 'iso_country_code_alpha3' => 'ZMB'],
        ['name' => 'Zimbabwe', 'iso_country_code_alpha2' => 'ZW', 'iso_country_code_alpha3' => 'ZWE'],
    ];

    /**
     * Returns a random country.
     */
    public function country(): string
    {
        return $this->pickArrayRandomElement($this->countries)['name'];
    }

    /**
     * Returns the country code in ISO format 3166-1 alpha-2 (FR, NL, US).
     */
    public function countryCodeISOAlpha2(): string
    {
        return $this->pickArrayRandomElement($this->countries)['iso_country_code_alpha2'];
    }

    /**
     * Returns the country code in ISO format 3166-1 alpha-3 (FRA, NLD, USA).
     */
    public function countryCodeISOAlpha3(): string
    {
        return $this->pickArrayRandomElement($this->countries)['iso_country_code_alpha3'];
    }
}