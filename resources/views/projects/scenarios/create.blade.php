@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Create a New Scenario for Project: {{ $project->name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('scenarios.store', $project->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Scenario</button>
        </form>
    </div>
@endsection
