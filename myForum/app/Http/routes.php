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
//验证码
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');
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





//前台



