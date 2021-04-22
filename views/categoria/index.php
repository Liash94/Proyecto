<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->

<h1> Gestionar Categorias </h1>

<a href="<?=base_url?>/categoria/crear" class="button">Crear Categoria</a>

<table class="table">
<tr>
<td>ID</td>
<td>Nombre</td>
</tr>

<?php foreach($categorias as $cat){ ?>

<tr>
<td><?=$cat->getId();?></td>
<td><?=$cat->getNombre();?></td>
</tr>

<?php } ?>
</table>