@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $event->nom }}</div>
                    <div class="panel-body">

                        <p>description : {{ $event->description }}</p>
                        <p>date de debut : {{ $event->date_de_debut }}</p>
                        <p>date de fin : {{ $event->date_de_fin }}</p>
                        <p>lieu : {{ $event->lieu }}</p>
                        <p>tarif : {{ $event->tarif }}</p>
                        <p>organisateur : {{$event->user->name}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
