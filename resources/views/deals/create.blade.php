@extends('layout')
@include('errors')

@section('content')
    <div class="container">
        <h3>Create deal</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['deals.store']]) !!}
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}
                    </textarea>
                    <br>
                    <button class="btn-success">Submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection