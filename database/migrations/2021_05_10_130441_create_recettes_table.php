<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('etapes');
            $table->unsignedBigInteger('cuisinier_id');
            $table->unsignedBigInteger('categorie_id');
            $table->string('temps_de_preparation');
            $table->string('temps_de_cuisson');
            $table->string('niveau');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recettes');
    }
}
