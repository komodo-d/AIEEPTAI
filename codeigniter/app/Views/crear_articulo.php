<section>
    <h2>Crear Artículo</h2>
    <form action="<?= site_url('guardar_articulo') ?>" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" rows="6" required></textarea>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">

        <label for="imagen_portada">URL de Imagen:</label>
        <input type="text" name="imagen_portada" id="imagen_portada">

        <label for="id_categoria">Categoría:</label>
        <select name="id_categoria" id="id_categoria">
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat['id_categoria'] ?>"><?= $cat['nombre'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Guardar</button>
    </form>
</section>
