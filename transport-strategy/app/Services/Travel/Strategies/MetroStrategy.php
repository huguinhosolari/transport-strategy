<?php

namespace App\Services\Travel\Strategies;

use App\Services\Travel\Contract\TransportStrategy;

class MetroStrategy implements TransportStrategy
{
    public function name(): string
    {
        return 'metro';
    }

    public function description(): string
    {
        return 'Urban rail transit system. If city allows it.';
    }

    public function estimateTimeMin(float $distanceKm): int
    {
        // Average speed of metro is around 60 km/h
        return (int) ceil(($distanceKm / 60) * 60);
    }

    public function estimateCost(float $distanceKm): float
    {
        // Flat rate of $1.50 plus $0.50 per km
        return 1.50 + (0.50 * $distanceKm);
    }
}