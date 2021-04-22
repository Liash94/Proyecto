<!-- CENTRAL -->

<h1> Algunos vehiculos </h1>

<?php while($veh = $vehiculos->fetch_object()): ?> 

<div class="vehicle">
    <img src="assets/css/imagenes/100x100.gif" alt="Imagen de Prueba">
    <h2><?=$veh->marca?></h2>
    <h2><?=$veh->modelo?></h2>
    <p><?=$veh->precio?></p>
    <a class="button" href="#">Reservar</a>
</div>
<?php endwhile; ?>
