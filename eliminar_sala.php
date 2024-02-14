<?php
include("config.php");

$id = $_GET['id'];
$sql = "UPDATE tb_salas SET Estado = 0 WHERE Id_sala = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="salas.php";';
    echo '</script>';
}
?>
