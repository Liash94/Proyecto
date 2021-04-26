<?php

class Reserva
{

    private $id;
    private $usuario_id;
    private $vehiculo_id;
    private $coste;
    private $Fecha_reserva;
    private $dias;
    private $estado;
    private $db;

    public function __construct($id = "")
    {
        $this->db = Database::connect();
        if ($id) {
            $reserva = $this->db->query("SELECT * FROM reserva WHERE id = " . $id);
            $reserva_aux = $reserva->fetch_object();
            if ($reserva_aux) {
                $this->id = $reserva_aux->id;
                $this->usuario_id = $reserva_aux->id_usuarios;
                $this->vehiculo_id = $reserva_aux->id_vehiculos;
                $this->coste = $reserva_aux->coste;
                $this->Fecha_reserva = $reserva_aux->Fecha_reserva;
                $this->dias = $reserva_aux->dias;
                $this->estado = $reserva_aux->estado;
            }
        }
        return $this;
    }


    function getId()
    {
        return $this->id;
    }

    function getUsuario_id()
    {
        return $this->usuario_id;
    }

    function getVehiculo_id()
    {
        return $this->vehiculo_id;
    }

    function getCoste()
    {
        return $this->coste;
    }

    function getFechaReserva()
    {
        return $this->Fecha_reserva;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function getImagen()
    {
        return  $this->imagen;
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    function setVehiculo_id($vehiculo_id)
    {
        $this->vehiculo_id = $vehiculo_id;
    }

    function setCoste($coste)
    {
        $this->coste = $coste;
    }

    function setFechaReserva($Fecha_reserva)
    {
        $this->Fecha_reserva = $Fecha_reserva;
    }

    function setEstado($estado)
    {
        $this->estado = $estado;
    }

    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    function getDias()
    {
        return $this->dias;
    }

    function setDias($dias)
    {
        $this->dias = $dias;
    }

    public static function getAll()
    {
        $reserva = new Reserva();
        $reg = $reserva->db->query("SELECT id FROM reserva ORDER BY id ASC;");
        $array = array();
        while ($res = $reg->fetch_object()) {
            $aux = new Reserva($res->id);
            $array[$aux->getId()] = $aux;
        }
        return $array;
    }

    public static function getActivas()
    {
        $reserva = new Reserva();
        $reg = $reserva->db->query("SELECT id FROM reserva where estado = '1' ORDER BY id ASC;");
        $array = array();
        while ($res = $reg->fetch_object()) {
            $aux = new Reserva($res->id);
            $array[$aux->getId()] = $aux;
        }
        return $array;
    }


    public function getOne()
    {
        $reserva = $this->db->query("SELECT * FROM reserva WHERE id={$this->getId()}");
        return $reserva->fetch_object();
    }

    public function save()
    {

        $sql = sprintf(
            'INSERT INTO reserva VALUES (null, "%d", "%d", "%s", "%d", "%s", "%s")',
            $this->getUsuario_id(),
            $this->getVehiculo_id(),
            $this->getFechaReserva(),
            $this->getDias(),
            $this->getEstado(),
            $this->getCoste()
        );
        $save = $this->db->query($sql);

        $result = false;

        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function update()
    {
        $sql = sprintf('UPDATE reserva SET 
                        id_usuarios = "%s",
                        id_vehiculos = "%s",
                        Fecha_reserva = "%s",
                        dias = "%s",
                        estado = "%d",
                        coste = "%s" 
                        WHERE id = %d',
                        $this->getUsuario_id(),
                        $this->getVehiculo_id(),
                        $this->getFechaReserva(),
                        $this->getDias(),
                        $this->getEstado(),
                        $this->getCoste(),
                        $this->getId());
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        }
        return false;
    }

    public function delete()
    {

        $sql = "DELETE FROM reserva WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }
}
