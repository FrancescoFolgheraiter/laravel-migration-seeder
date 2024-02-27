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
    Treni in partenza oggi 
</h1>
<h2 class="text-center">
    <a href="{{ route('train.showToday', ['date' => $dateIta])}}" class=" nav-underline ">
        {{ $dateIta }}
    </a>
</h2>
@foreach ($trains as $train)
<div>
         
    {{ "Azienda: ".$train['agency'] }}
    {{ $train['departure_station'] }}
    {{ $train['arrival_station'] }}
    {{ $train['departure_time'] }}
    {{ $train['arrival_time'] }}
    {{ $train['train_code'] }}
    {{ $train['timetable'] }}
    {{ $train['deleted'] }}

</div>
@endforeach

@endsection
