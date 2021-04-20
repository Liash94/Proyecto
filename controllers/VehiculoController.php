<?php

require_once 'models/vehiculo.php';

class vehiculoController
{

    public function index()
    {

        require_once 'views/vehiculos/destacados.php';
    }

    public function gestion()
    {

        Utils::isAdmin();
        $vehiculos = Vehiculo::getAll();

        require_once 'views/vehiculos/gestion.php';
    }

    public function crear()
    {

        Utils::isAdmin();
        require_once 'views/vehiculos/crear.php';
    }

    public function save(){

        Utils::isAdmin();
        if(isset($_POST)) {

            $categoria_id = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : false;
            $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;

            if($categoria_id && $matricula && $precio && $marca && $modelo && $stock){

                $vehiculo = new Vehiculo();

                $vehiculo->setCategoria_Id($categoria_id);
                $vehiculo->setMatricula($matricula);
                $vehiculo->setPrecio($precio);
                $vehiculo->setMarca($marca);
                $vehiculo->setModelo($modelo);
                $vehiculo->setStock($stock);

               
                $vehiculo->save();

            }
        }
        header("Location:".base_url.'vehiculo/gestion');
    }

    public function editar(){
        var_dump($_GET);

    }

    public function eliminar(){
        var_dump($_GET);
        
    }
}

  
