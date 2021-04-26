<?php

require_once 'models/vehiculo.php';

class reservaController
{

    public function index(){
        
    }

    public function add(){
        $id = $_GET['id'];
        $vehiculo = new Vehiculo($id);

        require_once 'views/reserva/crear.php';
    }
}
