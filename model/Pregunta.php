<?php

require_once "conexion.php";

class Pregunta extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ver()
    {
        $sql = "SELECT * FROM pregunta INNER JOIN alternativas on pregunta.idpregunta = alternativas.idpregunta";
        $sentencia = $this->conectar->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($resultado);
    }
   
    public function verpregunta()
    {
        $sql = 'SELECT * FROM pregunta';
        $sentencia = $this->conectar->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $alternativas = [];

        foreach ($resultado as $key => $valor) {
            $sql = "SELECT * FROM alternativas WHERE idpregunta = ?";
            $sentencia = $this->conectar->prepare($sql);
            $sentencia->execute(array($valor['idpregunta']));

            $alternativas[$key] = $valor;
            $alternativas[$key]["alternativas"] = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        return json_encode($alternativas);
    }
    public function readupdate($id)
    {
        $sql = "SELECT * FROM contacto WHERE idcontacto = ?";
        $sentencia = $this->conectar->prepare($sql);
        $sentencia->execute(array($id));
        $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
        return json_encode($resultado);
    }
    public function update($id, $nombre, $apellido, $telefono)
    {
        $sql = "UPDATE contacto SET nombre = ?, apellido = ?, telefono = ? WHERE id = ?";
        $registrar = $this->conectar->prepare($sql);
        $registrar->execute(array("$nombre", $apellido, $telefono, $id));

        return "update";
    }
    public function delete($id)
    {
        $sql = "DELETE FROM contacto WHERE idcontacto = ?";
        $sentencia = $this->conectar->prepare($sql);
        $sentencia->execute(array($id));

        return "delete";
    }
}
