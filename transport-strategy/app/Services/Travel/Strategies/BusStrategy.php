<?php

namespace App\Services\Travel\Strategies;

use App\Services\Travel\Contract\TransportStrategy;

class BusStrategy implements TransportStrategy
{
    public function name(): string {
        return 'bus';
    }

    public function estimateCost(float $distanceKm) : float 
    {
        // costo fijo + un variable muy bajo por km
        return round(2.50, 2);
    }

    public function estimateTimeMin(float $distanceKm) : int 
    {
        // velocidad promedio del bus 40 km/h + paradas
        return (int) ceil(($distanceKm / 40) * 60) + 10; // Añadir 10 minutos por paradas
    }

    public function description(): string
    {
        return 'Viajar en bus es una opción económica, ideal para distancias urbanas y suburbanas.';
    }

}