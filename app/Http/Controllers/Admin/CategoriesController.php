<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    public function index()
    {

    }
    public function addCategory()
    {
    	return view('admin.categories.add');
    }
    public function editCategory(int $id)
    {

    }
    public function deleteCategory(Request $request)
    {
    	if($request->ajax()){
    		
    	}
    }
}
