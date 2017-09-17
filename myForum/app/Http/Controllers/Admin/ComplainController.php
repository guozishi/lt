<?php

namespace App\Http\Controllers\Admin;

use App\Models\article;
use App\Models\Complain;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class ComplainController extends Controller
{
    //举报的文章详情
//    public  function docmpl(){
//        return view('admin.complain.detail',['title'=>'后台管理','title_cld'=>'举报管理']);
//    }
    public function detail(){
        return view('admin.complain.detail',['title'=>'后台管理','title_cld'=>'举报管理']);
    }

    public function index(Request $request)
    {
//       $coms = Complain::paginate(5);
//        $where = $request->input('keywords')?$re  quest->input('keywords') : '';
//        dd($where);
//        return view('admin.complain.complain',['title'=>'后台管理','title_cld'=>'举报管理']);
        $input = $request->input('keywords') ? $request->input('keywords') : '';

        $num = $request->input('num')?$request->input('num'):5;

        $coms = Complain::orderBy('cmpl_id')->where('cmpl_title','like','%'.$input.'%')->paginate($num);
//        dd($coms);
        return view('   admin.complain.complain',['coms'=>$coms,'input'=>$input,'num'=>$num,'title'=>'后台管理','title_cld'=>'举报管理']);


    }

    //文章删除
    public function del(Request $request,$user_id){
        $art_id = $request->except('_token');
        $art_id = $art_id['art_id'];

        $art = Article::find($art_id);

        if(!$art || $art==null){
            $data = [
                'state'=>2,
                'msg'=>'该文章已被作者删除或已处理!'
            ];
        }else{
            //执行删除
            $res1 = $art->delete();
            //修改状态
            $cmpl = Complain::where('art_id','=',$art_id)->get()[0];

            $res2 = $cmpl->update(['cmpl_status'=>'已处理']);

            //给作者发送邮件
            $name = '被举报者(作者)';
            $flag1 = Mail::send('admin.complain.send',['name'=>$name],function($message){
                $to = '1147295446@qq.com';
                $message ->to($to)->subject('啦啦啦啦');
            });

            //给举报人发送邮件
            $name = '举报者';
            $flag2 = Mail::send('admin.complain.send2',['name'=>$name],function($message){
                $to = '1131601933@qq.com';
                $message ->to($to)->subject('啦啦啦啦');
            });
            if($res1 && $res2 && $flag1 && $flag2){
                $data = [
                    'state'=>0,
                    'msg'=>'<b>删除成功</b><br>邮件已发送'
                ];
            }else{
                $data = [
                    'state'=>1,
                    'msg'=>'删除失败'
                ];
            }
        }
        return $data;

    }

    public function sendBack(Request $request,$user_id)
    {
        $art_id = $request->except('_token');
//        dd($art_id);
        //增加负投诉星级
        $user = User::find($user_id);
        $credit = $user->credit;
        $credit += 1;
        $res = $user->update(['credit'=>$credit]);
//        dd($res);
        //修改状态
        $cmpl = Complain::where('art_id','=',$art_id)->get()[0];
//        dd($cmpl);
        $res2 = $cmpl->update(['cmpl_status'=>'已处理']);

        //给举报人发送邮件
        if($credit>5){
            $name = '举报者';
            $flag2 = Mail::send('admin.complain.send2',['name'=>$name],function($message){
                $to = '317390325@qq.com';
                $message ->to($to)->subject('啦啦啦啦');
            });
        }

        if($res && $res2){
            $data = [
                'state'=>0,
                'msg'=>'退回成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'退回异常'
            ];
        }
        return $data;

    }

}
