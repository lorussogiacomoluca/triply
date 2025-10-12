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
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Viaggi</h1>
                        <a href="{{ route('trips.create') }}"> <button class="btn btn-outline-primary">Aggiungi
                                nuovo</button></a>
                    </div>


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
                                        <a href="{{ route('trips.show', $trip->id) }}"
                                            class="btn btn-primary btn-sm">Vedi</a>
                                        <a href="{{ route('trips.edit', $trip->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <!-- Bottone che apre il modal -->
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                            Elimina
                                        </button>

                                        <!-- Modal di conferma -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Sei sicuro di voler eliminare questo viaggio? L'operazione non può
                                                        essere annullata.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Annulla</button>
                                                        <form method="POST" action="{{ route('trips.destroy', $trip) }}"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
