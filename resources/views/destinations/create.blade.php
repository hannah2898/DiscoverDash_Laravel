@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Create a Destination
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('destinations.store') }}" method="POST">
                @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors -> all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="City" class="form-label">City</label>
                  <input type="text" class="form-control" id="City" name="City" aria-describedby="City" placeholder="City">
                </div>
                <div class="mb-3">
                    <label for="Country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="Country" name="Country" aria-describedby="Country" placeholder="Country">
                  </div>
                  <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="Description"name="Description" aria-describedby="Description" placeholder="Description">
                  </div>
                  <div class="mb-3">
                    <label for="Climate" class="form-label">Climate</label>
                    <input type="text" class="form-control" id="Climate"name="Climate" aria-describedby="Climate" placeholder="Climate">
                  </div>
                  <div class="mb-3">
                    <label for="BestTimeToVisit" class="form-label">Best Time To Visit</label>
                    <input type="text" class="form-control" id="BestTimeToVisit"name="BestTimeToVisit" aria-describedby="BestTimeToVisit" placeholder="BestTimeToVisit">
                  </div>
                  <div class="mb-3">
                    <label for="ImageURL" class="form-label">ImageURL</label>
                    <input type="text" class="form-control" id="ImageURL"name="ImageURL" aria-describedby="ImageURL" placeholder="ImageURL">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection