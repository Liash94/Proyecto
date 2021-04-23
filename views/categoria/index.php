<h1> Gestionar Categorias </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>

    <?php foreach ($categorias as $cat) { ?>

        <tr>
            <th scope="row"><?= $cat->getId(); ?></th>
            <td><?= $cat->getNombre(); ?></td>
            <td>
                <a class="btn btn-warning m-0" href="<?= base_url ?>categoria/editar&id=<?= $cat->getId() ?>">Editar</a></button>
                <a class="btn btn-danger m-0" href="<?= base_url ?>categoria/eliminar&id=<?= $cat->getId() ?>">Eliminar</a></button>
            </td>
        </tr>

    <?php } ?>
</table>

<a href="<?= base_url ?>/categoria/crear" class="btn btn-success">Crear Categoria</a>