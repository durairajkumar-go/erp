<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
		$table="vehicles";
		$items = array(
		  array('registration_number' => 'KYA 9988','chassis_number' => '1122','parent_id' => '1','insurance' => 'Abhiyan Insurance','policy_amt' => '5000.60','policy_expiry' => '03/25','route_id' => '1','service_date' => '2025-05-30','inspection_date' => '2019-03-02','capacity' => '1000','created_at' => new datetime,'updated_at' => new datetime)
		  );
=======
        $table="vehicles";
        $items = array(
          array('registration_number' => 'KYA 9988','parent_id' => '1','created_at' => new datetime,'updated_at' => new datetime)
          );
>>>>>>> ec242a441139f67a1f1c10acd97c955b30712526

        foreach ($items as $item) {
            DB::table($table)->insert($item);
        }        
    }
}
