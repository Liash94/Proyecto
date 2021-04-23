<h1> Gestion de usuarios </h1>

<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->




<table>
<tr>

<th ><a href="<?=base_url?>usuario/crear" class="button">+</a></th>
<th>Nombre</th>
<th>Apellidos</th>
<th>Dni</th>
<th>Email</th>
<th>Rol</th>
<th>Telefono</th>
<th>Acciones</th>
</tr>

<?php foreach($usuarios as $usu){ ?>

<tr>

<td><?=$usu->getId();?></td>
<td><?=$usu->getNombre();?></td>
<td><?=$usu->getApellidos();?></td>
<td><?=$usu->getDNI();?></td>
<td><?=$usu->getEmail();?></td>
<td><?=$usu->getRolNombre();?></td>
<td><?=$usu->getTelefono();?></td>
<td>
<a href="<?=base_url?>usuario/eliminar&id=<?=$usu->getId()?>" >Eliminar</a></button>
<a href="<?=base_url?>usuario/editar&id=<?=$usu->getId()?>" >Editar</a></button>
</td>
</tr>

<?php }?>
</table>