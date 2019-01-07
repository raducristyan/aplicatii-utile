<?php

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
        DB::table('cities')->delete();
        DB::table('counties')->delete();

        $file = base_path()."/database/seeds/judete.csv";
        $handle = fopen($file, "r");

        if ($handle !== false) {
            while (!feof($handle)) {
                $data = fgetcsv($handle, 1000, ";");
                if (($data[0] != "") && ($data[1] != "")) {
                    DB::table('counties')->insert([
                        'siruta' => intval($data[0]),
                        'name'   => $data[1]
                    ]);
                }
            }
        }
        fclose($handle);
    }
}
