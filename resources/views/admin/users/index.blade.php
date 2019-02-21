@extends('layouts.admin')
@section('content')
<main role="main" class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <br><br>
            <h1 class="h2">users list</h1>
        <br>
       
        
        <table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date registed</th>
            
          </tr>
            @foreach($users as $user)
             <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>@if($user->isAdmin)Administrator @else User @endif</td>
            <td>{{$user->created_at}}</td>
            
          </tr>
            @endforeach
        </table>
        
    </main>
@stop