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
        <label for="precio" class="form-label"> F.Inicio</label>
        <input type="text" name="fecha" class="form-control form-control-sm" id="fecha" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label"> dias</label>
        <input type="text" name="precio" class="form-control form-control-sm" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label"> Precio</label>
        <input type="text" name="precio" value="<?= $vehiculo->getPrecio()?>" class="form-control form-control-sm" readonly>
    </div>
    <div class="mb-3">
        <img class="rounded" src="<?= base_url ?>uploads/images<?= $vehiculo->getImagen() ?>" alt="Imagen de Prueba">
    </div>
    <a class="button" href="<?=base_url?>vehiculos/ver&id=<?=$vehiculo->getId()?>">Reservar</a>
    <input type="submit" value="Añadir">

</form>

<script type="text/javascript">
$(function() {
    $('#fecha').datetpicker({
        format: 'yyyy-mm-dd'
    });
});

</script>