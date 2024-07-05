@extends('layouts.app')

@section('main')

<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-4">
                <h5>Image 1</h5>
                <figure>

                    <img src="{{ $image1 }}" alt="{{ $description }}" class="img-thumbnail">


                </figure>
                <p>{{ $description }}</p>



            </div>
            <div class="col col-md-4">
                <h5>Image 2</h5>
                <figure>
                    <img src="{{ $image2 }}" alt="{{ $description }}" class="img-thumbnail">
                </figure>
                <p>{{ $description }}</p>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary  btn-block me-3" onClick="window.location.reload()"> Generate Again
                </button>

                <a href="{{ route('welcome') }}" class="btn btn-dark btn-block ms-3">Back to form</a>
            </div>
        </div>
    </div>




</section>





@endsection