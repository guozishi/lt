<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;

class RegisterController extends Controller
{


    public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }

    //注册用户
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            $input = $request->all();

            $phone = '17614809761';
            $name = '兄弟连';
            $number = rand(1000,9999);
            $smsParms = [
                'number' =>"$number",
            ];
            $content = json_encode($smsParms);
//            dd($content);
            $code  = 'SMS_75835101';
//            dd($input);
            $result = $this->sms->send("$phone","$name","$content","$code");
        } else {
            return view('home.register.register');
        }
    }
}


