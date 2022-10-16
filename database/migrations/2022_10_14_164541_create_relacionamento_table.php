<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacionamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('locadora_id');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('lista_id');
            $table->timestamps();

            $table->foreign('locadora_id')->references('id')->on('locadora');
            $table->foreign('genero_id')->references('id')->on('genero');
            $table->foreign('lista_id')->references('id')->on('lista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacionamento');
    }
}
