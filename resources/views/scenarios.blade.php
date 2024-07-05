@extends('createnew') <!-- Extend the main layout -->
@section('tab-content')


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
