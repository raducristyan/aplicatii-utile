<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Application;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE applications CASCADE');
        factory(App\Application::class)->create();
    }
}
