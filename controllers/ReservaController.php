<?php

require_once 'models/vehiculo.php';
require_once 'models/reserva.php';

class reservaController
{

    public function index(){
        
    }

    public function add(){
        $id = $_GET['id'];
        $vehiculo = new Vehiculo($id);

        require_once 'views/reserva/crear.php';
    }

    public function crear(){
        $id = $_GET['id'];
        $usuario = $_SESSION['identity'];
        $vehiculo = new Vehiculo($id);
        if (!$vehiculo->getStock()){
            header('location:'. base_url . 'reserva/index');
        }
        $reserva = new Reserva();
        $reserva->setUsuario_id($usuario->id);
        $reserva->setVehiculo_id($vehiculo->getId());
        $coste = explode(' ', $_POST['precio']);
        $reserva->setCoste($coste[0]);
        $fecha = explode('-', $_POST['fecha']);
        $reserva->setFechaReserva($fecha[2] . '-' . $fecha[1] . '-' . $fecha[0]);
        $reserva->setDias($_POST['dias']);
        $reserva->setEstado(1);
        $guardado = $reserva->save();
        if ($guardado){
            $vehiculo->setStock(0);
            $vehiculo->update();
        }
        header('Location:' . base_url. 'reserva/index');
        
    }
}
