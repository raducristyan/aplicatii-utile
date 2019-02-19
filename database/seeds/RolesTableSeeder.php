<?php

use App\Role;
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
        $roles = ['admin','user'];
        
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
