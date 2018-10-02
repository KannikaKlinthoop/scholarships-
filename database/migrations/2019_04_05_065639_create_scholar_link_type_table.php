<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarLinkTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_link_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reference_id');
            $table->string('reference_type');
            $table->integer('scholar_id')->unsigned();
            $table->foreign('scholar_id')
            ->references('id')->on('scholars')
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
        Schema::dropIfExists('scholar_link_type');
    }
}
