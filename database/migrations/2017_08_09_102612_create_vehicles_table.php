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
<<<<<<< HEAD:database/migrations/2017_08_09_102612_create_vehicles_table.php
			$table->decimal('policy_amt',15,2);
			$table->string('policy_expiry');
			$table->string('route_id');
			$table->date('service_date');
			$table->date('inspection_date');
			$table->decimal('capacity',15,2);
=======
>>>>>>> ec242a441139f67a1f1c10acd97c955b30712526:database/migrations/2017_08_08_100549_create_vehicle_table.php
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
