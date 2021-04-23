<h1> Crear nueva Categoria </h1>

<form action="<?=base_url?>categoria/save" method="POST">

<label for="nombre" class="form-label">Nombre</label>
<input type="text" name="nombre" placeholder="Nombre categoria" class="form-control form-control-sm" required>

<input type="submit" value="Crear">

</form>