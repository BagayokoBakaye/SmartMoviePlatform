@extends('projects.show')
@section('tab-content')
<div class="tags">
<a href="{{ route('personnages.create', $project->id) }}" class="btn btn-success btn-sm" title="Add New Personnage">
                            Add New Personnage
                        </a>
</div>

   
    <div class="aliner">

    
                        @foreach($project->personnages as $personnage)
        <div class="personnage">
  <div class="card-border-top">
  </div>
 
  <div class="img">
  @if ($personnage->photo)
                        <img src="{{ asset('storage/' . $personnage->photo) }}" alt="{{ $personnage->name }}" width="100">
                    @endif
                </div>
  <span>{{  $personnage->name}} </span>
  <p class="job"> {{  $personnage->role}}</p>
  <p class="job"> {{  $personnage->backstory}}</p>
  <div class="button-container">
  
  <a href="{{ url('/personnage/' . $personnage->id . '/edit') }}" class="delete-button">Edit</a>
  <form method="POST" action="{{ url('/personnage' . '/' . $personnage->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Personnage" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                    
                    
                    <!-- Add button functionality here for editing and deleting -->
                </div>
  
</div>

        @endforeach
        </div>
    @section('conditional-div')
    {{-- Exclude the div by defining an empty section --}}
@endsection
@endsection
