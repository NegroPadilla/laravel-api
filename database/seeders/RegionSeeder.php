<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=now();
        $regiones=[
            ['Bio-Bio'],
            ['Ñuble'],
            ['La Araucania']
        ];
        $regiones=array_map(function($region) use($now){
            return [
                'Nombre_Region'=>$region[0],
                'created_at'=>$now,
                'updated_at'=>$now
            ];

        },$regiones);
        \DB::table('regiones')->insert($regiones);
    }
}
