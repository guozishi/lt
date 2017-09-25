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
/*Route::group(['middleware'=>'al'], function(){*/

//后台登录
Route::get('/admin', 'Admin\IndexController@index');

//后台退出
Route::get('/admin/logout', 'Admin\LoginController@logout');

//挂起
Route::get('/admin/wait', 'Admin\WaitController@wait');

//解除挂起  登录后台
Route::post('/admin/rewait', 'Admin\WaitController@rewait');

//后台添加分类
Route::resource('/admin/category', 'Admin\CategoryController');

/*});*/

//后台登录
Route::match(['get','post'], '/admin/login', 'Admin\LoginController@login');
// 用户模块
Route::get('/admin/user/add','Admin\UserController@add');
Route::post('/admin/user/insert','Admin\UserController@insert');
Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
Route::post('/admin/user/update','Admin\UserController@update');
Route::get('/admin/user/delete/{id}','Admin\UserController@delete');
Route::get('/admin/user/index','Admin\UserController@index');


//前台



