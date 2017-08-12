<?php

use Illuminate\Database\Seeder;

class ProcessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table="processes";
		$items = array();

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}

    }
}
