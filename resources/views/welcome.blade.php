@extends('layouts.app')

@section('page-title', 'Home')

@php
//importo l'oggetto carbon che è presente di base in Laravel
use Carbon\Carbon;
//istanzio la variablie;
$dateNow = Carbon::now();
$dateIta = $dateNow->format('Y-m-d');
@endphp

@section('main-content')
<h1 class="text-center">
    Treni
</h1>
<h2 class="text-center">
    <a href="{{ route('train.show', ['date' => $dateIta])}}" class="text-decoration-none">
        Vedi i treni che partono in data:{{ $dateIta }}
    </a>
</h2>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>
                        {{ "Azienda: ".$train['agency'] }}
                    </td>
                    <td>
                        {{ $train['departure_station'] }}
                    </td>
                    <td>
                        {{ $train['arrival_station'] }}
                    </td>
                    <td>
                        {{ $train['departure_time'] }}
                    </td>
                    <td>
                        {{ $train['arrival_time'] }}
                    </td>
                    <td>
                        {{ $train['train_code'] }}
                    </td>
                    <td>
                        @if ($train['timetable']==1)
                        Treno in orario
                        @else
                        Treno in ritardo
                        @endif
                        @if ($train['deleted']==1)
                        Cancellato
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
</div>

@endsection
