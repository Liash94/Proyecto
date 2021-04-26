<h1> Confirmar reserva </h1>

<form action="<?=base_url?>reserva/crear&id=<?=$vehiculo->getId()?>" method="POST" enctype="multipart/form-data" autocomplete="off">

    <div class="mb-3">
        <label for="Reserva" class="form-label">Reserva</label>
    </div>

    <div class="mb-3">
        <label for="vehiculo" class="form-label"> Vehiculo</label>
        <input type="text" name="vehiculo" id="vehiculo" class="form-control form-control-sm" value="<?= $vehiculo->getMarca() . '-' . $vehiculo->getModelo()?>" readonly>
        <input type="hidden" name="idVehiculo" id="idVehiculo" value='<?= $vehiculo->getId()?>'>
        <input type="hidden" name="precioVehiculo" id="precioVehiculo" value='<?= $vehiculo->getPrecio()?>'>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label"> F.Inicio</label>
        <input type="text" name="fecha" class="form-control form-control-sm" id="fecha" required>
    </div>
    <div class="mb-3">
        <label for="dias" class="form-label"> dias</label>
        <input type="text" name="dias" id="dias" class="form-control form-control-sm" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label"> Precio</label>
        <input type="text" name="precio" id="precio" value="<?= $vehiculo->getPrecio()?>" class="form-control form-control-sm" readonly>
    </div>
    <div class="mb-3">
        <img class="rounded" src="<?= base_url ?>uploads/images<?= $vehiculo->getImagen() ?>" alt="Imagen de Prueba">
    </div>
    <input type="submit" value="Reservar">

</form>

<script type="text/javascript">
$(function() {
    var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
    $('#fecha').datepicker({
        minDate: 1,
        format: "dd-mm-yy",
        language: 'es',
    });

    $('#dias').change(function(){
        var precio = $(this).val() * $('#precioVehiculo').val()
        $('#precio').val(precio + ' €')
    })

});

</script>