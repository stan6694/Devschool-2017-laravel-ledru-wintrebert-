@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">editer des event</div>
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

                        {!! Form::label('date_de_debut','Date_de_debut') !!}

                        {!! Form::text('date_de_debut', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Date_de_debut']) !!}

                        {!! Form::label('date_de_fin','Date_de_fin') !!}

                        {!! Form::text('date_de_fin', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Date_de_fin']) !!}

                        {!! Form::label('lieu','Lieu') !!}

                        {!! Form::text('lieu', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Lieu']) !!}

                        {!! Form::label('tarif','Tarif') !!}

                        {!! Form::text('tarif', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Tarif']) !!}

                        {!! Form::submit('publier') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    afficher le formulaire d'edition de l'article
@endsection
