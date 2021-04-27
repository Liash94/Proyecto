<?php

require_once 'models/usuario.php';
require_once 'models/rol.php';

class usuarioController{
    
    public function index()
    {
        $usuarios = Usuario::getAll();
        require_once 'views/usuario/listado.php';
    }

    public function registro(){

        require_once 'views/usuario/registro.php';

    }

    public function crear()
    {
        $roles = Rol::getAll();
        require_once 'views/usuario/crear.php';
    }

    public function editar(){
        $roles = Rol::getAll();
        $usuario = new Usuario($_GET['id']);
        require_once 'views/usuario/edit.php';
    }

    public function update()
    {
        $usu = new Usuario($_POST['id']);
        $usu->setNombre($_POST['nombre']);
        $usu->setApellidos($_POST['apellidos']);
        $usu->setDNI($_POST['DNI']);
        $usu->setEmail($_POST['email']);
        $usu->setPassword($_POST['password']);
        $usu->setTelefono($_POST['telefono']);
        $usu->setRol($_POST['rol']);
        $usu->update();
        // header("Location:" . base_url . 'usuario/index');
         echo '<script>window.location="'.base_url.'/usuario/index"</script>';
    }

    public function eliminar() {
        $usuario = new Usuario($_GET['id']);
        $usuario->delete();
        // header("Location:".base_url. "usuario/index");
        echo '<script>window.location="'.base_url.'/usuario/index"</script>';

    }

    public function save(){

        if(isset($_POST)){
            $usuario = new Usuario();

            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setDNI($_POST['DNI']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $usuario->setTelefono($_POST['telefono']);

            
            $save = $usuario->save();
           
            if($save){
                $_SESSION['register'] = "complete";
            }else{
                $_SESSION['register'] = "failed";
            }
        }else{
            $_SESSION['register'] = "failed";
        }
        // header("Location:".base_url);
        
        echo '<script>window.location="'.base_url.'"</script>';

    }

    public function login(){
        
        if(isset($_POST)){
            //Identificar a usuario
            //Consulta bbdd

            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            $identity = $usuario->login();

           if($identity && is_object($identity)){
               $_SESSION['identity'] = $identity;

               if($identity->rol == 1){
                   $_SESSION['admin'] = true; 
               }
           }else{
               $_SESSION['error_login'] = "Identificacion fallida!";
 
           }           

        }
        // header("Location:".base_url);        
        echo '<script>window.location="'.base_url.'"</script>';
    }

    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        // header("Location:".base_url);
        echo '<script>window.location="'.base_url.'"</script>';

    }
}