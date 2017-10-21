<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMadlibToParty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parties', function($table) {
            $table->unsignedInteger('madlib_id')->nullable();
            $table->foreign('madlib_id')->references('id')->on('madlibs'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parties', function($table) {
            $table->dropColumn('madlib_id');
        });
    }
}
