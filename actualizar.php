<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$Contrasena = $_POST['Contrasena'];
$Nacionalidad = $_POST['Nacionalidad'];
$Genero = $_POST['Genero'];
$Rol = $_POST['Rol'];

// SQL para la actualización de datos
$sql = "UPDATE tb_usuarios 
        SET 
            Nombre ='$Nombre',
            Apellido ='$Apellido',
            Telefono ='$telefono',
            Direccion ='$direccion',
            Contrasena ='$Contrasena',
            Nacionalidad ='$Nacionalidad',
            Genero ='$Genero',
            Rol ='$Rol'
        WHERE id_usuarios = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "usuarios.php";';
    echo '</script>';
}
?>