<?php

require_once 'models/rol.php';

class rolController
{

    public function index()
    {

        Utils::isAdmin();
        $rol = new Rol();
        $roles = $rol->getAll();


        require_once 'views/rol/index.php';
    }

    public function crear()
    {

        Utils::isAdmin();
        require_once 'views/rol/crear.php';
    }


    public function save()
    {

        Utils::isAdmin();

        if (isset($_POST) && isset($_POST['nombre'])) {

            $rol = new Rol();
            $rol->setNombre($_POST['nombre']);
            $rol->save();
        }
        header("Location:" . base_url . "rol/index");
    }

    public function editar()
    {
        $rol = new Rol($_GET['id']);
        require_once 'views/rol/edit.php';
    }

    public function update()
    {
        $rol = new Rol($_POST['id']);
        $rol->setNombre($_POST['nombre']);
       
        $rol->update();
        header("Location:" . base_url . 'rol/index');
    }

    
    public function eliminar()
     {

      Utils::isAdmin();

         if(isset($_GET['id'])){
            $id = $_GET['id'];
            $rol = new Rol();            
            $rol->setId($id);
            $rol->delete();
         header("Location:" . base_url .'rol/index');
        }

     }

    

}
