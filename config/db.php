<?php

/* Clase con los datos para conectarse en la base de datos */

class Database{       

    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'candc_rent_a_car');
        $db->query("SET NAMES 'UTF-8'");

        return $db;

    }
}