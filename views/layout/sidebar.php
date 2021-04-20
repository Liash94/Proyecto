 <!-- BARRA LATERAL -->

 <aside id="lateral">

     <div id="login" class="block_aside">


         <?php if (!isset($_SESSION['identity'])) : ?>
             <h3> Loging </h3>
             <form action="<?= base_url ?>usuario/login" method="POST">
                 <label for="email">Email </label>
                 <input type=" email" name="email">

                 <label for="password">Contraseña </label>
                 <input type="password" name="password">

                 <input type="submit" value="Enviar">
             </form>
          
         <?php else : ?>
             <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?> </h3>

         <?php endif; ?>


         <ul>
            
             <?php if (isset($_SESSION['admin'])) : ?>
                 <li><a href="<?=base_url?>categoria/index">Gestionar Categorias</a></li>
                 <li><a href="<?=base_url?>vehiculo/gestion">Gestionar Vehiculos</a></li>
                 <li><a href="#">Gestionar Reservas</a></li>
             <?php endif; ?>
             <?php if (isset($_SESSION['identity'])) : ?>
                <li><a href="#">Mis Reservas</a></li>
                <li><a href="<?= base_url ?>usuario/logout">Cerrar Sesion</a></li>
            <?php else: ?>
                <li><a href="<?=base_url?>usuario/registro">Registrate Aquí</a></li>
             <?php endif; ?>

         </ul>
     </div>

 </aside>

 <div id="central">