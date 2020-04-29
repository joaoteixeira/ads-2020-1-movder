<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionaMovimentosVistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimento_vistoria', function (Blueprint $table) {
            $table->integer('movimento_id')->unsigned()->default(1);
            $table->foreign('movimento_id')->references('id')->on('movimentos');
            $table->integer('vistoria_id')->unsigned()->default(1);
            $table->foreign('vistoria_id')->references('id')->on('vistorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimento_vistoria');
    }
}
