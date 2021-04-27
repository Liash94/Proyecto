<?php

require_once 'models/categoria.php';
require_once 'models/reserva.php';
require_once 'models/vehiculo.php';

class Utils
{
    public static function deleteSesion($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }

    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
            echo '<script>window.location="' . base_url . '"</script>';
        }else{
            return true;
        }
    }

    public static function isUser(){
        if(!isset($_SESSION['identity'])){
            
            // header("Location:".base_url);
            echo '<script>window.location="' . base_url . '"</script>';
        }else{
            return true;
        }
    }

    public static function showCategorias(){
        $categorias = Categoria::getAll();
        return $categorias;
    }

    public static function checkReservas(){
        $reservas = Reserva::getActivas();
        foreach($reservas as $res) {
            $d = strtotime($res->getFechaReserva() . ' +'. $res->getDias() . ' days');
            
            $date =  date('y-m-d', $d);
         
            if ($date < date('y-m-d')){
                $res->setEstado(0);
                $res->update();
                $vehiculo = new Vehiculo($res->getVehiculo_id());
                $vehiculo->setStock(1);
                $vehiculo->update(); 
            }
        }
    }    
}