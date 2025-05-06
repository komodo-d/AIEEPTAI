<?php

namespace App\Controllers;

use App\Models\ArticuloModel;
use App\Models\CategoriaModel;

class ArticuloController extends BaseController
{
    public function crear()
    {
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->findAll();

        echo view('header');
        echo view('crear_articulo', ['categorias' => $categorias]);
        echo view('footer');
    }

    public function guardar()
    {
        $model = new ArticuloModel();

        $datos = [
            'titulo' => $this->request->getPost('titulo'),
            'contenido' => $this->request->getPost('contenido'),
            'autor' => $this->request->getPost('autor'),
            'imagen_portada' => $this->request->getPost('imagen_portada'),
            'id_categoria' => $this->request->getPost('id_categoria')
        ];

        $model->save($datos);

        return redirect()->to('/'); // o donde desees redirigir
    }

    public function index()
    {
        $model = new \App\Models\ArticuloModel();
        $articulos = $model->orderBy('fecha_publicacion', 'DESC')->findAll();

        echo view('header');
        echo view('inicio', ['articulos' => $articulos]);
        echo view('footer');
    }

}
