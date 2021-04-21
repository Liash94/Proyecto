<h1> Añadir Nuevos Vehiculos </h1>

<form action="<?= base_url ?>vehiculo/update" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $veh->getId(); ?>" />
    <label for="categoria">Categoria</label>
    <select name="categoria">
        <?php foreach ($categorias as $cat) { ?>

            <option value="<?= $cat->getId() ?>" <?= ($cat->getId() == $veh->getCategoria_id()) ? 'selected' : '' ?>>
                <?= $cat->getNombre() ?>
            </option>
        <?php } ?>
    </select>


    <label for="matricula"> Matricula</label>
    <input type="text" name="matricula" placeholder="Matricula" value="<?= $veh->getMatricula() ?>" required>

    <label for="marca"> Marca</label>
    <input type="text" name="marca" placeholder="Marca" value="<?= $veh->getMarca() ?>" required>

    <label for="modelo"> Modelo</label>
    <input type="text" name="modelo" placeholder="Modelo" value="<?= $veh->getModelo() ?>" required>

    <label for="precio"> Precio</label>
    <input type="number" name="precio" placeholder="Precio" value="<?= $veh->getPrecio() ?>" required>

    <label for="Stock"> Stock</label>
    <input type="checkbox" name="stock" <?= ($veh->getStock()) ? 'checked' : '' ?> required>

    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">

    <input type="submit" value="Añadir">

</form>