<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

 
    //article

    public function  article(Request $request)
    {


       $data =  \DB::table('data_article')->where('user_id' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 5));


    return view('admin.article.article',[ 'data'=>$data , 'title'=>'帖子管理' ,  'request' => $request->all()]);
       
    }


    //edit
    public function edit($id)
    {
        // dd($id);

        $data =  \DB::table('data_article')->where('id', $id)->first();
        return view('admin.article.edit', [ 'data' => $data,  'title' => '帖子管理']);
    }


    //updata
    public  function update(Request $request)
    {
        
        $id = $request->input('id');
        $data = $request->except('_token', 'id');

      $res =   \DB::table('data_article')->where('id' ,$id)->update($data);
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

        $data =  \DB::table('data_article')->where('id', $id)->first();
        return view('admin.article.insert', [ 'data' => $data,  'title' => '帖子管理']);
           if($res)
      {
            return redirect('/admin/article') -> with(['info'=>'成功']);
      }else{
        return back() -> with(['info'=>'失败']);
      }

    }


    //back
    public function back()
    {

           return view('admin.article.back', [ 'data' => $data,  'title' => '帖子管理']);

    }

    //delete
    public function delete($id)
    {
        $res  =  \DB::table('data_article')->where('id', $id)-> delete();
        if($res){

            return  back();
        }
    }
    }
