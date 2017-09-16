<?php

namespace App\Http\Controllers\Home;

use App\Model\Complain;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComplainController extends Controller
{
    public function doComplain(Request $request)
    {

        $com = $request->except('_token');
//        dd($com);
        $res = Complain::create($com);
        if($res){
            return redirect('/home/article')->with(['info'=>'举报成功!']);
         }else{
            return '举报异常';
        }




    }
}
