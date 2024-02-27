@extends('layouts.app')

@section('page-title', 'Treni di oggi')

@section('main-content')
<h1 class="text-center">
    Treni in partenza oggi 
</h1>
<h2 class="text-center">
        {{ $date }}
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
