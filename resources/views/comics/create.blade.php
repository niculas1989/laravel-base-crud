@extends('layouts.main')

@section('title', 'Create')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center p-5">
        <h2>Crea un nuovo fumetto</h2>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna Indietro</a>
    </div>
    <div class="card-body">
        <form action="" method="">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <div id="title-help" class="form-text">Titolo del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia fumetto</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                        <div id="type-help" class="form-text">Tipologia del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine di copertina del nuovo fumetto</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" required>
                        <div id="thumb-help" class="form-text">Immagine di copertina del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione fumetto</label>
                        <textarea class="form-control" id="description" rows="4" name="description" required></textarea>
                        <div id="description-help" class="form-text">Descrizione del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo fumetto</label>
                        <input type="number" class="form-control" id="price" name="price" min="1" max="1000" required>
                        <div id="price-help" class="form-text">Prezzo del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie fumetto</label>
                        <input type="text" class="form-control" id="series" name="series" required>
                        <div id="series-help" class="form-text">Serie del nuovo fumetto</div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita fumetto</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" required>
                        <div id="sale_date-help" class="form-text">Data di uscita del nuovo fumetto</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center pt-3">
                <button type="reset" class="btn btn-danger me-3">RESET</button>
                <button type="submit" class="btn btn-success">SEND</button>
            </div>
        </form>
    </div>
</div>
@endsection