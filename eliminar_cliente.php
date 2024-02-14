<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_clientes SET Estado = 0
WHERE id_Clientes = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="clientes.php";';
	echo '</script>';
	
}
?>