<?php

use Illuminate\Database\Seeder;
use App\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $flights = config('data.flight');

       foreach ($flights as $flight) {
           $newFlight = new Flight();
           $newFlight->code_departure = $flight['code_departure'];
           $newFlight->code_arrival = $flight['code_arrival'];
           $newFlight->stopover = $flight['stopover'];
           $newFlight->price = $flight['price'];
           $newFlight->save();
       }
    }
}
