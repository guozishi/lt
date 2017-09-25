<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function update(Request $request)
    {   

         if($request->isMethod('post'))
      {

         //表单验证
          $this->validate($request,[
              'tel' =>'max:11|min:11',
              'email'=>'regex:(^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$)',
            ],[
              'tel.max' => '手机号码必须为11位',
              'tel.min' => '手机号码必须为11位',
              'email.regex'=>'邮箱格式不正确,请重新输入',
            ]);
     
        
        
       //接受输入的所有数据
        $num = $request->all();
        
        $num = $request->except('_token');
        //update
            $name = session('master')->name;
       
             $data = \DB::table('users_info')->where("name","=",session('master')->name)->first();

            // $data =  \DB::table('users_info')->where('name',"=",session('master')->name)->update($num);

            return view('/home/update');

           
         }

    }
        public function homepage(Request $request){
        return view('home.homepage.homepage');
    }
}