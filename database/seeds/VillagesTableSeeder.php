<?php

use App\Village;
use Illuminate\Database\Seeder;

class VillagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villages = config('seeder.villages');
        DB::statement('TRUNCATE villages CASCADE');
        Village::insert($villages);
    }
}
