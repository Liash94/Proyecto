<h1>Edición de Roles</h1>

<form action="<?=base_url?>rol/update" method="POST">
<input type="hidden" name="id" value="<?php echo $rol->getId(); ?>" />
    
<div class="mb-3">
        <label for="nombre" class="form-label"> Nombre Rol:</label>
        <input class="form-control form-control-sm" type="text" name="nombre" value="<?= "Rol Actual " . $rol->getNombre() ?>" required>

    </div>
<div class="mb-3">
    <input type="submit" value="Editar">
    </div>

</form>