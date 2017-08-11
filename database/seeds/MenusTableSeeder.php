<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$table="menus";
		$items = array(
		  array('parent_id' => '0','ordering' => '1','title' => 'Dashboard','slug' => 'dashboard','link' => '#','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '2','title' => 'Masters','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Company','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '3','ordering' => '1','title' => 'Location','slug' => 'location','link' => 'location','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '4','title' => 'Production','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '3','ordering' => '1','title' => 'Stores','slug' => 'store','link' => 'store','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Products','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '1','title' => 'Category','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '2','title' => 'Materials','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '2','title' => 'Rate Template','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '4','title' => 'Accounts','slug' => '#','link' => '#','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Routes','slug' => 'route','link' => 'route','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Vehicle','slug' => 'vehicle','link' => 'vehicle','record_status' => '1'),
		  array('parent_id' => '5','ordering' => '1','title' => 'Grades','slug' => 'grade','link' => 'grade','record_status' => '1')
		);

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}


    }
}
