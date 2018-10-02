<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_scholar');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')
            ->references('id')->on('levels')
            ->onDelete('cascade');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')
            ->references('id')->on('programs')
            ->onDelete('cascade');
            $table->text('inclusion');
            $table->text('description');
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
        Schema::dropIfExists('scholars');
    }
}
