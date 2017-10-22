<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadlibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madlibs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title');
            $table->integer('num_prompts');
            $table->longtext('json');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('madlibs');
    }
}
