<?php
ob_start();

require_once 'models/categoria.php';
require_once 'models/vehiculo.php';

class categoriaController{
    
    public function index(){
        
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    public function ver(){
                
    /* Metodo para ver los vehiculos que pertenecen a una determinada categoria. Recibe por GET el id de la categoria en concreto */

        if(isset($_GET['id'])){

            $id = $_GET['id'];

            /* Conseguir la categoria */
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
            
            /* Conseguir vehiculo */
            $vehiculo = new Vehiculo();
            $vehiculo->setCategoria_id($id);
            $vehiculos = $vehiculo->getAllCategory();
        }
        require_once 'views/categoria/ver.php';
    }

    public function crear(){        
    /* Metodo para crear una nueva categoría */
        
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

  
    
    public function save(){

        /* Inserta a un usuario en la base de datos */ 
        Utils::isAdmin();

        if(isset($_POST) && isset($_POST['nombre'])){

        $categoria = new Categoria();
        $categoria->setNombre($_POST['nombre']);
        $categoria->save();

        }
      
        echo '<script>window.location="'.base_url.'categoria/index"</script>';
        
    }
    
    public function editar()
    {
        /* Selecciona la categoría a editar */ 
        Utils::isAdmin();
        
        $cat = new Categoria($_GET['id']);
        require_once 'views/categoria/edit.php';
    }

    public function update()
    {
        /* Actualiza la categoría, llamando al metodo del modelo */ 
        Utils::isAdmin();
        $cat = new Categoria($_POST['id']);
        $cat->setNombre($_POST['nombre']);
       
        $cat->update();
       
        echo '<script>window.location="'.base_url.'categoria/index"</script>';
       
    }
    
    public function eliminar()
     {

    /* Elimina la categoría, llamando al metodo del modelo */ 
      Utils::isAdmin();

         if(isset($_GET['id'])){
            $id = $_GET['id'];
            $categoria = new Categoria();            
            $categoria->setId($id);
            $categoria->delete();
         header("Location:" . base_url .'categoria/index');
         echo '<script>window.location="'.base_url.'categoria/index"</script>';
        }

     }


}