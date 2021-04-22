<form action="<?=base_url?>usuario/save" method="POST">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required placeholder="Nombre">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" placeholder="Apellidos">

    <label for="DNI">DNI</label>
    <input type="text" name="DNI" required placeholder="DNI">

    <label for="email">Email</label>
    <input type="email" name="email" required placeholder="Email">

    <label for="password">Contraseña</label>
    <input type="password" name="password" required placeholder="Contraseña">

    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" required placeholder="Telefono">

    <label for='rol'>Rol</label>
    <select name='rol'>
        <?php foreach($roles as $rol) {?>
        <option value="<?= $rol->getId()?>"><?= $rol->getNombre()?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Registrarme">
    

</form>