<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_usuarios SET estado = 0
WHERE id_usuarios = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="usuarios.php";';
	echo '</script>';
	
}
?>