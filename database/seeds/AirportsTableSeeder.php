<?php

use Illuminate\Database\Seeder;
use App\Airport;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = config('data.airport');

        foreach ($airports as $airport) {
            $newAirport = new Airport();
            $newAirport->name = $airport['name'];
            $newAirport->code = $airport['code'];
            $newAirport->lat = $airport['lat'];
            $newAirport->lon = $airport['lon'];
            $newAirport->save();
        }
    }
}

            