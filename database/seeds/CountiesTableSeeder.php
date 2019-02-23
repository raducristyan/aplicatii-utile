<?php

use App\County;
use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counties = config('seeder.counties');
        DB::statement('TRUNCATE counties CASCADE');
        County::insert($counties);
    }
}
