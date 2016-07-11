<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//网站首页
Route::get('/', function () {
    $arr = array(
		["name" => "概述", "target"=>"/u1"],
		["name" => "视频", "target"=>"/u2"],
		["name" => "阅读", "target"=>"/u3"]
	);
    return json_encode($arr);
});


//调用系统的错误页
Route::get("/tips", function (){
    return view("errors.tips");
    exit;
});

//后台首页
Route::get("/Admin", "Admin\IndexController@index");
/*----------------------------------------------------------*
 * 后台登陆                                                 *
 *----------------------------------------------------------*/
Route::get("/Admin/login", "Admin\LoginController@index");
//验证码请求路由规则
Route::get("/Admin/login/captcha/{tmp}", "Admin\LoginController@captcha");
//登陆验证
Route::post("/Admin/logTodo", "Admin\LoginController@logTodo");
//退出登陆
Route::get("/Admin/logout", "Admin\LoginController@logout");

/*----------------------------------------------------------*
 * 用户中心                                                 *
 *----------------------------------------------------------*/
//修改头像
Route::post("/Admin/user/avartar", "Admin\UserController@avartar");

/*----------------------------------------------------------*
 * 用户管理                                                 *
 *----------------------------------------------------------*/
Route::resource("/Admin/user", "Admin\UserController");///user/index /user/create

Route::post("/Admin/user/store", "Admin\UserController@store");
Route::get("/Admin/user/edit/{tmp}", "Admin\UserController@edit");
Route::post("/Admin/user/update", "Admin\UserController@update");
Route::get("/Admin/user/destroy/{tmp}", "Admin\UserController@destroy");
//修改用户对应的分组
Route::post("/Admin/user/setGroup", "Admin\UserController@setGroup");

/*----------------------------------------------------------*
 * 分组管理                                                 *
 *----------------------------------------------------------*/
Route::resource("/Admin/group", "Admin\GroupController");
Route::post("/Admin/group/setRule", "Admin\GroupController@setRule");
Route::get("/Admin/group/delete/{id}", "Admin\GroupController@destroy");

/*----------------------------------------------------------*
 * 权限管理                                                 *
 *----------------------------------------------------------*/
Route::resource("/Admin/rule", "Admin\RuleController");
Route::post("/Admin/rule/setStatus", "Admin\RuleController@setStatus");
Route::get("/Admin/rule/delete/{id}", "Admin\RuleController@destroy");

/*----------------------------------------------------------*
 * 分类管理                                                 *
 *----------------------------------------------------------/
 */
Route::resource("/Admin/category", "Admin\CategoryController");
Route::post("/Admin/category/setIsNav", "Admin\CategoryController@setIsNav");
Route::get("/Admin/category/child/{cid}", "Admin\CategoryController@create");
Route::get("/Admin/category/delete/{cid}", "Admin\CategoryController@destroy");