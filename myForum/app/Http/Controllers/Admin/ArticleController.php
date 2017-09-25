<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //
//        $cate = Article::find(6)->category;
//        $art = Category::find(14)->article;
//        dd($art);

//        $cate =Category::find(31)->article;
//        dd($cate);

//            $data = Article::find(1)->category;
//            dd($data);
//        $data = Users::find(1)->roles;
//        dd($data);
//        $arr = [];
//        foreach ($data as $v)
//        {
//            $arr[] = $v->role_name;
//        }
//        dd($arr);
    }

 
    //article

    public function  article(Request $request)
    {


       $data =  \DB::table('data_article')->where('login_id' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 5));


    return view('admin.article.article',[ 'data'=>$data , 'title'=>'帖子管理' ,  'request' => $request->all()]);
       
    }


    //edit
    public function edit($id)
    {
        // dd($id);

        $data =  \DB::table('data_article')->where('article_id', $id)->first();
        return view('admin.article.edit', [ 'data' => $data,  'title' => '帖子管理']);
    }


    //updata
    public  function update(Request $request)
    {
        
        $id = $request->input('article_id');
        $data = $request->except('_token', 'article_id');

      $res =   \DB::table('data_article')->where('article_id' ,$id)->update($data);
      if($res)
      {
            return redirect('/admin/article') -> with(['info'=>'编辑成功']);
      }else{
        return back() -> with(['info'=>'编辑失败']);
      }

    }

//insert
    public function insert($id)
    {
        // dd($id);

        $data =  \DB::table('data_article')->where('article_id', $id)->first();
        return view('admin.article.insert', [ 'data' => $data,  'title' => '帖子管理']);
        if($data)
        {
            return redirect('/admin/article') -> with(['info'=>'成功']);
        }else{
            return back() -> with(['info'=>'失败']);
        }
    }


    //delete
    public function delete($id)
    {
        $res  =  \DB::table('data_article')->where('article_id', $id)-> delete();
        if($res){

            return  back();
        }
    }
    }
