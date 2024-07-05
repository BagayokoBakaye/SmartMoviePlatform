@extends('layouts.main')

@section('main-content')

<form class="form" action="{{ route('image.generate') }}" method="POST" novalidate>
    @csrf
    <p class="title">Image Generator</p>
    <p class="message">Enter your imagination to generate an image.</p>

    <label>
        <input class="input" type="text" id="desc" name="desc" placeholder="" required maxlength="1000">
        <span>Description</span>
        @error('desc')
            <div class="invalid-feedback">Please provide a valid description.</div>
        @enderror
    </label>

    <label>
        <select class="input" name="size" aria-label="Select the size of the image">
            <option selected>Select the size of the image</option>
            <option value="sm" @if (old('size') === 'sm') selected @endif>Small</option>
            <option value="md" @if (old('size') === 'md') selected @endif>Medium</option>
            <option value="lg" @if (old('size') === 'lg') selected @endif>Large</option>
        </select>
        @error('size')
            <div class="invalid-feedback">Please provide a valid size.</div>
        @enderror
    </label>

    <button class="submit">Generate Image</button>
</form>

 


@endsection