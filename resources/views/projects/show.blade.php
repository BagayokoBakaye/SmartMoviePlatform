@extends('layouts.main') <!-- Extend the main layout -->

@section('main-content')

    
        <div class="icon-text-container" onclick="togglePopup()">
            <h2 >{{$project->name}}</h2>
            <i class="fas fa-pencil-alt"></i>
            
        </div>
        <section class="content">
        <ul class="horizontal-list">
        <a  href="{{ route('projects.scenarios', $project->id) }}"> <li  class="{{ request()->is('*scenarios*') ? 'active' : '' }}"><i class="fas fa-file-alt"></i>  Scenarios</li></a>  
        <a href="{{ route('projects.personnages', $project->id) }}"> <li class="{{ request()->is('*personnages*') ? 'active' : '' }}"><i class="fas fa-user"></i> Personnages</li></a>  
        <a href="{{ route('projects.storyboard', $project->id) }}"> <li class="{{ request()->is('*storyboard*') ? 'active' : '' }}"><i class="fas fa-pencil-alt"></i> Storyboard</li></a>  
        <a href="{{ route('projects.environments', $project->id) }}"> <li class="{{ request()->is('*environments*') ? 'active' : '' }}"><i class="fas fa-tree"></i> Environments</li></a>  
       <a href="{{ route('projects.objects', $project->id) }}"> <li class="{{ request()->is('*objects*') ? 'active' : '' }}"><i class="fas fa-cube"></i> Objects</li></a>  </ul>
       
          
            </section>
            
            <div  class="tab-content">
                
                @yield('tab-content')
                @section('conditional-div')
                <div class="card"></div>
    @show
                
      
                
</div>

    @endsection