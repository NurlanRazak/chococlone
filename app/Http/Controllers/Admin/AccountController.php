<?php
/**
 * Created by PhpStorm.
 * User: nurlanrazak
 * Date: 4/26/18
 * Time: 22:31
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AccountController extends Controller
{
	public function index()
	{
		return view('admin.index');
	}
}