@extends('layouts.main')
@section('main')
    <h1 class="my-5 text-center">Comics list</h1>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3 g-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" width="220" height="280" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->series }}</p>
                        <a href="#" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
