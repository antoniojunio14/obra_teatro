<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_detalle_promociones SET estado = 0
WHERE Id_detalle_promociones = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="detalle_promociones.php";';
	echo '</script>';
	
}
?>