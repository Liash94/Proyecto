<h1> Gestion reservas </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Vehiculo_id</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Duración (días)</th>
            <th scope="col">Estado</th>
            <th scope="col">Precio</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>

    <?php foreach ($reserva as $res) { ?>

        <tr>
            <th scope="row"><?= $res->getId(); ?></th>
            <td><?= $res->getVehiculo_id(); ?></td>
            <td><?= $res->getFechaReserva(); ?></td>
            <td><?= $res->getDias(); ?></td>
            <td><?= $res->getEstado(); ?></td>
            <td><?= $res->getCoste(); ?></td>

            <td>
                <a class="btn btn-danger m-0" href="<?= base_url ?>reserva/eliminar&id=<?= $res->getId() ?>">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>