<h1> Gestion de vehiculos </h1>

<table class="table">
<thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">Matricula</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>

    <?php foreach ($vehiculos as $veh) { ?>

        <tr>
            <th scope="row"><?= $veh->getId(); ?></th>
            <td><?= $veh->getNombreCategoria(); ?></td>
            <td><?= $veh->getMatricula(); ?></td>
            <td><?= $veh->getMarca(); ?></td>
            <td><?= $veh->getModelo(); ?></td>
            <td><?= $veh->getPrecio(); ?></td>
            <td><?= $veh->getStock(); ?></td>
            <td>
                <a class="btn btn-warning m-0" href="<?= base_url ?>vehiculo/editar&id=<?= $veh->getId() ?>">Editar</a></button>
                <a class="btn btn-danger m-0" href="<?= base_url ?>vehiculo/eliminar&id=<?= $veh->getId() ?>">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>
<a class="btn btn-success" href="<?= base_url ?>vehiculo/crear" >Añadir vehiculo</a>