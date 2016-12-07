@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles et des evenements</div>
                    <div class="panel-body">
                        <h1>articles</h1>
                        @foreach($posts as $post)
                            @if($event->organisateur == Auth::user()->id)
                            <h1>articles</h1>
                            <h2>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->titre }}
                                </a>
                            </h2>
                            <p>{{ $post->contenu }}</p>
                            @endif
                        @endforeach

                            <h1>events</h1>
                        @foreach($events as $event)
                            @if($event->organisateur == Auth::user()->id)
                            <h1>events</h1>
                            <h2>
                                <a href="{{ route('events.show', $event->id) }}">
                                    {{ $event->nom }}
                                </a>
                            </h2>
                            <p>description : {{ $event->description }}</p>

                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
