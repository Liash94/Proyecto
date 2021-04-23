<?php

require_once 'models/vehiculo.php';

class vehiculoController
{

    public function index()
    {

        $vehiculo = new Vehiculo();
        $vehiculos = $vehiculo->getRandom(6);

       

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
        $categorias = Categoria::getAll();
        require_once 'views/vehiculos/crear.php';
    }

    public function save()
    {

        Utils::isAdmin();
        if (isset($_POST)) {
            $categoria_id = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : false;
            $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;

            if ($categoria_id && $matricula && $precio && $marca && $modelo) {

                $vehiculo = new Vehiculo();

                $vehiculo->setCategoria_Id($categoria_id);
                $vehiculo->setMatricula($matricula);
                $vehiculo->setPrecio($precio);
                $vehiculo->setMarca($marca);
                $vehiculo->setModelo($modelo);
                $vehiculo->setStock($stock);

                // Imagenes
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                
                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" ||  $mimetype == "image/gif"){

                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images', 0777, true);
                    }

                    move_uploaded_file($file['tmp_name'], 'uploads/images'.$filename);
                    $vehiculo->setImagen($filename);

                }

                $vehiculo->create();
            }
        }
        header("Location:" . base_url . 'vehiculo/gestion');
    }

    public function editar()
    {
        $veh = new Vehiculo($_GET['id']);
        require_once 'views/vehiculos/editar.php';
    }

    public function update()
    {
        $veh = new Vehiculo($_POST['id']);
        $veh->setCategoria_Id($_POST['categoria']);
        $veh->setMatricula($_POST['matricula']);
        $veh->setPrecio($_POST['precio']);
        $veh->setMarca($_POST['marca']);
        $veh->setModelo($_POST['modelo']);
        $veh->setStock(($_POST['stock']) ? 1 : 0);
        $veh->update();
        header("Location:" . base_url . 'vehiculo/gestion');
    }

    public function eliminar()
     {
      Utils::isAdmin();

         if(isset($_GET['id'])){
            $id = $_GET['id'];
            $vehiculo = new Vehiculo();
            $vehiculo->setId($id);
            $vehiculo->delete();
         header("Location:" . base_url . 'vehiculo/gestion');
        }

     }
}
