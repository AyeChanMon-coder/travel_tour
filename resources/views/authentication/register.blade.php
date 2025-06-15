@extends('authentication.master.layout')
@section('title', 'Register')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control @error('name') is-invalid @enderror" id="inputtName"
                                    type="text" name="name" placeholder="Enter your name" />
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

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
                                <input class="form-control @error('phone') is-invalid @enderror" id="inputphone"
                                    type="text" name="phone" placeholder="Enter your phone number" />
                                @error('phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input class="form-control @error('address') is-invalid @enderror" id="inputaddress"
                                    type="text" name="address" placeholder="Enter your address" />
                                @error('address')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <input class="form-control @error('address') is-invalid @enderror"
                                            id="inputPassword" type="password" name="password"
                                            placeholder="Create a password" />
                                        @error('password')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <input
                                            class="form-control @error('confirm-password')
                                            is-invalid
                                        @enderror"
                                            id="inputPasswordConfirm" type="password" name="confirm-password"
                                            placeholder="Confirm password" />
                                        @error('confirm-password')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <input class="btn btn-primary btn-block w-100" type="submit" value="Create Account">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ route('login') }}">Already have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
