@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">editer des trucs</div>
                    <div class="panel-body">
                        {!! Form::model(
                        $post,
                        array(
                         'route' => array('post.update', $post->id),
                         'method' => 'PUT' ))
                         !!}

                        {!! Form::label('nom','Nom') !!}

                        {!! Form::text('nom', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Nom']) !!}

                        {!! Form::label('description','Description') !!}

                        {!! Form::textarea('description', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Description']) !!}

                        {!! Form::submit('publier') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    afficher le formulaire d'edition de l'article
@endsection
