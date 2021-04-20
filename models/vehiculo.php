<?php

class Vehiculo
{

    private $id;
    private $categoria_id;
    private $matricula;
    private $precio;
    private $marca;
    private $modelo;
    private $stock;
    private $imagen;
    private $db;

    public function __construct($id="")
    {
        $this->db = Database::connect();
        if($id){
            $vehiculo = $this->db->query("SELECT * FROM vehiculos WHERE id = ".$id);
            $vehiculo_aux = $vehiculo->fetch_object();
            $this->id = $vehiculo_aux->id;
            $this->categoria_id = $vehiculo_aux->categoria_id;
            $this->matricula = $vehiculo_aux->matricula;
            $this->precio = $vehiculo_aux->precio;
            $this->marca = $vehiculo_aux->marca;
            $this->modelo = $vehiculo_aux->modelo;
            $this->stock = $vehiculo_aux->stock;
            $this->imagen = $vehiculo_aux->imagen;
        }
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCategoria_id()
    {
        return $this->categoria_id;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getPrecio()
    {
        return $this->precio;;
    }

    public function getMarca()
    {
        return $this->marca;;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getImagen()
    {
        return $this->imagen;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id =  $this->db->real_escape_string($categoria_id);
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $this->db->real_escape_string($matricula);
    }

    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);;
    }

    public function setMarca($marca)
    {
        $this->marca = $this->db->real_escape_string($marca);
    }

    public function setModelo($modelo)
    {
        $this->modelo = $this->db->real_escape_string($modelo);
    }

    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    
    public static function getAll()
    {

        $vehiculos = new Vehiculo();

        $vehiculos = $vehiculos->db->query("SELECT * FROM vehiculos ORDER BY id ASC");

        $array = array();

        while($veh = $vehiculos->fetch_object()){
            // var_dump($veh);
            // die();
            $aux = new Vehiculo($veh->id);
            $array[$aux->getId()]=$aux;

        }
        return $array;
    }

    public function save(){

        $sql = "INSERT INTO vehiculos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getMatricula()}', {$this->getPrecio()}, '{$this->getMarca()}','{$this->getModelo()}', {$this->getStock()}, NULL);";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }
        return $result;
    }
}