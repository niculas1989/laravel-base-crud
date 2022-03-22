@extends('layouts.main')

@section('title', $comic->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="text-center h-50 w-50">
                    <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">{{ $comic->series }}</p>
                        <p class="card-text">${{ $comic->price }}</p>
                        <p class="card-text">{{ $comic->sale_date }}</p>
                        <p class="card-text">{{ $comic->type }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection