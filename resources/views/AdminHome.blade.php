<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- <div class="textTitleContainer"> -->
    <title>LearningWorks</title>
    <!-- </div> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="container-fluid">
    <div class="row">
        @if (Route::has('login'))
        <nav class="col-sm-12 navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/welcome') }}">LearningWorks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/comingEvents') }}">Coming Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/admin') }}">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/createEvents') }}" class="nav-link">Create Event</a>
                    </li>
                    <a class="nav-link" href="#" role="button">
                        {{ Auth::user()->name }}
                    </a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/comingEvents') }}">Coming Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                @if (Route::has('register'))
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                @endif
                @endauth
            </div>
            @endif
        </nav>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('List of Events') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf                         
                            @foreach ($events as $event)
                              <div>
                                  {{$event->name}} - {{$event->date}} - {{$event->description}} - 
                                <a href='{{ route( "destroy" , $event->id) }}'>
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a href='{{ route( "edit" , $event->id) }}'>
                                    <i class="fas fa-edit"></i>
                                </a>     
                             </div>  
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    @extends('layouts.footer')
</body>
</html>




