<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesDepositaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes_depositares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_demande');
            $table->foreign('id_demande')->references('id')->on('demandes')->onUpdate('cascade');
            $table->unsignedBigInteger('id_depositaire');
            $table->foreign('id_depositaire')->references('id')->on('depositaires')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes_depositares');
    }
}
