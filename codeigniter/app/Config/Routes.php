<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'HomeController::index');  // Página de inicio
 $routes->get('categoria/(:segment)', 'CategoriaController::show/$1');  // Página de categoría
 $routes->get('noticia/(:segment)', 'NoticiaController::show/$1');  // Página de noticia individual
 $routes->get('contacto', 'ContactoController::index');  // Página de contacto
 $routes->get('registro', 'RegistroController::index');  // Página de registro
 $routes->get('crear_articulo', 'ArticuloController::crear');
 $routes->post('guardar_articulo', 'ArticuloController::guardar');
 $routes->get('noticia/(:segment)', 'NoticiaController::show/$1');  // Página de noticia individual

 




 