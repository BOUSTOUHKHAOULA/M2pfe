<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitants', function (Blueprint $table) {
            $table->bigIncrements('id_traitant');
            $table->string('prenom');
            $table->string('nom');
            $table->Date('dateNaissance');
            $table->string('motpass');
            $table->string('email')->unique();
            $table->string('numTel');
            $table->string('address');
            $table->string('specialiste');
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
        Schema::dropIfExists('traitants');
    }
}
