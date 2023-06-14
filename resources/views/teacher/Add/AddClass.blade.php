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
                <div class="register-form text-white ">
                    <h2 class="card-header">{{ __('Class Registering') }}</h>
                        <form method="POST" action="{{ route('classes.index') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Class Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Module N° 1') }}</label>
                                <div class="col-md-6">
                                    <select name="module1" class="form-select ">
                                        <option value="" disabled selected>select a module</option>
                                        @foreach ($modules as $module)
                                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Module N° 2') }}</label>
                                <div class="col-md-6">
                                    <select name="module2" class="form-select ">
                                        <option value="" disabled selected>select a module</option>
                                        @foreach ($modules as $module)
                                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Module N° 3') }}</label>
                                <div class="col-md-6">
                                    <select name="module3" class="form-select ">
                                        <option value="" disabled selected>select a module</option>
                                        @foreach ($modules as $module)
                                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register Class') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
