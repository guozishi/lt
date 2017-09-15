<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public  function  comment(Request $request)
{   

    $data =  \DB::table('data_comment')->where('title' , 'like' , '%' . $request->input('keywords'). '%')->paginate($request->input('num', 5));


    return view('admin.comment.comment',[ 'data'=>$data , 'title'=>'帖子管理' ,  'request' => $request->all()]);
       

} 
//insert
    public function insert($id)
    {
        // dd($id);

        $data =  \DB::table('data_comment')->where('comment_id', $id)->first();
        return view('admin.comment.insert', [ 'data' => $data,  'title' => '帖子管理']);


    } 
   public function insert1($id)
    {
        // dd($id);

        $data =  \DB::table('data_comment')->where('comment_id', $id)->first();
        return view('admin.comment.insert1', [ 'data' => $data,  'title' => '评论管理']);


    } 
       public function insert2($id)
    {
        // dd($id);

        $data =  \DB::table('data_comment')->where('comment_id', $id)->first();
        return view('admin.comment.insert2', [ 'data' => $data,  'title' => '评论管理']);

    } 

    //delete
    public function delete($id)
    {
        $res  =  \DB::table('data_comment')->where('comment_id', $id)-> delete();
        if($res){

            return  back();
        }
    }

}

