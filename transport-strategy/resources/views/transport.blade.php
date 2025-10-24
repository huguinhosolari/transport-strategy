@extends('layouts.app')

@section('title', 'Seleccionar Transporte')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Selecciona tu medio de transporte para ir al Aeropuerto SAL</h2>

    <form method="POST" action="{{ route('travel.viaje') }}">
        @csrf
        <div class="row justify-content-center">
            @php

                $transportes = [
                    ['name' => 'Bici', 'icon' => '🚴‍♂️', 'value' => 'bike'],
                    ['name' => 'Metro', 'icon' => '🚇', 'value' => 'metro'],
                    ['name' => 'Bus', 'icon' => '🚌', 'value' => 'bus'],
                    ['name' => 'Uber', 'icon' => '🚖', 'value' => 'uber'],
                    ['name' => 'Taxi', 'icon' => '🚕', 'value' => 'taxi'],
                ];
            @endphp

            @foreach($transportes as $t)
            <div class="col-md-2 col-sm-4 mb-4">
                <label class="card text-center p-3 selectable-card">
                    <input type="radio" name="mode" value="{{ $t['value'] }}" class="form-check-input d-none">
                    <input type="text" name="distance_km" value="30" class="d-none">
                    <div style="font-size:50px;">{{ $t['icon'] }}</div>
                    <h5 class="mt-3">{{ $t['name'] }}</h5>
                </label>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Confirmar</button>
        </div>
    </form>
</div>

<style>
.selectable-card {
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.2s ease-in-out;
}
.selectable-card:hover {
    border-color: #198754;
}
input[type=radio]:checked + div, input[type=radio]:checked + h5 {
    transform: scale(1.05);
    color: #198754;
}
</style>
@endsection
