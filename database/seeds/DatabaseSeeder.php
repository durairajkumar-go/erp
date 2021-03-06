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
        $this->call(VehiclesTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ProcessesTableSeeder::class);
    }
}
