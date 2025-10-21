<?php

namespace App\Services\Travel;

use App\Services\Travel\Contract\TransportStrategy;

class TravelService
{

    public function __construct(
        private TransportStrategy $strategy) {

        }

    public function setStrategy(TransportStategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function plan(float $distanceKm): array { 
        return [
            'mode' => $this->strategy->name(),
            'description' => $this->strategy->description(),
            'distance_km' => $distanceKm,
            'eta_min' => $this->strategy->estimateTimeMin($distanceKm),
            'cost' => $this->strategy->estimateCost($distanceKm),
        ];
    }

}