<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location_name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('prefix');
            $table->string('suffix');
            $table->string('lat');
            $table->string('lan');
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
        Schema::drop('locations');
    }
}
