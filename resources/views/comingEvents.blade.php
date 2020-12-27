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
    <nav aria-label="Search Coming Events">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
</div>
@endsection