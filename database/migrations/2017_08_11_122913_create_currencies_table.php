<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           
 Schema::create('currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->string('name');
            $table->integer('exchange_rate');
            $table->string('symbol');
             $table->string('ledger');
            $table->boolean('default')->default('1');
            $table->timestamps();
            $table->ipAddress('visitor');
            $table->macAddress('device');
            $table->enum('record_status', ['0', '1'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('currencies');
    }
}
