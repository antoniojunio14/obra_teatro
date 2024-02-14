<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_funcion = $_POST['Id_funciones'];
    $id_obras = $_POST['Id_obras'];
    $fecha_y_hora = $_POST['Fecha_y_Hora'];
    $duracion = $_POST['Duracion'];
    $precio = $_POST['Precio'];
    $id_sala = $_POST['Id_sala'];
    $estado = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_funciones 
            SET Id_obras='$id_obras', Fecha_y_Hora='$fecha_y_hora', Duracion='$duracion', 
                Precio='$precio', Id_sala='$id_sala', Estado='$estado' 
            WHERE Id_funciones='$id_funcion'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="funciones.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
