@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($show as $task)
                <p>
                    nameofDeals:{{$task->deals->name}}
                    images:{{$task->images->path}}
                </p>
                @endforeach
                    
            </div>
        </div>
    </div>
@endsection