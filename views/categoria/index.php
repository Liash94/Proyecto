<!--DAR ESTILO A LA TABLA CON BOOTSTRAP!!!!!! -->

<h1> Gestionar Categorias </h1>



<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Nombre</th>
</tr>
</thead>


<?php foreach($categorias as $cat){ ?>

<tr>
<th scope="row"><?=$cat->getId();?></th>
<td><?=$cat->getNombre();?></td>
</tr>

<?php } ?>
</table>

<a href="<?=base_url?>/categoria/crear" class="btn btn-success">Crear Categoria</a>