@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->titre }}</div>
                    <div class="panel-body">

                        {{ $post->contenu }}
                        <br>
                        Auteur : {{$post->user->name}}
                        <br>
                        <br>

                        @if(Auth::check() )

                            <a class ="btn btn-success" href="{{ route('posts.index'),$post->id }}">Modifier</a>
                            <br>
                            <br>
                            {!! Form::model(

                                        $post,
                                        array(
                                        'route' => array( 'posts.destroy', $post->id),
                                        'method' => 'DELETE')) !!}

                            {!! Form::submit('Supprimer article',
                            ['class' => 'btn btn-danger']) !!}
                            {!! ! Form::close() !!}



                        @endif

                        <br>
                        <br>
                        <a class ="btn btn-primary" href="{{ route('posts.index') }}"> Tous les articles </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
