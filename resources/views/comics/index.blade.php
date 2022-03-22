@extends('layouts.main')

@section('title', 'Comics')

@section('content')
<div class="container">
    <h2>Lista fumetti</h2>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-2">
            <strong>{{ $comic['title'] }}</strong>
        </div>
        @endforeach
    </div>
</div>
@endsection