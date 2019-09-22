<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userName');
            $table->string('age');
            $table->date('examDate');
            $table->integer('Atotal');
            $table->integer('Btotal');
            $table->integer('Ctotal');
            $table->integer('Dtotal');
            $table->integer('AB');
            $table->integer('CD');
            $table->integer('AD');
            $table->integer('CB');
            $table->string('resultType');
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
        Schema::dropIfExists('results');
    }
}
