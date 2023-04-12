@extends('layouts.app')

@section('content')
    <h1>Treni in partenza oggi</h1>

    @foreach($trains as $train)
        <div>
            <p>Azienda: {{ $train->company }}</p>
            <p>Partenza: {{ $train->departure_station }}</p>
            <p>Destinazione: {{ $train->arrival_station }}</p>
            <p>Orario di partenza: {{ $train->departure_time->format('d/m/Y H:i') }}</p>
            <p>Orario di arrivo: {{ $train->arrival_time->format('d/m/Y H:i') }}</p>
            <p>Codice treno: {{ $train->train_code }}</p>
            <p>Numero carrozze: {{ $train->number_of_cars }}</p>
            <hr>
        </div>
    @endforeach
@endsection
