<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('fiscais', 200);
            $table->string('empresa', 100);
            $table->time('hora_chegada');
            $table->time('hora_saida');
            $table->string('quant_passageiros');
            $table->timestamps();

            $table->unsignedInteger('itinerario_id');
            $table->foreign('itinerario_id')->references('id')->on('itinerarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentos');
    }
}
