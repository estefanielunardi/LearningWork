@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Event') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="name" autofocus>

                                @error('Event Date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Time') }}</label>

                            <div class="col-md-6">
                                <input id="time" type="time" class="form-control @error('name') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="name" autofocus>

                                @error('Event Time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Limit Event Participants') }}</label>

                            <div class="col-md-6">
                                <input id="limit" type="bigInteger" class="form-control @error('name') is-invalid @enderror" name="limit" value="{{ old('limit') }}" required autocomplete="name" autofocus>

                                @error('Limit Event Participants')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('name') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="name" autofocus>

                                @error('Event Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Technical Requirements') }}</label>

                            <div class="col-md-6">
                                <input id="requirements" type="text" class="form-control @error('name') is-invalid @enderror" name="requirements" value="{{ old('requirements') }}" required autocomplete="name" autofocus>

                                @error('Event Technical Requirements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @foreach ($events as $event)
                          <div>
                              {{$event->id}} - {{$event->name}} - <a href="#">delete</a> 
                        </div>  
                        @endforeach

                        <div class="form-group row">
                        <!-- CREAR CHECKBOX PARA EL HIGHLIGHT -->
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <form action="" method="post">
                                    @method('put')
                                    @csrf
                                    <button type="submit"></button>
                                </form>
    
                                {{-- <form action="{{route('destroyEvent')}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"></button>
                                </form> --}}
    

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
