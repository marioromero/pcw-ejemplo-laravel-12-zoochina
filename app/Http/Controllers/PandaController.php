<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PandaController extends Controller
{
    public function crearNombre()
    {
        //logica simulada que crea un nombre
        $nombre = 'Pandita';

        //retorna la vista welcome con la variable nombre
        return view('welcome', ['nombrePanda' => $nombre]);
    }
}
