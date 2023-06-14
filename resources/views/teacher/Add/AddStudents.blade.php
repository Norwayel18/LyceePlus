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
    }

    .form-control-outline:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: none;
        background-color: transparent; /* Remove background color when focused */
    }
    .register-form {
        background-color: rgba(255, 255, 255, 0.155); /* Add a semi-transparent white background to the form */
        padding: 20px; /* Add some padding to the form */
        border-radius: 5px; /* Add border radius to the form */
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="register-form text-white">
                <h2 class="text-center mb-4">{{ __('Student Register Form') }}</h2>
                    <form method="POST" action="/Students">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name Student') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                              <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="class" class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>

                            <div class="col-md-6">
<select name="classe_id" class="form-select">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->NameClass }}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                            

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register Student') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
