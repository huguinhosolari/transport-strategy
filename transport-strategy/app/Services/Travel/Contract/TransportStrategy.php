<?php


namespace App\Services\Travel\Contract;

interface TransportStrategy
{
    public function name(): string; // el nombre de la estrategia de transporte
    public function estimateCost(float $distanceKm) : float; // estimar el costo basado en la distancia en kilómetros
    public function estimateTimeMin(float $distanceKm) : int; // estimar el tiempo basado en la distancia en kilómetros
    public function description(): string; // descripción de la estrategia de transporte

}