@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">profil</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">

                                @foreach($events as $event)
                                    <div>
                                        <a href="{{ route('events.show', $event->id) }}">
                                            {{ $event->nom }}
                                        </a>
                                        </h2>
                                        <p>description : {{ $event->description }}</p>
                                    </div>
                                @endforeach

                            </div>
                            <div class="col-md-6">

                                @foreach($list as $post)
                                    <h2>
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            {{ $post->titre }}
                                        </a>
                                    </h2>
                                    <p>{{ $post->contenu }}</p>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
