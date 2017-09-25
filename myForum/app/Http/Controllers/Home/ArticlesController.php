<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function  articles(Request $request)
    {


       $data =  \DB::table('data_article')->where('login_id' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 3));


    return view('home.articles.articles',[ 'data'=>$data , 'title'=>'个人中心']);
       
    }


}
