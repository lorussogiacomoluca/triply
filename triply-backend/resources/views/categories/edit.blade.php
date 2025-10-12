@extends('layouts.categories')
@section('title', 'Modifica categoria')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
            @section('content')
                <div class="container mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2> Modifica categoria</h2>
                    </div>
                    <form action="{{ route('categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Categoria</label>
                            <input type="text" value="{{ $category->name }}" name="name" id="name"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea name="description"id="description" class="form-control" rows="4">{{ $category->description }} </textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annulla</a>
                            <button type="submit" class="btn btn-primary">Modifica Categoria</button>
                        </div>
                    </form>
                </div>
            @endsection
        </div>
    </div>
</div>
@endsection
