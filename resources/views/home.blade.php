@extends('layouts/app')

@section('content')

<div class="container">
        <h1>tutti i miei treni</h1>
        @foreach ($train as $currentTrain)
            <p>{{$currentTrain['company']}}</p>
        @endforeach
    </div>
@endsection