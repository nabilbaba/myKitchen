<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFkToRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recettes', function (Blueprint $table) {
             $table->foreign('cuisinier_id')->references('id')->on('cuisiniers');
             $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recettes', function (Blueprint $table) {
            $table->dropForeign('cuisiniers_cuisinier_id_foreign');
            $table->dropForeign(['cuisinier_id']);
            $table->dropForeign('categories_categorie_id_foreign');
            $table->dropForeign(['categorie_id']);
        });
    }
}
