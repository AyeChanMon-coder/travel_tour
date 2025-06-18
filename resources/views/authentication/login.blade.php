@extends('authentication.master.layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                    type="email" name="email" placeholder="name@example.com" />
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <input class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                        type="password" name="password" placeholder="Type your password" />
                                    @error('password')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input type="submit" class="btn btn-primary w-100" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ route('register') }}">Don't have an account? Register!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
