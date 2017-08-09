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
		  array('parent_id' => '0','ordering' => '1','title' => 'Dashboard','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '2','title' => 'Masters','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Company','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '3','ordering' => '1','title' => 'Location','slug' => 'location','link' => 'location','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '4','title' => 'Reports','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '3','ordering' => '1','title' => 'Stores','slug' => 'store','link' => 'store','record_status' => '1'),
		  array('parent_id' => '2','ordering' => '2','title' => 'Products','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '1','title' => 'Category','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '2','title' => 'Materials','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '7','ordering' => '2','title' => 'Rate Template','slug' => 'as','link' => '#','record_status' => '1'),
		  array('parent_id' => '0','ordering' => '4','title' => 'Accounts','slug' => 'as','link' => '#','record_status' => '1'),
//<<<<<<< HEAD
		  array('parent_id' => '2','ordering' => '2','title' => 'Routes','slug' => 'route','link' => 'route','record_status' => '1')
//=======
		  array('parent_id' => '2','ordering' => '2','title' => 'Vehicle','slug' => 'vehicle','link' => 'vehicle','record_status' => '1')
//>>>>>>> c882db49b31c62efef6cf31ce626777a0e5f4bae
		);

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}


    }
}
