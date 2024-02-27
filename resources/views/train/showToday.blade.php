@extends('layouts.app')

@section('page-title', 'Treni di oggi')

@section('main-content')
<h1 class="text-center">
    Treni in partenza oggi 
</h1>
<h2 class="text-center">
    {{ $date }}
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
