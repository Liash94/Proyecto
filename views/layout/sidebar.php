  
 <!-- BARRA LATERAL -->

 <aside id="lateral">

 
     <div id="login" class="block_aside">


         <?php if (!isset($_SESSION['identity'])) : ?>
             <h3> Loging </h3>
             <form action="<?=base_url?>usuario/login" method="POST">

                 <div class="mb-3">
                     <label for="email" class="form-label">Email </label>
                     <input type=" email" name="email" class="form-control form-control-sm">
                 </div>

                 <div class="mb-3">
                     <label for="password" class="form-label">Contraseña </label>
                     <input type="password" name="password" class="form-control form-control-sm">
                 </div>

                 <div class="mb-3">
                     <input type="submit" value="Enviar">
             </form>

         <?php else : ?>
             <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?> </h3>

         <?php endif; ?>


         <ul>

             <?php if (isset($_SESSION['admin'])) : ?>
                 <li><a href="<?=base_url?>categoria/index">Gestionar Categorias</a></li>
                 <li><a href="<?=base_url?>vehiculo/gestion">Gestionar Vehiculos</a></li>
                 <li><a href="<?=base_url?>usuario/index">Gestionar Usuarios</a></li>
                 <li><a href="<?=base_url?>rol/index">Gestionar Roles</a></li>
                 <li><a href="<?=base_url?>reserva/gestion">Gestionar Reservas</a></li>
             <?php endif; ?>
             <?php if (isset($_SESSION['identity'])) : ?>
                 <li><a href="<?= base_url ?>reserva/index">Mis Reservas</a></li>
                 <li><a href="<?= base_url ?>usuario/logout">Cerrar Sesion</a></li>
             <?php else : ?>
                 <li><a href="<?= base_url ?>usuario/registro">Registrate Aquí</a></li>
             <?php endif; ?>

         </ul>
     </div>

 </aside>

 <div id="central">