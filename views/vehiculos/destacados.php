<!-- CENTRAL -->

<h1> Algunos vehiculos </h1>

<?php foreach($vehiculos as $veh){ ?> 

<div class="vehicle">
    <img src="assets/css/imagenes/100x100.gif" alt="Imagen de Prueba">
    <h2><?=$veh->getMarca()?></h2>
    <h2><?=$veh->getModelo()?></h2>
    <p><?=$veh->getPrecio()?></p>
    <a class="button" href="#">Reservar</a>
</div>
<?php } ?>
