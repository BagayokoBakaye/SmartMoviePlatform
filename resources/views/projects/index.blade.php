@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Projects</h1>
        <div class="tags">
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Create  New Project</a>
        </div>
    
        <div class="aliner">

        
       
                @foreach($projects as $project)
                <div class="aliner">
                  
              
                <div class="scenarios">
<header class="scenarios-header">
  <p>{{$project->created_at}}</p>
  <span class="title">{{$project->name}}</span>
</header>
<div class="scenarios-author">
  <a class="author-avatar" href="#">
    <span>
  </span></a>
  <svg class="half-circle" viewBox="0 0 106 57">
    <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
  </svg>
  <div class="author-name">
    <div class="author-name-prefix">Author</div>{{ Auth::user()->name }}
    </div>
  </div>
  <div class="tags">
    <a href="{{ route('projects.show', $project) }}">View</a>
    <a href="{{ route('projects.edit', $project) }}">Edit</a>
    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
  </div>
</div>
</div>
              
                @endforeach
                
           
    </div>
@endsection
