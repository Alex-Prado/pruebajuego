<?php
require_once "config.php";

class Conexion
{
    protected $conectar;

    public function __construct()
    {
        try {
            $this->conectar = new PDO(DB_CONEXION, DB_USER, DB_PASS);
            $this->conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conectar->exec(DB_CHARSET);

            return $this->conectar;
        } catch (Exception $error) {

            echo "Error en la linea: " . $error->getLine();
        }
    }
}
