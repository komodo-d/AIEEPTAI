<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NoticiaController extends Controller
{
    public function show($slug)
    {
        // Lógica para mostrar la noticia individual
        return view('noticia', ['slug' => $slug]);
    }
}
