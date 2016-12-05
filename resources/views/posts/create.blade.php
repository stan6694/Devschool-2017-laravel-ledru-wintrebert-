@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">créer un article</div>
                    <div class="panel-body">
                        {{--afficher le formulaire de creation d'article--}}

                        {!! Form::open(array(
                          'route' => 'posts.store',
                          'method' => 'POST' )) !!}


                        {!! Form::label('nom','Nom') !!}

                        {!! Form::text('nom', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Nom']) !!}

                        {!! Form::label('description','Description') !!}

                        {!! Form::textarea('description', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Description']) !!}

                        {!! Form::label('date de debut','Date de debut') !!}


                        {!! Form::text('date de debut', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Date de debut']) !!}

                        {!! Form::label('date de fin','Date de fin') !!}

                        {!! Form::text('date de fin', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Date de fin']) !!}

                        {!! Form::label('lieu','Lieu') !!}

                        {!! Form::text('lieu', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Lieu']) !!}

                        {!! Form::label('tarif','Tarif') !!}

                        {!! Form::text('tarif', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Tarif']) !!}

                        {!! Form::submit('creer') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    afficher le formulaire de creation de l'evenement
@endsection
