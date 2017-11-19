<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobilities')->insert([
            'name_mobility' => 'Motocicleta'
        ]);

        DB::table('mobilities')->insert([
            'name_mobility' => 'Vehiculo particular'
        ]);


        DB::table('mobilities')->insert([
            'name_mobility' => 'Transporte Publico'
        ]);
    }
}
