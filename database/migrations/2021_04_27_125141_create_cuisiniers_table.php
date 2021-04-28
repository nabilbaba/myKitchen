<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuisiniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisiniers', function (Blueprint $table) {
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
        });
         DB::statement("ALTER TABLE `cuisiniers` ADD UNIQUE `unique_cuisinier`(`num`, `email`)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisiniers');
    }
}
