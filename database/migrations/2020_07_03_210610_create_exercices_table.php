<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->bigIncrements('id_exercice');
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('enfant_id')->references('id_enfant')->on('enfants')->onDelete('cascade');
            $table->string('nomExercice')->nullable();
            $table->Date('dateExercice')->nullable();
            $table->float('score')->nullable();

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
        Schema::dropIfExists('exercices');
    }
}
