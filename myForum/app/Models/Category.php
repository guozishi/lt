<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //当前模型关联表
    public $table = 'data_category';

    //定义表的主键
    public $primaryKey = 'cate_id';

    //定义黑名单
    public $guarded = [];

    //关闭字段create_at update_at
    public $timestamps = false;

    //获取所有的分类数据，然后格式化
    public function tree(){
//        Cate::
//        获取所有的分类数据
        $cate = $this->orderBy('cate_orderby','asc')->get();
//        自定义一个格式化数据的方法，返回排好序而且有缩进的数据
        return  $this->getTree($cate);

    }
    //返回排好序而且有缩进的数据
    public function getTree($cate)
    {
//        定义一个空数组，接受格式化后的数据
        $arr = array();
        //先找到一级类，然后找到对应一级类下的二级类
        foreach ($cate as $k=>$v){
//            获取一级类  pid == 0
            if($v['cate_pid'] == 0){
                //            将当前遍历的这条一级类放入返回的数组中
                $cate[$k]['cate_names'] = '|--'.$cate[$k]['cate_name'];
                $arr[] = $cate[$k];

//            当前一级类下的二级类
                foreach ($cate as $m=>$n){
//                如果当前一级类的id等于 这次正在遍历的二级类的pid，说明这个二级类是当前类的二级类，将这个二级类加入$arr数组
                    if($v['cate_id'] == $n['cate_pid']){
                        $cate[$m]['cate_names'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|----'.$cate[$m]['cate_name'];
                        $arr[] = $cate[$m];
                    }
                }
            }
        }
        return $arr;
    }
}
