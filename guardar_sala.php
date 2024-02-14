<?php
include("config.php");

$nombre = $_POST['Nombre'];
$capacidad = $_POST['Capacidad'];
$tipo = $_POST['Tipo'];
$estado = $_POST['Estado'];

$sql = "INSERT INTO tb_salas (Nombre, Capacidad, Tipo, Estado) 
        VALUES ('$nombre', $capacidad, '$tipo', $estado)";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="salas.php";';
    echo '</script>';
}
?>
