<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('num');
            $table->date('date_of_birth');
            $table->string('code_postal');
            $table->string('adresse');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('admins')->insert(array('id'=>'1','user_id'=>'1','first_name'=>'myKitchen','last_name'=>'Kitchen','email'=>'my_kitchen@gmail.com','num'=>'0663208693','date_of_birth'=>'1998-09-21','code_postal' => '13000','adresse' => 'centre ville ,Tlemcen','created_at'=>new \dateTime,
            'updated_at'=>new \dateTime));

        DB::statement("ALTER TABLE `admins` ADD UNIQUE `unique_admin`(`num`, `email`)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
