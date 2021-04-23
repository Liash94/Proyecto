<h1> Crear nuevo Rol </h1>

<form action="<?=base_url?>rol/save" method="POST">

<label for="nombre" class="form-label">Nombre</label>
<input type="text" name="nombre" placeholder="Nombre Rol" class="form-control form-control-sm"  required>

<input type="submit" value="Crear">

</form>