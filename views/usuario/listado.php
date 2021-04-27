<h1> Gestion de usuarios </h1>


<table class="table">
    <thead>
        <tr>         
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Dni</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <?php foreach ($usuarios as $usu) { ?>

        <tr>

            <td scope="row"><?= $usu->getId(); ?></td>
            <td><?= $usu->getNombre(); ?></td>
            <td><?= $usu->getApellidos(); ?></td>
            <td><?= $usu->getDNI(); ?></td>
            <td><?= $usu->getEmail(); ?></td>
            <td><?= $usu->getRolNombre(); ?></td>
            <td><?= $usu->getTelefono(); ?></td>
            <td>
                <a class="btn btn-warning m-0" href="<?= base_url ?>usuario/editar&id=<?= $usu->getId() ?>">Editar</a></button>
                <a class="btn btn-danger m-0" href="<?= base_url ?>usuario/eliminar&id=<?= $usu->getId() ?>">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>
<th><a href="<?= base_url ?>usuario/crear" class="btn btn-success m-0">+</a></th>