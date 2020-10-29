<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class FilterController extends Controller
{
    public function flight(Request $request) {

        $price = $request->price;

        $airports = Airport::join('flights', 'airports.id', '=', 'flights.id')->where('price', '<', 100)->orderBy('flights.price')->first();

        //$flights = Flight::join('airports', 'flights.id', '=', 'airports.id')->orderBy('flights.price')->where('price', '<', 100)->first();

        if ($airports->get()->isEmpty()) {
            return response()->json([
                    'success' => true,
                    'length' => $airports->get()->count(),
                    "error" => "Nessun volo trovato",
                    'results' => []
            ]);

        } else {
            return response()->json([
                    'success' => true,
                    'length' => $airports->get()->count(),
                    'results' => $airports->get()
            ]);
        }

    }
}
