<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function getCiudades(){
        $ciudades = ciudades::all();
        return response()->json($ciudades, 200);
    }

    public function getCiudadesProvincias($id) {
        $ciudades = ciudades::where('idProvincia', $id)->get();
        return response()->json($ciudades, 200);
    }

    public function addCiudad(Request $request){
        $ciudad = new ciudades();
        $ciudad->Nombre_Ciudad = $request->input('idProvincia');
        $ciudad->save();
        return response()->json($provincia, 201);
    }

    public function updateCiudad(Request $request, $id){
        $ciudad = ciudades::find($id);
        if(!$provincia){
            return response()->json(['mensaje'->'No se encuantra la ciudad con el id: ' . $id], 404);
        }
        $ciudad->Nombre_Ciudad= $request->input('Nombre_Provincia');
        $ciudad->idProvincia= $request->input('idProvincia');
        $ciudad->save();
        return response()->json($ciudad, 200);
    }

    public function getCiudades($id){
        $ciudad = ciudades::find($id);
        if(!$ciudad){
            return response()->json(['mensaje' -> 'No se encuentra la ciudad con el id: ' . $id], 404);
        }
        return response()->json($ciudad, 200);
    }
}
