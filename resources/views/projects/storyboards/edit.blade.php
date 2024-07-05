@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Edit Storyboard: {{ $storyboard->title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storyboards.update', [$project->id, $storyboard->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $storyboard->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $storyboard->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Storyboard</button>
    </form>
</div>
@endsection
