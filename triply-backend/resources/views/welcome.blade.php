@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center text-center py-5">
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-light">Triply</h1>
            <img src="{{ asset('imgs/logo.png') }}" alt="Logo">
            <p class="fs-5 text-secondary mb-2">Benvenuto nel pannello di controllo</p>
        </div>

        <div>
            <p class="text-muted mb-3">
                Accedi per gestire le destinazioni, le prenotazioni e i contenuti del tuo portale.
            </p>

        </div>

        <footer class="mt-5 text-muted small">
            &copy; {{ date('Y') }} Triply — Tutti i diritti riservati
        </footer>
    </div>
@endsection
