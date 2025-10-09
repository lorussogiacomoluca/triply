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

            <div class="card-footer text-end">
                <a href="{{ route('trips.index') }}" class="btn btn-secondary">← Torna ai viaggi</a>
            </div>
        </div>
    </div>
@endsection
