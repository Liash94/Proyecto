<!-- CENTRAL -->

<!-- TUVE QUE METERLE UN WHILE PORQUE ESTO NO ANDABA O NO SUPE HACERLO ANDAR xD-->

<h1> Algunos vehiculos </h1>

<!-- <//?php foreach ($vehiculos as $veh) { ?> -->
<?php foreach ($vehiculos as $veh) { ?>

    <div class="box">
        <div class="vehicle">
            <a href="<?= base_url ?>vehiculo/ver&id=<?= $veh->getId() ?>">
                <figure class="figure">
                    <img class="rounded" src="<?= base_url ?>uploads/images<?= $veh->getImagen() ?>" alt="Imagen de Prueba">
                    <figcaption id="texto" class="figure-caption text-end"><?= $veh->getMarca() . " " . $veh->getModelo() ." " . $veh->getMarca() . " " . $veh->getPrecio() ?></figcaption>
                </figure>
            </a>
            <a class="button" href="<?=base_url?>reserva/add&id=<?=$veh->getId()?>">Reservar</a>
        </div>
    </div>

    



<?php } ?>
<!--
<//?php } ?> -->