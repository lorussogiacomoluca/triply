@extends('layouts.trips')
@section('title', $trip->title)

@section('content')
    <div class="container mt-4">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dettagli Viaggio') }}
        </h2>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">{{ $trip->title }}</h4>
            </div>

            <div class="card-body">
                <p><strong>Destinazione:</strong> {{ $trip->destination }}</p>
                <p><strong>Data Inizio:</strong> {{ \Carbon\Carbon::parse($trip->start_date)->format('d/m/Y') }}</p>
                <p><strong>Data Fine:</strong> {{ \Carbon\Carbon::parse($trip->end_date)->format('d/m/Y') }}</p>
                <p><strong>Prezzo:</strong> € {{ number_format($trip->price, 2, ',', '.') }}</p>

                @if ($trip->description)
                    <p><strong>Descrizione:</strong></p>
                    <p>{{ $trip->description }}</p>
                @endif

                @if ($trip->cover_image)
                    <p><strong>Immagine di copertina:</strong></p>
                    <img src="{{ $trip->cover_image }}" alt="Cover di {{ $trip->title }}" class="img-fluid rounded mb-3"
                        style="max-width: 300px;">
                @endif

            </div>

            <div class="card-footer d-flex justify-content-end gap-2">
                <!-- Bottone modifica -->
                <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning">
                    Modifica
                </a>

                <!-- Bottone torna -->
                <a href="{{ route('trips.index') }}" class="btn btn-secondary">
                    ← Torna ai viaggi
                </a>

                <!-- Bottone elimina (apre modal) -->
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    Elimina
                </a>
            </div>

            <!-- Modal di conferma eliminazione -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare questo viaggio? L'operazione non può essere annullata.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form method="POST" action="{{ route('trips.destroy', $trip) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
