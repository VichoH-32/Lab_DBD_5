<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_reservations', function (Blueprint $table) {
            $table->timestamps();
            $table->foreign('purchase_order_id')->references('id')->on('purchase_orders');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->integer('price');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_reservations');
    }
}
