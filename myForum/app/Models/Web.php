<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    //
    public $table = 'forum_web';

    public $primaryKey = 'web_id';

    public $guarded = [];

    public $timestamps = false;
}
