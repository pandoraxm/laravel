<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

 	Route::get('/', function () {
     	return view('welcome');
	});

	//管理后台登录 不需要登录
	Route::get("admin/login","admin\loginController@login");
	Route::post("admin/doLogin","admin\loginController@doLogin");
	Route::get("admin/captcha/{tmp}","admin\loginController@captcha");

	//需要登录
	Route::group(["prefix"=>"admin","middleware"=>"myauth"],function(){
	Route::get("/logout","admin\loginController@logout");
	Route::get("/index","admin\IndexController@index");

	//学生信息查询
	Route::resource("/stu","admin\StuController");
	});

 // 	Route::get("/admin",function(){
 // 		return view("admin.stu.table");
 // 	});

	// Route::get("/add",function(){
 // 		return view("admin.stu.add");
 // 	});

	//输出验证码
	Route::get("/captcha/{tmp}","admin\CodeController@captcha");
	
	