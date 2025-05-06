<?php

// app/Controllers/HomeController.php

namespace App\Controllers;

use App\Models\ArticuloModel;

class HomeController extends BaseController
{
    public function index()
    {
        $model = new ArticuloModel();
        $articulos = $model->orderBy('id_articulo', 'DESC')->findAll();


        echo view('home', ['articulos' => $articulos]);

    }
}
