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
        box-shadow: 0 0 10px rgba(249, 244, 244, 0.1);
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
        border-color :rgb(130, 119, 148)!important;
        width: 100%;
        padding: 12px;
        border-radius: 3px;
        font-size: 1.1em;
    }

    .btn-primary:hover {
        background-color:rgb(130, 119, 148)!important;
        border-color:rgb(130, 119, 148) !important;
    }

    .links {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        gap: 150px; /* إضافة مسافة بين العناصر */
    }

    .btn-link {
        color:rgb(130, 119, 148) !important;
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: aliceblue;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Phone') }}</label>
                            <input id="name" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection