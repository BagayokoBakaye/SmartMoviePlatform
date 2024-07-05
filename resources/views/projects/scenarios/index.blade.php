@extends('projects.show') <!-- Extend the main layout -->
@section('tab-content')
<div class="tags">
<a href="{{ route('scenarios.create', $project->id) }}"> Create new scenario</a>
  </div>

@foreach($project->scenarios as $scenario)
<div class="aliner">
<div class="scenarios">
<header class="scenarios-header">
  <p>{{$scenario->created_at}}</p>
  <span class="title">{{$scenario->title}}</span>
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
    <a href="#">View</a>
    <a href="#">Edit</a>
    <a href="#">Delete</a>
  </div>
</div>
</div>

                
            @endforeach
<section class="script-editor">
           
           <div class="toolbar">
               <button onclick="formatText('bold')">Bold</button>
               <button onclick="formatText('italic')">Italic</button>
               <button onclick="formatText('underline')">Underline</button>
           </div>
           <div id="editor" contenteditable="true">
               <!-- L'utilisateur peut écrire ici -->
           </div>
       </section>
       <button class="generate-btn">Save scenario</button>
       
       @section('conditional-div')
    {{-- Exclude the div by defining an empty section --}}
@endsection
    @endsection
