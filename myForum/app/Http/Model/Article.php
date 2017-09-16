<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table =  'data_article';
    public $primaryKey = 'art_id';
    public $guarded = [];
    public $timestamps = false;
}
