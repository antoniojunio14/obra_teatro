<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_promociones SET estado = 0
WHERE Id_promociones = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="promociones.php";';
	echo '</script>';
	
}
?>