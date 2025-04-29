<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RegistroController extends Controller
{
    public function index()
    {
        // Carga el header
        echo view('header');
        // Lógica para mostrar la página de registro
        return view('registro');
        // Carga el footer
        echo view('footer');
    }
}


