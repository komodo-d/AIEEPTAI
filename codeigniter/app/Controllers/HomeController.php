<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');  // Llama la vista 'home' sin la extensión .php
    }
}
