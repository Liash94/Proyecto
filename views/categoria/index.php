<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->

<h1> Gestionar Categorias </h1>

<a href="<?=base_url?>/categoria/crear" class="button">Crear Categoria</a>

<table border="1">
<tr>
<td>ID</td>
<td>Nombre</td>
</tr>

<?php while($cat = $categorias->fetch_object()): ?>

<tr>
<td><?=$cat->id;?></td>
<td><?=$cat->nombre;?></td>
</tr>

<?php endwhile; ?>
</table>