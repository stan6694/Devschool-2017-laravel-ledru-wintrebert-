@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>
                    <div class="panel-body">

                        @foreach($post as $article)
                            <h2>
                                <a href="{{ route('posts.show', $article->id) }}">
                                    {{ $article->titre }}
                                </a>
                            </h2>
                            <p>{{ $article->contenu }}</p>
                        @endforeach

                            {!! $post->links() !!}

                            @foreach($event as $evenement)
                                <div>

                                    <a href="{{ route('events.show', $evenement->id) }}">
                                        {{ $evenement->nom }}
                                    </a>

                                    <p>description : {{ $evenement->description }}</p>

                                </div>
                            @endforeach

                            {!! $event->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
