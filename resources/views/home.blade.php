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
                    <div class="card-group">
                    <div class="card">
                        <img src="https://assets.afcdn.com/story/20200407/2047265_w980h638c1cx1061cy707cxt0cyt0cxb2121cyb1414.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BODA</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZuHF-19pxz3PI_PMWtRutpzXkOsJSriGxwA&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FIESTA</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CHARLA</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CHARLA</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CHARLA</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
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