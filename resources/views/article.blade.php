@extends('layout.isGuest')
@section('content')
    <div class="container text-align:center">
        <div class="jumbotron">

            <p class="text-warning">{{ $article->title }}</p>
            <p class="text-white">{{ $article->description }}</p>
            <small>
                <p class="text-warning">#{{ $article->tag }}</p>
            </small>
            <p class="card-footer"> Created At {{ $article->created_at }}</p>
            <p class="lead">
                <a class="btn btn-danger btn-sm" href="/" role="button">Back</a>
            </p>

        </div>
    </div>

    {{-- <div class="jumbotron  " style="text-align:center;">
        <h1 class="display-4 text-warning">{{ $article->title }}</h1>
        <p class="lead text-warning">{{ $article->description }}</p>
        <hr class="my-4">
        <p class="text-warning">#{{ $article->tag }}</p>
        <p class="lead">
            <a class="btn btn-danger btn-lg" href="/" role="button">Back</a>
        </p>
    </div> --}}
@endsection
