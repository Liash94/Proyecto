<h1>Edición categorias</h1>

<form action="<?=base_url?>categoria/update" method="POST">
<input type="hidden" name="id" value="<?php echo $cat->getId(); ?>" />
    
<div class="mb-3">
        <label for="nombre" class="form-label"> Nombre Categoria:</label>
        <input class="form-control form-control-sm" type="text" name="nombre" placeholder="Nombre Categoria" value="<?= $cat->getNombre() ?>" required>

    </div>
<div class="mb-3">
    <input type="submit" value="Editar">
    </div>

</form>