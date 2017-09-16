<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users_login';

    public $primaryKey = 'user_id';

    public $guarded = [];

    public $timestamps = false;
}
