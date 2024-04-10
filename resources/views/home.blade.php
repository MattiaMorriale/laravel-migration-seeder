@extends('layouts/app')

@section('content')

<div class="container">
        <h1 class="py-5">TABELLONE DEI TRENI</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Partenze</th>
                    <th scope="col">Arrivi</th>
                    <th scope="col">Data Partenza</th>
                    <th scope="col">Ora di Partenza</th>
                    <th scope="col">Ora di Arrivo</th>
                    <th scope="col">C. Treno</th>
                    <th scope="col">In ritardo</th>
                    <th scope="col">Cancelati</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($train as $currentTrain)
                    @if ($currentTrain['departure_date'] >= date('Y-m-d'))
                        <tr>
                            <th scope="row">►</th>
                            <td>{{$currentTrain['company']}}</td>
                            <td>{{$currentTrain['departure_station']}}</td>
                            <td>{{$currentTrain['arrival_station']}}</td>
                            <td>{{$currentTrain['departure_date']}}</td>
                            <td>{{$currentTrain['departure_time']}}</td>
                            <td>{{$currentTrain['arrival_time']}}</td>
                            <td>{{$currentTrain['train_code']}}</td>
                            <td>{{$currentTrain['in_time']}}</td>
                            <td>{{$currentTrain['deleted']}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <div class="my-stage">
            <p>ATTENZIONE!! ALLONTANARSI DALLA LINEA GIALLA.. ATTENTION!! STAY AWAY FROM THE YELLOW LINE.. </p>
            <p>ATTENZIONE!! ALLONTANARSI DALLA LINEA GIALLA.. ATTENTION!! STAY AWAY FROM THE YELLOW LINE.. </p>
        </div>

    </div>
@endsection