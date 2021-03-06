<h1> Mostrar reservas </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Vehiculo_id</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Duración (días)</th>
            <th scope="col">Estado</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>

    <?php foreach ($reservas as $res) { ?>

        <tr>
            <th scope="row"><?= $res->getId(); ?></th>
            <td><?= $res->getVehiculo_id(); ?></td>
            <td><?= $res->getFechaReserva(); ?></td>
            <td><?= $res->getDias(); ?></td>
            <td><?= $res->getEstado(); ?></td>
            <td><?= $res->getPrecio(); ?></td>

            <td>
                <a class="btn btn-warning m-0" href="#">Editar</a></button>
                <a class="btn btn-danger m-0" href="#">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>
