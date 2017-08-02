<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table="stores";
		$items = array(
		  array('parent_id' => '1','name' => 'Main Store','short_name' => 'MS'),
		  array('parent_id' => '1','name' => 'Dispatch Store','short_name' => 'DS')
		  );

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}

    }
}
