<?php
include("config.php");

$id = $_GET['id'];
$sql = "UPDATE tb_reservas SET Estado = 0 WHERE Id_Reservas = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="reservas.php";';
    echo '</script>';
}
?>
