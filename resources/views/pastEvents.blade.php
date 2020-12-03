@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
        <!-- <div class="col-md-8"> -->
            <div class="card cardContainer">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div>
                        <div class="col-ms-12 mb-4" id="containerBoxPast">
                            <div class="card" style="width: 18rem;">
                                <img src="https://i.ytimg.com/vi/J6gZCjsH3gE/hqdefault.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Past Events</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- <a href="{{ url('/pastEvents') }}" class="btn btn-primary">Go Past Events</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-ms-12 mb-4" id="containerBoxPast">
                            <div class="card" style="width: 18rem;">
                                <img src="https://i.ytimg.com/vi/J6gZCjsH3gE/hqdefault.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Past Events</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- <a href="{{ url('/pastEvents') }}" class="btn btn-primary">Go Past Events</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
</div>
@endsection
