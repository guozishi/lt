<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WaitController extends Controller
{
     //wait
    public function wait()
    {
        return view('admin.login.wait');
    }

    public function rewait(Request $request)
    {
        $data = $request->all();

            //前端验证
            $this->validate($request,[

                'password' =>'required|max:18|min:6',

                ],[

                'password.required' => '密码不能为空',
                'password.max' => '密码最大不能超过18位',
                'password.min' => '密码最少不能小于6位',
                ]);

            $res = \DB::table('admin_users')->where('password', $data['password'])->first();
            if ($res) {

                return redirect('/admin');
                
            }else{
                return back()->with(['info.error'=>'密码错误, 请重新登录!']);
            }
    }
}
