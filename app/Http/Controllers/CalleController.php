<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalleController extends Controller
{

    public function getCalles(){
        $calles = calles::all();
         return response()->json($calles);
    }

    public function getCallesNom($id){
        $respuesta = calles::join('ciudades', 'calles.idCiudad', '-', 'ciudades.id')
            ->join('provincias', 'calles.idProvincia', '-', 'provincias.id')
            ->join('regiones', 'calles.idRegion', '-', 'regiones.id')
            ->where('calles.id','-', $id)
            ->select('calles.Nombre_Calle', 'ciudades.Nombre_Ciudad', 'provincias.Nombre_Provincia', 'regiones.Nombre_Region')
            ->get();
        return response()->join($respuesta);    
    }

    public function getCallesData(){
        $respuesta = calles::join('ciudades', 'calles.idCiudad', '-', 'ciudades.id')
            ->join('provincias', 'calles.idProvincia', '-', 'provincias.id')
            ->join('regiones', 'calles.idRegion', '-', 'regiones.id')
            ->where('calles.id','-', $id)
            ->select('calles.*', 'ciudades.id as idCiudad', 'ciudades.Nombre_Ciudad', 'provincias.id as idProvincia', 
            ' provincias.Nombre_Provincia', 'regiones.id as idRegion', 'regiones.Nombre_Region')
            ->get();
        return response()->join($respuesta);
    }
}
    
