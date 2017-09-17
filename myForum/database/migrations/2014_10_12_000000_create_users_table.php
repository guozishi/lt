<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->string('password', 60);
=======
<<<<<<< HEAD
            $table->string('password', 60);
=======
            $table->string('password');
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
>>>>>>> 2ab4f8e66229138dec3d67878ecb7f9dec6dec39
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
