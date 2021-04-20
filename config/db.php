<?php

class Database{
    
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'candc_rent_a_car');
        $db->query("SET NAMES 'UTF-8'");

        return $db;

    }
}