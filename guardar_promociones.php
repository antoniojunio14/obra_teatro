<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['Nombre'];
    $Fecha_inicio = $_POST['Fecha_inicio'];
    $Fecha_fin = $_POST['Fecha_fin'];
    $Estado = $_POST['Estado'];

    $sql = "INSERT INTO tb_promociones (Nombre, Fecha_inicio, Fecha_fin, Estado) 
            VALUES ('$Nombre', '$Fecha_inicio', '$Fecha_fin', '$Estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Promoción registrada con éxito");';
        echo 'window.location="promociones.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
