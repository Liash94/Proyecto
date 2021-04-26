<?php if (isset($veh)) : ?>

    <h1><?= $veh->getMarca() . " " . $veh->getModelo() . " " . $veh->getMatricula() ?></h1>

    <div class="detail-vehicle">
        <div class="image">
            <figure class="figure">
                <img class="rounded" src="<?= base_url ?>uploads/<?= $veh->getImagen() ?>" alt="Imagen de Prueba">
            </figure>
        </div>
        <div class="data">
            <p>Marca: <?= $veh->getMarca() ?></p>
            <p>Modelo: <?= $veh->getModelo() ?></p>
            <p>Precio: <?= $veh->getPrecio() ?>€/dia</p>
            <p>Matricula: <?= $veh->getMatricula() ?></p>
            <p>Stock: <?= ($veh->getStock()) ? 'Si' : 'No' ?></p>
        </div>

        <button class="btn btn-success"><a href="<?=base_url?>reserva/add&id=<?=$veh->getId()?>">Reservar</a></button>
    </div>


<?php else : ?>
    <h1>El vehiculo no existe</h1>
<?php endif; ?>