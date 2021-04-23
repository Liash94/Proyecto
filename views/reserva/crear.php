<h1> Confirmar reserva </h1>

<form action="<?= base_url ?>reserva/save" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="Reserva" class="form-label">Reserva</label>
    </div>

    <div class="mb-3">
        <label for="vehiculo" class="form-label"> Vehiculo</label>
        <input type="text" name="vehiculo" class="form-control form-control-sm" value="<?= $vehiculo->getMarca() . '-' . $vehiculo->getModelo()?>" readonly>
        <input type="hidden" name="idVehiculo" value='<?= $vehiculo->getId()?>'>
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