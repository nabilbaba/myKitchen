<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAccepteToRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recettes', function (Blueprint $table) {
            $table->boolean('accepte')->default(0)->after('niveau');
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
            dropColumn('accepte');
        });
    }
}
