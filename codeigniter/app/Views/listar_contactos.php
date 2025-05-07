<section class="container mt-5">
    <h2>Mensajes de Contacto</h2>

    <?php if (!empty($contactos)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $c): ?>
                    <tr>
                        <td><?= esc($c['nombre']) ?></td>
                        <td><?= esc($c['email']) ?></td>
                        <td><?= esc($c['mensaje']) ?></td>
                        <td><?= esc($c['created_at'] ?? '-') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay mensajes registrados.</p>
    <?php endif; ?>
</section>
