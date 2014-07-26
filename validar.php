<?php
session_start();
include("conexion.php");
$usuario = $_POST["txtUsuario"];
$clave = $_POST["txtPassword"];
$db=new Conexion();
$consulta = $db->consulta("select id_adm,nom_adm,ape_adm from administrador where usu_adm='$usuario' and pass_adm='$clave'");
if($db->num_rows($consulta)>0){
    while($resultados=$db->fetch_array($consulta)){
        $datos = $resultados;
    }
}
if($datos){
    $_SESSION["administrador"] = $datos;
    header("Location: bienvenida.php");
}else{
    header("Location: index.php");
}
