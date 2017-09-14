<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

//use App\Org\code\Code;
//require_once app_path()."/Org/code/Code.class.php";

class LoginController extends Controller
{
   //login
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {

            $cookie = $request->cookie('remember_token');
            if ($cookie) {

                $res1 = \DB::table('admin_users')->where('remember_token', $cookie)->first();

                session(['master'=>$res1]);

                return redirect('/admin')->with(['info.success'=>'登录成功!']);
            }

             $data = $request->all();

            // dd($data);
        	//表单验证
        	$this->validate($request,[
        		'name' =>'required|max:10|min:3',
        		'password' =>'required|max:18|min:4',
                'code' =>'required',
        		],[

        		'name.required' => '用户名不能为空',
        		'name.max' => '用户名最大不能超过10位',
        		'name.min' => '用户名最少不能小于3位',
        		'password.required' => '密码不能为空',
        		'password.max' => '密码最大不能超过18位',
        		'password.min' => '密码最少不能小于4位',
                'code.required' =>'验证码不能为空',
        		]);

	        	//判断用户名是正确
	        	$res = \DB::table('admin_users')->where('name', $data['name'])->first();
	        	if (!$res) {

                                  $request->flash();
	        		return back()->with(['info.error'=>'管理员不存在或密码错误']);
	        	}

	        	//密码验证
			if ($data['password'] != Crypt::decrypt($res->password)) {

				return back()->with(['info.error'=>'管理员不存在或密码错误!']);
			}

                        //存储登录信息
                        session(['master'=>$res]);

                        //存储cookie
                        if ($request->has('rem')) {
                            \Cookie::queue('remember_token', $res->remember_token, 1);
                        }
            //判断验证码
            if (session('code') != $data['code']) {
                            return back()->with(['info.error'=>'验证码错误,请重新输入!']);
            }
	        	//验证通过 登录后台
	        	return redirect('/admin');

        }else{

            return view('admin.login.login');
        }

    }

    //logout
    public function logout(Request $request)
    {

        //清楚数据
        $request->session()->forget('master');
        // \Session::forget('master');
        return redirect('/admin/login')->with(['info.success'=>'退出成功!']);
    }

   //生成验证码
//    public function code()
//    {
//        $code = new Code();
//       return  $code->make();
//    }
    // 验证码生成
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
}




