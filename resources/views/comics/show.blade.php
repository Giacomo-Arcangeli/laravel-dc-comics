@extends('layouts.main')
@section('main')
    <h1 class="my-5 text-center">Dettagli comic</h1>
    <a href="{{ route('comics.index') }}" class="btn btn-danger mb-4">Torna indietro</a>
    <div class="card">
        <h3>{{ $comic->title }}</h3>
        <img src="{{ $comic->thumb }}" alt="" width="220" height="280" class="my-3">
        <p>{{ $comic->description }}</p>
        <h5>{{ $comic->series }}</h5>
        <h5>{{ $comic->type }}</h5>
        <h5>{{ $comic->sale_date }}</h5>
        <h5>$ {{ $comic->price }}</h5>
    </div>
    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning my-4">Modifica</a>
@endsection
