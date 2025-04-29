<!-- /views/header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>El Faro.cl</title>
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* /assets/style.css */
:root {
    --color-principal: #2c3e50;
  }
  
  body, html {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
  }
  
  .bg-principal {
    background-color: var(--color-principal) !important;
  }
  
  .text-principal {
    color: var(--color-principal) !important;
  }
  
  .btn-principal {
    background-color: var(--color-principal);
    color: white;
    border: none;
  }
  
  .btn-principal:hover {
    background-color: #1a252f;
  }
  
  footer {
    background-color: var(--color-principal);
    position: relative;
    bottom: 0;
    width: 100%;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  
  .navbar-brand img {
    width: 40px;
    height: auto;
    margin-right: 10px;
  }
  
  .content {
    flex: 1;
  }
  /* Estilos para el formulario de contacto */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form label {
    font-weight: bold;
    color: #2c3e50;
    font-size: 16px;
}

form input[type="text"],
form input[type="email"],
form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    font-family: inherit;
    transition: border-color 0.3s, box-shadow 0.3s;
}

form input[type="text"]:focus,
form input[type="email"]:focus,
form textarea:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    outline: none;
}

form button[type="submit"] {
    background-color: #2c3e50;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button[type="submit"]:hover {
    background-color: #34495e;
}

    </style>
</head>
<body>

  <!-- Aviso superior -->
  <div class="alert alert-warning text-center mb-0 py-2" role="alert">
    🚨 Última hora: Se confirma aumento en actividad volcánica en el sur del país.
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-principal navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://via.placeholder.com/40" alt="Logo">
        El Faro.cl
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/'); ?>">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/categoria/general'); ?>">General</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/categoria/deporte'); ?>">Deporte</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/categoria/negocios'); ?>">Negocios</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/contacto'); ?>">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/crear_noticia'); ?>">Crear Noticia</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('/registro'); ?>">Registro</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="content container">
