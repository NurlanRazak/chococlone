@extends('layouts.admin')
@section('content')
<main role="main" class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <br><br>
            <h1 class="h2">Products list</h1>
  			<br>
        <a href="{!! route('products.add') !!}" class="btn btn-info">Add product</a>
        <br><br><br>
  			<table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
            @foreach($products as $product)
             <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{!!$product->description!!}</td>
            <td>{{$product->price}}</td>
            <td><a href="">Edit</a> || <a href="">Delete</a></td>
          </tr>
            @endforeach
        </table>
        
    </main>
@stop