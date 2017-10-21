<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadlibWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madlib_words', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('prompt_idx');
            $table->string('submitted_word');
            $table->unsignedInteger('party_id');
            $table->foreign('party_id')->references('id')->on('parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('madlib_words');
    }
}
