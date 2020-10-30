<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class FilterController extends Controller
{
    public function flight(Request $request) {

        $code_departure = $request->code_departure;
        $code_arrival = $request->code_arrival;


        $airports = Flight::where('code_departure', $code_departure)->where('code_arrival', $code_arrival)->where('stopover', '<=', 1)->orderBy('flights.price')->limit(1)->get();

        

        if (empty($airports)) {
            return response()->json([
                    'success' => true,
                    'length' => 0,
                    "error" => "Nessun volo trovato",
                    'results' => []
            ]);

        } else {
            return response()->json([
                    'success' => true,
                    'length' => $airports->count(),
                    'results' => $airports
            ]);
        }

    }
}
