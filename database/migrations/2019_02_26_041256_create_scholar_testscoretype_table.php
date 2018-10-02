<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarTestscoretypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_testscoretype', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('scholar_id')->unsigned();
          $table->foreign('scholar_id')
          ->references('id')->on('scholars')
          ->onDelete('cascade');
          $table->integer('test_score_types_id')->unsigned();
          $table->foreign('test_score_types_id')
          ->references('id')->on('test_score_types')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scholar_testscoretype', function (Blueprint $table) {
            //
        });
    }
}
