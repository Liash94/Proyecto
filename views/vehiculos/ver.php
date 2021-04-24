<?php if (isset($veh)) : ?>

    <h1><?= $veh->marca . " " . $veh->modelo . " " . $veh->matricula ?></h1>

    <div class="detail-vehicle">
        <div class="image">
            <figure class="figure">
                <img class="rounded" src="<?= base_url ?>uploads/images<?= $veh->imagen ?>" alt="Imagen de Prueba">
            </figure>
        </div>
        <div class="data">
            <p>Marca: <?= $veh->marca ?></p>
            <p>Modelo: <?= $veh->modelo ?></p>
            <p>Precio: <?= $veh->precio ?>€</p>
            <p>Matricula: <?= $veh->matricula ?></p>
            <p>Stock: <?= $veh->stock ?></p>
        </div>

        <button class="btn btn-success">Reservar</button>
    </div>


<?php else : ?>
    <h1>El vehiculo no existe</h1>
<?php endif; ?>