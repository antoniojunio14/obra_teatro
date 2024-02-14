<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_obras SET estado = 0
WHERE Id_obras = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="obras.php";';
	echo '</script>';
	
}
?>