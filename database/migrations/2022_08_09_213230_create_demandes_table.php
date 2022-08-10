<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('nomDemande');
            $table->string('type');
            $table->string('etat');
            $table->date('dateDemande');
            $table->date('dateCloture');
            $table->bigInteger('taux');
            $table->integer('droix_simple');
            $table->integer('droix_complementaire');
            $table->integer('penalite_droix_simple');
            $table->integer('penalite_droix_complementaire');
            $table->string('vol');
            $table->integer('case');
            $table->integer('F');
            $table->integer('numero_bordereau');
            $table->string('somme_recu');
            $table->boolean('isDeleted')->default(false);
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
        Schema::dropIfExists('demandes');
    }
}
