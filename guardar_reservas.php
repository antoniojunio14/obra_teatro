<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_funcion = $_POST['Id_funciones'];
    $fecha_reserva = $_POST['Fecha_de_reserva'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_reservas (Id_funciones, Fecha_de_reserva, Estado)
            VALUES ('$id_funcion', '$fecha_reserva', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Reserva registrada con éxito");';
        echo 'window.location="reservas.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
