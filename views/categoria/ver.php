<?php if (isset($categoria)): ?>

    <h1><?= $categoria->nombre?></h1>
    
    <?php if ($vehiculos->num_rows == 0) : ?>
        <p> No hay vehiculos para mostrar en esta categoría </p>
    <?php else : ?>
      
        <?php while ($veh = $vehiculos->fetch_object()) : ?>
            <div class="vehicle">
                <div class="tarjeta">
                <a href="<?=base_url?>vehiculo/ver&id=<?=$veh->id?>">

                    <figure class="figure">
                        <img src="<?= base_url ?>uploads/images<?= $veh->imagen ?>" alt="Imagen de Prueba">
                        <figcaption class="figure-caption text-end"><?= $veh->marca . " " . $veh->modelo . " " . $veh->precio ?></figcaption>
                    </figure>
                </a>
                <a class="button" href="<?=base_url?>reserva/add&id=<?=$veh->id?>">Reservar</a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>


<?php else : ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>