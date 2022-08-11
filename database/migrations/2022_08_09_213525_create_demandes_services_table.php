<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_demande');
            $table->foreign('id_demande')->references('id')->on('demandes')->onUpdate('cascade');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services')->onUpdate('cascade');
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
        Schema::dropIfExists('demandes_services');
    }
}
