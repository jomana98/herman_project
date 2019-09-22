<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main__results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userName');
            $table->string('age');
            $table->date('examDate');
            $table->integer('Atotal');
            $table->integer('Btotal');
            $table->integer('Ctotal');
            $table->integer('Dtotal');
            $table->integer('Arate');
            $table->integer('Brate');
            $table->integer('Crate');
            $table->integer('Drate');
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
        Schema::dropIfExists('main__results');
    }
}
