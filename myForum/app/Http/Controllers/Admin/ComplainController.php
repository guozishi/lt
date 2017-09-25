<?php

namespace App\Http\Controllers\Admin;

use App\Models\articleicle;
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
    public function test(Request $request){

        $ajax_num = $request->num;
//        dd($ajax_num);
        $input = $request->input('keywords') ? $request->input('keywords') : '';

//        $num = $request->input('num')?$request->input('num'):5;
        $num = $ajax_num?$ajax_num:5;
//        dd($num);
        $coms = Complain::orderBy('cmpl_id')->where('cmpl_title','like','%'.$input.'%')->paginate($num);
//        dd($coms);
        return view('admin.complain.complain',['coms'=>$coms,'input'=>$input,'num'=>$num,'title'=>'后台管理','title_cld'=>'举报管理']);

//        echo $request->num;
//        echo 'ajax成功!';
    }

    public function index(Request $request)
    {
        $data = [


        ];
        $ajax_num = $request->num;
//        dd($ajax_num);
        $input = $request->input('keywords') ? $request->input('keywords') : '';

//        $num = $request->input('num')?$request->input('num'):5;
        $num = $ajax_num?$ajax_num:5;
//        dd($num);
        $coms = Complain::orderBy('cmpl_id')->where('cmpl_title','like','%'.$input.'%')->paginate($num);
//        dd($coms);
        return view('admin.complain.complain',['coms'=>$coms,'input'=>$input,'num'=>$num,'title'=>'后台管理','title_cld'=>'举报管理']);

        return index();
    }
    //文章删除
    public function del($article_id){

        $article = articleicle::find($article_id);

        if(!$article || $article==null){
            $data = [
                'state'=>2,
                'msg'=>'该文章已被作者删除或已处理!'
            ];
        }else{
            //执行删除
            $res1 = $article->delete();
//
//            //修改状态
            $cmpl = Complain::where('article_id','=',$article_id)->get()[0];

            //获取举报人的邮箱地址:
            $cmpl_id = $cmpl['user_id'];
            $email_cmpl_user = User::find($cmpl_id)['email'];
//
            $res2 = $cmpl->update(['cmpl_status'=>'已处理']);

            $article = articleicle::find($article_id);
            //获取作者的邮箱地址:
            $user = $article['user_id'];
            $user = User::find($user);
            $email_user = $user['email'];
//            dd($email_user);
            if($email_user){
//           给作者发送邮件
            $name = '被举报者(作者)';
            $flag1 = Mail::send('admin.complain.send',['name'=>$name],function($message){
                $to = '1147295446@qq.com';
                $message ->to($to)->subject('啦啦啦啦');
            });
            }
//
        if($email_cmpl_user){
            //给举报人发送邮件
            $name = '举报者';
            $flag2 = Mail::send('admin.complain.send2',['name'=>$name],function($message){
                $to = '1147295446@qq.com';
                $message ->to($to)->subject('啦啦啦啦');
            });
        }
//

            if($res1 && $res2 ){
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
//
    }

    public function sendBack(Request $request,$cmpl_id)
    {
        //增加负投诉星级
        $user_id = Complain::find($cmpl_id)['user_id'];
//        dd($user_id);
        $user = User::find($user_id);
        $credit = $user['credit'] + 1;
//        dd($user);
        $res1 = $user->update(['credit'=>$credit]);
//        dd($res);
        //修改状态
        $cmpl = Complain::find($cmpl_id)->get()[0];
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

        if($res1 && $res2){
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
