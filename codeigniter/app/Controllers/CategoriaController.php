<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CategoriaController extends Controller
{
    public function show($categoria)
    {
        // Lógica para mostrar la categoría
        return view('categoria', ['categoria' => $categoria]);
    }
}
