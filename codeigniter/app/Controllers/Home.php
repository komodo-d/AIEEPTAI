<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('home');  // Cargar la vista principal
    }

    public function contacto()
    {
        return view('contacto');  // Cargar la vista de contacto
    }
}
