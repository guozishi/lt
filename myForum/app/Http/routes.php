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

//后台主页
Route::get('/admin', 'Admin\IndexController@index');

//后台管理员密码修改
Route::get('/admin/pass','Admin\IndexController@pass');
Route::post('/admin/repass','Admin\IndexController@repass');

//后台退出
Route::get('/admin/logout', 'Admin\LoginController@logout');

//后台登录验证码方法一
//Route::get('/admin/code','Admin\LoginController@code');


/*Route::group(['middleware'=>'al'], function(){*/

//后台登录
Route::get('/admin', 'Admin\IndexController@index');

//后台退出
Route::get('/admin/logout', 'Admin\LoginController@logout');

//挂起
Route::get('/admin/wait', 'Admin\WaitController@wait');

//解除挂起  登录后台
Route::post('/admin/rewait', 'Admin\WaitController@rewait');

//后台分类管理
Route::resource('/admin/category', 'Admin\CategoryController');

//后台分类排序
Route::post('/cate/orderby','Admin\CategoryController@orderby');

//后台友情链接管理
Route::resource('/admin/link', 'Admin\LinkController');

//后台友情链接图片上传处理
Route::post('admin/upload','Admin\LinkController@upload');

//后台网站配置 add
Route::resource('admin/config','Admin\ConfigController');

//后台网站配置排序处理
Route::post('/admin/conf/order','Admin\ConfigController@order');

//配置项修改 update
Route::post('admin/config/updateContent','Admin\ConfigController@updateContent');
Route::get('admin/putfile','Admin\ConfigController@putFile');


// 广告管理 advert
    Route::get('/admin/advert/add', 'Admin\AdvertController@add');
    Route::post('/admin/advert/insert', 'Admin\AdvertController@insert');
    Route::get('/admin/advert/edit/{id}', 'Admin\AdvertController@edit');
    Route::post('/admin/advert/update', 'Admin\AdvertController@update');
    Route::get('/admin/advert/delete/{id}', 'Admin\AdvertController@delete');
    Route::get('/admin/advert/index', 'Admin\AdvertController@index');
    Route::post('/admin/advert/ajaxchangename','Admin\AdvertController@ajaxChangename');

});

//后台登录
Route::match(['get','post'], '/admin/login', 'Admin\LoginController@login');
//后台登录验证码方法二
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');





//前台



