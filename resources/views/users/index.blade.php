@extends('layout.isUser')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div>
                    <form action="{{ route('users_add_action') }}" method="post">
                        @csrf
                        <div class="form-group tagline-store">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="">
                        </div>
                        <div class="form-group tagline-store">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" rows="3">
                        </div>
                        <div class="form-group mb-2 mt-2">
                            <button type="submit" class="btn btn-primary">Tambah User</button>
                        </div>
                    </form>
                </div>
                <h1>
                    {{ session()->get('message') }}
                </h1>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card mt-4">
                                {{ session()->get('message') }}
                                <div class="card-body">
                                    <div class="table-responive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($user as $user)
                                                    <tr>
                                                        <th>{{ $no++ }}</th>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>{{ $user->updated_at }}</td>
                                                        <td>
                                                            <form action="{{ route('users_delete_action') }}"
                                                                method="post">
                                                                @csrf
                                                                <input class="form-control" type="hidden" name="id"
                                                                    value="{{ $user->id }}" />
                                                                <button type="submit" class="btn btn-primary">
                                                                    <i class="fa fa-trash">
                                                                    </i></button>
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
        </div>
    </div>
@endsection
