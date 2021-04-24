<!-- CENTRAL -->

<!-- TUVE QUE METERLE UN WHILE PORQUE ESTO NO ANDABA O NO SUPE HACERLO ANDAR xD-->

<h1> Algunos vehiculos </h1>

<!-- <//?php foreach ($vehiculos as $veh) { ?> -->
<?php while ($veh = $vehiculos->fetch_object()) : ?>
    <div class="vehicle">
        <div class="tarjeta">

            <a href="<?=base_url?>vehiculo/ver&id=<?=$veh->id?>">
                <figure class="figure">
                    <img src="<?= base_url ?>uploads/images<?= $veh->imagen ?>" alt="Imagen de Prueba">

                    <figcaption class="figure-caption text-end"><?= $veh->marca . " " . $veh->modelo . " " . $veh->precio ?></figcaption>
                </figure>
            </a>

            <a class="button" href="#">Reservar</a>
        </div>
    </div>

<?php endwhile; ?>
<!--
<//?php } ?> -->