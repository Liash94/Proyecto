<form action="<?=base_url?>usuario/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>" />
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required placeholder="Nombre" value='<?= $usuario->getNombre() ?>'>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" placeholder="Apellidos" value='<?= $usuario->getApellidos() ?>'>

    <label for="DNI">DNI</label>
    <input type="text" name="DNI"  required placeholder="DNI" value='<?= $usuario->getDNI() ?>'>

    <label for="email">Email</label>
    <input type="email" name="email" required placeholder="Email" value='<?= $usuario->getEmail() ?>'>

    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" required placeholder="Telefono" value='<?= $usuario->getTelefono() ?>'>
    <label for='rol'>Rol</label>
    <select name='rol'>
        <?php foreach($roles as $rol) {?>
        <option value="<?= $rol->getId()?>" <?php echo ($rol->getId() == $usuario->getRol()) ? 'selected' : '' ?>><?= $rol->getNombre()?></option>
        <?php } ?>
    </select>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required placeholder="Contraseña">

    <input type="submit" value="Editar">
</form>