<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function recibeFormulario()
    {
    //se recibe formulario

    //validar datos

    //insertar a bd

    //redirigirse a otra pagina
    
    return 'Formulario recibido';
    }
}
