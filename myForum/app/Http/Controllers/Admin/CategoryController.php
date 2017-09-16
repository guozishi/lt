<?php

namespace App\Http\Controllers\Admin;

use App\Model\cate;
use App\Services\OSS;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = cate::get();

        return view('admin.category.index',['cate'=>$cate,'title'=>'后台管理','title_cld'=>'举报管理']);
    }

    public function create()
    {
        return view('admin.category.add',['title'=>'分类管理']);

    }
    //用来处理上传的图片的方法
    public function upload()
    {
        //获取上传的文件对象
        $file = Input::file('file_upload');
        //判断文件是否有效

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            //返回文件的路径

//            OSS::upload($newName,$file->getRealPath()); // 上传一个文件
            return  $filepath;
        }
    }
    public function store(Request $request)
    {
        $cate = $request->except('_token','file_upload');

        $res = cate::insert(['cate_name'=>$cate]);
        if($res){
            return redirect('/admin/category');
        }else{
            return back();
        }

    }
    public function show($id)
    {

    }

    public function edit($id)
    {
        $cate = cate::find($id);
//        dd($cate);
        return view('admin.category.edit',['cate'=>$cate,'title'=>'分类管理']);
    }

    public function update(Request $request, $id)
    {
        //要修改的
        $upcate = $request->except('_token','_method');
//        $res = cate::updated($cate);
//        dd($cate);
        //数据库查到的
        $cate = cate::find($id);
        $res[]= $cate->cate_title = $upcate['cate_title'];
        $res[]= $cate->art_thumb = $upcate['art_thumb'];
        $cate->save();

        if($res){
            return redirect('admin/category');
        }else{
            return back()->with(['info'=>'修改异常']);
        }
    }

    public function destroy($id)
    {
        $cate = cate::find($id);
        $res = $cate->delete();
        if($res){
            $data = [
                'state'=>0,
                'msg'=>'删除成功'
                ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'删除失败'
            ];
        }

        return $data;

    }
}
