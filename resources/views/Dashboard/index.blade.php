@extends('layout.isUser')
@section('content')
    <div class="d-flex justify-center flex-row">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div>
                        <form action="{{ route('article_add_action') }}" method="post">
                            @csrf
                            <div class="form-group tagline-store">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="">
                            </div>
                            <div class="form-group tagline-store">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group tagline-store">
                                <label for="tag">Tag</label>
                                <input type="text" class="form-control" id="tag" name="tag" placeholder="">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                            </div>

                        </form>
                    </div>

                    <div class="card mt-4">
                        <h1>
                            {{ session()->get('message') }}
                        </h1>
                        <div class="card-body">
                            <div class="table-responive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Tag</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($articles as $article)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->description }}</td>
                                                <td>{{ $article->tag }}</td>
                                                <td>
                                                    <form action="{{ route('article_delete_action') }}" method="post">
                                                        @csrf
                                                        <input class="form-control" type="hidden" name="id"
                                                            value="{{ $article->id }}" />
                                                        <button type="submit" class="btn btn-primary"> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
