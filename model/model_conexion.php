<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=sistema_tramite;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

class conexionBD
{
    public function conexionPDO(){
        $host        = "localhost";
        $usuario     = "root";
        $contrasena  = "";
        $bdName      = "sistema_tramite";
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$bdName",$usuario,
            $contrasena);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo ->exec('set names utf8');
            return $pdo;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    function cerrar_conexion(){
        $this->pdo=null;
    }

}

?>