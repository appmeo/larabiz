@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <h2 class="mt-2 ml-2">All the Listings</h2>
                @if(count($listings))
                    <ul class="list-group">
                        @foreach($listings as $listing)
                            <li class="list-group-item ml-1 mr-1 mt-1"> <a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                        @endforeach
                    </ul>   
                @else 
                   <p>No Listings found !</p>
                @endif

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

@endsection