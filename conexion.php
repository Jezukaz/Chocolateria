<?php
class Conexion{
    private $conexion;
    
    public function Conexion(){
        if(!isset($this->conexion)){
            $this->conexion = (mysql_connect("localhost","root",""))or die(mysql_error());
            mysql_select_db("prueba",$this->conexion)or die (mysql_error());
        }
    }
    
    public function consulta($consulta) {
        $resultado = mysql_query($consulta,$this->conexion);
        if(!$resultado){
            echo 'Mysql Error '.mysql_error();
            exit;
        }
        return $resultado;
    }
    
    public function fetch_array($consulta) {
        return mysql_fetch_array($consulta);
    }
    
    public function num_rows($consulta) {
        return mysql_num_rows($consulta);
    }
}
