<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionaItinerariosMovimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerario_movimento', function (Blueprint $table) {
            $table->integer('itinerario_id')->unsigned()->default(1);
            $table->foreign('itinerario_id')->references('id')->on('itinerarios');
            $table->integer('movimento_id')->unsigned()->default(1);
            $table->foreign('movimento_id')->references('id')->on('movimentos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerario_movimento');
    }
}
