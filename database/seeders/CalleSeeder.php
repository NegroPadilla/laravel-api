<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=now();
        $calles=[
            ["Freire", 1],
            ["Frecia", 2],
            ["Independencia", 3],
            ["El Rancho", 4],
            ["Av. Alemania", 5],
            ["Sotomayor", 6]
        ];
        $calles=array_map(function($calle) use($now){
            return [
                "Nombre_Calle"=>$calle[0],
                "idCiudad"=>$calle[1],
                "created_at"=>$now,
                "updated_at"=>$now
            ];

        },$calles);
        \DB::table("calles")->insert($calles);
    }
}
