<h1> Gestión de Roles </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <?php foreach ($roles as $rol) { ?>

        <tr>
            <th scope="row"><?= $rol->getId(); ?></th>
            <td><?= $rol->getNombre(); ?></td>
            <td>
                <a class="btn btn-warning m-0" href="<?= base_url ?>rol/editar&id=<?= $rol->getId() ?>">Editar</a></button>
                <a class="btn btn-danger m-0" href="<?= base_url ?>rol/eliminar&id=<?= $rol->getId() ?>">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>

<a href="<?= base_url ?>/rol/crear" class="btn btn-success">Crear Rol</a>