<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('reservation_number');
            $table->string('reservation_name');
            $table->integer('people_amount');
            $table->date('reservation_date');
            $table->time('reservation_hour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reservations');
    }
}
