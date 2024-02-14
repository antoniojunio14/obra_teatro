<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_reservas = $_POST['Id_Reservas'];
    $id_usuarios = $_POST['Id_usuarios'];
    $estado = $_POST['Estado'];
    $tipo = $_POST['Tipo'];  

    $sql = "INSERT INTO tb_clientes (Id_Reservas, Id_usuarios, Estado, Tipo)
            VALUES ('$id_reservas', '$id_usuarios', '$estado', '$tipo')";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Cliente guardado exitosamente");';
        echo 'window.location="clientes.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
