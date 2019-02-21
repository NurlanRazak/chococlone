@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h1 class="h2">add deals</h1>
  			<br>
  			<form method="post" enctype="multipart/form-data" action="{{action('Admin\ProductsController@addRequestProduct')}}"> {!! csrf_field() !!}
			<p>Input name of deal:<br><input type="string" name="name" class="form-control"> </p>
			<p>Description of deal:<br><textarea name="description" class="form-control"></textarea> </p>
        	<p>Input price of deal:<br><input type="int" name="price" class="form-control"> </p>
        	  <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Add</button>
        </form>
      
    </main>
@stop

