@extends('layouts.app')

@section('content')
    <h1>Tabellone Partenze</h1>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="card">
                    <h2>{{ $train->azienda }}-{{ $train->codice_treno }}</h2>
                    <div class="partenza">
                        <span>Stazione Partenza: <b>{{ $train->stazione_partenza }}</b></span>
                        <span>Orario Partenza: <b>{{ $train->orario_partenza }}</b></span>
                    </div>
                    <div class="arrivo">
                        <span>Stazione Arrivo: <b>{{ $train->stazione_arrivo }}</b></span>
                        <span>Orario Arrivo: <b>{{ $train->orario_arrivo }}</b></span>
                    </div>
                    <div class="satus">
                        <span>Stato treno: <b>{{ $train->cancellato ? 'Cancellato' : 'Operativo' }}</b></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection