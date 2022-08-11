<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes_fichiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_demande');
            $table->unsignedBigInteger('id_fichier');
            $table->foreign('id_demande')->references('id')->on('demandes')->onUpdate('cascade');
            $table->foreign('id_fichier')->references('id')->on('fichiers')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes_fichiers');
    }
}
