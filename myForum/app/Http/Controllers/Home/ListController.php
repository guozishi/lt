<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Login;
use App\Models\User;
use App\Models\Users;
use App\Models\Web;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //list
      public function lists(Request $request)
    {
//        $user = Login::with('article')->get()->toArray();
          $art = Article::get();
          $web = Web::get();
          foreach($art as $k => $v)
          {
              $art[$k]['user_name'] = Article::find($v['article_id'])->login->name;
//              $aa = Article::find($v['article_id'])->login;
//              dd($aa);
          }
//        dd($articles);
//        $art = [];
//        foreach ($user as  $v){
////            $art[] = $v;
////            dd($v['name']);
////            dd($v);
//            foreach($v['article'] as $vv){
////                dd($vv['title']);
//                $art[] = $vv;
//            }
//        }
//        dd($art);
          if (!empty( $user_id = session('master')->id)) {

              $img = User::where('login_id',$user_id)->first();
          }


       $data =  \DB::table('data_article')->where('login_id' , 'like' , '%' . $request->input(''). '%')->paginate($request->input('num', 5));

   	 return view('home.list.list',['title'=>'列表页' ,  'request' => $request->all()],compact('art','data','web','img'));
    }
}