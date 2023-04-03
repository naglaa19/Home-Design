@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Admin Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('check.admin') }}">
        @csrf
        <h3>Login</h3>

            {{-- email --}}
        <label for="email">{{ __('Email Address') }}</label>
        <input input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
            </span>
        @enderror


            {{-- password --}}
        <label for="password">
            {{ __('Password') }}
        </label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

            {{-- submit --}}
        <button type="submit">
            {{ __('Login') }}
        </button>
        {{-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                 {{ __('Forgot Your Password?') }}
            </a>
        @endif --}}
    </form>
</body>
</html>
@endsection