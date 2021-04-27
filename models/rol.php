<?php

class Rol{

    private $id;
    private $nombre;
    private $db;

    public function __construct($id = ''){
        $this->db = Database::connect();
        if($id){
            $reg = $this->db->query("SELECT * FROM roles WHERE id = ".$id);
            $rol = $reg->fetch_object();
            $this->id = $rol->id;
            $this->nombre = $rol->nombre;
        }
        return $this;
    }

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setId($id){
        $this->id = $id;
    }
    
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    /* Metodo para actualizar todos los roles */
    public static function getAll(){
        $rol = new Rol();
        $reg = $rol->db->query("SELECT id FROM roles ORDER BY id ASC;");
        $array = array();
        while($r = $reg->fetch_object()){
            $aux = new Rol($r->id);
            $array[$aux->getId()]=$aux; 
        }
        return $array;
    }

    /* Metodo para crear un nuevo rol */
    public function save(){
       
        $sql = "INSERT INTO roles VALUES(NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
    
    }

     /* Metodo para actualizar un nuevo rol */
    public function update()
    {
        $sql = "UPDATE roles SET nombre='{$this->getNombre()}' WHERE id={$this->getId()};";
                      
        $result = $this->db->query($sql);
        if ($result){
            return true;
        }
        return false;
    }
    
    
     /* Metodo para borrar un nuevo rol */
    public function delete(){

        $sql = "DELETE FROM roles WHERE id={$this->id}";
        $delete = $this->db->query($sql);
 
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
     }
    
}