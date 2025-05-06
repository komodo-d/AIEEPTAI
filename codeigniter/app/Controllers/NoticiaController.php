<?php

namespace App\Controllers;

use App\Models\ArticuloModel;

class NoticiaController extends BaseController
{
    public function show($id)
    {
        $model = new ArticuloModel();
        // Buscar el artículo por su ID
        $articulo = $model->find($id);

        // Si el artículo no existe, redirigir al inicio o mostrar un error
        if (!$articulo) {
            return redirect()->to('/');
        }

        // Pasar los datos del artículo a la vista
        echo view('header');
        echo view('noticia', ['articulo' => $articulo]);
        echo view('footer');
    }
}
