<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Category;
use App\Models\Link;
use App\Models\User;
use App\Models\Web;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //index
      public function index(Request $request)
    {
        $link  = Link::orderBy('link_id','asc')->get();
//        dd($link);
        $cate = Category::get();
        $web = Web::get();

//          dd($web);
//        dd();
        foreach ($cate as $k=>$v){
//            dd($v);
            $titles = Category::find($v->cate_id)->article;
//            dd($titles);
            $arr = [];
            foreach ($titles as $kk=>$vv){
//                dd($vv->title);
//                dd($vv);
                $arr[] = $vv;
            }
//            dd($arr);
        }

//         dd($img);

       $data =  \DB::table('data_article')->where('login_id' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 5));

     return view('home.index.index',[  'title'=>'前台首页' ,  'request' => $request->all()],compact('data','cate','titles','link','web'));
       
    }
    public function reg()
    {
      return view('home.register.register',['title'=>'前台注册']);
    }
}
