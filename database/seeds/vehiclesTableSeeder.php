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
        $table="vehicles";
        $items = array(
          array('registration_number' => 'KYA 9988','parent_id' => '1','created_at' => new datetime,'updated_at' => new datetime)
          );

        foreach ($items as $item) {
            DB::table($table)->insert($item);
        }        
    }
}
