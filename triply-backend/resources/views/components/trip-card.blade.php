<div class="card h-100 shadow-sm">
    @if ($trip->cover_image)
        {{-- <img src="{{ asset('storage/' . $trip->cover_image) }}" class="card-img-top" alt="{{ $trip->title }}"
            style="height: 200px; object-fit: cover;"> --}}
        <img src="{{ asset($trip->cover_image) }}" class="card-img-top" alt="{{ $trip->title }}"
            style="height: 200px; object-fit: cover;">
    @else
        <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;">
            <i class="bi bi-image text-white" style="font-size: 3rem;"></i>
        </div>
    @endif

    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $trip->title }}</h5>
        <p class="card-text text-muted mb-2">
            <i class="bi bi-geo-alt"></i> {{ $trip->destination }}
        </p>
        <p class="card-text mb-2">
            <i class="bi bi-calendar-event"></i>
            {{ \Carbon\Carbon::parse($trip->start_date)->format('d/m/Y') }} -
            {{ \Carbon\Carbon::parse($trip->end_date)->format('d/m/Y') }}
        </p>
        <p class="card-text mb-3">
            <strong class="text-primary fs-5">€ {{ number_format($trip->price, 2) }}</strong>
        </p>

        <div class="mt-auto d-flex gap-2">
            <a href="{{ route('trips.show', $trip) }}" class="btn btn-primary btn-sm flex-fill">
                <i class="bi bi-eye"></i> Vedi
            </a>
            <a href="{{ route('trips.edit', $trip) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-pencil"></i>
            </a>
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#deleteModal-{{ $trip->id }}">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    </div>
</div>

<!-- Modal di conferma eliminazione -->
<div class="modal fade" id="deleteModal-{{ $trip->id }}" tabindex="-1"
    aria-labelledby="deleteModalLabel-{{ $trip->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel-{{ $trip->id }}">Conferma Eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare <strong>{{ $trip->title }}</strong>? L'operazione non può essere
                annullata.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form method="POST" action="{{ route('trips.destroy', $trip) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
