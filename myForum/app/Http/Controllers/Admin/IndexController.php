<?php

namespace App\Http\Controllers\Admin;


use App\Models\Index;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\Cloner\Data;

class IndexController extends Controller
{
    //index
    public function index()
    {
        return view('admin.index.index',['title'=>'后台主页']);
    }

    //pass
    public function pass()
    {
        return view('admin.index.repass',['title'=>'密码修改']);
    }

    //repass
    public function repass(Request $request){

        $input  = $request->except('_token');
//        dd($input);


        $user =Index::find(session('master')->id);
//        dd($pass);

        if ($input['repassword'] != Crypt::decrypt($user->password)) {

            return back()->with(['info.error'=>'与原密码不符请重新输入']);
        }

        if ($input['password'] != $input['conpassword']) {
            return back()->with(['info.error'=>'两次密码不同请重新输入']);
        }

        $user->password = Crypt::encrypt($input['password']);

        $res = $user->save();

        if ($res) {
            return redirect('admin/login')->with(['info.success'=>'修改成功']);
        }else{
            return back()->with(['info.error'=>'修改失败,请重新修改']);
        }

    }
}
