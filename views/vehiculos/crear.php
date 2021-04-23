<h1> Añadir Nuevos Vehiculos </h1>

<form action="<?= base_url ?>vehiculo/save" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>

        <?php  ?>
        <select name="categoria" class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
            <?php foreach ($categorias as $cat) { ?>x
            <option value="<?= $cat->getId() ?>">
                <?= $cat->getNombre() ?>
            </option>
        <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="matricula" class="form-label"> Matricula</label>
        <input type="text" name="matricula" placeholder="Matricula" class="form-control form-control-sm" required>
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label"> Marca</label>
        <input type="text" name="marca" placeholder="Marca" class="form-control form-control-sm" required>
    </div>
    <div class="mb-3">
        <label for="modelo" class="form-label"> Modelo</label>
        <input type="text" name="modelo" placeholder="Modelo" class="form-control form-control-sm" r equired>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label"> Precio</label>
        <input type="text" name="precio" placeholder="Precio" class="form-control form-control-sm" required>
    </div>
    <div class="mb-3">
        <label for="Stock" class="form-label"> Stock</label>
        <input type="number" name="stock" class="form-control form-control-sm" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" name="imagen">
    </div>
    <input type="submit" value="Añadir">

</form>