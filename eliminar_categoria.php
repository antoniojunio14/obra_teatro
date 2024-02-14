<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_categorias SET Estado = 0
WHERE id_categorias = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="categorias.php";';
	echo '</script>';
	
}
?>