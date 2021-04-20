
<h1> Registrarse </h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] =='complete') : ?>
<strong> Registro Completado con exito </strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] =='failed'): ?>
<strong> Registro fallido </strong>
<?php endif; ?>
<?php Utils::deleteSesion('register'); ?>


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

    <input type="submit" value="Registrarme">


</form>