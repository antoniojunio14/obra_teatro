<?php
include("config.php");

$id = $_POST['id'];
$nombre = $_POST['Nombre'];
$capacidad = $_POST['Capacidad'];
$tipo = $_POST['Tipo'];
$estado = $_POST['Estado'];

$sql = "UPDATE tb_salas 
        SET Nombre = '$nombre', Capacidad = $capacidad, Tipo = '$tipo', Estado = $estado 
        WHERE Id_sala = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="salas.php";';
    echo '</script>';
}
?>
