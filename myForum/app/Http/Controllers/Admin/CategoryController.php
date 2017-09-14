<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\Category;
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
        //index
//        $data = Category::get();
        $data = (new Category)->tree();
        return view('admin.category.index', ['title'=>'分类浏览'],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        $cates = (new Category)->tree();
        return view('admin.category.add',['title'=>'分类添加'],compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert
        //接收表单传来的数据
        $input = $request->except('_token');
        //判断表单输入是否合法
        $this->validate($request,[

            'cate_name' =>'required|max:12|min:2',
            'cate_title' =>'required|max:12|min:2',
        ],[
            'cate_name.required'=>'类型名不能为空',
            'cate_name.max'=>'类型名最大不能超过12位',
            'cate_name.min'=>'类型名最小不能低于3位',
            'cate_title.required'=>'标题名不能为空',
            'cate_title.max'=>'标题名最大不能超过12位',
            'cate_title.min'=>'标题名最小不能低于3位',
        ]);

        $res = Category::create($input);

        if ($res) {
            return redirect('/admin/category')->with(['info.success'=>'添加成功']);
        }else{
            return back()->with(['info.error'=>'添加失败!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit
        $cates = (new Category)->tree();
        $data = Category::find($id);
       return view('admin.category.edit',compact('cates','data'),['title'=>'分类更新']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update
        $input = $request->except("_token","_method");
        //判断表单输入是否合法
        $this->validate($request,[

            'cate_name' =>'required|max:12|min:2',
            'cate_title' =>'required|max:12|min:2',
        ],[
            'cate_name.required'=>'类型名不能为空',
            'cate_name.max'=>'类型名最大不能超过12位',
            'cate_name.min'=>'类型名最小不能低于3位',
            'cate_title.required'=>'标题名不能为空',
            'cate_title.max'=>'标题名最大不能超过12位',
            'cate_title.min'=>'标题名最小不能低于3位',
        ]);

        $res = Category::find($id)->update($input);

        if ($res) {
            return redirect('/admin/category')->with(['info.success'=>'更新成功']);
        }else{
            return back()->with(['info.error'=>'更新失败!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::find($id);

        $count = Category::where('cate_pid',$id)->count();

        if ($cate['cate_pid'] == 0 && $count) {
            $data = [
                'status' =>2,
                'msg' =>'该类下有子类不可删除'
            ];
            return $data;
        }
        //delete
        $res = Category::find($id)->delete();

        if ($res) {
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除成功'
            ];
        }
        return $data;
    }

    public function orderby()
    {
        $input = Input::except('_token');

        $res = Category::find($input['cate_id'])->update($input);

        if ($res) {
           $data = [
               'status' => 0,
               'msg' => '修改成功'
           ];
        }else{
            $data = [
                'status' =>1,
                'msg' =>'修改失败'
            ];
        }
        return $data;
    }
}
