<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    //连接表
    public $table = 'admin_auth';

    //声明主键
    public $primaryKey = 'auth_id';


    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles', 'role_user', 'user_id', 'role_id');
    }
}
