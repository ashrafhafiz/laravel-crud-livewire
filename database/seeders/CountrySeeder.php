<?php

namespace Database\Seeders;

use App\Models\Country;
use Database\Seeders\Traits\SeederSupportTrait;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
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
        $this->truncate('countries');

        $csvFile = fopen(base_path("database/data/countries.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Country::create([
                    "name" => $data['0'],
                    "alpha_2" => $data['1'],
                    "alpha_3" => $data['2'],
                    "country_code" => $data['3'],
                    "iso_3166_2" => $data['4'],
                    "region" => $data['5'],
                    "sub_region" => $data['6'],
                    "intermediate_region" => $data['7'],
                    "region_code" => $data['8'],
                    "sub_region_code" => $data['9'],
                    "intermediate_region_code" => $data['10'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

        $this->enableForeignKeyChecks();
    }
}
