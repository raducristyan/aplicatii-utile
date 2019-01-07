<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = base_path()."/database/seeds/localitati.csv";
        $handle = fopen($file, "r");

        if ($handle !== FALSE) {
            while (!feof($handle)) {
                $data = fgetcsv($handle, 1000, ";");
                if (($data[0] != "") && ($data[1] != "")) {
                    DB::table('cities')->insert([
                        'id'            => (integer) $data[0],
                        'name'          => $data[1],
                        'county_siruta' => $data[4]
                    ]);
                }
            }
        }
        
        fclose($handle);
    }
}
