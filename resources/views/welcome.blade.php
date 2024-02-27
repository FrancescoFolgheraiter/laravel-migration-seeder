@extends('layouts.app')

@section('page-title', 'Home')

@php
//importo l'oggetto carbon che è presente di base in Laravel
use Carbon\Carbon;
//istanzio la variablie;
$dateNow = Carbon::now();
$dateIta = $dateNow->format('d-m-y');
@endphp

@section('main-content')
<h1 class="text-center">
    Treni in partenza oggi 
</h1>
<h2 class="text-center">
    {{ $dateIta }}
</h2>
@foreach ($trains as $train)
{{ $train['agency'] }}
@endforeach
@php
    dd(fake()->dateTimeInInterval('-12 week', '+12 week'))
@endphp

@endsection
