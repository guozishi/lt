<?php

namespace App\Http\Middleware;

use App\Models\Users;
use Closure;
use Symfony\Component\Routing\Annotation\Route;

class Auth
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
//        1.获取用户要访问的路由
            $route = \Route::current()->getActionName();
//            dd($route);
            $str = explode('@', $route);
//           dd($str[0]);
//        2.判断当前的路由是否在用户所拥有的权限范围的路由
        //获取当前用户的角色
        $user = session('master')->user_id;
        $roles = Users::find($user)->roles;
//        dd($roles);
        //根据角色查找所拥有的权限
        $allPre = [];  //定义数组,存储所有的权限
        foreach ($roles as $role){
            //通过模型关联,查出角色拥有的权限
            $pres = $role->auth;
            foreach ($pres as $pre){
                $allPre[] = $pre->auth_name;
            }
        }
//        dd($allPre);
        //得到去重后的权限
        $newArrPre = array_unique($allPre);
//        dd($newArrPre);


//        3.如果用户拥有此权限,通过
        if (in_array($str[0],$newArrPre)) {
            return $next($request);
        }else{
            //        4.如果没有,给拒绝页面
            return view('errors.auth');
        }
    }
}
