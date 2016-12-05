@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $event->title }}</div>
                    <div class="panel-body">
                        {{ $event->content }}
                        <br>
                        auteur : {{ $event->user->name }}
                        <br>
                        @if(Auth::check() && Auth::user()->isAdmin)
                            <a href="{{ route('event.edit', $event->id) }}">modifier</a>
                        <br>

                        {!! Form::model(
                           $event,
                           array(
                            'route' => array('event.destroy', $event->id),
                            'method' => 'DELETE' ))
                            !!}

                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}

                        @endif
                        <br>
                        <a href="{{ route('event.index') }}">retour a la liste des evenements</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
