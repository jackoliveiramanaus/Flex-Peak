<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_professor', function (Blueprint $table) {
            $table->integer('professor_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->primary(['professor_id','curso_id']);
            $table->foreign('professor_id')->references('id')->on('professor') ->onUpdated('cascade') ->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('curso')->onUpdated('cascade') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_professor');
    }
}

