<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFkRecetteIdToCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->foreign('recette_id')->references('id')->on('recettes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign('recettes_recette_id_foreign');
            $table->dropForeign(['recette_id']);
        });
    }
}
