<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getRegiones(){
        $regiones = regiones::all();
        return response()->json($regiones, 200);
    }

    public function addRegion(Request $request){
        $region = new regiones();
        $region->Nombre_Region = request->input('Nombre_Region');
        return response()->json($region,201);
    }

    public function updateRegion(Request $request, $id){
        $region = regiones::find($id);
        if(!region){
            return response()->json(['mensaje' -> 'No se encuentra la region'], 404);
        }
        $region->Nombre_Region = $request->input('Nombre_Region');
        $region->save();
        return response()->json($region,200);
    }

    public function getRegion($id){
        $region = regiones::find($id);
        if(!$region){
            return response()->json(['mensaje' -> 'No se encuentra la region'], 404);
        }
        return response()->json($region, 200);
    }
}
