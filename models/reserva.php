<?php

class Reserva
{

    private $id;
    private $usuario_id;
    private $vehiculo_id;
    private $coste;
    private $Fecha_reserva;
    private $estado;
    
    public function __construct($id="")
    {
        $this->db = Database::connect();
        if($id){
            $reserva = $this->db->query("SELECT * FROM reserva WHERE id = ".$id);
            $reserva_aux = $reserva->fetch_object();
            $this->id = $reserva_aux->id;
            $this->usuario_id = $reserva_aux->usuario_id;
            $this->vehiculo_id = $reserva_aux->vehiculo_id;
            $this->coste = $reserva_aux->coste;
            $this->Fecha_reserva = $reserva_aux->Fecha_reserva;
            $this->estado = $reserva_aux->estado;
            $this->stock = $reserva_aux->stock;
         
        }
        return $this;
    }


    function getId(){
        return $this->id;
    }
    
    function getUsuario_id(){
        return $this->usuario_id;
    }

    function getVehiculo_id(){
        $this->vehiculo_id;
    }

    function getCoste(){
        return $this->coste;
    }

    function getFechaReserva(){
        return $this->Fecha_reserva;
    }

    function getEstado(){
       return $this->estado;
    }

    function getStock(){
       return $this->stock;
    }

    function getImagen(){
       return  $this->imagen;
    }


    function setId($id){
        $this->id = $id;
    }
    
    function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    function setVehiculo_id($vehiculo_id){
        $this->vehiculo_id = $vehiculo_id;
    }

    function setCoste($coste){
        $this->coste = $coste;
    }

    function setFechaReserva($Fecha_reserva){
        $this->Fecha_reserva = $Fecha_reserva;
    }

    function setEstado($estado){
        $this->estado = $estado;
    }

    function setStock($stock){
        $this->stock = $stock;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    
    public static function getAll(){
        $reserva = new Reserva();
        $reg = $reserva->db->query("SELECT id FROM reserva ORDER BY id ASC;");
        $array = array();
        while($res = $reg->fetch_object()){
            $aux = new Reserva($res->id);
            $array[$aux->getId()]=$aux; 
        }
        return $array;
    }

    public function getOne(){
        $reserva = $this->db->query("SELECT * FROM reserva WHERE id={$this->getId()}");
        return $reserva->fetch_object();
    }
  
    public function save(){
       
        $sql = "INSERT INTO reserva VALUES(NULL, {$this->getUsuario_id()}, {$this->getVehiculo_id()}, {$this->getStock()}, {$this->getCoste()}, {$this->getEstado()});";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
    
    }

    public function update()
    {
        $sql = "UPDATE reserva SET usuario_id='{$this->getUsuario_id()}, {$this->getVehiculo_id()}, {$this->getStock()}, {$this->getCoste()}, {$this->getEstado()}WHERE id={$this->getId()});";
                      
        $result = $this->db->query($sql);
        if ($result){
            return true;
        }
        return false;
    }
    
    public function delete(){

        $sql = "DELETE FROM reserva WHERE id={$this->id}";
        $delete = $this->db->query($sql);
 
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
     }
    
}




