<?php

namespace Database\Seeders;

use App\Models\Airport;
use Database\Seeders\Traits\SeederSupportTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Grimzy\LaravelMysqlSpatial\Types\Point;

class AirportSeeder extends Seeder
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
        $this->truncate('airports');

        $csvFile = fopen(base_path("database/data/airports_tmp.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Airport::create([
                    "ident" => $data['0'],
                    "type" => $data['1'],
                    "name" => $data['2'],
                    "elevation_ft" => $data['3'],
                    "continent" => $data['4'],
                    "iso_country" => $data['5'],
                    "iso_region" => $data['6'],
                    "municipality" => $data['7'],
                    "gps_code" => $data['8'],
                    "iata_code" => $data['9'],
                    "local_code" => $data['10'],
                    // "coordinates" => $data['11'], // not working
                    // "coordinates" => DB::raw("POINT(" . $data['11'] . ")"),
                    "coordinates" => Point::fromString($data['11']),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

        $this->enableForeignKeyChecks();
    }
}
