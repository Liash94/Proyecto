<!-- CENTRAL -->

<!-- TUVE QUE METERLE UN WHILE PORQUE ESTO NO ANDABA O NO SUPE HACERLO ANDAR xD-->

<h1> Algunos vehiculos </h1>

<!-- <//?php foreach ($vehiculos as $veh) { ?> -->
<?php while ($veh = $vehiculos->fetch_object()) : ?>

    <div class="box">
        <div class="vehicle">
            <a href="<?= base_url ?>vehiculo/ver&id=<?= $veh->id ?>">
                <figure class="figure">
                    <img class="rounded" src="<?= base_url ?>uploads/images<?= $veh->imagen ?>" alt="Imagen de Prueba">
                    <figcaption id="texto" class="figure-caption text-end"><?= $veh->marca . " " . $veh->modelo . " " . $veh->precio ?></figcaption>
                </figure>
            </a>
            <a class="button" href="<?=base_url?>reserva/add&id=<?=$veh->id?>">Reservar</a>
        </div>
    </div>

    



<?php endwhile; ?>
<!--
<//?php } ?> -->