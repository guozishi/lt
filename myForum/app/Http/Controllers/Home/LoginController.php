<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   public function login(Request $request)
   {
      if($request->isMethod('post'))
      {
        
          //表单验证
          $this->validate($request,[
            'name' =>'required|max:10|min:2',
              'password' =>'required|max:18|min:6',
            ],[
            'name.required'=>'请输入用户名',
            'password.required'=>'没有密码,你是闹呀?',
            'name.required' => '用户名不能为空',
              'name.max' => '用户名最大不能超过10位',
              'name.min' => '用户名最少不能小于2位',
              'password.required' => '密码不能为空',
              'password.max' => '密码最大不能超过18位',
              'password.min' => '密码最少不能小于6位',
            ]);
        
        $data = $request->except('_token');

        //登录成功
         $cookie = $request->cookie('remember_token');
            if ($cookie)
             {

                $res1 = \DB::table('user_login')->where('remember_token', $cookie)->first();

                session(['master'=>$res1]);

                return redirect('/home')->with(['info.success'=>'登录成功!']);
            }

             $data = $request->all();
             //dd($data);
              
        
        //查询数据库
        $res = \DB::table('user_login')->where("name",$data['name'])->first();

        //对用户名进行判断
        if(!$res)
        {
              $request->flash();
          return back() -> with(['info.error'=>'用户不存在或密码错误']);
        }
      
        //密码验证
      if (Md5($data['password']) != $res->password)
      {

        return back()->with(['info.error'=>'用户不存在或密码错误!']);
      }

          //存储登录信息
          session(['master'=>$res]);

          //存储cookie
          if($request->has('rem')){
            \Cookie::queue('remember_token',$res->remember_token,1);
          }

          //验证完成,跳转到首页
          return redirect('/home/index');
                  }else{
                    return view('home.login.login');
                  }     
       }




       //退出登录
        //logout
        public function logout(Request $request)
        {

            //清楚数据
            $request->session()->forget('master');
            // \Session::forget('master');
//            return redirect('/home/logout')->with(['info.success'=>'退出成功!']);
           return redirect('/home/index');
        }

        public function index()
        {
            return view('home.login.login',['title'=>'你好']);
        }

}


