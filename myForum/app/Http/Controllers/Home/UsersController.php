<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //users
    public function users($id = 1)
    {

        $user_id = session('master')->id;

        $img = User::where('login_id',$user_id)->first();
      

        $data = \DB::table('user_login')->where("name",$id);
        // dd($data);
         return view('home.users.users' , ['data'=>$data,'img'=>$img,'title'=>'个人中心']);
    }


}
