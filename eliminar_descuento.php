<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_descuento SET Estado = 0
WHERE id_descuento = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="descuentos.php";';
	echo '</script>';
	
}
?>