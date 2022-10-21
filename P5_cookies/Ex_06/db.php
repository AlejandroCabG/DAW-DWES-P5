<?php
class Conectar{
    static function conexion($bd_config){
        try {
            $conexion = new PDO("mysql:host=".$bd_config['host'].";dbname=".$bd_config['db'], $bd_config['user'], $bd_config['pass']);
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        } catch (PDOException $th) {
            return false;
        }
    }
}
?>