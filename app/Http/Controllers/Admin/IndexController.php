<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    //后台主页
	public function index()
	{
//		return "这是网站后台";
		return view("admin.index");
	}
}
