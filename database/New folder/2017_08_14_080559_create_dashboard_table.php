<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('query');
            $table->text('icon');
            $table->decimal('ordering',13,5);
            $table->text('more_info');
            $table->text('default');
            $table->text('background_color');
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
        //
		Schema::drop('dashboards');
    }
}
