<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=now();
        $provincias=[
            ['Concepcion', 1],
            ['Arauco', 1],
            ['Itata', 2],
            ['Duiguillin', 2],
            ['Cautin', 3],
            ['Malleco', 3]
        ];
        $provincias=array_map(function($provincia) use($now){
            return [
                'Nombre_Provincia'=>$provincia[0],
                'idRegion'=>$provincia[1],
                'created_at'=>$now,
                'updated_at'=>$now
            ];

        },$provincias);
        \DB::table("provincias")->insert($provincias);
    }
}
