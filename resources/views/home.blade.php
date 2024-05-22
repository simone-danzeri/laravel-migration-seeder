@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-3 pb-5">Trains leaving today</h1>
    <div class="container">
        <div class="trains-list">
            @foreach ($trains as $train)
                <div>Stazione di partenza: {{ $train['stazione_di_partenza'] }}</div>
                <div>Stazione di arrivo: {{ $train['stazione_di_arrivo'] }}</div>
                <div>Treno numero: {{ $train['codice_treno'] }}</div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
