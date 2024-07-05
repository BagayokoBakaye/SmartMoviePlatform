@extends('layouts.app')

@section('content')
<div class="card"></div>
<div class="container">
    <form class="sideform" method="POST" action="{{ route('login') }}">
        @csrf
        <p class="title">Login</p>
        <p class="message">Login to your account to continue.</p>
        
        <label>
            <input class="input @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span>Email</span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label> 
            
        <label>
            <input class="input @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="current-password">
            <span>Password</span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>
        
        <div class="flex">
            <label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Remember Me</span>
            </label>
        </div>
        
        <button class="submit">Login</button>
        
        @if (Route::has('password.request'))
            <p class="signin"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
        @endif
    </form>
</div>

@endsection
