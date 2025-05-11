@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        position: relative;
        min-height: 100vh;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 0;
    }

    .row {
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 1000px;
    }

    .col-md-10 {
        flex: 1;
    }

    .col-md-2 {
        flex: 0 0 auto;
        text-align: center;
    }

    .col-md-2 img {
        width: 200px;
        height: auto;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        padding: 30px;
    }

    .card-header {
        background-color:rgb(130, 119, 148) !important;
        color: #333;
        text-align: center;
        font-weight: bold;
        border-bottom: 1px solid #ccc;
        padding: 15px;
        font-size: 1.5em;
    }

    .card-body {
        padding: 20px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 1.1em;
    }

    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .form-check-input {
        margin-left: 5px;
    }

    .btn-primary {
        background-color:rgb(130, 119, 148) !important;
        border-color:rgb(130, 119, 148)!important;
        width: 100%;
        padding: 12px;
        border-radius: 3px;
        font-size: 1.1em;
    }

    .btn-primary:hover {
        background-color: #0056b3 !important;
        border-color: #0056b3 !important;
    }

    .links {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        gap: 150px; /* إضافة مسافة بين العناصر */
    }

    .btn-link {
        color: #007bff !important;
        text-decoration: none;
        font-size: 0.9em;
    }

    .btn-link:hover {
        text-decoration: underline !important;
    }

    .footer {
        position: absolute;
        bottom: 10px;
        right: 10px;
        font-size: 12px;
        color: #777;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="https://img.freepik.com/free-photo/3d-key-posing-with-blank-placard_1156-342.jpg?t=st=1745863679~exp=1745867279~hmac=ad7feb52f51143f0ed0e1e4894ebc4f2f5184ba89d542ab46674fa527acdb06b&w=826" alt="Key Image">
        </div>
        <div class="col-md-10">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="color: rgb(255, 255, 255);;">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="{{ __('Phone Number') }}">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary"  >
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        <div class="links">
                                            <div>
                                                <span>{{ __("Don't have an account? Register") }}</span>
                                                <a class="btn btn-link" href="{{ route('register') }}">{{ __('here') }}</a>
                                            </div>
                                            <div>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password؟') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    copyRIGHT ©2025
</div>
@endsection