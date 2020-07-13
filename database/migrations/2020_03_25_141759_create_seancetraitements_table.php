<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancetraitementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seancetraitements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('enfant_id')->references('id_enfant')->on('enfants')->onDelete('cascade');
            $table->unsignedBigInteger('traitant_id');
            $table->foreign('traitant_id')->references('id_traitant')->on('traitants')->onDelete('cascade');
            $table->Date('dateTraite');
            $table->text('duree');
            $table->text('commentaire');
            $table->String('methode');
            $table->text('description');
            $table->text('conseils');
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
        Schema::dropIfExists('seancetraitements');
    }
}
