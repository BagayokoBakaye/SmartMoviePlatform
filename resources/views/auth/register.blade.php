@extends('layouts.app')

@section('content')
<div class="card"></div>
<div class="container">
    <form class="sideform" method="POST" action="{{ route('register') }}">
        @csrf
        <p class="title">Register</p>
        <p class="message">Signup now and get full access to our app.</p>
        
        <div class="flex">
            <label>
                <input class="input @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span>Firstname</span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
        </div>  
                
        <label>
            <input class="input @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            <span>Email</span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label> 
            
        <label>
            <input class="input @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="new-password">
            <span>Password</span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>
        
        <label>
            <input class="input" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
            <span>Confirm password</span>
        </label>
        
        <button class="submit">Submit</button>
        
        <p class="signin">Already have an account? <a href="#">Signin</a></p>
    </form>
</div>

@endsection
