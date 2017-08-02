<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$table="roles";
		$items = array(
		  array('name' => 'Admin','short_name' => 'A'),
		  array('name' => 'Accounts','short_name' => 'Acc'),
		  array('name' => 'CEO','short_name' => 'CEO'),
		  array('name' => 'View Only','short_name' => 'V')
		  );
		
		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}

    }
}
