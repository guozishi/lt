<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //index
      public function index(Request $request)
    {

       $data =  \DB::table('data_article')->where('user_id' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 5));

   	 return view('home.index.index',[ 'data'=>$data , 'title'=>'前台首页' ,  'request' => $request->all()]);
       
    }

//cate
    public function cate($id = 0)
    {


        $data =  \DB::table('data_article')->where('id', $id)->first();
        return view('home.index.cate', [ 'data' => $data,  'title' => '详情页']);

    }


    public function reg()
    {
      return view('home.register.register',['title'=>'前台注册']);
    }
}