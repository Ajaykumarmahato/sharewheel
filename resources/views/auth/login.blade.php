@extends('auth/auth-layout')
@section('auth-content')

<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-12 mt-3" style="display:block;">
            <a class="my-link my-logo-fade" href="{{ asset('/') }}"><img class="my-login-logo"
                    src="{{ asset('/images/logo/sharewheel-logo.png') }}" alt="logo" /></a>
            <form method="POST" action="{{ route('login') }}" class="my-login-form myRegisterForm mt-4 mb-4">
                <h3 class="text-center mt-3" style="color: #107a73;">
                    <i class="fa fa-user"></i> SIGN IN</h3>
                <hr>
                @csrf
                @if($message=Session::get('Success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                @if($message=Session::get('Warning'))
                <div class="alert alert-warning">
                    <p>{{$message}}</p>
                </div>
                @endif
                <div class="row mt-2"></div>
                <div class="form-group mb-4 mt-3">
                    <input type="email" class="my-input form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" id="email" placeholder="example@gmail.com" required
                        autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group mb-5">
                    <input type="password" class="my-input form-control @error('password') is-invalid @enderror"
                        id="password" name="password" placeholder="Password" required autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mt-2 mb-2">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <button type="submit" class="myRegisterButton btn btn btn-block my-button text-light"><i
                                    class="fa fa-sign-in" style="color:white;"></i>&nbsp;Login</button>
                            <button type="submit"
                                class="spinner-myRegisterButton btn btn btn-block my-button text-light"><img
                                    src="{{ asset('/images/loading/spinner.gif') }}" alt="spinner" class="spinner">
                                Logging...</button>
                            {{-- <button type="submit"
                                class="spinner-myRegisterButton btn btn btn-block my-button text-light"><i
                                    class="fa fa-spinner fa-spin mr-3 text-light" style="font-size:20px"></i>
                                Logging...</button> --}}
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 mt-3">
                            <a class="text-decoration-none  my-link" href="{{ asset('/register') }}">New? Register
                                here!</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-center py-3 my-text" style="font-size:small;">
                    © 2020 Copyright:
                    All rights reserved by Ajay and Priansu
                </div>
            </form>
        </div>
    </div>
</div>

@endsection