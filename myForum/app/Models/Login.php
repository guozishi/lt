<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //user_login
    //连接表
    public $table = 'user_login';

    //声明主键
    public $primaryKey = 'id';


    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;

    public function article()
    {
        return $this->hasMany('App\Models\Article','login_id','id');

    }
}
