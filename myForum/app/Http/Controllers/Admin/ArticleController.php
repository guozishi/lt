<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function  add(Request $request)
    {

        return view('admin.article.add',[  'title'=>'帖子管理']);

    }
    public function  insert(Request $request)
    {
//        $pic = $request->all();

        $file = $request->file("pic");
        dd($file);
        return view('admin.article.add',['title'=>'帖子管理']);
    }

    public function  article()
    {
        $data =  \DB::table('data_article')->paginate(3);

        return view('admin.article.article',['data'=>$data , 'title'=>'帖子管理']);

    }
    //delete
    public function delete($id)
    {
        $res  =  \DB::table('data_article')->where('id', $id)-> delete();
        if($res)
        {
            return back();
        }
    }
}
