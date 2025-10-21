<?php

namespace App\Services\Travel\Strategies;

use App\Services\Travel\Contract\TransportStrategy;

class TaxiStrategy implements TransportStrategy
{
    public function name(): string {
        return 'taxi';
    }

    public function estimateCost(float $distanceKm) : float 
    {
        // costo fijo + un variable por km
        return round(3.00 + ($distanceKm * 1.50), 2);
    }

    public function estimateTimeMin(float $distanceKm) : int 
    {
        // velocidad promedio del taxi 60 km/h
        return (int) ceil(($distanceKm / 60) * 60);
    }

    public function description(): string
    {
        return 'Viajar en taxi es una opción cómoda y rápida, ideal para desplazamientos directos.';
    }

}