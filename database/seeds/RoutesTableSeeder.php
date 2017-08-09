<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table="routes";
		$items = array(
		  array('parent_id' => '1','name' => 'JUJA ROUTE'),
		  array('parent_id' => '1','name' => 'BABADOGU ROUTE')
		  );

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}
    }
}
