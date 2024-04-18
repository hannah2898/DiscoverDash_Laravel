@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Destinations
            </h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($destinations as $destination)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $destination->ImageURL }}" class="card-img-top img-sizing img-fluid" alt="destination image" style="width: 100%; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h2>{{ $destination->City }}</h2> 
                    <h4>{{ $destination->Country }}</h4> 
                    <p>
                        {{$destination->Description}}
                    </p> 
                    <a href="{{route('destinations.edit',$destination ->id)}}" class="btn btn-primary" style="margin-right: 20px">
                        Edit
                    </a>
                    <a href="{{route('destinations.trash',$destination ->id)}}" class="btn btn-dark">
                        Delete
                    </a>
                </div>
        </div>    
    </div>

        @endforeach
    </div>
</div>
@endsection