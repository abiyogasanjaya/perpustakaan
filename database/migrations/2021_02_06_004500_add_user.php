<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(
            array(
                'name' => 'Abiyoga Sanjaya',
                'email' => 'coba@gmail.com',
                'password' => md5('admin_123_!'),
                'remember_token' => md5(date('Y-m-d H:i:s').rand(1000,9999)),
                'level_user' => 1,
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Kharis',
                'email' => 'kharis@gmail.com',
                'password' => md5('admin_123_!'),
                'remember_token' => md5(date('Y-m-d H:i:s').rand(1000,9999)),
                'level_user' => 1,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}