<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('par_ics');
            $table->date('date_acquired');
            $table->string('stock_no');
            $table->string('item_type');
            $table->string('unit');
            $table->string('item_description');
            $table->integer('quantity');
            $table->integer('unit_cost');
            $table->string('status_remarks');
            $table->string('custodian_name');
            $table->integer('balance');
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
        Schema::dropIfExists('items');
    }
};
