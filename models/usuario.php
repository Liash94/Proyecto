<?php

require_once('rol.php');

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

    public function __construct($id = ""){
        $this->db= Database::connect();

        if($id){
            $reg = $this->db->query("SELECT * FROM usuarios WHERE id = ". $id);
            $usu = $reg->fetch_object();
            $this->id = $usu->id;
            $this->nombre = $usu->nombre;
            $this->apellidos = $usu->apellidos;
            $this->DNI = $usu->DNI;
            $this->email = $usu->email;
            $this->rol = $usu->rol;
            $this->password = $usu->password;
            $this->telefono = $usu->telefono;
        }
        return $this;

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

    function getRolNombre(){
        $rol = new Rol($this->getRol());
        return $rol->getNombre();
    }

    public static function getAll()
    {
        $usuario = new Usuario();

        $reg = $usuario->db->query("SELECT id FROM usuarios ORDER BY id ASC");

        $array = array();

        while($usu = $reg->fetch_object()){
            $aux = new Usuario($usu->id);
            $array[$aux->getId()]=$aux;
        }
        return $array;
    }

    public function save(){
        $sql = sprintf("INSERT INTO usuarios VALUES(NULL, '%s', '%s','%s','%s',%d,'%s',%d)",
                            $this->getNombre(),
                            $this->getApellidos(),
                            $this->getDNI(),
                            $this->getEmail(),
                            ($this->getRol()) ? $this->getRol() : 2,
                            $this->getPassword(),
                            $this->getTelefono());
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;

        }
        return $result;
    }

    public function update() {
        $sql = sprintf("UPDATE usuarios SET nombre = '%s',
                                            apellidos = '%s',
                                            DNI = '%s',
                                            email = '%s',
                                            rol = %d,
                                            `password` = '%s',
                                            telefono = %d
                                            WHERE id = %d",
                            $this->getNombre(),
                            $this->getApellidos(),
                            $this->getDNI(),
                            $this->getEmail(),
                            ($this->getRol()) ? $this->getRol() : 2,
                            $this->getPassword(),
                            $this->getTelefono(),
                            $this->getId());
        return $this->db->query($sql);
    }

    public function delete() {
        $sql = sprintf('DELETE FROM usuarios where id = %d', $this->getId());
        return $this->db->query($sql);
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