<?php

namespace App\Http\Controllers\Admin;

use App\Models\Roles;
use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    //add
    public function add()
    {
        return view('admin.user.add',['title'=>'管理员添加']);
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

      $data  = $request->except('_token', 'user_id', 'page');

      //图片上传处理
      if ($request->hasFile('img')) {
          //获取上传信息
          $file = $request->file('img');
          // 确认文件上传成功
          if ($file->isValid()) {
              //获取上传文件名的后缀名
              $ext = $file->getClientOriginalExtension();
              //执行移动上传文件
              $fileName = time().mt_rand(1000,9999).'.'.$ext;
              $file->move('./admin-uploads', $fileName);
              //修改pic数据
              $data['img'] = $fileName;
          }
      }
//        //时间添加
      $time = date('Y-m-d H:i:s', time());
      $data['created_at'] = $time;

      $data['password'] = Crypt::encrypt($data['password']);

      $res = \DB::table('admin_users')->insert($data);

        if ($res) {
            return redirect('/admin/user/xianshi')->with(['info.success'=>'添加成功']);
        }else{
            return back()->with(['info.error'=>'添加失败']);
        }



  }
  //index
  public function index(Request $request)
  {
    // $data = $request->all();
    // dd($data);
    $data = \DB::table('users_info')->where('name','like','%'.$request->input('keywords').'%')->paginate($request->input('num',5));
    // dd($data);
    return view('admin.user.index',['data'=>$data,'title'=>'用户列表','request'=>$request->all()]);
  }
  public function edit($id)
  {
    $data = \DB::table('users_info')->where("id",$id)->first();

    return view('admin.user.edit',['data'=>$data,'title'=>'管理员列表']);

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
            return redirect('/admin/user/index')->with(['info.success'=>'修改成功']);
        }else{
            return back()->with(['info.error'=>'修改失败']);
        }
  }

  public function delete($id)
  {
      $res = \DB::table('users_info')->where('id',$id)->delete();

      if ($res) {
          $data = [
              'status' =>0,
              'msg'=>'删除成功'
          ];
      }else{
          $data = [
              'status' =>1,
              'msg' =>'删除失败'
          ];
      }
      return $data;

  }


//显示管理员
 public function xianshi(Request $request)
  {
    // $data = $request->all();
    // dd($data);
    $data = \DB::table('admin_users')->where('name','like','%'.$request->input('keywords').'%')->paginate($request->input('num',5));
    // dd($data);
    return view('admin.user.xianshi',['data'=>$data,'title'=>'用户列表','request'=>$request->all()]);
  }

  public function xiugai($id)
  {

    // dd($id);
    $data = \DB::table('admin_users')->where("user_id",$id)->first();
    return view('admin.user.xiugai',['data'=>$data,'title'=>'用户列表']);

  }


  public function del($id)
  {
      $res = \DB::table('admin_users')->where('user_id',$id)->delete();
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

   public function cr(Request $request)
  {
    $this->validate($request,[

        'name' =>'required|min:3|max:9',

        ],[

        'name.required' =>'用户名不能为空',
        'name.max' =>'用户名不能超过6位',
        'name.min' =>'用户名不能少于3位',
        ]);

    $id = $request->input('user_id');

    $data = $request->except('_token','user_id');


    $res = \DB::table('admin_users')->where('user_id',$id)->update($data);

     if ($res) {
            return redirect('/admin/user/xianshi')->with(['info.success'=>'修改成功']);
        }else{
            return back()->with(['info.error'=>'修改失败']);
        }
  }

    public function roles(Request $request, $id)
    {
//        //获取用户信息
        $user_id = session('master')->user_id;
        $user = Users::find($user_id);

        //获取所有的角色
        $roles = Roles::orderBy('role_id','asc')->get();
//        dd($roles);
        //获取当用户所拥有的角色
        $curoles = \DB::table('role_user')->where('user_id',$user_id)->get();

        //遍历当前角色拥有的权限
        $arr = [];
        foreach ($curoles as $uroles){
            $arr[] = $uroles->role_id;
        }
        return view('admin.userRoles.roles',['title'=>'角色权限列表'],compact('user','roles','arr'));
    }

    public function doroles(Request $request)
    {
        $input = $request->except("_token");
//        dd($input);
        //删除当前用户的角色
        \DB::table('role_user')->where('user_id',$input['user_id'])->delete();

//            dd($input);
        //遍历选中的权限,添加到角色表中
        foreach ($input['role_id'] as $role)
        {
            \DB::table('role_user')->insert(

                ['user_id' => $input['user_id'], 'role_id' => $role]
            );
        }
        return redirect('/admin/user/xianshi')->with(['info.success'=>'添加成功']);
    }
}
