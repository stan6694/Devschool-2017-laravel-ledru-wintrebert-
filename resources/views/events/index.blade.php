@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">listes des events</div>
                <div class="panel-body">

                    liste des events

                    @foreach($events as $event)
                        <div>

                            {{ route('$event.show', $event->id) }}

                        </div>
                    @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
