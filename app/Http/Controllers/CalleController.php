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

    public function addCalle(Request $request){
        $calles = new calles();
        $calles->Nombre_Calle = $request->input('Nombre_Calle');
        $calles->idCiudad = $respuest->input('idCiudad');
        $calles->save();
        return response()->json($calles);
    }

    public function updateCalle(Request $request, $id){
        $calles = calles::find($id);
        if(!calles){
            return response()->json(['mensaje' -> 'No se encuentra la calle'], 404);
        }
        return response()->json($calles);
    }

    public function geteCalle($id){
        $calles = calle::find($id);
        if(!calles){
            return response()->json(['mensaje' -> 'No se encuentra la calle'], 404);
        }
        return response()->json(['mensaje'-> 'Se elimino la calle'], 204);
    }

    public function deleteCalle($id){
        $calles = calle::find($id);
        if(!calles){
            return response()->json(['mensaje' -> 'No se encuentra la calle'], 404);
        }
        $calles->delete();
        return response()->json(['mensaje'-> 'Se elimino la calle'], 204);
    }
}
    
