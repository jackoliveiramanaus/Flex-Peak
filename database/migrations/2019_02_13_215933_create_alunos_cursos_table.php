<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos_cursos', function (Blueprint $table) {
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('aluno');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos_cursos');
    }
}
