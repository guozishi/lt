<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //add
    public function add()
    {
        return view('admin.user.add');
    }
  // insert
  public function insert(Request $request)
  {
    
   //表单验证
        $this->validate($request,[

            'name' =>'required|min:3|max:9',
            'password' =>'required',

            ],[

            'name.required' =>'用户名不能为空',
            'name.max' =>'用户名不能超过6位',
            'name.min' =>'用户名不能少与三位',
            'name.unique' =>'用户名已存在',
            'password.required' =>'密码不能为空',
            ]);
        $id = $request->input('id');
        //去掉提交验证和确认密码  不让其写入数据库
        
        $data  = $request->except('_token', 'id', 'page');

        $res = \DB::table('admin_users')->insert($data);

        if ($res) {
            return redirect('/admin/user/index')->with(['info'=>'添加成功']);
        }else{
            return back()->with(['info'=>'添加失败']); 
        }



  }
  //index
  public function index(Request $request)
  {
    // $data = $request->all();
    // dd($data);
    $data = \DB::table('users_info')->where('name','like','%'.$request->input('keywords').'%')->paginate($request->input('num',3));
    // dd($data);
    return view('admin.user.index',['data'=>$data,'title'=>'用户列表','request'=>$request->all()]);
  }
  public function edit($id)
  {
    $data = \DB::table('users_info')->where("id",$id)->first();
    return view('admin.user.edit',['data'=>$data]);

  }
  public function update(Request $request)
  {
    $this->validate($request,[

        'name' =>'required|min:3|max:9',

        ],[

        'name.required' =>'用户名不能为空',
        'name.max' =>'用户名不能超过6位',
        'name.min' =>'用户名不能少于3位',
        ]);

    $id = $request->input('id');
    
    $data = $request->except('_token','id');

    $res = \DB::table('users_info')->where('id',$id)->update($data);

     if ($res) {
            return redirect('/admin/user/index')->with(['info'=>'修改成功']);
        }else{
            return back()->with(['info'=>'修改失败']); 
        }
  }

  public function delete($id)
  {
      $res = \DB::table('users_info')->where('id',$id)->delete();
       if ($res) {
            return redirect('/admin/user/index')->with(['info'=>'删除成功']);
        }else{
            return back()->with(['info'=>'删除失败']); 
        }
  }
}
