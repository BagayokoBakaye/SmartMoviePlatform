@extends('projects.show')
@section('tab-content')

<div class="tags">
<a href="{{ route('storyboards.create', $project->id) }}" class="btn btn-success btn-sm" title="Add New Personnage">
                            Add New Storyboard
                        </a>
</div>


@section('conditional-div')
    {{-- Exclude the div by defining an empty section --}}
@endsection
@endsection