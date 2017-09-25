<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users_info';

    public $primaryKey = 'id';

    public $guarded = [];

    public $timestamps = false;

//   在模型中创建一个方法(用于关联其他的模型-->可理解为:多表联查)
    public function Art(){
//        return $this->hasOne('App\Http\Model\Article', 'user_id', 'user_id');
        return $this->hasMany('App\Http\Model\Article', 'user_id', 'user_id');
    }




}
