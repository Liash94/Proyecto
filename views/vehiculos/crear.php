<h1> Añadir Nuevos Vehiculos </h1>

<form action="<?=base_url?>vehiculo/save" method="POST" enctype="multipart/form-data">

    <label for="categoria">Categoria</label>

    <?php $categorias = Utils::showCategorias(); ?>
    <select name="categoria">
        <?php while ($cat = $categorias->fetch_object()) : ?>

            <option value="<?= $cat->id ?>">
                <?= $cat->nombre ?>
            </option>
        <?php endwhile; ?>
    </select>


    <label for="matricula"> Matricula</label>
    <input type="text" name="matricula" placeholder="Matricula" required>

    <label for="marca"> Marca</label>
    <input type="text" name="marca" placeholder="Marca" required>

    <label for="modelo"> Modelo</label>
    <input type="text" name="modelo" placeholder="Modelo" required>

    <label for="precio"> Precio</label>
    <input type="text" name="precio" placeholder="Precio" required>

    <label for="Stock"> Stock</label>
    <input type="number" name="stock" required>

    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">

    <input type="submit" value="Añadir">

</form>