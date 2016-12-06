@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">listes des posts</div>
                    <div class="panel-body">

                        @foreach($list as $post)
                            <h2>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->titre }}
                                </a>
                            </h2>
                            <p>{{ $post->contenu }}</p>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
