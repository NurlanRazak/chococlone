@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h1 class="h2">add deals</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="{{action('Admin\ProductsController@storePicture')}}"> {!! csrf_field() !!}
             <p>Image of deal:<br><input type="file" name="addimage"></p>
           @foreach($var as $infind)
           @if($loop->last)
          <input type="hidden" value="{{$infind->deals->id_deals}}" name="prod_id">
          @endif
          @endforeach
            <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Add</button>
        </form>
      
    </main>
@stop