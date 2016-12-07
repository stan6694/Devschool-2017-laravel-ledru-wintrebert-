@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><center>Liste des articles</center></h3></div>
                    <div class="panel-body">


                        @foreach($posts as $post)
                            @if($post->user_id == Auth::user()->id)

                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->titre }}
                                </a>
                                </h2>
                                <p>{{ $post->contenu }}</p>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><center>Liste des evenements</center></h3></div>
                    <div class="panel-body">


                        @foreach($events as $event)
                            @if($event->organisateur == Auth::user()->id)

                                <a href="{{ route('events.show', $event->id) }}">
                                    {{ $event->nom }}
                                </a>

                                <p>description : {{ $event->description }}</p>

                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
