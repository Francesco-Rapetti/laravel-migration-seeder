@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap justify-content-center align-items-center mt-5 gap-3">
        @foreach ($trains as $train)
            @include('partials.card', [
                    'company' => $train->company,
                    'departure_station' => $train->departure_station,
                    'arrival_station' => $train->arrival_station,
                    'departure_time' => $train->departure_time,
                    'arrival_time' => $train->arrival_time,
                    'train_code' => $train->train_code,
                    'number_of_carriages' => $train->number_of_carriages
                ])
        @endforeach
    </div>
@endsection