<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Usuario;



class AutenticacionController extends Controller
{
    public function validar(Request $peticion){
        echo "validar..." . $peticion->input('nombre');
        $encontrado = Usuario::where('nombre', $peticion->input('nombre'))->first();
        if(is_null($encontrado)){
            echo "USUARIO NO ENCONTRADO";
        }else{
//            echo "revisar si puso: " . $encontrado->clave;
            $clave_puso = $peticion->input('clave');
            $clave_guardada = $encontrado->clave;
            if (Hash::check($clave_puso, $clave_guardada) ) {
                Auth::login($encontrado);
                return redirect(route('inicio'));
            }else{
                return redirect(route('inicio'));
            }
        }

    }
    //
}
