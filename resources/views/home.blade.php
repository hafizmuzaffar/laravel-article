@extends('layout.isGuest')
@section('content')
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent" style="text-align:center;">
            <div class="container-fluid ">
                <a class="navbar-brand text-warning" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container mb-2">
        @foreach ($articles as $article)
            <div class="box">
                <span></span>
                <div class="content">
                    <p class="text-warning">{{ $article->title }}</p>
                    <small>
                        <p style="color: #a9a9a9">#{{ $article->tag }}</p>
                    </small>
                    <a href="/article/{{ $article->id }}">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <div class="row">
            @foreach ($articles as $article)
                <div>
                    <h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
                </div>
                <hr>
            @endforeach
        </div> --}}
@endsection
