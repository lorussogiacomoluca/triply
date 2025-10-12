@extends('layouts.categories')
@section('title', 'Tutte le categorie')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
            @section('content')
                <div class="container mt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2> {{ __('Tutte le categorie') }}</h2>
                        <a href="{{ route('categories.create') }}"> <button class="btn btn-outline-primary">Aggiungi nuova
                                categoria</button></a>
                    </div>
                    <div class="accordion accordion-flush" id="categoriesAccordion">
                        @foreach ($categories as $category)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $category->id }}" aria-expanded="false"
                                        aria-controls="collapse-{{ $category->id }}">
                                        {{ $category->name }} ({{ $category->trips->count() }})
                                    </button>
                                </h2>
                                <div id="collapse-{{ $category->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#categoriesAccordion">
                                    <div class="accordion-body">
                                        {{ $category->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endsection
        </div>
    </div>
</div>
@endsection
