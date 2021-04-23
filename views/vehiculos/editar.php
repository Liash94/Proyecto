<h1> Añadir Nuevos Vehiculos </h1>

<form action="<?= base_url ?>vehiculo/update" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $veh->getId(); ?>" />

    <div class="mb-3">
        <select name="categoria" class="form-select form-select-sm">
            <?php foreach ($categorias as $cat) { ?>

                <option value="<?= $cat->getId() ?>" <?= ($cat->getId() == $veh->getCategoria_id()) ? 'selected' : '' ?>>
                    <?= $cat->getNombre() ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="matricula" class="form-label"> Matricula</label>
        <input class="form-control form-control-sm" type="text" name="matricula" placeholder="Matricula" value="<?= $veh->getMatricula() ?>" required>

    </div>

    <div class="mb-3">
        <label for="form-label"> Marca</label>
        <input class=" form-control form-control-sm" type="text" name="marca" placeholder="Marca" required>

    </div>

    <div class="mb-3">
        <label for="form-label"> Modelo</label>
        <input class=" form-control form-control-sm" id="floatingInput" type="text" name="modelo" placeholder="Modelo" value="<?= $veh->getModelo() ?>" required>

    </div>

    <div class="mb-3">
        <label for="form-label"> Precio</label>
        <input class="form-control" id="floatingInput" type="number" name="precio" placeholder="Precio" value="<?= $veh->getPrecio() ?>" required>

    </div>

    <div class="form-check">

        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="stock" <?= ($veh->getStock()) ? 'checked' : '' ?> required>
        <label class="form-check-label" for="flexCheckChecked"> Stock</label>

    </div>

    <div class="mb-3">
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen">
    </div>


    <div class="mb-3">
    <input type="submit" value="Editar">
    </div>


</form>