<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Crypt;
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4

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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $user = session('master');
//            dd($user);
            if ($data['password'] == Crypt::decrypt($user->password) ) {
=======
            $res = \DB::table('admin_users')->where('password', $data['password'])->first();
            if ($res) {
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
            $res = \DB::table('admin_users')->where('password', $data['password'])->first();
            if ($res) {
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
            $res = \DB::table('admin_users')->where('password', $data['password'])->first();
            if ($res) {
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4

                return redirect('/admin');
                
            }else{
                return back()->with(['info.error'=>'密码错误, 请重新登录!']);
            }
    }
}
