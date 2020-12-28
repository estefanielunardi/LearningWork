@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card cardContainer">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <div class="card-deck">
            @foreach ($events as $event)
            <div class="card">
                <img src="https://picsum.photos/150/80.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$event->name}} </h5>
                    <p class="card-text">Date: {{$event->date}} </p>
                    <p class="card-text"><small class="text-muted">Time: {{$event->time}}</small></p>
                    <p class="card-text"><small class="text-muted">Participants number limit: {{$event->limit}}</small></p>
                    <p class="card-text"><small class="text-muted">Description: {{$event->description}}</small></p>
                    <p class="card-text"><small class="text-muted">Technical requirements to participate: {{$event->requirements}}</small></p>
                    <div class="row justify-content-around"> 
                        <a href='{{ route( "subscribe" , $event->id) }}'>
                            <i class="fas fa-check-double"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    {{ $events->links() }}
</div>
@endsection

