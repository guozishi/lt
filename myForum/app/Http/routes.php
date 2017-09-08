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


//后台
Route::group(['middleware'=>'al'], function(){

//后台登录
Route::get('/admin', 'Admin\IndexController@index');

//后台退出
Route::get('/admin/logout', 'Admin\LoginController@logout');

//后台登录验证码方法一
//Route::get('/admin/code','Admin\LoginController@code');

//挂起
Route::get('/admin/wait', 'Admin\WaitController@wait');

//解除挂起  登录后台
Route::post('/admin/rewait', 'Admin\WaitController@rewait');

//后台添加分类
Route::resource('/admin/category', 'Admin\CategoryController');


});

//后台登录
Route::match(['get','post'], '/admin/login', 'Admin\LoginController@login');
//后台登录验证码方法二
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');
//前台



