<h1> Gestion de vehiculos </h1>

<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->


<a href="<?=base_url?>vehiculo/crear" class="button">Añadir vehiculo</a>

<table border="1">
<tr>

<th>ID</th>
<th>Categoria_ID</th>
<th>Matricula</th>
<th>Marca</th>
<th>Modelo</th>
<th>Precio</th>
<th>Stock</th>
</tr>

<?php foreach($vehiculos as $veh){ ?>

<tr>

<td><?=$veh->getId();?></td>
<td><?=$veh->getCategoria_id();?></td>
<td><?=$veh->getMatricula();?></td>
<td><?=$veh->getMarca();?></td>
<td><?=$veh->getModelo();?></td>
<td><?=$veh->getPrecio();?></td>
<td><?=$veh->getStock();?></td>
<td>
<a href="<?=base_url?>vehiculo/eliminar?id=<?=$veh->getId()?>" class="button">Eliminar</a>
</td>
<td>
<a href="<?=base_url?>vehiculo/editar?id=<?=$veh->getId()?>" class="button">Editar</a>
</td>
</tr>

<?php }?>
</table>