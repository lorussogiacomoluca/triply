@extends('layouts.trips')
@section('title', 'Tutti i viaggi')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Tutti i viaggi') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
            @section('content')
                <div class="container mt-4">
                    <h1>Viaggi</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Titolo</th>
                                <th>Destinazione</th>
                                <th>Data Inizio</th>
                                <th>Prezzo</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trips as $trip)
                                <tr>
                                    <td>{{ $trip->title }}</td>
                                    <td>{{ $trip->destination }}</td>
                                    <td>{{ \Carbon\Carbon::parse($trip->start_date)->format('d/m/Y') }}</td>
                                    <td>€ {{ $trip->price }}</td>
                                    <td>
                                        <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-primary btn-sm">Vedi</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endsection
        </div>
    </div>
</div>
@endsection
