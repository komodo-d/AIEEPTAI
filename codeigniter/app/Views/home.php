<?php echo view('header'); ?>

<!-- Artículo destacado -->
<?php if (!empty($articulos)): ?>
<header class="my-4">
    <div class="card bg-light text-dark">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?= $articulos[0]['imagen_portada'] ? $articulos[0]['imagen_portada'] : 'https://via.placeholder.com/600x300' ?>" class="img-fluid rounded-start" alt="Artículo destacado">
            </div>
            <div class="col-md-6 p-4">
                <h2 class="card-title text-principal"><?= esc($articulos[0]['titulo']) ?></h2>
                <p class="card-text"><?= esc(substr($articulos[0]['contenido'], 0, 150)) ?>...</p>
                <a href="<?= site_url('noticia/'.$articulos[0]['id_articulo']) ?>" class="btn btn-principal">Leer más</a>
            </div>
        </div>
    </div>
</header>

<!-- Artículos secundarios -->
<section class="mb-5">
    <h3 class="mb-4 text-principal">Otras noticias</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach (array_slice($articulos, 1) as $articulo): ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= $articulo['imagen_portada'] ? $articulo['imagen_portada'] : 'https://via.placeholder.com/300x150' ?>" class="card-img-top" alt="Noticia">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($articulo['titulo']) ?></h5>
                    <p class="card-text"><?= esc(substr($articulo['contenido'], 0, 100)) ?>...</p>
                    <a href="<?= site_url('noticia/'.$articulo['id_articulo']) ?>" class="btn btn-sm btn-principal">Ver más</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php else: ?>
    <p>No hay artículos publicados aún.</p>
<?php endif; ?>

<?php echo view('footer'); ?>
