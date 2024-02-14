<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_obras = $_POST['Id_obras'];
    $fecha_y_hora = $_POST['Fecha_y_Hora'];
    $duracion = $_POST['Duracion'];
    $precio = $_POST['Precio'];
    $id_sala = $_POST['Id_sala'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_funciones (Id_obras, Fecha_y_Hora, Duracion, Precio, Id_sala, Estado)
            VALUES ('$id_obras', '$fecha_y_hora', '$duracion', '$precio', '$id_sala', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="funciones.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
