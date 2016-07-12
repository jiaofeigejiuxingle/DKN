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

Route::get('/', function () {
    return view('welcome');
});

//调用系统的错误页
Route::get("/tips", function (){
    return view("errors.tips");
    exit;
});


//后台首页
Route::get("/Admin","Admin\IndexController@index");

Route::get("/header","Admin\BujuController@header");
Route::get("/menu","Admin\BujuController@menu");
Route::get("/main","Admin\BujuController@main");
//后台登录页
Route::get("/Admin/login","Admin\LoginController@index");

//修改个人中心
Route::get("/Admin/pinfo","Admin\LoginController@edite");

//验证码请求路由规则
Route::get("/captcha/{tmp}", "Admin\LoginController@captcha");
//登录验证
Route::post("Admin/logTodo", "Admin\LoginController@logTodo");

//修改头像
Route::post("/Admin/user/avartar", "Admin\UserController@avartar");

//退出登录
Route::get("Admin/logout", "Admin\LoginController@logout");


//用户
//用户列表
Route::any('/Admin/user', 'Admin\UserController@index');

//后台添加用户
Route::any("/Admin/user/add","Admin\UserController@add");
Route::post("/Admin/user/store", "Admin\UserController@store");
//后台编辑用户
Route::get("/Admin/user/edit/{tmp}","Admin\UserController@edit");
Route::post("/Admin/user/update","Admin\UserController@update");
//修改头像
Route::post("/Admin/user/avartar", "Admin\UserController@avartar");
//后台删除用户
Route::get('/Admin/user/destroy/{tmp}',"Admin\UserController@destroy");

//用户模块
//Route::any("/Admin/user", "Admin\UserController@index");
//Route::resource("/Admin/user", "Admin\UserController");

//修改用户对应的分组
Route::post("/Admin/user/setGroup", "Admin\UserController@setGroup");

//分组管理
Route::resource("/Admin/group", "Admin\GroupController");
Route::post("/Admin/group/setRule", "Admin\GroupController@setRule");
Route::get("/Admin/group/delete/{id}", "Admin\GroupController@destroy");

//权限管理
Route::resource("/Admin/rule", "Admin\RuleController");
Route::post("/Admin/rule/setStatus", "Admin\RuleController@setStatus");
Route::get("/Admin/rule/delete/{id}", "Admin\RuleController@destroy");

//分类管理
Route::resource("/Admin/category", "Admin\CategoryController");
Route::post("/Admin/category/setIsNav", "Admin\CategoryController@setIsNav");
Route::get("/Admin/category/child/{cid}", "Admin\CategoryController@create");
Route::get("/Admin/category/delete/{cid}", "Admin\CategoryController@destroy");

//商品管理
Route::resource("/Admin/goods", "Admin\GoodsController");
Route::post("/Admin/goods/im", "Admin\GoodsController@im");

//商品详细信息
Route::resource("/Admin/detail", "Admin\DetailController");
//前台主页
Route::get('/Home', 'Home\IndexController@index');
//前台登录
Route::get('/Home/login', 'Home\LoginController@index');
//前台登录验证
Route::post('/Home/logTodo', 'Home\LoginController@logTodo');

//前台退出
Route::get('Home/logout','Home\LoginController@logout');
//前台用户注册

Route::get('/Home/register', 'Home\RegisterController@index');

Route::get('/Home/register', 'Home\RegisterController@index');
Route::post('Home/register/store','Home\RegisterController@store');



//购物车
Route::get('Home/gouwuche','Home\GouwucheController@index');

//商品展示
Route::get('Home/show','Home\ShowController@index');

//商品购买
Route::get('Home/buy','Home\BuyController@index');

