<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_boletos SET Estado = 0
WHERE id_boletos = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="boletos.php";';
	echo '</script>';
	
}
?>