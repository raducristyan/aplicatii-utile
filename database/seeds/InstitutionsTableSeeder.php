<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Institution::class, 1)->create()->each(function($i) {
            $i->users()->save(factory(App\User::class)->make([
                'first_name' => 'radu cristian',
                'last_name' => 'burduhos',
                'email' => 'raducristyan@gmail.com',
                'password' => bcrypt('123456')
            ]));
        });
    }
}
