<h1> Gestion de vehiculos </h1>

<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->


<a href="<?=base_url?>vehiculo/crear" class="button">Añadir vehiculo</a>

<table>
<tr>

<th >ID</th>
<th>Categoria</th>
<th>Matricula</th>
<th>Marca</th>
<th>Modelo</th>
<th>Precio</th>
<th>Stock</th>
</tr>

<?php foreach($vehiculos as $veh){ ?>

<tr>

<td><?=$veh->getId();?></td>
<td><?=$veh->getNombreCategoria();?></td>
<td><?=$veh->getMatricula();?></td>
<td><?=$veh->getMarca();?></td>
<td><?=$veh->getModelo();?></td>
<td><?=$veh->getPrecio();?></td>
<td><?=$veh->getStock();?></td>
<td>
<a href="<?=base_url?>vehiculo/eliminar&id=<?=$veh->getId()?>" >Eliminar</a></button>
</td>
<td>
<a href="<?=base_url?>vehiculo/eliminar&id=<?=$veh->getId()?>" >Editar</a></button>
</td>
</tr>

<?php }?>
</table>