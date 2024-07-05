@extends('createnew') <!-- Extend the main layout -->
@section('tab-content')
<h1>
    Storyboard
</h1>
<div >
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
        <p>This is your dashboard.</p>
    </div>
@section('conditional-div')
    {{-- Exclude the div by defining an empty section --}}
@endsection
    @endsection
