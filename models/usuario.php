<?php

class Usuario{

    private $id;
    private $nombre;
    private $apellidos;
    private $DNI;
    private $email;
    private $rol;
    private $password;
    private $telefono;
    private $db;

    public function __construct(){
        $this->db= Database::connect();

    }
    
    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getDNI(){
        return $this->DNI;;
    }

    function getEmail(){
        return $this->email;;
    }

    function getRol(){
        return $this->rol;
    }

    function getPassword(){
        return  password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getTelefono(){
        return $this->telefono;
    }

    
    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
         $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos){
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setDNI($DNI){
         $this->DNI = $this->db->real_escape_string($DNI);
    }

    function setEmail($email){
         $this->email = $this->db->real_escape_string($email);
    }

    function setRol($rol){
        $this->rol = $rol;
    }

    function setPassword($password){
         $this->password = $password;
    }

    function setTelefono($telefono){
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getDNI()}', '{$this->getEmail()}', 'user', '{$this->getPassword()}', '{$this->getTelefono()}');";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;

        }else{

        }
        return $result;
    }

    public function login(){
        
        $result = false;

        $email = $this->email;
        $password = $this->password;
        // Comprobar si Existe el usuario

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);

       if($login && $login->num_rows ==1){
           $usuario = $login->fetch_object();

        // Verificar Contraseña
            $verify = password_verify($password, $usuario->password);
        

            if($verify){
               $result = $usuario;

            }
        }

        return $result;

    }
}