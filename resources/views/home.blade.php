@extends('layouts.app')

@section('content')
<div class="content">
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
        <p>This is your dashboard.</p>
    </div>
@endsection
