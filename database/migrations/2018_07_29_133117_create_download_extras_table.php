<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_extras', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->string('order_key');
            $table->integer('user_id')->unsigned();
            $table->string('file_name');
            $table->string('file_url');
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
        Schema::dropIfExists('download_extras');
    }
}
