@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View Destinations
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-title">
                <h2>{{ $destination->City }}</h2> 
                <h4>{{$destination->Country}}</h4>  
                <p>
                    {{$destination->Description}}
                </p> 
                <p>{{$destination->Climate}}</p>
                <p>{{$destination->BestTimeToVisit}}</p>
                
            </div>
            <div class="card-body">
                <a href="" class="btn btn-primary">
                    Edit
                </a>
                <a href="{{route('destinations.trash',$destination ->id)}}" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    </div>
</div>
@endsection