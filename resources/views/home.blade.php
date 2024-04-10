@extends('layouts/app')

@section('content')
    <h1>tutti i miei treni</h1>

    <div class="container">
        @foreach ($train as $currentTrain)
            <p>{{$currentTrain['company']}}</p>
        @endforeach
    </div>
@endsection