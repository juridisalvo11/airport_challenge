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

        $airports = Airport::join('flights', 'airport.id', '=', 'flight.id')->where('price', '=', $price)->orderedBy('flights.price')->first();

        if ($airports->get()->isEmpty()) {
            return response()->json([
                    'success' => true,
                    'length' => $airports->get()->count(),
                    "error" => "Nessun appartamento trovato",
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
