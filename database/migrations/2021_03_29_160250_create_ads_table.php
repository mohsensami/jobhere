<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('sex')->default(false);
            $table->string('mode')->default('full_time');
            $table->string('salary')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('employer_id');
            $table->text('desc');
            $table->text('content');
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
        Schema::dropIfExists('ads');
    }
}
