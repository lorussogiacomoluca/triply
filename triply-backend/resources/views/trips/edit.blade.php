@extends('layouts.trips')
@section('title', 'Modifica Viaggio')
@section('content')
    <div class="container mt-4">
        <h2 class="fs-4 text-secondary my-4">{{ __('Modifica Viaggio') }}</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('trips.update', $trip) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $trip->title }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destinazione</label>
                        <input type="text" name="destination" id="destination" class="form-control"
                            value="{{ $trip->destination }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Data Inizio</label>
                        <input type="date" name="start_date" id="start_date" class="form-control"
                            value="{{ $trip->start_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Data Fine</label>
                        <input type="date" name="end_date" id="end_date" class="form-control"
                            value="{{ $trip->end_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo (€)</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $trip->price }}"
                            step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category_id" id="category" class="form-select" required>
                            <option value="" disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $trip->category->id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Immagine di copertina</label>
                        @if ($trip->cover_image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $trip->cover_image) }}" alt="Cover"
                                    class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        @endif
                        <input type="file" name="cover_image" id="cover_image" class="form-control" accept="image/*">
                        <small class="text-muted">Lascia vuoto per mantenere l'immagine attuale</small>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="4">{{ $trip->description }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('trips.index') }}" class="btn btn-secondary me-2">Annulla</a>
                        <button type="submit" class="btn btn-primary">Aggiorna Viaggio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
