<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'id_articulo';
    protected $allowedFields = ['titulo', 'contenido', 'autor', 'imagen_portada', 'id_categoria'];
    //protected $useTimestamps = true;
    //protected $createdField = 'fecha_publicacion';
}
