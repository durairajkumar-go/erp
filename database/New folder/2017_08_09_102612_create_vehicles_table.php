<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('parent_id');
			$table->string('registration_number');
			$table->string('chassis_number');
			$table->string('insurance');
			$table->decimal('policy_amt',15,2);
			$table->string('policy_expiry');
			$table->string('route_id');
			$table->date('service_date');
			$table->date('inspection_date');
			$table->decimal('capacity',15,2);
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
    }
}
