<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table="locations";
		$items = array(
		  array('name' => 'Nairobi','address' => '2nd Parklands','phone' => '0771307336','email' => 'parklands@vyana.com','prefix' => '','suffix' => '')
		  );

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}
	}
}
