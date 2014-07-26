<?php
session_start();
$datos = $_SESSION["administrador"];
echo "Bienvenido ".$datos["nom_adm"] . " " . $datos["ape_adm"];
?>