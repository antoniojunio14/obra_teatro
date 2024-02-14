<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila todos los campos del formulario
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Contrasena = $_POST['Contrasena'];
    $Nacionalidad = $_POST['Nacionalidad'];
    $Genero = $_POST['Genero'];
    $Rol = $_POST['Rol'];
    $Estado = $_POST['Estado'];

    // Prepara la consulta SQL para insertar todos los campos en la base de datos
    $sql = "INSERT INTO tb_usuarios (Nombre, Apellido, telefono, direccion, Contrasena, Nacionalidad, Genero, Rol, Estado) 
            VALUES ('$Nombre', '$Apellido', '$Telefono', '$Direccion', '$Contrasena', '$Nacionalidad', '$Genero', '$Rol', '$Estado')";
    
    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Guardado");';
        echo 'window.location="usuarios.php";';
        echo '</script>';	
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>

