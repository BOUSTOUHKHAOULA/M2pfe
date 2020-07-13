<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->bigIncrements('id_enfant');
            $table->string('nom');
            $table->string('prenom');
            $table->Date('dateNaissance');
            $table->string('lieuNaissannce');
            $table->string('sexe');
            $table->string('groupage');
            $table->string('wilaya');
            $table->string('commune');
            $table->string('domicile');
            $table->string('image');
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
        Schema::dropIfExists('enfants');
    }
}
