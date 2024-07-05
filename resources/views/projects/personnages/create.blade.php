@extends('layouts.main')
@section('main-content')
<h1>Create a New Personnage for Project: {{ $project->name }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('personnages.store',$project->id)}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>role</label>
            <input type="text" name="role">
        </div>
        <div>
            <label>backstory</label>
            <textarea name="backstory"></textarea>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="photo" id='photo'>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
