@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier un article</div>
                    <div class="panel-body">
                        {{--afficher le formulaire de creation d'article--}}

                        {!! Form::model(
                        $post,
                        array(
                          'route' => array('posts.update', $post->id),
                          'method' => 'PUT' )) !!}


                        {!! Form::label('titre','Titre') !!}

                        {!! Form::text('titre', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Titre']) !!}

                        <br>

                        {!! Form::label('contenu','Contenu') !!}

                        {!! Form::textarea('contenu', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Contenu']) !!}

                        <br>

                        {!! Form::submit('Modifier') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
