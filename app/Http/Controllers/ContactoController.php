<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function recibeFormulario(Request $request)
    {
    // dd($request->all(), $request->correo, $request->nombre);

    //validar datos
    $request->validate ([
        'nombre' => 'required|min:5',
        'correo' => 'required|email',
        'mensaje'=> ['required','min:10','max:255'],
    ]);

    dd($request->all());
    //insertar a bd

    //redirigirse a otra pagina
    
    return 'Formulario recibido';
    }
}
