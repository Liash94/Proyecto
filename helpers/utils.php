<?php

require_once 'models/categoria.php';

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
        }else{
            return true;
        }
    }

    public static function showCategorias(){
        $categorias = Categoria::getAll();
        return $categorias;
    }
}
