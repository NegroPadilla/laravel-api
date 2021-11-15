<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiones;

class RegionController extends Controller
{
    public function getRegiones(){
        $regiones = Regiones::all();
        return response()->json($regiones, 200);
    }

    public function addRegion(Request $request){
        $region = new Regiones();
        $region->Nombre_Region = $request->input('Nombre_Region');
        $region->save();
        return response()->json($region,201);
    }

    public function updateRegion(Request $request, $id){
        $region = Regiones::find($id);
        if(!$region){
            return response()->json(['mensaje' => 'No se encuentra la region'], 404);
        }
        $region->Nombre_Region = $request->input('Nombre_Region');
        $region->save();
        return response()->json($region,200);
    }

    public function getRegion($id){
        $region = Regiones::find($id);
        if(!$region){
            return response()->json(['mensaje' => 'No se encuentra la region'], 404);
        }
        return response()->json($region, 200);
    }
}
