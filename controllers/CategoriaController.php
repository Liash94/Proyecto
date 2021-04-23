<?php

require_once 'models/categoria.php';

class categoriaController{
    
    public function index(){
        
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    public function ver(){
        if(isset($_GET['id'])){
            $vehiculos = Vehiculo::getByCategoria($_GET['id']);
        }
        require_once 'views/categoria/gestion.php';
    }

    public function crear(){

        
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save(){

        Utils::isAdmin();

        if(isset($_POST) && isset($_POST['nombre'])){

        $categoria = new Categoria();
        $categoria->setNombre($_POST['nombre']);
        $categoria->save();

        }
        header("Location:".base_url."categoria/index");
        
    }
    
    public function editar()
    {
        $cat = new Categoria($_GET['id']);
        require_once 'views/categoria/edit.php';
    }

    public function update()
    {
        $cat = new Categoria($_POST['id']);
        $cat->setNombre($_POST['nombre']);
       
        $cat->update();
        header("Location:" . base_url . 'categoria/index');
    }
    
    public function eliminar()
     {

      Utils::isAdmin();

         if(isset($_GET['id'])){
            $id = $_GET['id'];
            $categoria = new Categoria();            
            $categoria->setId($id);
            $categoria->delete();
         header("Location:" . base_url .'categoria/index');
        }

     }


}