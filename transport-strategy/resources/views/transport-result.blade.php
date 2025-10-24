@extends('layouts.app')
@section('title', 'Transporte Seleccionado')
@section('content')
<div class="container py-5 text-center">
    <h2>Tu medio de transporte es:</h2>
    <h1 class="text-success mt-3">{{ $selected }}</h1>
    <a href="{{ route('transport.index') }}" class="btn btn-outline-success mt-4">Volver</a>
</div>
@endsection
