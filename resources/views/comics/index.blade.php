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
            <div class="card">
                <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">${{ $comic['series'] }}</p>
                    <p class="card-text">${{ $comic['price'] }}</p>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Show more details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection