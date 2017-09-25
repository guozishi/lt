<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //连接表
    public $table = 'data_comment';

    //声明主键
    public $primaryKey = 'comment_id';


    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;
}
