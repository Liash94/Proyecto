<?php

class Categoria{

    private $id;
    private $nombre;
    private $db;

    public function __construct($id = ''){
        $this->db = Database::connect();
        if($id){
            $reg = $this->db->query("SELECT * FROM categorias WHERE id = ".$id);
            $categoria = $reg->fetch_object();
            $this->id = $categoria->id;
            $this->nombre = $categoria->nombre;
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

    public static function getAll(){
        $categoria = new Categoria();
        $reg = $categoria->db->query("SELECT id FROM categorias ORDER BY id ASC;");
        $array = array();
        while($cat = $reg->fetch_object()){
            $aux = new Categoria($cat->id);
            $array[$aux->getId()]=$aux; 
        }
        return $array;
    }

    public function save(){
       
        $sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
    
    }

    public function update()
    {
        $sql = "UPDATE categorias SET nombre='{$this->getNombre()}' WHERE id={$this->getId()};";
                      
        $result = $this->db->query($sql);
        if ($result){
            return true;
        }
        return false;
    }
    
    public function delete(){

        $sql = "DELETE FROM categorias WHERE id={$this->id}";
        $delete = $this->db->query($sql);
 
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
     }
    
}