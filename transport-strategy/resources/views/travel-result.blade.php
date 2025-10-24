@extends ('layouts.app')

@section('title', 'Resultado del Viaje')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Resultado del Viaje</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalles del Viaje</h5>
            <p class="card-text">Modo de Transporte: {{ $result['mode'] }}</p>
            <p class="card-text">Distancia: {{ $result['distance_km'] }} km</p>
            <p class="card-text">Tiempo Estimado: {{ $result['eta_min'] }} minutos</p>
            <p class="card-text">Costo Estimado: ${{ $result['cost'] }}</p>
            <p class="card-text">Descripción: {{ $result['description'] }}</p>
            <a href="{{ route('transport.index') }}" class="btn btn-outline-success mt-3">Seleccionar Otro Transporte</a>

        </div>
    </div>
</div>
@endsection