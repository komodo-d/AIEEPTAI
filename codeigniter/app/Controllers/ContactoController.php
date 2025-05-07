<?php

namespace App\Controllers;

use App\Models\ContactoModel;

class ContactoController extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('contacto');
        echo view('footer');
    }

    public function guardar()
    {
        $model = new ContactoModel();

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'mensaje' => $this->request->getPost('mensaje'),
        ];

        $model->save($datos);

        return redirect()->to('/contacto')->with('mensaje', 'Mensaje enviado correctamente.');
    }

    public function listar()
{
    $model = new ContactoModel();
    $contactos = $model->orderBy('id_contacto', 'DESC')->findAll();

    echo view('header');
    echo view('listar_contactos', ['contactos' => $contactos]);
    echo view('footer');
}

}
