<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断是否登录
        if (!($request->session()->has('master'))) {

            return redirect('/admin/login')->with(['info.error'=>'你好, 请登录!']);
        }
        return $next($request);
    }
}
