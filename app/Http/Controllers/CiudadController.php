<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadController extends Controller
{
    public function getCiudades(){
        $ciudades = Ciudades::all();
        return response()->json($ciudades, 200);
    }

    public function getCiudadesProvincias($id) {
        $ciudades = Ciudades::where('idProvincia', $id)->get();
        return response()->json($ciudades, 200);
    }

    public function addCiudad(Request $request){
        $ciudad = new Ciudades();
        $ciudad->Nombre_Ciudad = $request->input('idProvincia');
        $ciudad->save();
        return response()->json($provincia, 201);
    }

    public function updateCiudad(Request $request, $id){
        $ciudad = Ciudades::find($id);
        if(!$ciudada){
            return response()->json(['mensaje'=>'No se encuantra la ciudad con el id: ' . $id], 404);
        }
        $ciudad->Nombre_Ciudad= $request->input('Nombre_Provincia');
        $ciudad->idProvincia= $request->input('idProvincia');
        $ciudad->save();
        return response()->json($ciudad, 200);
    }

    public function getCiudad($id){
        $ciudad = Ciudades::find($id);
        if(!$ciudad){
            return response()->json(['mensaje' => 'No se encuentra la ciudad con el id: ' . $id], 404);
        }
        return response()->json($ciudad, 200);
    }
}
