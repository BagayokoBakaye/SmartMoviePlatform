@extends('layouts.main')
@section('main-content')
    <form action="{{ url('personnage/' .$personnages->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$personnages->id}}" id="id" />
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$personnages->name}}">
        </div>
        <div>
            <label>role</label>
            <input type="text" name="role" value="{{$personnages->role}}" >
        </div>
        <div>
            <label>backstory</label>
            <textarea name="backstory" value="{{$personnages->backstory}}" ></textarea>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image_name" value="{{$personnages->image_name}}">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
