@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer un article</div>
                    <div class="panel-body">
                        {{--afficher le formulaire de creation d'article--}}

                        {!! Form::open(array(
                          'route' => 'posts.store',
                          'method' => 'POST' )) !!}


                        {!! Form::label('titre','Titre') !!}

                        {!! Form::text('nom', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Titre']) !!}

                        <br>

                        {!! Form::label('contenu','Contenu') !!}

                        {!! Form::textarea('contenu', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Contenu']) !!}

                        <br>

                        {!! Form::submit('Publier') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
