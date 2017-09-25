<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($article_id)
    {
        //空的帖子数数组
        $count = [];

        $cate = Category::where('cate_pid','=',0)->get();
//        dd($cate);

        $article = Article::find($article_id);

        if( !empty(Session::get('id')) ){
            $res = \DB::table('users_info')->where('login_id',1)
                                    ->Where('article_id',$article['article_id'])
                                    ->get();
            if($res){
                $article['title'] = '[我的]'.$article['title'];
            }
        }

        // 个人发贴总数
        $count['login_article'] = Article::where('login_id',$article_id)->get()->count();
        //该模块帖子总数
        $category_id = $article['category_id'];
        $count['count_article'] = Article::where('category_id',$category_id)->get()->count();
//        dd($count);


            $login_id = $article['login_id'];
            $login = User::where('login_id',$login_id)->get()[0];
//            dd($login);
            $category = Category::find($article['category_id']);

//            dd($category);

//            dd($article);
//            dd($login);
        return view('/home/detail/detail',['title'=>'兄弟论坛','cate'=>$cate,'article'=>$article,'login'=>$login,'cate'=>$category,'count'=>$count]);
    }

}
