<?php

namespace App\Http\Controllers\Admin;

use App\Models\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //index
//        echo 111;
        //条件查询
        $input = $request->input('keywords') ?  $request->input('keywords') : '';

        $data = Link::orderBy('id', 'asc')->where('name', 'like', '%'.$input.'%')->paginate($request->input('num',5));
//        $data = Link::paginate(5);

        return view('admin.link.index',['title'=>'链接浏览','request'=>$request->all()],compact('data','input'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.link.add',['title'=>'链接添加']);
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
        $input = $request->except('_token');
//        $file = $request->file('image');
//        $data = $file->getClientOriginalName();
//        dd($data);
        //判断表单输入是否合法
        $this->validate($request,[

            'name' =>'required|max:12',
            'type' =>'required',
            'touch' =>'required|string',
            'image' =>'image',
        ],[
            'name.required'=>'链接名不能为空',
            'name.max'=>'链接名最大不能超过12位',
            'type.required'=>'类型不能为空',
            'url.url' => '请输入正确的网址',
            'touch.required'=>'网站联系人不能为空',
            'touch.string'=>'请输入正确的联系人名称',
            'image.image'=>'请上传正确的图片格式',
        ]);

        //图片上传处理
        if ($request->hasFile('image')) {
            //获取上传信息
            $file = $request->file('image');
            // 确认文件上传成功
            if ($file->isValid()) {
                //获取上传文件名的后缀名
                $ext = $file->getClientOriginalExtension();
                //执行移动上传文件
                $fileName = time().mt_rand(1000,9999).'.'.$ext;
                $file->move('./uploads', $fileName);

                //图片处理
                $img = Image::make( "./uploads/".$fileName)->resize(50,60);
                //另存为
                $img->save("./uploads/s_".$fileName);

                $newFileName = $img->basename;

                //修改pic数据
                $input['image'] = $newFileName;
            }
        }


       //时间添加
        $time = date('Y-m-d H:i:s', time());
        $input['created_at'] = $time;

        $res =Link::create($input);
        if ($res) {
            return redirect('/admin/link')->with(['info.success'=>'添加成功']);
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
        $data = Link::find($id);
        return view('admin.link.edit',['title'=>'链接更新'],compact('data'));
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
        $input = $request->except('_token','_method');
//        dd($input);
        //判断表单输入是否合法
        $this->validate($request,[

            'name' =>'required|max:12',
            'type' =>'required',
            'touch' =>'required|string',
            'image' =>'image',

        ],[
            'name.required'=>'链接名不能为空',
            'name.max'=>'链接名最大不能超过12位',
            'type.required'=>'类型不能为空',
            'touch.required'=>'网站联系人不能为空',
            'touch.string'=>'请输入正确的联系人名称',
            'image.image'=>'请上传正确的图片格式',
        ]);

        //图片上传处理
        if ($request->hasFile('image')) {
            //获取上传信息
            $file = $request->file('image');
            // 确认文件上传成功
            if ($file->isValid()) {
                //获取上传文件名的后缀名
                $ext = $file->getClientOriginalExtension();
                //执行移动上传文件
                $fileName = time().mt_rand(1000,9999).'.'.$ext;
                $file->move('./admin-uploads', $fileName);
                //修改pic数据
                $data['image'] = $fileName;
            }
        }
//        //时间添加
        $time = date('Y-m-d H:i:s', time());
        $input['created_at'] = $time;
//
//        $data = Link::find($id);
//        $res = $data->update($input);

        $res = Link::find($id)->update($input);

        if ($res) {
            return redirect('/admin/link')->with(['info.success'=>'更新成功']);
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
        //delete
        $res = Link::find($id)->delete();
        if ($res) {
            $data = [
                'status' => 0,
                'msg' => '删除成功'
            ];
        }else{
           $data = [
               'status' => 1,
               'msg' => '删除失败'
           ];
        }
        return $data;
    }

}
