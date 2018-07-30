<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_extras', function (Blueprint $table) {
            $table->increments('post_extra_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->string('key_name')->nullable();
            $table->longtext('key_value')->nullable();
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
        Schema::dropIfExists('post_extras');
    }
}
