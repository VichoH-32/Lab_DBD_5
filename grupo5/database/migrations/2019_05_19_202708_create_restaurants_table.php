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
            $table->string('contact_number');
            $table->string('tipo_cocina'); //cambiar a ingles
            $table->timestamps('opening_hour');
            $table->timestamps('closing_hour');
            $table->integer('');
            $table->integer('wait_time');
            $table->string('branch_direction'); //direccion sucursal
            $table->integer('table_amount');
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
