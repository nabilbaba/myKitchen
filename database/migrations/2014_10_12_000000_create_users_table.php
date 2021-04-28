<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('num');
            $table->string('email');
            $table->enum('type_compte', ['a','c']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `users` ADD UNIQUE `unique_user`(`num`, `email`, `type_compte`)");

        DB::table('users')->insert(array('id'=>'1','email'=>'my_kitchen@gmail.com','num'=>'0663208693','type_compte'=>'a','password'=>Hash::make('0123456789'),'created_at'=>new \dateTime,
            'updated_at'=>new \dateTime));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
