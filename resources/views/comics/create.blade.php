@extends('layouts.main')
@section('main')
    <h1 class="my-5 text-center">Aggiungi Comic</h1>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna indietro</a>


    @include('includes.alert-error')

    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="my-5">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo"
                        value="{{ old('title') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="my-5">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Copertina"
                        value="{{ old('thumb') }}">
                </div>
            </div>
            <div class="col-2">
                <div class="my-5">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" min="0.01" step="0.01" class="form-control" id="price" name="price"
                        placeholder="Prezzo" value="{{ old('price') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="my-5">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Serie"
                        value="{{ old('series') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="my-5">
                    <label for="type" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Categoria"
                        value="{{ old('type') }}">
                </div>
            </div>
            <div class="col-2">
                <div class="my-5">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Data"
                        value="{{ old('sale_date') }}">
                </div>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descrizione" name="description" id="description" style="height: 100px">{{ old('description') }}</textarea>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success my-4 me-2">Salva</button>
                <button type="reset" class="btn btn-secondary my-4">Svuota</button>
            </div>
        </div>
    </form>
@endsection
