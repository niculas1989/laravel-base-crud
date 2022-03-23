@extends('layouts.main')

@section('title', 'All Comics')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center p-5">
        <h2>Lista fumetti</h2>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea</a>
    </div>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card mb-4">
                <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">${{ $comic['series'] }}</p>
                    <p class="card-text">${{ $comic['price'] }}</p>
                    <a href="{{ route('comics.edit', $comic->id) }}" role="button">
                        <i class="fa-solid fa-pencil text-success pb-4"></i>
                    </a>
                    <div class="d-flex align-items-end justify-content-center">
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger me-3">Delete</button>
                        </form>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection