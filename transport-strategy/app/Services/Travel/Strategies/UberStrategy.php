<?php

namespace App\Services\Travel\Strategies;
use App\Services\Travel\Contract\TransportStrategy;

class UberStrategy implements TransportStrategy
{
    public function name(): string
    {
        return 'uber';
    }

    public function description(): string
    {
        return 'Ride-hailing service';
    }

    public function estimateTimeMin(float $distanceKm): int
    {
        // Average speed of Uber is around 40 km/h in urban areas
        return (int) ceil(($distanceKm / 40) * 60);
    }

    public function estimateCost(float $distanceKm): float
    {
        // Base fare of $2.00 plus $1.00 per km
        return 2.00 + (1.00 * $distanceKm);
    }
}