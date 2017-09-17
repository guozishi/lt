<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    //三要素
    //定义关联的表名
    public $table = 'complain';

    //定义该表中的主键
    public $primaryKey = 'cmpl_id';

    //定义不可操作的字段(黑名单)--->空表示均可操作
    public $guarded = [];

    //定义自维护状态(此处为关闭状态)
//    public $timestamps = false;

}
