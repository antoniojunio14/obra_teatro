<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_reserva = $_POST['Id_Reservas'];
    $id_funcion = $_POST['Id_funciones'];
    $fecha_reserva = $_POST['Fecha_de_reserva'];
    $estado_reserva = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_reservas 
            SET Id_funciones='$id_funcion', Fecha_de_reserva='$fecha_reserva', Estado='$estado_reserva' 
            WHERE Id_Reservas='$id_reserva'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Reserva actualizada exitosamente");';
        echo 'window.location="reservas.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
