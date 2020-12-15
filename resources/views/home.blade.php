@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div>
                <div class="row" id="containerEvents">
                    <div class="col-sm-12 align-middle">
                        <h2>Recent Events</h2>
                    </div>
                    <div class="card-deck">
            @foreach ($events as $event)
            <div class="card">
                <img src="https://picsum.photos/150/80.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$event->name}} </h5>
                    <p class="card-text">Date: {{$event->date}} </p>
                    <p class="card-text"><small class="text-muted">Time: {{$event->time}}</small></p>
                    <p class="card-text"><small class="text-muted">Description: {{$event->description}}</small></p>
                    <p class="card-text"><small class="text-muted">Technical requirements to participate: {{$event->requirements}}</small></p>
                    <p class="card-text"><small class="text-muted">Participants number limit: {{$event->limit}}</small></p>
                    <div class="row justify-content-around"> 
                        
                        <a href='{{ route( "subscribe" , $event->id) }}'>
                            <i class="fas fa-check-double"></i>
                        </a>

                        <a href='{{ route( "unsubscribe" , $event->id) }}'>
                            <i class="fas fa-door-open"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
</div>
@endsection