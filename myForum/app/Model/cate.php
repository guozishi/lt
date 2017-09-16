<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cate extends Model
{
    public $table = 'data_category';

    public $primaryKey = 'cate_id';

    public $guarded = [];

    public $timestamps = false;
}
