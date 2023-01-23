<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('b_soap')->nullable();
            $table->integer('l_soap')->nullable();
            $table->integer('d_soap')->nullable();
            $table->integer('diesel_litre')->nullable();
            $table->integer('diesel_cost')->nullable();
            $table->integer('bulb_pieces')->nullable();
            $table->string('maintenance')->nullable();
            $table->integer('maintenance_cost')->nullable();
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
        Schema::dropIfExists('records');
    }
}
