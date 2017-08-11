<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table="grades";
		$items = array(
		  array('name' => 'Grade 1','short_name' => 'G1'),
		  array('name' => 'Grade 2','short_name' => 'G2')
		  );

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}
    }
}
