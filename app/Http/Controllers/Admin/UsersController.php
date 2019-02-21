<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   /* public function index()
    {
    	$users = (new User())->get();
    	$params =[
    		'users' => $users
    	];
    	return view('admin.users.index',compact('params',$params));
    }*/
    public function index()
  {
    $users = DB::table('users')->get();

    return view('admin.users.index', ['users' => $users]);
  }
}
