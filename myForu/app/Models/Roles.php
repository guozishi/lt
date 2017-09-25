<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    //连接表
    public $table = 'admin_roles';

    //声明主键
    public $primaryKey = 'role_id';


    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\Models\Users', 'role_user', 'role_id', 'user_id');
    }


    public function auth()
    {
        return $this->belongsToMany('App\Models\Auth', 'auth_role', 'role_id', 'auth_id');
    }
}
