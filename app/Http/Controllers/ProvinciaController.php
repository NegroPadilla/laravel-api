<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function getProvincias(){
        $provincias = provincias::all();
        return response()->json($provincias, 200);
    }

    public function getProvinciasRegion($id) {
        $provincias = provincias::where('idRegion', $id)->get();
        return response()->json($provincias, 200);
    }

    public function addProvincia(Request $request){
        $provincia = new provincias();
        $provincia->Nombre_Provincia = $request->input('idRegion');
        $provinca->save();
        return response()->json($provincia, 201);
    }

    public function updateProvincia(Request $request, $id){
        $provincia = provincias::find($id);
        if(!$provincia){
            return response()->json(['mensaje'->'No se encuantra la provincia con el id: ' . $id], 404);
        }
        $provincia->Nombre_Provincia= $request->input('Nombre_Provincia');
        $provincia->idRegion= $request->input('idRegion');
        $provincia->save();
        return response()->json($provincia, 200);
    }

    public function getProvincia($id){
        $provincia = provincias::find($id);
        if(!$provincia){
            return response()->json(['mensaje' -> 'No se encuentra la provincia con el id: ' . $id], 404);
        }
        return response()->json($provincia, 200);
    }
}
