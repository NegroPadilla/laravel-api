<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=now();
        $ciudades=[
            ["Concepcion", 1],
            ["Arauco", 2],
            ["coboquecura", 3],
            ["Chillan", 4],
            ["Temuco", 5],
            ["Victoria", 6]
        ];
        $ciudades=array_map(function($ciudad) use($now){
            return [
                "Nombre_Ciudad"=>$ciudad[0],
                "idProvincia"=>$ciudad[1],
                "created_at"=>$now,
                "updated_at"=>$now
            ];

        },$ciudades);
        \DB::table("ciudades")->insert($ciudades);
    }
}
