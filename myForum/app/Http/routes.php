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



    /*});*/

//帖子管理
    Route::get('/admin/article' ,'Admin\ArticleController@article');
// 删除
    Route::get('/admin/article/delete/{id}','Admin\ArticleController@delete');
//编辑
    Route::get('/admin/article/edit/{id}','Admin\ArticleController@edit');
//内容详情
    Route::get('/admin/article/insert/{id}','Admin\ArticleController@insert');
    Route::post('/admin/article/update' ,'Admin\ArticleController@update');
//返回
    Route::get('/admin/article/back' ,'Admin\ArticleController@article');



//评论管理
    Route::get('/admin/comment','Admin\Commentcontroller@comment');
//内容 评论 回复 详情路由
    Route::get('/admin/comment/insert/{id}','Admin\Commentcontroller@insert');
    Route::get('/admin/comment/insert1/{id}','Admin\Commentcontroller@insert1');
    Route::get('/admin/comment/insert2/{id}','Admin\Commentcontroller@insert2');
//返回
    Route::get('/admin/comment/back' ,'Admin\Commentcontroller@comment');
//删除
    Route::get('/admin/comment/delete/{id}','Admin\Commentcontroller@delete');

});

//后台登录
Route::match(['get','post'], '/admin/login', 'Admin\LoginController@login');
//后台登录验证码方法二
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');








//前台



