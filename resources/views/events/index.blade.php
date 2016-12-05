@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">listes des events</div>
                <div class="panel-body">

                <?php foreach ($events as $event): ?>
                    <a href="{{ route('event.show', $post->id) }}" rel="stylesheet"><h2>{{ $event->title }}</h2></a>
                    <p>{{ $event->content }}</p>

                  <?php endforeach; ?>
                  {{ $events->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
