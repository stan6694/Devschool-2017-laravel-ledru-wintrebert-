@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">profil</div>

                    <div class="panel-body">


                        @foreach($events as $event)

                            <a href="{{ route('events.show', $event->id) }}">
                                {{ $event->nom }}
                            </a>
                            </h2>
                            <p>description : {{ $event->description }}</p>

                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
