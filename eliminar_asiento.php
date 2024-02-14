<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_asientos SET Estado = 0
WHERE id_Asientos = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="asientos.php";';
	echo '</script>';
	
}
?>