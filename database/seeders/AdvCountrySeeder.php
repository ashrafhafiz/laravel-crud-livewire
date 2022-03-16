<?php

namespace Database\Seeders;

use App\Models\AdvCountry;
use Database\Seeders\Traits\SeederSupportTrait;
use Illuminate\Database\Seeder;

class AdvCountrySeeder extends Seeder
{
    use SeederSupportTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeyChecks();
        $this->truncate('adv_countries');

        $csvFile = fopen(base_path("database/data/adv_countries.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                AdvCountry::create([
                    'FIFA' => $data['0'],
                    'Dial' => $data['1'],
                    'ISO3166-1-Alpha-3' => $data['2'],
                    'MARC' => $data['3'],
                    'is_independent' => $data['4'],
                    'ISO3166-1-numeric' => $data['5'],
                    'GAUL' => $data['6'],
                    'FIPS' => $data['7'],
                    'WMO' => $data['8'],
                    'ISO3166-1-Alpha-2' => $data['9'],
                    'ITU' => $data['10'],
                    'IOC' => $data['11'],
                    'DS' => $data['12'],
                    'UNTERM Spanish Formal' => $data['13'],
                    'Global Code' => $data['14'],
                    'Intermediate Region Code' => $data['15'],
                    'official_name_fr' => $data['16'],
                    'UNTERM French Short' => $data['17'],
                    'ISO4217-currency_name' => $data['18'],
                    'Developed-Developing Countries' => $data['19'],
                    'UNTERM Russian Formal' => $data['20'],
                    'UNTERM English Short' => $data['21'],
                    'ISO4217-currency_alphabetic_code' => $data['22'],
                    'Small Island Developing States SIDS' => $data['23'],
                    'UNTERM Spanish Short' => $data['24'],
                    'ISO4217-currency_numeric_code' => $data['25'],
                    'UNTERM Chinese Formal' => $data['26'],
                    'UNTERM French Formal' => $data['27'],
                    'UNTERM Russian Short' => $data['28'],
                    'M49' => $data['29'],
                    'Sub-region Code' => $data['30'],
                    'Region Code' => $data['31'],
                    'official_name_ar' => $data['32'],
                    'ISO4217-currency_minor_unit' => $data['33'],
                    'UNTERM Arabic Formal' => $data['34'],
                    'UNTERM Chinese Short' => $data['35'],
                    'Land Locked Developing Countries LLDC' => $data['36'],
                    'Intermediate Region Name' => $data['37'],
                    'official_name_es' => $data['38'],
                    'UNTERM English Formal' => $data['39'],
                    'official_name_cn' => $data['40'],
                    'official_name_en' => $data['41'],
                    'ISO4217-currency_country_name' => $data['42'],
                    'Least Developed Countries LDC' => $data['43'],
                    'Region Name' => $data['44'],
                    'UNTERM Arabic Short' => $data['45'],
                    'Sub-region Name' => $data['46'],
                    'official_name_ru' => $data['47'],
                    'Global Name' => $data['48'],
                    'Capital' => $data['49'],
                    'Continent' => $data['50'],
                    'TLD' => $data['51'],
                    'Languages' => $data['52'],
                    'Geoname ID' => $data['53'],
                    'CLDR display name' => $data['54'],
                    'EDGAR' => $data['55'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

        $this->enableForeignKeyChecks();
    }
}
