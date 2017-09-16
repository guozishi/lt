<?php
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
    Route::post('/admin/cmplain/del/{user_id}','Admin\ComplainController@del');
    Route::get('/admin/complain/detail','Admin\ComplainController@detail');
    Route::post('/admin/complain/sendBack/{user_id}','Admin\ComplainController@sendBack');
});

//----------------------前台----------------------------
    Route::get('home/article','Home\ArticleController@index');//(模拟)
    Route::get('home/complain','Home\ArticleController@Complain');//(模拟)
    Route::post('home/docomplain','Home\ComplainController@doComplain');//(模拟)
//    Route::get('mail/send','Admin\MailController@send');


