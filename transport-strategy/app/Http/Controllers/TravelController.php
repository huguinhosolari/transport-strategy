<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Travel\TravelService;
use App\Services\Travel\Strategies\TaxiStrategy;
use App\Services\Travel\Strategies\BikeStrategy;
use App\Services\Travel\Strategies\BusStrategy;
use App\Services\Travel\Strategies\MetroStrategy;
use App\Services\Travel\Strategies\UberStrategy;


class TravelController extends Controller
{

    public function plan(Request $request)
    {

        $data = $request->validate([
            'mode' => 'required|in:taxi,bike,bus,metro,uber',
            'distance_km' => 'required|numeric|min:0.5',
        ]);

        // instaciaremos la estrategia segun el modo (tipo de transporte) seleccionado
        $strategy = match($data['mode']) {
            'taxi' => new TaxiStrategy(),
            'bike' => new BikeStrategy(),
            'bus' => new BusStrategy(),
            'metro' => new MetroStrategy(),
            'uber' => new UberStrategy(),
        };

        $service = new TravelService($strategy);
        $result = $service->plan($data['distance_km']);

        return response()->json($result);
    }

    public function viaje(Request $request)
    {

        $data = $request->validate([
            'mode' => 'required|in:taxi,bike,bus,metro,uber',
            'distance_km' => 'required|numeric|min:0.5',
        ]);


        //entra por post
        if($request->isMethod('post')){

            // instaciaremos la estrategia segun el modo (tipo de transporte) seleccionado
            $strategy = match($data['mode']) {
            'taxi' => new TaxiStrategy(),
            'bike' => new BikeStrategy(),
            'bus' => new BusStrategy(),
            'metro' => new MetroStrategy(),
            'uber' => new UberStrategy(),
        };

        $service = new TravelService($strategy);
        
        $result = $service->plan($data['distance_km']);
        return view('travel-result', compact('result'));
        }

        // si entra por get, mostrar form
        return view('transport');


    }

    public function getTravelOptions()
    {
        $options = [
            'taxi' => 'Taxi',
            'bike' => 'Bicicleta',
            'bus' => 'Bus',
            'metro' => 'Metro',
            'uber' => 'Uber',
        ];

        return response()->json($options);
    }
}
