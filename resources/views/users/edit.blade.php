@extends('layout.isUser')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
                <form action="/users/edit/{{ $users->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="@error('username') is-invalid @enderror form-control " id="username"
                            name="username" placeholder="username" value="{{ old('username', $users->username) }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="text" class="@error('password') is-invalid @enderror form-control " id="password"
                            name="password" placeholder="" value="">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
