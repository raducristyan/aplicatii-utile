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
        // $this->call(InstitutionsTableSeeder::class);
        $this->call(CountiesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
    }
}
