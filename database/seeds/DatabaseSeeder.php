<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(RolesTableSeeder::class);
<<<<<<< HEAD
        $this->call(VehiclesTableSeeder::class);
=======
		$this->call(VehiclesTableSeeder::class);
		
>>>>>>> 4a3ed0b7c55c4b843ab5a503e5929b18ca3d2d90
    }
}
