@extends('layouts.trips')
@section('title', 'Crea Nuovo Viaggio')
@section('content')
    <div class="container mt-4">
        <h2 class="fs-4 text-secondary my-4">{{ __('Crea Nuovo Viaggio') }}</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('trips.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destinazione</label>
                        <input type="text" name="destination" id="destination" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Data Inizio</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Data Fine</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo (€)</label>
                        <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                    </div>
                    @php
                        $categories = ['Avventura', 'Relax', 'Cultura', 'Mare', 'Montagna', 'Città d\'arte'];
                    @endphp
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-select" required>
                            <option value="" disabled selected>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('trips.index') }}" class="btn btn-secondary me-2">Annulla</a>
                        <button type="submit" class="btn btn-primary">Crea Viaggio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
