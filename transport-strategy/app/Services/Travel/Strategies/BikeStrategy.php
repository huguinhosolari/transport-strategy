<?php

namespace App\Services\Travel\Strategies;

use App\Services\Travel\Contract\TransportStrategy;

class BikeStrategy implements TransportStrategy
{
    public function name(): string {
        return 'bike';
    }

    public function estimateCost(float $distanceKm) : float 
    {
        // cero costo por usar bicicleta
        return 0.00;
    }

    public function estimateTimeMin(float $distanceKm) : int 
    {
        // velocidad promedio de la bicicleta 15 km/h
        return (int) ceil(($distanceKm / 15) * 60);
    }

    public function description(): string
    {
        return 'Viajar en bicicleta es una opción saludable y ecológica, a cero costo.';
    }

}