<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$table="users";
		$items = array(
		  array('name' => 'Administrator','email' => 'admin@vyana.com','password' => bcrypt('admin'),'role_id' => '1'),
		  array('name' => 'CEO','email' => 'ceo@vyana.com','password' => bcrypt('ceo'),'role_id' => '3'),
		  array('name' => 'Accounts','email' => 'accounts@vyana.com','password' => bcrypt('accounts'),'role_id' => '2')
		  );

		foreach ($items as $item) {
	        DB::table($table)->insert($item);
		}

    }
}
