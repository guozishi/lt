<?php
<<<<<<< HEAD
//----------------------后台----------------------------
//登录
Route::match(['get', 'post'], '/admin/login', 'Admin\LoginController@login');
Route::group(['middleware'=>'al'], function() {
    //===================后台登录========================
    Route::get('/admin', 'Admin\IndexController@index');
    Route::get('/admin/logout', 'Admin\LoginController@logout');
//挂起/解除挂起
    Route::get('/admin/wait', 'Admin\WaitController@wait');
    Route::post('/admin/rewait', 'Admin\WaitController@rewait');
//========================帖子=============================
    Route::get('/admin/article', 'Admin\ArticleController@article');
    Route::get('/admin/article/add', 'Admin\ArticleController@add');
    Route::post('/admin/article/insert', 'Admin\ArticleController@insert');

//========================分类=============================
//后台添加分类
    Route::resource('/admin/category', 'Admin\CategoryController');
    Route::post('/admin/csategory/upload', 'Admin\CategoryController@upload');
//    Route::post('/admin/category/upload', 'Admin\LoginController@upload');
//========================举报=============================
    Route::get('/admin/complain', 'Admin\ComplainController@index');
//    Route::get('/admin/docmpl', 'Admin\ComplainController@docmpl');
    Route::post('/admin/cmplain/del/{user_id}','Admin\ComplainController@del');
    Route::get('/admin/complain/detail','Admin\ComplainController@detail');
    Route::post('/admin/complain/sendBack/{user_id}','Admin\ComplainController@sendBack');
});

//----------------------前台----------------------------
    Route::get('home/article','Home\ArticleController@index');//(模拟)
    Route::get('home/complain','Home\ArticleController@Complain');//(模拟)
    Route::post('home/docomplain','Home\ComplainController@doComplain');//(模拟)
//    Route::get('mail/send','Admin\MailController@send');
=======

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

//后台网站配置
Route::resource('admin/config','Admin\ConfigController');


//角色管理
Route::resource('admin/roles','Admin\RolesController');

//后台网站配置排序处理
Route::post('/admin/conf/order','Admin\ConfigController@order');

//配置项修改 update
Route::post('admin/config/updateContent','Admin\ConfigController@updateContent');
Route::get('admin/putfile','Admin\ConfigController@putFile');


    Route::get('/admin/abc' ,'Admin\ArticleController@index');

// 广告管理 advert
    Route::get('/admin/advert/add', 'Admin\AdvertController@add');
    Route::post('/admin/advert/insert', 'Admin\AdvertController@insert');
    Route::get('/admin/advert/edit/{id}', 'Admin\AdvertController@edit');
    Route::post('/admin/advert/update', 'Admin\AdvertController@update');
    Route::get('/admin/advert/delete/{id}', 'Admin\AdvertController@delete');
    Route::get('/admin/advert/index', 'Admin\AdvertController@index');
    Route::post('/admin/advert/ajaxchangename','Admin\AdvertController@ajaxChangename');



// 后台管理员模块
    Route::get('/admin/user/add','Admin\UserController@add');
    Route::get('/admin/user/add','Admin\UserController@add');
    Route::post('/admin/user/insert','Admin\UserController@insert');
    Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
    Route::post('/admin/user/update','Admin\UserController@update');
    Route::delete('/admin/user/delete/{id}','Admin\UserController@delete');
    Route::get('/admin/user/index','Admin\UserController@index');



    //前台用户管理
    Route::get('/admin/user/xianshi','Admin\UserController@xianshi');
    Route::get('/admin/user/xiugai/{id}','Admin\UserController@xiugai');
    Route::delete('/admin/user/del/{id}','Admin\UserController@del');
    Route::post('/admin/user/cr','Admin\UserController@cr');


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

>>>>>>> 2ab4f8e66229138dec3d67878ecb7f9dec6dec39


