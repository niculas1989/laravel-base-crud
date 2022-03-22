@extends('layouts.main')

@section('title', 'All Comics')

@section('content')
<div class="container">
    <h2>Lista fumetti</h2>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card">
                <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">${{ $comic['series'] }}</p>
                    <p class="card-text">${{ $comic['price'] }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection