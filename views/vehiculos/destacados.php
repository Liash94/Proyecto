<!-- CENTRAL -->

<h1> Algunos vehiculos </h1>

<?php foreach ($vehiculos as $veh) { ?>

    <div class="vehicle">

        <figure class="figure">
            <img src="assets/css/imagenes/100x100.gif" alt="Imagen de Prueba">
            <figcaption class="figure-caption text-end"><?= $veh->getMarca() . " " . $veh->getModelo() . " " . $veh->getPrecio() ?></figcaption>
        </figure>

      <a class="button" href="#">Reservar</a>
    </div>
<?php } ?>