@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <strong>liste des articles</strong>

                    @if(count($articles) === 1)

                        @foreach ($articles as $article)
                            <p>Titre : {{ $article->title }}</p>
                        @endforeach

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
