<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name_fa');
            $table->string('company_name_en');
            $table->integer('count')->default('10');
            $table->string('logo')->default('/logo/logo.jpg');
            $table->integer('build')->default('1395');
            $table->string('city_id')->default('23');
            $table->string('category_id')->default('14');
            $table->string('site')->default('http://webgaran.ir');
            $table->unsignedInteger('user_id')->default('2');
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
        Schema::dropIfExists('employers');
    }
}
