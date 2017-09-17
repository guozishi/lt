<?php

<<<<<<< HEAD
namespace App\Model;
=======
namespace App\Models;
>>>>>>> 2ab4f8e66229138dec3d67878ecb7f9dec6dec39

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
<<<<<<< HEAD
    public $table =  'data_article';
    public $primaryKey = 'art_id';
    public $guarded = [];
    public $timestamps = false;
=======
    //连接表
    public $table = 'data_article';

    //声明主键
    public $primaryKey = 'article_id';


    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;

    public function category()
    {
//        return $this->hasOne('App\Models\Category', 'art_id', 'article_id');
        return $this->belongsTo('App\Models\Category', 'category_id', 'cate_id');
    }
>>>>>>> 2ab4f8e66229138dec3d67878ecb7f9dec6dec39
}
