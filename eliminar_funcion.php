<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_funciones SET Estado = 0
WHERE id_funciones = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="funciones.php";';
	echo '</script>';
	
}
?>