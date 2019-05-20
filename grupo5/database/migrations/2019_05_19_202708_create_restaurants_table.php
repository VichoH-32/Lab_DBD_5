<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('category');
            $table->string('contactNumber');
            $table->string('TipoCocina'); //cambiar a ingles
            $table->timestamps('openingHour');
            $table->timestamps('closingHour');
            $table->integer('');
            $table->integer('waitTime');
            $table->string('branchDirection'); //direccion sucursal
            $table->integer('tableAmount');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
