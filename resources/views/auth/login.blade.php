@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{ asset('media/heroImage2.jpg') }}");
        background-size: cover;
    }

    .form-control-outline {
        border: none;
        border: 2px solid rgb(255, 255, 255);
        border-radius: 0;
        background-color: transparent;
        padding: 10px;
        transition: border-color 0.15s ease-in-out;
        color:white;
    }

    .form-control-outline:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: none;
        background-color: transparent; /* Remove background color when focused */
    }

    .login-card {
        background-color: rgba(255, 255, 255, 0.155); /* Add a semi-transparent white background to the form */
        padding: 20px; /* Add some padding to the form */
        border-radius: 5px; /* Add border radius to the form */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-card text-white">
                <h3 class="text-center">{{ __('Login') }}</h3>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control form-control-outline text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control form-control-outline text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
