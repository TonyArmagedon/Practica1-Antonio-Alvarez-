<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller
{
    public function mostrarResta(Request $request){
        $request->validate([
            'Numero1'=>'required',
            'Numero2'=>'required'
        ]);
        $elemento1=$request->Numero1;
        $elemento2=$request->Numero2;

        return redirect()->route('resta')->with('success', 'El resultado es: '.$elemento1-$elemento2);
    }
    public function vistaResta(){
        return view('resta');
    }
}
