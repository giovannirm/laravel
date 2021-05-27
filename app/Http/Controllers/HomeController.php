<?php

// namespace es para definir donde se encuentra el archivo 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* El método invoke es cuando se busca que el controlador administre
    una única ruta */
    public function __invoke()
    {
        /* return view('welcome'); */
        /* return "Bienvenido"; */
        return view('home');
    }
}
