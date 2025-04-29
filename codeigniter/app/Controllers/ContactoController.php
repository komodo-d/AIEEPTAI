<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactoController extends Controller
{
    public function index()
    {
        // Carga el header
        echo view('header');

        // Carga la vista del contacto
        echo view('contacto');  
        
        // Carga el footer
        echo view('footer');
    }
}
