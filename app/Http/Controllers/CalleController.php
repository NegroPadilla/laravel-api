<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;

class CalleController extends Controller
{

    public function getCalles(){
        $calles = Calles::all();
         return response()->json($calles);
    }

    public function getCallesNom($id){
        $respuesta = Calles::join('ciudades', 'calles.idCiudad', '=', 'ciudades.id')
            ->join('provincias', 'ciudades.idProvincia', '=', 'provincias.id')
            ->join('regiones', 'provincias.idRegion', '=', 'regiones.id')
            ->where('calles.id','=', $id)
            ->select('calles.Nombre_Calle', 'ciudades.Nombre_Ciudad', 'provincias.Nombre_Provincia', 'regiones.Nombre_Region')
            ->get();
        return response()->json($respuesta);    
    }

    public function getCallesData(){
        $respuesta = Calles::join('ciudades', 'calles.idCiudad', '=', 'ciudades.id')
        ->join('provincias', 'ciudades.idProvincia', '=', 'provincias.id')
        ->join('regiones', 'provincias.idRegion', '=', 'regiones.id')
            ->select('calles.*', 'ciudades.id as idCiudad', 'ciudades.Nombre_Ciudad', 'provincias.id as idProvincia', 
            'provincias.Nombre_Provincia', 'regiones.id as idRegion', 'regiones.Nombre_Region')
            ->get();
        return response()->json($respuesta);
    }

    public function addCalle(Request $request){
        $calles = new Calles();
        $calles->Nombre_Calle = $request->input('Nombre_Calle');
        $calles->idCiudad = $respuest->input('idCiudad');
        $calles->save();
        return response()->json($calles);
    }

    public function updateCalle(Request $request, $id){
        $calles = Calles::find($id);
        if(!$calles){
            return response()->json(['mensaje' => 'No se encuentra la calle'], 404);
        }
        return response()->json($calles);
    }

    public function getCalle($id){
        $calles = Calles::find($id);
        if(!$calles){
            return response()->json(['mensaje' => 'No se encuentra la calle'], 404);
        }
        return response()->json($calles);
    }

    public function deleteCalle($id){
        $calles = Calles::find($id);
        if(!$calles){
            return response()->json(['mensaje' => 'No se encuentra la calle'], 404);
        }
        $calles->delete();
        return response()->json(['mensaje'=> 'Se elimino la calle'], 204);
    }
}
    
