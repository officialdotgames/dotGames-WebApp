<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStartedAndEndedToPartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parties', function($table){
            $table->integer('started');
            $table->integer('ended');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parties', function($table){
            $table->dropColumn('started');
            $table->dropColumn('ended');
        }); 
    }
}
